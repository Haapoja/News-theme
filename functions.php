<?php 
//load needed resources
function news_files (){
    wp_enqueue_style("font-awesome", "//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("styles", get_template_directory_uri() . "/dist/app.css");
    wp_enqueue_style("boot-css","//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css");
    wp_enqueue_script("boot-jquery","//code.jquery.com/jquery-3.5.1.slim.min.js");
    wp_enqueue_script("boot-popper","//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"); //find out what popper does?
    wp_enqueue_script("boot-js","//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js");
}

add_action("wp_enqueue_scripts", "news_files");
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 350, 350);

 
//exclude pages from search form

if (!is_admin()) {
    function wpb_search_filter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
    add_filter('pre_get_posts','wpb_search_filter');
    }

//shows current template file for debugging/testing

    function meks_which_template_is_loaded() {
        if ( is_super_admin() ) {
            global $template;
            print_r( $template );
        }
    }
     
    add_action( 'wp_footer', 'meks_which_template_is_loaded' );

//custom function for checking is page is a child, used for my awful, terrible, abomination of a a header
    function is_child($pageID) { 
        global $post; 
        if( is_page() && ($post->post_parent==$pageID) ) {
                   return true;
        } else { 
                   return false; 
        }
    }

?>
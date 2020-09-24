<?php /* Template Name: sub-category */ ?>
<!-- May god have mercy on my soul -->
<?php get_header()?>
<!-- Asia -->
<?php if(is_page("asia")) : ?>

    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'asia',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>   
<!-- Europe -->
<?php elseif(is_page("europe")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'europe',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>
<!-- Middle East -->
<?php elseif(is_page("middle-east")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'middle-east',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Africa -->
<?php elseif(is_page("africa")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'africa',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Space -->
<?php elseif(is_page("space")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'space',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- programming -->
<?php elseif(is_page("programming")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'programming',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Global Warming -->
<?php elseif(is_page("global-warming")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'global-warming',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Biology -->
<?php elseif(is_page("biology")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'biology',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Economy -->
<?php elseif(is_page("economy")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'economy',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Stonks -->
<?php elseif(is_page("stocks")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'stocks',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- tech -->
<?php elseif(is_page("tech")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'tech',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- election -->
<?php elseif(is_page("election")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'election',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- Corona -->
<?php elseif(is_page("corona")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'corona',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- lifestyle -->
<?php elseif(is_page("lifestyle")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'lifestyle',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  
<!-- personal finance -->
<?php elseif(is_page("personal-finance")) : ?>
    <div class="container">
<div class="row">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'personal-finance',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
           <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt (); ?> </p>  
    
    </div>
        </article>
        <?php
    endwhile;
endif;
?>
</div>
</div>  


<?php endif; ?>
<?php get_footer();?>
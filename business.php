<?php get_header(); ?>

<?php /* Template Name: business */ ?>

<div class="container">
    <div class="row">
        <?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'business',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>

        <div class="post col-4">
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
            <div class="img-container">
                <?php the_post_thumbnail(); ?>
            </div>
            <p><?php the_excerpt (); ?> </p>

        </div>
        </article>
        <?php
    endwhile;
endif;
?>
    </div>
</div>
<?php get_footer(); ?>
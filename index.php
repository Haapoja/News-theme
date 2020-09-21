

<?php get_header();?>

<div class="container">
<div class="row">
<?php 

while(have_posts()){
    the_post(); ?>
    
    <div class="post col-4">
   <a href="<?php the_permalink(); ?>"> <h1><?php the_title(); ?></h1> </a>
   <div class="img-container">
   <?php the_post_thumbnail(); ?>
</div>
<p><?php the_excerpt (); ?> </p>  
    
    </div>
<?php }?>

</div>

</div>
<?php
 get_footer();?>
<?php get_header(); ?>
ggg
<?php 

if(have_posts()):
    while(have_posts()): the_post();?>

    <?php get_template_part('content', 'search') ?>

    <?php 
        endwhile;
        endif;
     ?>

<?php get_footer(); ?>
  
<?php get_header();  

if (have_posts()): while (have_posts()): the_post();

 get_template_part('template-parts/post/article', 'full');

endwhile; endif; ?>

<?php get_footer(); ?>
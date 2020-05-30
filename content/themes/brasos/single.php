<?php get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();

  if ( has_category( 'Noticia' )  ) {
    get_template_part('template-parts/post/news', 'full');
  } else {
    get_template_part('template-parts/post/article', 'full');
  }

    

  endwhile;
endif;
?>

<?php get_footer(); ?>
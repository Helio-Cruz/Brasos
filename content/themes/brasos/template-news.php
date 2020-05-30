<?php
/*
Template Name: Noticia
*/
?>

<?php get_header(); ?>

<div class="articles-cards eventos-cards-bloc">
<h2 class="h2-title"><?php the_title(); ?></h2>
  <div class="eventos-cards" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">

    <?php
    $args = [
      'category_name' => 'Noticia',
      'order' => 'DESC'
    ];

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        
        get_template_part('template-parts/post/news', 'excerpt');

    endwhile;
    endif;
    wp_reset_query();
    ?>

  </div>
</div>

<?php get_footer(); ?>
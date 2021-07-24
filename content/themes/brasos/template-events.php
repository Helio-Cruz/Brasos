<?php
/*
Template Name: Eventos
*/
?>

<?php get_header(); ?>

<div class="articles-cards eventos-cards-bloc">
<h2 class="h2-title"><?php the_title(); ?></h2>
  <div class="eventos-cards" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">

    <?php
    $args = [
      'post_type' => 'evento',
      // 'category__in' => 1, // category 1 = parent "evento"
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'DESC'
    ];

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        
        get_template_part('template-parts/events/event', 'excerpt');

    endwhile;
    endif;

    wp_reset_postdata();
    ?>

  </div>
</div>

<?php get_footer(); ?>
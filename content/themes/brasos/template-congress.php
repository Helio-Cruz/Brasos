<?php
/*
Template Name: Congressos
*/
?>

<?php get_header(); ?>

<div uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
  <div class="congress__content">
    <h2 class="h2-title">Congressos</h2>

    <div uk-flex uk-flex-center uk-grid>

    <?php

    $args = [
      'post_type' => 'congressos',
      'posts_per_page' => -1,
      'order' => 'DESC'
    ];

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        get_template_part('template-parts/post/congressos');
      endwhile;
    endif;

    wp_reset_postdata();
    ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
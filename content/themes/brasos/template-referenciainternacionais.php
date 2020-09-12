<?php
/*
Template Name: Refêrencias Internacionais
*/
?>
<?php get_header(); ?>
<div class="ref-internacionais">
  <h2>Referências Internacionais</h2>
  <div class=" uk-align-center uk-flex uk-flex-center" uk-grid>

    <?php
    $args = [
      'post_type' => 'referencias',
      'category_name' => 'Referencias Internacionais',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'DESC'
    ];

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

        get_template_part('template-parts/post/referencias', 'full');

      endwhile;
    endif;
    wp_reset_query();
    ?>
    
  </div>
</div>
<?php get_footer(); ?>
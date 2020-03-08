<?php
/*
Template Name: Conselho Diretor
*/
?>

<?php get_header(); ?>




<div class="board__content">
  <h2 class="h2-title">Conselho diretor</h2>
  <div class="board__cards">

    <?php

    $args = [
      'post_type' => 'conselho_diretor',
      'posts_per_page' => -1,
      'order' => 'ASC'
    ];

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        get_template_part('template-parts/post/directors', 'excerpt');
      endwhile;
    endif;

    wp_reset_postdata();
    ?>



  </div>
</div>



<?php get_footer(); ?>
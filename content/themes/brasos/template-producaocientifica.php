<?php
/*
Template Name: Producao Cientifica
*/
?>
<?php get_header(); ?>

<div class="articles-cards eventos-cards-bloc">
  <h2 class="h2-title">Produção Científica Brasos</h2>
  <div class="eventos-cards" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">
    <div class="uk-child-width-1-3@s uk-flex-center uk-grid-match" uk-grid>
      <?php
      $args = [
        'category_name' => 'Cientifica',
        'order' => 'DESC'
      ];

      $wp_query = new WP_Query($args);

      if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

          get_template_part('template-parts/post/cientifica', 'excerpt');

        endwhile;
      endif;
      wp_reset_query();
      ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
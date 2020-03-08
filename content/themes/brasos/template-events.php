<?php
/*
Template Name: Eventos
*/
?>
<?php get_header(); ?>


<div class="articles-cards">
  <h2 class="h2-title"><?php the_title(); ?></h2>
  <div class="uk-child-width-1-3@m" uk-grid>

  <?php
      $args = [
        'numberposts' => 1, // Number of recent posts thumbnails to display
        'category_name'  => 'Artigo',
      ];
      foreach ($recent_posts as $post) :
     


    //  $categories = get_categories( $args );
    // loop on the child cats to get the sub cats object
    // foreach ($categories as $post) {
     
      

    // $wp_query = new WP_Query($args);

    // if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        get_template_part('template-parts/post/event', 'excerpt');
    //   endwhile;
    // endif;

    // wp_reset_postdata();
    endforeach;
      wp_reset_query(); ?>

  </div>
</div>


<?php get_footer(); ?>
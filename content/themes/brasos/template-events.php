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
    $parent_cat = get_category_by_slug( $cat[1] );
    $args = [
      'post_type' => 'evento',
      'parent'    => $parent_cat->term_id,
      // 'category__in' => 1, // category 1 = parent "evento"
      'posts_per_page' => -1,
      'order' => 'DESC'
    ];


    $categories = get_categories( $args );
    // loop on the child cats to get the sub cats object
    foreach ($categories as $post) {
     
      

    // $wp_query = new WP_Query($args);

    // if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        get_template_part('template-parts/post/event', 'excerpt');
    //   endwhile;
    // endif;

    // wp_reset_postdata();
    ?>

  </div>
</div>


<?php get_footer(); ?>
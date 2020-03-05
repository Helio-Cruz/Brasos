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
    $args = ['category_name' => 'Evento'];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <?php get_template_part('template-parts/post/event', 'excerpt'); ?>


    <?php endwhile;
    endif;  ?>

  </div>
</div>

<div class="articles-cards">
  <h2 class="h2-title">Eventos</h2>
  <div class="uk-child-width-1-3@m" uk-grid>
    <div>
      <div class="uk-card uk-card-default">
        <a href="<?php echo home_url( '/brasos2019-informations/' )?>">
          <img class="articles-cards-image-events" src="<?php echo get_template_directory_uri() . '/public/images/logo-brasostbt.jpg' ?>" alt="">
        </a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
<?php
/*
Template Name: Eventos
*/
?>
<?php get_header(); ?>

<div class="articles-cards">
    <h2 class="h2-title"><?php the_title(); ?></h2>
    <div class="uk-child-width-1-1" uk-grid>
      <div>
        <div class="uk-card uk-card-default" style="background-image: url('<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>');">
          <a href="blog.html">
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Titulo da noticia mais recente</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="uk-child-width-1-3@m" uk-grid>

        
    <?php
        $args = ['category_name' => 'Evento'];
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

                        <?php get_template_part('template-parts/post/article', 'excerpt'); ?>

        
       <?php endwhile;
        endif;  ?>
     
    </div>
  </div>

  <?php get_footer(); ?>
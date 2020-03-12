<?php
/*
Template Name: Noticia
*/
?>

<?php get_header(); ?>


<div class="articles-cards">
  <h2 class="h2-title"><?php the_title(); ?></h2>
  <div class="uk-child-width-1-1" uk-grid>
  <div uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">
    <?php
    $recent_posts = wp_get_recent_posts(array(
      'orderby' => 'post_date',
      'order' => 'DESC',
      'numberposts' => 1, // Number of recent posts thumbnails to display
      'post_status' => 'publish', // Show only the published posts
      'category_name'  => 'Noticia',
      'suppress_filters' => true
    ));
    foreach ($recent_posts as $post) :
    ?>

      <div>
        <div class="uk-card uk-card-default box" style="background-image: url('<?php echo get_the_post_thumbnail_url($post['ID']); ?>');">
          <a href="<?php echo get_permalink($post['ID']) ?>">
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title"><?php echo $post['post_title'] ?></h3>
              <p><?php echo $excerpt = wp_trim_excerpt($post['post_content,   ']);  ?></p> <?php //echo substr(get_the_excerpt(), 0,65).'...'; 
                                                                                            ?>
            </div>
          </a>
        </div>
      </div>
    <?php endforeach;
    wp_reset_query(); ?>
  </div>
  </div>
  <div class="uk-child-width-1-3@m" uk-grid>


    <?php
    $args = [
      'category_name' => 'Noticia',
      'order' => 'DESC',
      'offset' => 1
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
     <div uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">
        <?php get_template_part('template-parts/post/article', 'excerpt'); ?>
        </div>

    <?php endwhile;
    endif;  
    wp_reset_query();?>

  </div>
</div>


<?php get_footer(); ?>
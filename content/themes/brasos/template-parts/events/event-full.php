<ul class="uk-switcher">
  <?php 
  $post = $wp_query->get_queried_object();
  $pagename = $post->post_name;
  if ($pagename === 'brasostba-2021') { ?>
    <!-- Valores de inscriçao-->
    <?php get_template_part('template-parts/events/event', 'prices'); ?>
    <!-- INFORMAÇOES BASICAS -->
    <?php get_template_part('template-parts/events/event', 'infos'); ?>
    <!-- PALAVRA DO SECRETARIO -->
    <?php get_template_part('template-parts/events/event', 'word'); ?>
  <?php } else { ?>
    <!-- INFORMAÇOES BASICAS -->
    <?php get_template_part('template-parts/events/event', 'infos'); ?>
    <!-- ACCORDION PROGRAMACAO -->
    <?php get_template_part('template-parts/events/event', 'program'); ?>
    <!-- PALESTRANTES  -->
    <?php get_template_part('template-parts/events/event', 'speakers'); ?>
  <?php } ?>
</ul>
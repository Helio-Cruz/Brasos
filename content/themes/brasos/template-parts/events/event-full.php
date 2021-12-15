<ul class="uk-switcher">
  <?php
  $post = $wp_query->get_queried_object();
  $pagename = $post->post_name;
  if ($pagename === 'brasostba-2021') { ?>
    <!-- Valores de inscriçao-->
    <?php get_template_part('template-parts/events/event', 'prices'); ?>
    <!-- INFORMAÇOES BASICAS -->
    <?php get_template_part('template-parts/events/event', 'infos'); ?>
    <!-- PALAVRA DO PRESIDENTE -->
    <?php get_template_part('template-parts/events/event', 'wordpresident'); ?>
    <!-- PALAVRA DO SECRETARIO -->
    <?php get_template_part('template-parts/events/event', 'word'); ?>
    <!--  PALESTRANTES -->
    <?php get_template_part('template-parts/events/event', 'speakers'); ?>
    <!-- CERTIFICADOS -->
    <?php get_template_part('template-parts/events/event', 'certificados'); ?>

  <?php } else { ?>
    <!-- INFORMAÇOES BASICAS -->
    <?php get_template_part('template-parts/events/event', 'infos'); ?>
    <!-- ACCORDION PROGRAMACAO -->
    <?php get_template_part('template-parts/events/event', 'program'); ?>
    <!-- PALESTRANTES  -->
    <?php get_template_part('template-parts/events/event', 'speakers'); ?>
    <!-- CERTIFICADOS -->
    <?php get_template_part('template-parts/events/event', 'certificados'); ?>
  <?php } ?>
</ul>
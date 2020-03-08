<?php get_header(); ?>

<!-- IMAGE COVER -->
<div class="events__cover">
  <div class="uk-child-width-1-1" uk-grid>
    <div class="uk-card uk-card-default" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
      <?php the_title(); ?>
    </div>
  </div>
</div>

<!-- NAVIGATION -->
<!-- <ul class="uk-subnav uk-subnav-pill" uk-switcher>
  <li><a href="#">INFORMAÇÕES GERAIS</a></li>
  <li><a href="#">CERTIFICADOS</a></li>
  <li><a href="#">PROGRAMAÇÃO</a></li>
  <li><a href="#">PALESTRANTES CONVIDADOS</a></li>
  <li><a href="#">INSCRIÇÕES/PAGAMENTO</a></li>
</ul> -->

<?php get_template_part('template-parts/post/event', 'full'); ?>

<?php get_footer(); ?>
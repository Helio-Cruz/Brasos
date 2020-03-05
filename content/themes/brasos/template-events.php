<?php
/*
Template Name: Eventos
*/
?>
<?php get_header(); ?>




<div class="articles-cards">
  <h2 class="h2-title">Eventos</h2>
  <div class="uk-child-width-1-3@m" uk-grid>
    <div>
      <div class="uk-card uk-card-default articles-cards-events">
        <a href="<?php echo home_url( '/brasos2019-informations/' )?>">
          <img class="articles-cards-image-events" src="<?php echo get_template_directory_uri() . '/public/images/logo-brasit2020.jpg' ?>" alt="">
        </a>
      </div>
    </div>
    <div>
      <div class="uk-card uk-card-default articles-cards-events">
        <a href="<?php echo home_url( '/brasos2019-informations/' )?>">
          <img class="articles-cards-image-events" src="<?php echo get_template_directory_uri() . '/public/images/logo-brasostbt.jpg' ?>" alt="">
        </a>
      </div>
    </div>
    <div>
      <div class="uk-card uk-card-default articles-cards-events">
        <a href="<?php echo home_url( '/brasos2019-informations/' )?>">
          <img class="articles-cards-image-events" src="<?php echo get_template_directory_uri() . '/public/images/logo-brasit2018.jpg' ?>" alt="">
        </a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
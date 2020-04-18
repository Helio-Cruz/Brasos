<!-- CAROUSEL -->
<div class="carousel-images uk-position-relative uk-light" tabindex="-1" uk-slideshow="autoplay:true; autoplay-interval:4000; min-height:300; max-height:600">
  <ul class="uk-slideshow-items">
    <li>
      <div class="uk-position-cover ">
        <img src="<?= get_theme_mod('brasos_bg_slide_1'); ?>" alt="">
      </div>
      <div class="uk-position-bottom-right uk-position-medium uk-light">
        <!-- <h1 class="h1-title"><span>BRASOS</span><br>-->
        <h1 class="h1-title title-banner"> Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia <br>
          Sociedade de médicos de diferentes especialidades</h1>
      </div>
    </li>
    <li>
      <div class="uk-position-cover ">
        <img src="<?= get_theme_mod('brasos_bg_slide_2'); ?>" alt="">
      </div>
      <div class="uk-position-bottom-right uk-position-medium uk-light">
        <!-- <h1 class="h1-title"><span>BRASOS</span><br>
            Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia <br>
            Sociedade de médicos de diferentes especialidades</h1> -->
      </div>
    </li>
    <li>
      <div class="uk-position-cover">
        <img src="<?= get_theme_mod('brasos_bg_slide_3'); ?>" alt="">
      </div>
      <div class="uk-position-cover cursor-carousel">
        <a href="<?php echo home_url('/eventos/brasostbt-2019/'); ?>">
          <img uk-tooltip="INFORMAÇÕES GERAIS" src="<?php echo get_template_directory_uri() . '/public/images/cursor.png' ?>" alt="">
        </a>
      </div>
    </li>
    <li>
      <div class="uk-position-cover ">
        <img src="<?= get_theme_mod('brasos_bg_slide_4'); ?>" alt="">
      </div>
    </li>
    <li>
      <div class="uk-position-cover">
        <img src="<?= get_theme_mod('brasos_bg_slide_5'); ?>" alt="">
      </div>
    </li>
    <li>
      <div class="uk-position-cover  ">
        <img src="<?= get_theme_mod('brasos_bg_slide_6'); ?>" alt="">
      </div>
      <div class="uk-position-bottom-right uk-position-medium uk-light">
        <!-- <h1 class="h1-title"><span>BRASOS</span><br>
            Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia <br>
            Sociedade de médicos de diferentes especialidades</h1> -->
      </div>
    </li>
  </ul>
  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>
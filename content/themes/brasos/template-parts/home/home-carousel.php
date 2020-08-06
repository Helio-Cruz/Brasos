<?php
$slide1 = get_theme_mod('brasos_bg_slide_1', '');
$slide2 = get_theme_mod('brasos_bg_slide_2', '');
$slide3 = get_theme_mod('brasos_bg_slide_3', '');
$slide4 = get_theme_mod('brasos_bg_slide_4', '');
$slide5 = get_theme_mod('brasos_bg_slide_5', '');
$slide6 = get_theme_mod('brasos_bg_slide_6', '');
?>
<!-- CAROUSEL -->
<div class="carousel-images uk-position-relative uk-light" tabindex="-1" uk-slideshow="autoplay:true; autoplay-interval:7000; min-height:300; max-height:600">
  <ul class="uk-slideshow-items">
  <?php if ( $slide1 != '') : ?>
      <li>
        <div class="uk-position-cover ">
          <img src="<?= $slide1; ?>" alt="">
        </div>
        <div class="uk-position-bottom-right uk-position-medium uk-light">
          <!-- <h1 class="h1-title"><span>BRASOS</span><br>-->
          <!-- <h1 class="h1-title title-banner"> Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia <br>
          Sociedade de médicos de diferentes especialidades</h1> -->
        </div>
      </li>
    <?php endif; ?>
    <?php if ( $slide2 != '') : ?>
      <li>
        <div class="uk-position-cover ">
          <img src="<?= $slide2; ?>" alt="">
        </div>
        <div class="uk-position-bottom-right uk-position-medium uk-light">
          <!-- <h1 class="h1-title"><span>BRASOS</span><br>
            Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia <br>
            Sociedade de médicos de diferentes especialidades</h1> -->
        </div>
      </li>
    <?php endif; ?>
    <?php if ( $slide3 != '') : ?>
      <li>
        <div class="uk-position-cover carousel-brasos-home">
          <img src="<?= $slide3; ?>" alt="">
        </div>
        <div class="uk-position-large uk-position-center cursor-carousel">
          <a href="<?php echo home_url('/eventos/brasostbt-2019/'); ?>">
            <button class="normal-button special-button carousel-button">ACESSAR AS INFORMAÇÕES<br>GERAIS DO EVENTO</button>
          </a>
        </div>
      </li>
    <?php endif; ?>
    <?php if ( $slide4 != '') : ?>
      <li>
        <div class="uk-position-cover ">
          <img src="<?= $slide4; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ( $slide5 != '') : ?>
      <li>
        <div class="uk-position-cover">
          <img src="<?= $slide5; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ( $slide16 != '') : ?>
      <li>
        <div class="uk-position-cover  ">
          <img src="<?= $slide6; ?>" alt="">
        </div>
        <div class="uk-position-bottom-right uk-position-medium uk-light">
          <!-- <h1 class="h1-title"><span>BRASOS</span><br>
            Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia <br>
            Sociedade de médicos de diferentes especialidades</h1> -->
        </div>
      </li>
    <?php endif; ?>
  </ul>
  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>
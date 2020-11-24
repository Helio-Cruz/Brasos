<?php
$slide1 = get_theme_mod('brasos_bg_slide_1', '');
$slide2 = get_theme_mod('brasos_bg_slide_2', '');
$slide3 = get_theme_mod('brasos_bg_slide_3', '');
$slide4 = get_theme_mod('brasos_bg_slide_4', '');
$slide5 = get_theme_mod('brasos_bg_slide_5', '');
$slide6 = get_theme_mod('brasos_bg_slide_6', '');
?>
<!-- CAROUSEL -->
<div class="carousel-images uk-position-relative uk-light" tabindex="-1" uk-slideshow="autoplay:true; autoplay-interval:7000; min-height:100; max-height:600; animation: fade">

  <ul class="uk-slideshow-items">
    <?php if ($slide1 != '') : ?>
      <li>
        <div class="uk-position-cover ">
          <img src="<?= $slide1; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ($slide2 != '') : ?>
      <li>
        <div class="uk-position-cover ">
          <img src="<?= $slide2; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ($slide3 != '') : ?>
      <li>
        <div class="uk-position-cover carousel-brasos-home">
          <img src="<?= $slide3; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ($slide4 != '') : ?>
      <li>
        <div class="uk-position-cover ">
          <img src="<?= $slide4; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ($slide5 != '') : ?>
      <li>
        <div class="uk-position-cover">
          <div class="informations-button">
            <a uk-toggle="target: #my-information" href="">Mais informaçoes, Acesse</a>
          </div>
          <img src="<?= $slide5; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>
    <?php if ($slide6 != '') : ?>
      <li>
        <div class="uk-position-cover  ">
          <img src="<?= $slide6; ?>" alt="">
        </div>
      </li>
    <?php endif; ?>

  </ul>
  <!-- Carousel buttons -->
  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
  <!-- Carousel text -->
  <div class="slick-carousel-small__block">
    <div class="slick-carousel-small__position">
      <h2 class="slick-carousel-small__title"><?= get_theme_mod('brasos_call_to_content-0'); ?></h2>
      <ul class="slick-carousel-small">
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-1'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-2'); ?>

            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-3'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-4'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-5'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-6'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-7'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-8'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-9'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-10'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-11'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-12'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-13'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <?= get_theme_mod('brasos_call_to_content-14'); ?>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/info/info', 'information'); ?>
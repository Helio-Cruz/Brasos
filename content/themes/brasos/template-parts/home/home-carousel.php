<?php

$slide1 = get_theme_mod('brasos_bg_slide_1', '');
$url_slide1 = get_theme_mod('brasos_bg_slide_1_url', '');

$slide2 = get_theme_mod('brasos_bg_slide_2', '');
$url_slide2 = get_theme_mod('brasos_bg_slide_2_url', '');

$slide3 = get_theme_mod('brasos_bg_slide_3', '');
$url_slide3 = get_theme_mod('brasos_bg_slide_3_url', '');

$slide4 = get_theme_mod('brasos_bg_slide_4', '');
$url_slide4 = get_theme_mod('brasos_bg_slide_4_url', '');

$slide5 = get_theme_mod('brasos_bg_slide_5', '');
$url_slide5 = get_theme_mod('brasos_bg_slide_5_url', '');

$slide6 = get_theme_mod('brasos_bg_slide_6', '');
$url_slide6 = get_theme_mod('brasos_bg_slide_6_url', '');



?>

<!-- CAROUSEL -->
<div class="carousel-images uk-position-relative uk-light" tabindex="-1" uk-slideshow="autoplay:true; autoplay-interval:7000; height:100; max-height:600;  pause-on-hover: false">
  <ul class="uk-slideshow-items">

    <li>
    <iframe  class="carousel-images__iframe-home" src="https://player.vimeo.com/video/656128371?h=65c8d76e70&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"  width="1200px" height="" frameborder="0" uk-video="automute: true" ></iframe>
    </li>

    <?php if ($slide1  != '') :  ?>
      <li>
        <?php if ($url_slide1 != '') : ?>
          <a href="<?= $url_slide1; ?>" target="_blank">
          <?php endif; ?>
          <div class="">
            <img src="<?= $slide1; ?>" alt="">
          </div>
          <?php if ($url_slide1 != '') : ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endif; ?>

    <!--
      <//?php if ($slide2  != '') : ?>
      <li>
        <//?php if ($url_slide2 != '') : ?>
          <a href="<//?= $url_slide2; ?>" target="_blank">
          <//?php endif; ?>
          <div class="popup-brasit   uk-overlay" uk-toggle="target: #modal-media-brasit2020">
            <button class="uk-button uk-button-default"><span>&#187;</span> Reveja as Palestras <span>&#171;</span></button>
          </div>
          <div class="">
            <img src="<//?= $slide2; ?>" alt="">
          </div>
          <//?php if ($url_slide2 != '') : ?>
          </a>
        <//?php endif; ?>
      </li>
    <//?php endif; ?>
-->



    <?php if ($slide3  != '') : ?>
      <li>
        <?php if ($url_slide3 != '') : ?>
          <a href="<?= $url_slide3; ?>" target="_blank">
          <?php endif; ?>
          <div class=" carousel-brasos-home">
            <img src="<?= $slide3; ?>" alt="">
          </div>
          <?php if ($url_slide3 != '') : ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endif; ?>

    <?php if ($slide4  != '') : ?>
      <li>
        <?php if ($url_slide4 != '') : ?>
          <a href="<?= $url_slide4; ?>" target="_blank">
          <?php endif; ?>
          <div class=" ">
            <img src="<?= $slide4; ?>" alt="">
          </div>
          <?php if ($url_slide4 != '') : ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endif; ?>

    <?php if ($slide5  != '') : ?>
      <li>
        <?php if ($url_slide5 != '') : ?>
          <a href="<?= $url_slide5; ?>" target="_blank">
          <?php endif; ?>
          <div class="">
            <img src="<?= $slide5; ?>" alt="">
          </div>
          <?php if ($url_slide5 != '') : ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endif; ?>


    <?php if ($slide6  != '') : ?>
      <li>
        <?php if ($url_slide6 != '') : ?>
          <a href="<?= $url_slide6; ?>" target="_blank">
          <?php endif; ?>

          <div class="  ">
            <img src="<?= $slide6; ?>" alt="">
          </div>
          <?php if ($url_slide6 != '') : ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endif; ?>

  </ul>
  <!-- Carousel buttons -->

  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>


  <!-- Carousel text -->
  <!--
     <div class="slick-carousel-small__block">
    <div class="slick-carousel-small__position">
      <h2 class="slick-carousel-small__title"><//?= get_theme_mod('brasos_call_to_content-0'); ?></h2>
      <ul class="slick-carousel-small">
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-1'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-2'); ?>

            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-3'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-4'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-5'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-6'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-7'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-8'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-9'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-10'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-11'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-12'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-13'); ?>
            </p>
          </div>
        </li>
        <li>
          <div>
            <p>
              <//?= get_theme_mod('brasos_call_to_content-14'); ?>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  -->

</div>
<?php

$popup = get_theme_mod('brasos_popup_customize');


if (isset($_COOKIE['the_popup_plugin_cookie'])) {

  $default;
  $img = null;
} else {
  $img = !empty($popup) ? $popup : $default;
}
?>

<!-- POP UP -->
<!-- This is a button toggling the modal with the outside close button -->

<div id="modal-media-image" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
    <button class="uk-modal-close-outside" type="button" uk-close></button>
    <img class="modal-image" src="<?= $img; ?>" alt="">
    <!--
      <//?php echo do_shortcode('[link_popup link="https://regency.iweventos.com.br/site/brasit2020/inscreva-se" text="Mais informações e inscrição, Acesse"]'); ?>
    -->
  </div>
</div>
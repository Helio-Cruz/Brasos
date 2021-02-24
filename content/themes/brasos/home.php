<?php get_header();


$popup = get_theme_mod('brasos_popup_image');
if (isset($_COOKIE['the_popupcookie'])) {

 // echo 'cookie is set';
  $default;
  $img = null;
} else {
  //echo 'cookie is not set';
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


<!-- POP UP  brasit2020 media-->
<!-- This is a button toggling the modal with the outside close button -->
<div id="modal-media-brasit2020" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
    <button class="uk-modal-close-outside" type="button" uk-close></button>
    <iframe src="https://www.youtube.com/embed/pKxNDvlUX3M?showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1000" height="560" frameborder="0" allowfullscreen uk-responsive uk-video="autoplay=false">
    </iframe>

    <div class="popup-message">
      <h4 class="popup-message__title">ATENÇÃO !</h4>
      <br />
      <p>
        Os conteúdos de aulas com técnicas de <br /> INJEÇÃO INTRA-ARTICULAR são <span> atos médicos exclusivos</span>.
      </p>
    </div>
  </div>
</div>


<?php get_template_part('template-parts/home/home', 'carousel'); ?>
<?php get_template_part('template-parts/home/home', 'blog'); ?>
<?php get_template_part('template-parts/home/home', 'brasos'); ?>
<?php get_template_part('template-parts/home/footer', 'images'); ?>

<?php get_footer(); ?>
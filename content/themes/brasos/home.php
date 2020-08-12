<?php get_header();
$popup = get_theme_mod('brasos_popup_image');
$default = null;
$img = !empty($popup) ? $popup : $default;
?>
<!-- POP UP -->
<!-- This is a button toggling the modal with the outside close button -->
<div id="modal-media-image" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
    <button class="uk-modal-close-outside" type="button" uk-close></button>
    <img class="modal-image" src="<?= $img; ?>" alt="">
    <?php echo do_shortcode('[link_popup link="https://regency.iweventos.com.br/site/brasit2020/inscreva-se" text="Mais informações e inscrição, Acesse"]'); ?>
  </div>
</div>

<?php get_template_part('template-parts/home/home', 'carousel'); ?>
<?php get_template_part('template-parts/home/home', 'carousel-2'); ?>
<?php get_template_part('template-parts/home/home', 'blog'); ?>
<?php get_template_part('template-parts/home/home', 'brasos'); ?>
<?php get_template_part('template-parts/home/footer', 'images'); ?>

<?php get_footer(); ?>
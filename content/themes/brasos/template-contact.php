<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

<section uk-height-viewport class="contact-section">
  <div class="background-top">
    <img src="<?php echo get_template_directory_uri() . '/public/images/contact.jpg ' ?>" alt="">
  </div>
  <div class="contact-form">
    <h2 class="h2-title">Contato</h2>
    <p class="black-text">
      Dúvidas?</br>
      Utilize o formulário abaixo para entrar em contato com nossa equipe!</p>
    <form>
      <?php echo do_shortcode('[contact-form-7 id="131" title="Contact form 1"]'); ?>
    </form>
  </div>
  <div class="background-bottom"></div>
</section>
<?php get_footer(); ?>
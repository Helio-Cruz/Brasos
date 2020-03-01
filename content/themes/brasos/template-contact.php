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
        <div class="contact-form__fields">
          <input class="uk-input" type="text" autocomplete="name" placeholder="Nome completo">
          <input class="uk-input" type="tel" autocomplete="tel" placeholder="Telefone">
        </div>
        <div class="contact-form__fields">
          <input class="uk-input" type="text" placeholder="Assunto">
          <input class="uk-input" type="email" autocomplete="email" placeholder="Email">
        </div>
        <textarea class="uk-textarea" placeholder="Mensagem"></textarea>
        <button class="normal-button special-button" type="button">Enviar</button>
      </form>
    </div>
    <div class="background-bottom"></div>
  </section>
<?php get_footer(); ?>
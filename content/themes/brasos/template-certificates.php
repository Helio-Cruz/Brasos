<?php
/*
Template Name: Certificados
*/
?>
<?php get_header(); ?>

<div class="diplom__content">
    <div class="diplom__research">
      <h2 class="h2-title">CERTIFICADOS</h2>
      <h3 class="h3-title">BRASIT 2018 - BRASOStbt 2019</h3>

      <form class="uk-search uk-search-default">
        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
        <input class="uk-search-input" type="search" name="peopleDiplom" placeholder="Search...">
      </form>
      <p>Por favor, digite seu nome para acessar os certificados disponíveis.</p>
    </div>
    <div class="diplom__show">
      <h3 class="h3-title">NOME COMPLETO</h3>
      <div uk-flex uk-flex-center uk-grid>
        <div class="uk-card uk-card-default uk-card-hover">
          <a href="image.jpg" target="_blank">
            <div class="uk-card-header">
              <img class="uk-border-circle" src="<?php echo get_template_directory_uri() . '/public/images/certificate_icon.png' ?>">
            </div>
            <div class="uk-card-body">
              <h3 class="h3-title">Nome do certificado</h3>
              <p><a download="image.jpg">Clique para fazer download</a></p>
            </div>
          </a>
        </div>
        <div class="uk-card uk-card-default uk-card-hover">
          <a href="image.jpg" target="_blank">
            <div class="uk-card-header">
              <img class="uk-border-circle" src="<?php echo get_template_directory_uri() . '/public/images/certificate_icon.png' ?>">
            </div>
            <div class="uk-card-body">
              <h3 class="h3-title">Nome do certificado</h3>
              <p><a download="image.jpg">Clique para fazer download</a></p>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
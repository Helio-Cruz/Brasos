<?php
/*
Template Name: Arvore do Conhecimento
*/
?>

<?php get_header(); ?>

<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m tree uk-card-hover">
  <a class="uk-link-toggle"  target="blank" href="https://www.arvoredoconhecimento.com.br/henryokigami/cursos">  
    <div class="uk-card-body tree__logo">
        <img data-src="<?php echo get_template_directory_uri() . '/public/images/logo-arvore.svg' ?>" width="1800" height="1200" alt="" uk-img>
    </div>
 </a>
<div class="uk-card-body">
        <h3>Professor Henry Okigami</h3>
        <p><b>Atenção !</b></p> 
           <p><b> Em Breve, aulas do professor Henry Okigami, para os membros da BRASOS.</b></p>
    <ol class="tree__text">
        <li><b>Aula 1</b> - Regulação Imunometabólica  no tratamento da Osteoartrite</li>
        <li><b>Aula 2</b> - Regulação Imunometabólica  no tratamento da Oteoporose </li>
        <li><b>Aula 3</b> - Regulação Imunometabólica  no tratamento da Sarcopenia</li>
    </ol>
        <button class="general-button">
            <a class="uk-link-toggle"  target="blank" href="https://www.arvoredoconhecimento.com.br/henryokigami/cursos">
            Acesse o site
            </a>
        </button>
</div>
</div>

<?php get_footer(); ?>
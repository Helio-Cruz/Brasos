<?php
/*
Template Name: Torne-se Membro
*/
?>

<?php get_header(); ?>

<section>
  <div class="message fadeBottom">
    <h2 class="h2-title ">Torne-se membro da Brasos!</h2>
    <p class="message__content">
      Faça parte de uma comunidade de profissionais de medicina com a mesma mentalidade: atualização, aplicação
      prática e pesquisa de novas tecnologias no tratamento da atividade inflamatória descontrolada, através de
      técnicas guiadas de injeção e infiltração de moléculas reguladoras dos processos metabólicos envolvidos na
      doença osteoartrítica.<br><br>
      A ABETI dá-lhe a oportunidade de se tornar parte de uma comunidade de clínicos e pesquisadores especializados e
      dedicados a melhorar a vida de milhões de pessoas afetadas pela osteoartrite (OA).<br><br>
      A ABETI pode ajudá-lo a fazer conexões benéficas com indivíduos e organizações em todo o mundo que estão na
      vanguarda da pesquisa, conhecimento e experiência em OA.<br><br>
      Compartilhar pesquisa, ideias e resultados.<br><br>
      Oportunidade de servir em comitês e forças-tarefa da ABETI para ajudar a desenvolver novas iniciativas e
      diretrizes.<br><br>
      Desconto na inscrição nas atividades científicas como Simpósios e Congressos da ABETI.<br><br>
      Para tornar-se membro,preencha o cadastro abaixo:
    </p>
  </div>
</section>

<section uk-height-viewport class="contact-section">
  <div class="background-left">
    <img src="<?php echo get_template_directory_uri() . '/public/images/contact.jpg' ?>" alt="">
  </div>
  <div class="contact-form contact-form-member">
    <h2 class="h2-title fadeBottom">Tornar-se membro</h2>
    <div class="contact-form-block">
      <?php echo do_shortcode('[contact-form-7 id="132" title="Membro"]'); ?>
    </div>
  </div>
  <div class="background-right"></div>
</section>
<?php get_footer(); ?>
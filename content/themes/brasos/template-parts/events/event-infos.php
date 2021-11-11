<!-- INFORMAÇOES BASICAS -->
<li class="no-formating" uk-scrollspy="cls: uk-animation-slide-bottom; target: .events-informations; delay: 300; repeat: false">

  <?php

  if (has_term('informacoes-gerais', 'parte_do_evento')) {
    the_content();
  }

  ?>

  <?php if (have_rows('informacoes_basicas') || have_rows('mensagem_do_presidente') || get_field('comissao_organizadora') || get_field('sobre_o_evento') || get_field('turismo')) : ?>
    <div class="events-informations">
      <!-- DATA / LOCAL -->
      <?php if (have_rows('informacoes_basicas')) : while (have_rows('informacoes_basicas')) : the_row();
          $dateEvent = get_sub_field('data_do_evento');
          $localEvent = get_sub_field('local_do_evento');
      ?>
          <?php if ($dateEvent) : ?>
            <h2 class="events-informations__subtitle center">DATA - <?php echo $dateEvent; ?></h2>
          <?php endif ?>
          <?php if ($localEvent) : ?>
            <h2 class="events-informations__subtitle center">LOCAL</h2>
            <address class="center"><?php echo $localEvent; ?></address>
          <?php endif ?>
      <?php endwhile;
      endif; ?>



      <!-- MENSAGEM PRESIDENTE  -->
      <?php if (have_rows('mensagem_do_presidente')) : while (have_rows('mensagem_do_presidente')) : the_row();
          $titleMessageCEO = get_sub_field('titulo_do_mensagem');
          $contentMessageCEO = get_sub_field('conteudo_do_mensagem');
      ?>
          <?php if ($titleMessageCEO) : ?>
            <h2 class="events-informations__subtitle"><?php echo $titleMessageCEO; ?></h2>
          <?php endif ?>
          <?php if ($contentMessageCEO) : ?>
            <div><?php echo $contentMessageCEO; ?></div>
          <?php endif ?>
      <?php endwhile;
      endif; ?>

      <!-- COMISSAO ORGANIZADORA -->
      <?php if (get_field('comissao_organizadora')) : ?>
        <h2 class="events-informations__subtitle">COMISSÃO ORGANIZADORA</h2>
        <div><?php the_field('comissao_organizadora'); ?></div>
      <?php endif; ?>

      <!-- SOBRE O EVENTO -->
      <?php if (get_field('sobre_o_evento')) : ?>
        <?php the_field('sobre_o_evento') ?>
      <?php endif; ?>

      <!-- TOURISM -->
      <?php if (get_field('turismo')) : ?>
        <h2 class="events-informations__subtitle">TURISMO</h2>
        <div><?php the_field('turismo'); ?></div>
      <?php endif; ?>

    </div>
  <?php endif; ?>

  <?php $patrocinio = get_field('patrocinios', 1578); ?>
  <div class="patrocinios" style="margin: auto; text-align:center">
       <?php the_field('patrocinios', 1578); ?>
  </div>

</li>
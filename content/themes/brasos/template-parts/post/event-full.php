<ul class="uk-switcher">
  <!-- INFORMAÇOES BASICAS -->
  <li uk-scrollspy="cls: uk-animation-slide-bottom; target: .events-informations; delay: 300; repeat: false">
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
  </li>

  <!-- ACCORDION PROGRAMACAO -->
  <li>
    <?php if (have_rows('programacao')) : ?>
      <div class="accordion__content events__layout">
        <ul uk-accordion>
          <?php while (have_rows('programacao')) : the_row();
            $titleProgram = get_sub_field('titulo');
            $contentProgram = get_sub_field('detalhes');
          ?>
            <li>
              <?php if ($titleProgram) : ?>
                <a class="uk-accordion-title" href="#">
                  <h3 class="h3-title"><?php echo $titleProgram; ?></h3>
                </a>
              <?php endif; ?>
              <?php if ($contentProgram) : ?>
                <div class="uk-accordion-content">
                  <?php echo $contentProgram; ?>
                </div>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>
  </li>

  <!-- PALESTRANTES  -->
  <li>
    <?php if (get_field('palestrantes')) : ?>
      <div class="columns__list-names" uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: true">
        <div class="columns__background">
          <h2 class="h2-title">PALESTRANTES CONVIDADOS</h2>
          <div class="uk-column-1-1 uk-column-1-3@m box">
            <?php the_field('palestrantes'); ?>
          </div>
        </div>
      </div>
      <!-- CERTIFICADOS -->
      <?php echo do_shortcode('[certificados]'); ?>
    <?php endif; ?>
  </li>

  <!-- INFORMAÇOES DE INSCRIÇAO  -->
  <li>
    <!-- PRICES INFOS -->
    <?php if (have_rows('valores')) : ?>
      <div class="blog__content inscriptions__content">
        <h2 class="h2-title">INSCRIÇÃO / PAGAMENTO</h2>
        <?php while (have_rows('valores')) : the_row();
          $titleValues = get_sub_field('titulo');
          $textValues = get_sub_field('texto');
          $imgValues = get_sub_field('imagem');
        ?>
          <?php if ($titleValues) : ?>
            <h3 class="h3-title"><?php echo $titleValues; ?></h3>
          <?php endif; ?>
          <?php if ($textValues) : ?>
            <p><?php echo $textValues; ?></p>
          <?php endif; ?>
          <?php if ($imgValues) : ?>
            <img src="<?php echo $imgValues['url']; ?>" alt="">
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <!-- INFORMAÇOES DE CURSOS -->
    <?php if (have_rows('cursos')) : ?>
      <div class="congress__content events__cards">
        <div uk-flex uk-flex-center uk-grid uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
          <?php while (have_rows('cursos')) : the_row();
            $nameCourse = get_sub_field('nome_do_curso');
            $detailsCourse = get_sub_field('detalhes');
          ?>
            <div class="uk-card uk-card-default box">
              <?php if ($nameCourse) : ?>
                <div class="uk-card-header">
                  <h3 class="uk-card-title h3-title">
                    <?php echo $nameCourse; ?>
                  </h3>
                </div>
              <?php endif; ?>
              <?php if ($detailsCourse) : ?>
                <div class="uk-card-body">
                  <?php echo $detailsCourse; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- FORMULARIO DE INSCRIÇAO  -->
    <?php if (get_field('formulario_de_inscricao')) : ?>
      <div class="blog__content inscriptions__content">
        <h2 class="h2-title">FORMULARIO DE INSCRIÇÃO</h2>
        <?php the_field('formulario_de_inscricao'); ?>
        <div class="uk-flex uk-height-small uk-margin uk-text-center">
          <a class="uk-margin-auto uk-margin-auto-vertical normal-button special-button margin-button" href="#modal-form" uk-toggle><?php the_title(); ?></a>
        </div>
      </div>
      <!-- FORM BUTTON -->
      <div id="modal-form" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-margin-auto-vertical contact-form contact-form-inscription">
          <h2 class="h2-title">Inscrição</h2>
          <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="contact-form-block">
            <?php echo do_shortcode('[contact-form-7 id="301" title="Inscrição"]'); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </li>


</ul>
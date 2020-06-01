<?php
$args = [
  'post_type' => 'evento',
  'posts_per_page' => -1,
  'post_status'    => 'publish',
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);

if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>

    <ul class="uk-switcher">

      <!-- < ?php
        $current_page_id = get_the_ID();
        $args = [
          'post_type' => 'evento',
          'post_parent' => $current_page_id,
          'category_name'  => 'data-local',
        ];
        ?> -->

      <!-- INFORMAÇOES BASICAS -->
      <li>
        <!-- LOCAL E DATA -->
        <?php if (have_rows('informacoes_basicas')) : while (have_rows('informacoes_basicas')) : the_row();
            $dateAddressEvent = get_sub_field('data_local_do_evento');
            $imgEvent = get_sub_field('imagem_do_evento');
        ?>
            <div class="blog__content events__layout" id="data-local">
              <h2 class="h2-title uk-text-center">INFORMAÇÕES GERAIS</h2>
              <div class="blog__content-infos">
                <?php if ($imgEvent) : ?>
                  <img class="img-event" id="data-local__img" src="<?php echo $imgEvent['url']; ?>" alt="">
                <?php endif ?>
                <?php if ($dateAddressEvent) : ?>
                  <div class="text-event" id="data-local__text"><?php echo $dateAddressEvent; ?></div>
                <?php endif ?>
              </div>
            </div>
        <?php endwhile;
        endif; ?>

        <!-- MENSAGEM PRESIDENTE  -->
        <?php if (have_rows('mensagem_do_presidente')) : while (have_rows('mensagem_do_presidente')) : the_row();
            $titleMessageCEO = get_sub_field('titulo_do_mensagem');
            $contentMessageCEO = get_sub_field('conteudo_do_mensagem');
        ?>
            <div class="message">
              <?php if ($titleMessageCEO) : ?>
                <h2 class="h2-title uk-text-center"><?php echo $titleMessageCEO; ?></h2>
              <?php endif ?>
              <?php if ($contentMessageCEO) : ?>
                <div class="message__content"><?php echo $contentMessageCEO; ?></div>
              <?php endif ?>
            </div>
        <?php endwhile;
        endif; ?>

        <!-- COMISSAO ORGANIZADORA -->
        <?php
        $committee = get_field('comissao_organizadora');
        if ($committee) :
        ?>
          <div class="events__comissao" uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
            <h2 class="h2-title">COMISSÃO ORGANIZADORA</h2>
            <div class="events__comissao__text box uk-text-center">
              <?php echo $committee; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- SOBRE O EVENTO -->
        <?php if (have_rows('sobre_o_evento')) : while (have_rows('sobre_o_evento')) : the_row();
            $nameEvent = get_sub_field('nome_do_evento');
            $descriptionEvent = get_sub_field('descricao_do_evento');
        ?>
            <div class="events__content" uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">
              <div class="event__block box">
                <h2 class="h2-title">Sobre o evento</h2>
                <div class="event__text">
                  <h3><?php echo $nameEvent; ?></h3>
                  <?php echo $descriptionEvent ?>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif;
        ?>

        <!-- TOURISM -->
        <?php
        $turism = get_field('turismo');
        if ($turism) :
        ?>
          <div class="events__comissao" uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
            <h2 class="h2-title">TURISMO</h2>
            <div class="events__comissao__text box uk-text-center">
              <?php echo $turism; ?>
            </div>
          </div>
        <?php endif; ?>

      </li>

      <!-- ACCORDION PROGRAMACAO -->
      <?php if (have_rows('programacao')) : ?>
        <li>
          <div class="accordion__content events__layout">
            <ul uk-accordion>
              <?php while (have_rows('programacao')) : the_row();
                $titleProgram = get_sub_field('titulo');
                $contentProgram = get_sub_field('detalhes');
              ?>
                <li>
                  <a class="uk-accordion-title" href="#">
                    <h3 class="h3-title"><?php echo $titleProgram; ?></h3>
                  </a>
                  <div class="uk-accordion-content">
                    <?php echo $contentProgram; ?>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </li>
      <?php endif;
      ?>

      <!-- PALESTRANTES  -->
      <li>
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
      </li>

      <!-- INFORMAÇOES DE INSCRIÇAO  -->
      <li>
        <?php if (have_rows('valores')) : ?>
          <div class="blog__content inscriptions__content">
            <h2 class="h2-title">INSCRIÇÃO / PAGAMENTO</h2>
            <?php while (have_rows('valores')) : the_row();
              $titleValues = get_sub_field('titulo');
              $textValues = get_sub_field('texto');
              $imgValues = get_sub_field('imagem');
            ?>
              <h3 class="h3-title"><?php echo $titleValues; ?></h3>
              <p><?php echo $textValues; ?></p>
              <img src="<?php echo $imgValues['url']; ?>" alt="">
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
                  <div class="uk-card-header">
                    <h3 class="uk-card-title h3-title">
                      <?php echo $nameCourse; ?>
                    </h3>
                  </div>
                  <div class="uk-card-body">
                    <?php echo $detailsCourse; ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- FORMULARIO DE INSCRIÇAO  -->
        <div class="blog__content inscriptions__content">
          <h2 class="h2-title">FORMULARIO DE INSCRIÇÃO</h2>
          <?php the_field('formulario_de_inscricao'); ?>
          <div class="uk-flex uk-height-small uk-margin uk-text-center">
            <a class="uk-margin-auto uk-margin-auto-vertical normal-button special-button margin-button" href="#modal-form" uk-toggle><?php the_title(); ?></a>
          </div>
        </div>

        <div id="modal-form" class="uk-flex-top" uk-modal>
          <div class="uk-modal-dialog uk-margin-auto-vertical contact-form contact-form-inscription">
            <h2 class="h2-title">Inscrição</h2>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="contact-form-block">
              <?php echo do_shortcode('[contact-form-7 id="301" title="Inscrição"]'); ?>
            </div>
          </div>
        </div>
      </li>

    </ul>
<?php endwhile;
endif; ?>
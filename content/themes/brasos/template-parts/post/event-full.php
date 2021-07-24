<ul class="uk-switcher">
  <!-- INFORMAÇOES BASICAS -->
  <li class="no-formating" uk-scrollspy="cls: uk-animation-slide-bottom; target: .events-informations; delay: 300; repeat: false">
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
                  <h2><?php echo $titleProgram; ?></h2>
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
    <?php if (have_rows('palestrantes_internacionais')) : ?>
      <div class="palestrantes uk-grid-collapse uk-flex-center uk-margin-small uk-text-center fadein" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .fadein; delay: 500; repeat: false">
        <h2 class="h2-title">CONVIDADOS INTERNACIONAIS</h2>
        <?php $i = 1; ?>
        <?php while (have_rows('palestrantes_internacionais')) : the_row();
          $photo = get_sub_field('foto_de_perfil');
          $flag = get_sub_field('bandeira_do_pais');
          $title = get_sub_field('nome');
          $text = get_sub_field('cv');
        ?>

          <?php if ($text) : ?>
            <a class="uk-align-center" href="#cv-internacionais-<?= $i; ?>" uk-toggle>
              <?php
              /**
               * Palestrante internacionais
               */
              ?>
              <div id="cv-internacionais-<?= $i; ?>" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="color: black !important; line-height: 1.5em;">
                  <button class="uk-modal-close-default" type="button" uk-close></button>
                  <div class="uk-align-center">
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-card uk-grid-collapse">
                      <div class="uk-card-media-left">
                        <?php if ($photo) : ?><img src="<?= esc_url($photo['url']); ?>" alt="<?= esc_attr($photo['alt']); ?>"><?php endif; ?>
                      </div>
                      <div class="uk-card-body uk-width-1-2 pls">
                        <?php if ($flag) : ?><img class="flag" src="<?= esc_url($flag['url']); ?>" alt="<?= esc_attr($flag['alt']); ?>"><?php endif; ?>
                        <?php if ($title) : ?><p><strong><?= $title; ?></strong></p><?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <p class="pls__text"><?= $text; ?></p>
                </div>
              </div>
            <?php else : echo '<div class="uk-align-center">';
          endif; ?>
            <div class=" uk-flex uk-flex-center uk-flex-middle uk-card uk-card-hover uk-card-default uk-grid-collapse">
              <div class="uk-card-media-left">
                <?php if ($photo) : ?>
                  <img class="rounded" src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>">
                <?php endif; ?>
              </div>
              <div class="uk-card-body uk-width-1-2">
                <?php if ($flag) : ?>
                  <img class="flag" src="<?php echo esc_url($flag['url']); ?>" alt="<?php echo esc_attr($flag['alt']); ?>" />
                <?php endif; ?>
                <?php if ($title) : ?>
                  <p><strong><?= $title ?></strong></p>
                <?php endif; ?>
              </div>
            </div>
          <?php if ($text) : echo '</a>';
          else : echo '</div>';
          endif;
          $i++;
        endwhile; ?>
      </div>
    <?php endif; ?>

    <?php if (have_rows('palestrantes_nacionais')) : ?>
      <?php
      /**
       * Palestrante Nacionais 
       */
      ?>
      <div class="palestrantes uk-grid-collapse uk-flex-center uk-margin-small uk-text-center fadein" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .fadein; delay: 500; repeat: false">
        <h2 class="h2-title">CONVIDADOS NACIONAIS</h2>
        <?php $i = 1; ?>
        <?php while (have_rows('palestrantes_nacionais')) : the_row();
          $photo = get_sub_field('foto_de_perfil');
          $flag = get_sub_field('bandeira_do_pais');
          $title = get_sub_field('nome');
          $text = get_sub_field('cv');
          $estado = get_sub_field('estado');
        ?>

          <?php if ($text) : ?>
            <a class="uk-align-center pls" href="#cv-nacionais-<?= $i; ?>" uk-toggle>
              <div id="cv-nacionais-<?= $i; ?>" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="color: black !important; line-height: 1.5em;">
                  <button class="uk-modal-close-default" type="button" uk-close></button>
                  <div class="uk-align-center">
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-card uk-grid-collapse">
                      <div class="uk-card-media-left palestrantes-nacionais">
                        <?php if ($photo) : ?><img class="palestrantes-nacionais__image" src="<?= esc_url($photo['url']); ?>" alt="<?= esc_attr($photo['alt']); ?>"><?php endif; ?>
                      </div>
                      <div class="uk-card-body uk-width-1-2">
                        <?php if ($flag) : ?><img class="flag" src="<?= esc_url($flag['url']); ?>" alt="<?= esc_attr($flag['alt']); ?>"><?php endif; ?>
                        <p><strong>
                            <?php if ($title) : ?><?= $title; ?><?php endif; ?>
                            <br />
                            <?php if ($estado) : ?><?= $estado; ?><?php endif; ?>
                          </strong></p>
                      </div>
                    </div>
                  </div>
                  <p class="pls__text"><?= $text; ?></p>
                </div>
              </div>
            <?php else : echo '<div class="uk-align-center">';
          endif; ?>
            <div class=" uk-flex uk-flex-center uk-flex-middle uk-card uk-card-hover uk-card-default uk-grid-collapse">
              <div class="uk-card-media-left">
                <?php if ($photo) : ?>
                  <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>">
                <?php endif; ?>
              </div>
              <div class="uk-card-body palestrantes-card uk-width-1-2">
                <?php if ($flag) : ?>
                  <img class="flag" src="<?php echo esc_url($flag['url']); ?>" alt="<?php echo esc_attr($flag['alt']); ?>" />
                <?php endif; ?>
                <p><strong>
                    <?php if ($title) : ?><?= $title; ?><?php endif; ?>
                    <br />
                    <?php if ($estado) : ?><?= $estado; ?><?php endif; ?>
                  </strong></p>
              </div>
            </div>
          <?php if ($text) : echo '</a>';
          else : echo '</div>';
          endif;
          $i++;
        endwhile; ?>
      </div>
    <?php endif; ?>

    <?php if (get_field('palestrantes')) : ?>
      <div class="palestrantes" uk-scrollspy="cls: uk-animation-fade; target: .fadein; delay: 500; repeat: false">
        <h2 class="h2-title">CONVIDADOS</h2>
        <p class="uk-column-1-3@m uk-flex-center fadein uk-scrollspy-inview uk-animation-fade" style="text-align: center; line-height: 2em;">
          <?php the_field('palestrantes'); ?>
        </p>
      </div>
    <?php endif; ?>
  </li>




  <!-- INFORMAÇOES DE INSCRIÇAO  -->
  <!-- <li>
    <!- PRICES INFOS -->
  <!--
    <//?php if (have_rows('valores')) : ?>
      <div class="blog__content inscriptions__content">
        <h2 class="h2-title">INSCRIÇÃO / PAGAMENTO</h2>
        <//?php while (have_rows('valores')) : the_row();
          $titleValues = get_sub_field('titulo');
          $textValues = get_sub_field('texto');
          $imgValues = get_sub_field('imagem');
        ?>
          <//?php if ($titleValues) : ?>
            <h3 class="h3-title"><//?php echo $titleValues; ?></h3>
          <//?php endif; ?>
          <//?php if ($textValues) : ?>
            <p><//?php echo $textValues; ?></p>
          <//?php endif; ?>
          <//?php if ($imgValues) : ?>
            <img src="<//?php echo $imgValues['url']; ?>" alt="">
          <//?php endif; ?>
        <//?php endwhile; ?>
      </div>
    <//?php endif; ?>-->

  <!-- INFORMAÇOES DE CURSOS -->
  <!-- <//?php if (have_rows('cursos')) : ?>
      <div class="congress__content events__cards">
        <div uk-flex uk-flex-center uk-grid uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
          <//?php while (have_rows('cursos')) : the_row();
            $nameCourse = get_sub_field('nome_do_curso');
            $detailsCourse = get_sub_field('detalhes');
          ?>
            <div class="uk-card uk-card-default box">
              <//?php if ($nameCourse) : ?>
                <div class="uk-card-header">
                  <h3 class="uk-card-title h3-title">
                    <//?php echo $nameCourse; ?>
                  </h3>
                </div>
              <//?php endif; ?>
              <//?php if ($detailsCourse) : ?>
                <div class="uk-card-body">
                  <//?php echo $detailsCourse; ?>
                </div>
              <//?php endif; ?>
            </div>
          <//?php endwhile; ?>
        </div>
      </div>
    <//?php endif; ?> -->

  <!-- FORMULARIO DE INSCRIÇAO  -->

  <!-- <//?php global $post;
    if ($post->ID == 1419) : ?>
      <//?php if (get_field('formulario_de_inscricao')) : ?>
        <div class="blog__content inscriptions__content">
          <h2 class="h2-title">FORMULARIO DE INSCRIÇÃO</h2>
          <//?php the_field('formulario_de_inscricao'); ?>
          <div class="uk-flex uk-height-small uk-margin uk-text-center">
            <a class="uk-margin-auto uk-margin-auto-vertical normal-button special-button margin-button" href="#modal-form" uk-toggle><//?php the_title(); ?></a>
          </div>
        </div>
        <!- FORM BUTTON  

        <div id="modal-form" class="uk-flex-top" uk-modal>
          <div class="uk-modal-dialog uk-margin-auto-vertical contact-form contact-form-inscription">
            <h2 class="h2-title">Inscrição</h2>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="contact-form-block">
              <//?php echo do_shortcode('[contact-form-7 id="301" title="Inscrição"]'); ?>
            </div>
          </div>
        </div>
      <//?php endif; ?>
    <//?php else : ?>
      <//?php if (get_field('formulario_de_inscricao')) : ?>
        <div class="blog__content inscriptions__content">
          <//?php the_field('formulario_de_inscricao'); ?>
        <//?php endif; ?>
      <//?php endif; ?> -->
  <!--</li> -->

</ul>
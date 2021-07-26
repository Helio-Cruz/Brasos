<!-- ACCORDION PROGRAMACAO -->
<li>
  <?php if (have_rows('programacao')) : ?>
    <div class="accordion__content events__layout">
      <ul uk-accordion>
        <?php while (have_rows('programacao')) : the_row();
          $titleProgram = get_sub_field('titulo');
          $contentProgram = get_sub_field('detalhes');
          $introProgram = get_sub_field('introducao');
        ?>
          <li>
            <?php if ($titleProgram) : ?>
              <a class="uk-accordion-title" href="#">
                <h2><?php echo $titleProgram; ?></h2>
              </a>
            <?php endif; ?>
            <div class="uk-accordion-content">
              <?php if ($introProgram) : echo $introProgram;
              endif; ?>

              <?php if (have_rows('detalhe')) : while (have_rows('detalhe')) : the_row();
                  $modulo = get_sub_field('modulo_');
                  $startHour = get_sub_field('horario_inicial');
                  $endHour = get_sub_field('horario_final');
                  $subtitle = get_sub_field('subtitulo');
              ?>
                  <div class="full-content">
                    <?php if (!$modulo && $startHour) : ?>
                      <div class="start-hour"> <?= $startHour ?> </div>
                    <?php endif; ?>
                    <!-- CARDS -->
                    <?php if (have_rows('cards')) : ?>
                      <div class="right-content <?php if (!$modulo) : ?>right-content-border<?php endif; ?>">
                        <?php if ($modulo && $subtitle) : ?> <h2 class="subtitle"><?= $subtitle ?></h2>
                        <?php elseif (!$modulo && $subtitle) : ?> <h3 class="subtitle"><?= $subtitle ?></h3>
                        <?php endif; ?>
                        <!-- CARDS -->
                        <?php while (have_rows('cards')) : the_row();
                          $img = get_sub_field('imagem_de_perfil');
                          $description = get_sub_field('descricao_da_pessoa');
                          $nationality = get_sub_field('nacionalidade');
                        ?>
                          <div class="card">
                            <div class="card-image"><img src="<?= esc_url($img['url']); ?>" alt="<?= esc_attr($img['alt']); ?>" /></div>
                            <div class="card-text"><?= $description ?></div>
                            <?php if ($nationality) : ?><div class="card-flag"><img src="<?= $nationality ?>" /></div><?php endif; ?>
                          </div>
                          <?php if (have_rows('patrocinadores')) : ?>
                            <div class="patrocinadores">
                              <?php while (have_rows('patrocinadores')) : the_row(); ?>
                                <div class="patrocinador"><img src="<?= get_sub_field('patrocinador'); ?>" /></div>
                              <?php endwhile; ?>
                            </div>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                    <?php if (!$modulo && $endHour) : ?>
                      <div class="end-hour"> <?= $endHour ?> </div>
                    <?php endif; ?>
                  </div>

              <?php endwhile;
              endif; ?>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>
</li>
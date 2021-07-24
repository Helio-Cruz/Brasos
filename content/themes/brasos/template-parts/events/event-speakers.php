
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
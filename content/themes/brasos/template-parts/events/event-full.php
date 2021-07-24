<ul class="uk-switcher">
  <?php get_template_part('template-parts/events/event', 'infos'); ?>
  <?php get_template_part('template-parts/events/event', 'program'); ?>
  <?php get_template_part('template-parts/events/event', 'speakers'); ?>






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
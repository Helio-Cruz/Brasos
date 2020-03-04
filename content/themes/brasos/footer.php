 

<div class="uk-section uk-section-muted footer-nav" uk-scrollspy="cls: uk-animation-slide-bottom; target: .title; delay: 300; repeat: true">
    <div class="uk-container">
      <h2 class="footer-nav__title title">Faça Parte da Nossa Comunidade</h2>
      <button class="footer-nav__button">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Torne-se Membro' ) ) ); ?>"><?php esc_html_e( 'Torne-se Membro', 'textdomain' ); ?></a>
      </button>
    </div>

    <div uk-navbar class="footer-nav__menu-fast ">
      <div class="uk-navbar-center">
          <ul class="uk-navbar-nav uk-flex-wrap uk-child-width-expand@s">
          <?php
                $menu = wp_nav_menu([
                  'menu' => 'menu-footer',
                  'container' => '',
                  'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
                  'echo' => true
                ]);
                $menu = strip_tags($menu, '');
                echo $menu;
                ?>
          </ul>
      </div>
    </div>

    <div class="uk-grid-match uk-child-width-expand@s footer-nav__contact" uk-grid>
      <div>
        <p>Responsável Técnico<br>
          <b>Antonio Martins Tieppo<br></b>
          Primeiro Secretário<br>
          CRM/SP: 47.777
        </p>
      </div>
      <div class="footer-nav__media-social">
        <div class="uk-flex-wrap">
          <a href="" uk-icon="facebook"></a>
          <a href="" uk-icon="instagram"></a>
        <p>secretario@brasos.med.br</p>
        </div>

      </div>
    </div>
  </div>
  </div>
  <div class="uk-grid-match uk-child-width-expand@s footer-mentions" uk-grid>
    <div>
      <p>Copyright@ 2020. Agência Fazer</p>
    </div>
    <div class="footer-nav__logo">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt=""></a>
    </div>
  </div>

  <script src="js/app.js"></script>
  <?php wp_footer(); ?>
</body>

</html>
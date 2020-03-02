<div class="brasos" uk-scrollspy="cls: uk-animation-slide-right; target: .brasos-fade; delay: 600; repeat: true">
    <h2 class="brasos__title brasos-fade">Sobre a Brasos</h2>
    <div class="brasos__container">
  <!-- <div uk-scrollspy="cls: uk-animation-slide-left; target: .brasos-home-image; delay: 600; repeat: true"> -->
      <div class="brasos__image brasos-home-image">
        <img src="<?php echo get_template_directory_uri() . '/public/images/card-3.jpg' ?>" alt="">
      <!-- </div> -->
    </div>
        <div class="brasos__back-grey"></div>
    <div uk-scrollspy="cls: uk-animation-slide-bottom; target: .brasos-about; delay: 600; repeat: true">
    <div class="brasos__text brasos-about">
      <p>
        A BRASOS (Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia) é uma sociedade de médicos de
        diferentes especialidades, fundada em outubro de 2017, com o nome de ABETI (Associação Brasileira para Estudos
        dos Tratamentos por Infiltração).
      </p>
        <button class="brasos__button">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'A Brasos' ) ) ); ?>"><?php esc_html_e( 'Saiba Mais', 'textdomain' ); ?></a>
        </button>
      </div>  
    </div>
    </div>
  </div>
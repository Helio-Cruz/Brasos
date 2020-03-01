 
  <!-- NAVBAR -->
  <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar="dropbar: true;">
      <!-- <nav class="uk-container uk-navbar"> -->
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li class="uk-active">
            <div class="header-nav__logo">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt=""></a>
            </div>
          </li>
        </ul>
      </div>
      <div class="uk-navbar-center uk-visible">
        <ul class="uk-navbar-nav uk-visible">
          <li class="uk-active"><a href="<?php echo home_url(); ?>">Home</a></li>
          <?php
          // $menu = wp_nav_menu([
          //   'menu' => 'menu-header',
          //   'theme_location' => 'menu-top',
          //   'echo' => true
          // ]);
          // $menu = strip_tags($menu, '<div></div>');
          // echo $menu;
        ?>
          <li>
            <a href="institutional.html">Institucional</a>
            <div class="uk-navbar-dropdown">
              <ul class="uk-nav uk-navbar-dropdown-nav subnav">
                <li><a href="institutional.html">Brasos</a></li>
                <li><a href="law.html">Estatuo Abeti</a></li>
                <li><a href="words.html">Palavras do Presidente</a></li>
                <li><a href="board.html">Conselho Diretor</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">Eventos</a></li>
          <li><a href="articles.html">Artigos</a></li>
          <li><a href="contact.html">Contato</a></li>
          <li><a href="member.html">Torne-se membro</a></li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible">
          <div class="flag">
          <?php
          $menu = wp_nav_menu([
            'menu' => 'flag',
            'container_class' => '',
            'container' => '',
            'items_wrap' => '<a href="%2$s">%3$s</a>',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '<li></li>');
          echo $menu;
        ?>
           
          </div>
        </ul>
        <a href="#" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
      </div>
    </nav>
  </div>
  <div id="sidenav" uk-offcanvas="overlay: true; flip: true">
    <div class="uk-offcanvas-bar uk-background-default">
      <button class="uk-offcanvas-close" type="button" uk-close></button>
      <ul class="uk-nav">
        <div class="flag">
          <li>
            <a href="#">
              <img src="<?php echo get_template_directory_uri() . '/public/images/flag/brazil.png' ?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo get_template_directory_uri() . '/public/images/flag/usa.png' ?>" alt="">
            </a>
          </li>
        </div>
        <li class="uk-nav-divider"></li>
        <li class="uk-active"><a href="index.html">Home</a></li>
        <li class="uk-parent">
          <a href="institutional.html">Institucional</a>
          <ul class="uk-nav-sub uk-navbar-dropdown-nav">
            <li><a href="institutional.html">Brasos</a></li>
            <li><a href="law.html">Estatuto Abeti</a></li>
            <li><a href="words.html">Palavras do Presidente</a></li>
            <li><a href="board.html">Conselho Diretor</a></li>
          </ul>
        </li>
        <li><a href="#">Eventos</a></li>
        <li><a href="articles.html">Artigos</a></li>
        <li><a href="contact.html">Contato</a></li>
        <li><a href="member.html">Torne-se membro</a></li>
      </ul>
    </div>
  </div>
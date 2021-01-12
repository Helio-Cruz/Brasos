 <!-- NAVBAR -->
 <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
   <nav class="uk-navbar-container" uk-navbar="dropbar: true;">
     <div class="uk-navbar-center uk-visible">
       <ul class="uk-navbar-nav">
         <li>
           <div class="header-nav__logo">
             <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt=""></a>
           </div>
         </li>
       </ul>
       <ul class="uk-navbar-nav">
         <li>
           <a href="<?php echo home_url(); ?>">Home</a>
         </li>
         <?php
          $menu = wp_nav_menu([
            'menu' => 'menu-header',
            'container' => false,
            'items_wrap' => '%3$s',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '<li><a href="%2$s">');
          echo $menu;
          ?>

         <li>
           <?php if (!is_user_logged_in()) { ?>
             <a uk-toggle="target: #my-id">Membros</a>
           <?php } else {  ?>
             <a href="<?php echo home_url('/membros'); ?>">Membros</a>
           <?php  } ?>
         </li>
       </ul>

       <ul class=" uk-navbar-nav">
         <div class="flag">
           <?php
            $menu = wp_nav_menu([
              'menu' => 'flag',
              'container' => false,
              'items_wrap' => '%3$s',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '<li><a href="%2$s">');
            echo $menu;
            ?>
         </div>
       </ul>
       <a href="#" class="uk-navbar-toggle sidenav" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
     </div>
   </nav>
 </div>
 <?php get_template_part('page-login'); ?>
<?php

if (!function_exists('brasos_setup')):

    function brasos_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        add_theme_support('menus');

        register_nav_menus([
            'menu_header' => 'Menu de navigation en haut de la page',
            'menu_footer' => 'Menu de navigation en bas de la page',
             
        ]);



        remove_action( 'wp_head', 'print_emoji_detection_script', 7);
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_print_styles', 'print_emoji_styles');
     
        // Supprime le lien vers Windows Live Editor Manifest
        remove_action( 'wp_head', 'wlwmanifest_link' );
     
        // Supprime le lien RSD + XML
        remove_action( 'wp_head', 'rsd_link' );
     
        // Supprime la meta generator
        remove_action( 'wp_head', 'wp_generator' );
     
        // Supprime les extra feed rss
        remove_action( 'wp_head', 'feed_links_extra', 3 );
     
        // Supprime les feeds des Posts et des Commentaires
        remove_action( 'wp_head', 'feed_links', 2 );
    }


    function brasos_excerpt_length($length) {
        return 25;
    }
     add_filter('excerpt_length', 'brasos_excerpt_length');
       
     function brasos_excerpt_more( $more ) {
        return '...';
     }
    add_filter('excerpt_more', 'brasos_excerpt_more');

endif;

add_action('after_setup_theme', 'brasos_setup');
<?php

if (!function_exists('brasos_scripts')):

    function brasos_scripts()
    {
        wp_enqueue_style(
            'brasos-style-css',
            get_theme_file_uri('/public/css/style.css'),
       //   get_theme_file_uri('/app/scss/main.scss'),
            [],
            '1.0.0'
        );
     


        wp_enqueue_script(
            'brasos-js',
           get_theme_file_uri('/public/js/app.js'),
         //  get_theme_file_uri('/app/js/app.js'),
            [],
            '1.0.0',
            true
        );

     
    }

endif;


add_action('wp_enqueue_scripts', 'brasos_scripts');

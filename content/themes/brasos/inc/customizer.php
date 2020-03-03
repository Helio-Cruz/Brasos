 
<?php

require('customizer/brasos_header.php');
require('customizer/brasos_home_images.php');
require('customizer/brasos_main.php');
require('customizer/brasos_call_to_action.php');
require('customizer/brasos_footer.php');

function brasos_customize_register($wp_customize) {

    $wp_customize->add_panel('brasos_theme_panel', [
        
        'title' => 'Brasos',
        'description' => 'Brasos Painel - Gestao',
        'priority' => 1,
    ]);

    //SECTION HEADER
    $wp_customize->add_section('brasos_header', [
        'title' => 'Carossel',
        'panel' => 'oagency_theme_panel'
    ]);

    //SECTION POSTS
    $wp_customize->add_section('brasos_main', [
        'title' => 'Posts',
        'panel' => 'brasos_theme_panel'
    ]);

      //SECTION FOOTER
      $wp_customize->add_section('brasos_footer', [
        'title' => 'Footer',
        'panel' => 'brasos_theme_panel'
    ]);

    //SECTION  CALL TO SECTION
    $wp_customize->add_section('brasos_call_to_action', [
    'title' => 'Call to action',
    'panel' => 'brasos_theme_panel',
     
    ]);

    //SECTION  HOME IMAGES
    $wp_customize->add_section('brasos_home_images', [
        'title' => 'Brasos Home Imagens',
        'panel' => 'brasos_theme_panel',
            
    ]);
        



    brasos_header($wp_customize);

    brasos_main($wp_customize);

    brasos_footer($wp_customize);

    brasos_call_to_action($wp_customize);

    brasos_home_images($wp_customize);
 
}

add_action('customize_register', 'brasos_customize_register');
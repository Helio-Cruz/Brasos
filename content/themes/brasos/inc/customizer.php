 
<?php
require('customizer/brasos_home_images.php');
require('customizer/brasos_banner_textos.php');
require('customizer/brasos_carousel_footer.php');

function brasos_customize_register($wp_customize) {

    $wp_customize->add_panel('brasos_theme_panel', [
        'title' => 'Brasos',
        'description' => 'Brasos Painel - Gestao',
        'priority' => 1,
    ]);


    //SECTION  HOME IMAGES
    $wp_customize->add_section('brasos_home_images', [
        'title' => 'Brasos Home Imagens',
        'panel' => 'brasos_theme_panel',
    ]);
    
    //SECTION  BANNER TEXTOS
    $wp_customize->add_section('brasos_banner_textos', [
        'title' => 'Brasos Banner Textos',
        'panel' => 'brasos_theme_panel',
    ]);

    //SECTION  FOOTER IMAGES
    $wp_customize->add_section('brasos_carousel_footer', [
        'title' => 'Brasos Rodapé Imagens',
        'panel' => 'brasos_theme_panel',
    ]);
    
        
    brasos_home_images($wp_customize);
    brasos_banner_textos($wp_customize);
    brasos_carousel_footer($wp_customize);
 
}

add_action('customize_register', 'brasos_customize_register');
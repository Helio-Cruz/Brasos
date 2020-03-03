<?php

function brasos_footer($wp_customize){


    $wp_customize->add_setting('brasos_footer_active',[]);

    $wp_customize->add_setting('brasos_footer_text', []);

    $wp_customize->add_setting('brasos_text_color', [
        //'default' => '#FFF'
    ]);




    $wp_customize->add_control('brasos_footer_active',[


        'type' =>'checkbox',
        'section' => 'brasos_footer',
        'label' => 'Activar Footer',
        'description' => 'Ativar ou desativar o Footer'

    ]);

    
    $wp_customize->add_control('brasos_footer_text', [
        'type' => 'text',
        'section' => 'brasos_footer',
        'label' => 'Text',
         
    ]);


    $text_color_control = new WP_Customize_Color_Control(
        $wp_customize,
        'text_color',
        [
            'label' => 'Text Color',
            'section' => 'brasos_footer',
            'settings' => 'brasos_text_color',
           
        ]
        
    );

    $wp_customize->add_control($text_color_control);
} 
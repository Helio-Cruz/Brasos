<?php


function brasos_call_to_action($wp_customize) {

    $wp_customize->add_setting('brasos_call_to_active',[]);


    $wp_customize->add_setting('brasos_call_to_title', []);

    $wp_customize->add_setting('brasos_call_to_content', []);

    $wp_customize->add_setting('brasos_call_to_btn#1', []);

    $wp_customize->add_setting('brasos_call_to_btn#2', []);

    $wp_customize->add_setting('brasos_bg', []);




    $wp_customize->add_control('brasos_call_to_active',[


        'type' =>'checkbox',
        'section' => 'brasos_call_to_action',
        'label' => 'Activer l\'affichage du main',
        'description' => 'Ativar ou desativar a seçao main'

    ]);


    $wp_customize->add_control('brasos_call_to_title', [
        'type' => 'text',
        'section' => 'brasos_call_to_action',
        'transport' => 'postMessage',
        'label' => 'Title',
       
    ]);


    $wp_customize->add_control('brasos_call_to_content', [
        'type' => 'textarea',
        'section' => 'brasos_call_to_action',
        'label' => 'Content'
       
    ]);

    $wp_customize->add_control('brasos_call_to_btn#1', [
        'type' => 'text',
        'section' => 'brasos_call_to_action',
        'label' => 'Text btn #1',
       
    ]);

    $wp_customize->add_control('brasos_call_to_btn#2', [
        'type' => 'text',
        'section' => 'brasos_call_to_action',
        'label' => 'Text btn #2',
       
    ]);


       $bg_image =  new WP_Customize_Image_Control(
        $wp_customize,
        'random_name',
        [
            'label'    => 'Upload a background',
            'section'  => 'brasos_call_to_action',
            'settings' => 'brasos_bg',
        ]
    );

    $wp_customize->add_control($bg_image);

}
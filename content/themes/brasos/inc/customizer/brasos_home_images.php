<?php


function brasos_home_images($wp_customize) {

  //  $wp_customize->add_setting('brasos_call_to_active',[]);


  //  $wp_customize->add_setting('brasos_call_to_title', []);

  //  $wp_customize->add_setting('brasos_call_to_content', []);

  //  $wp_customize->add_setting('brasos_call_to_btn#1', []);

 //   $wp_customize->add_setting('brasos_call_to_btn#2', []);

    $wp_customize->add_setting('brasos_bg_slide_1', []);

    $wp_customize->add_setting('brasos_bg_slide_2', []);

    $wp_customize->add_setting('brasos_bg_slide_3', []);





    // $wp_customize->add_control('brasos_call_to_active',[


    //     'type' =>'checkbox',
    //     'section' => 'eglise_call_to_action',
    //     'label' => 'Activer l\'affichage du main',
    //     'description' => 'Ativar ou desativar a seçao main'

    // ]);


    // $wp_customize->add_control('brasos_call_to_title', [
    //     'type' => 'text',
    //     'section' => 'brasos_call_to_action',
    //     'transport' => 'postMessage',
    //     'label' => 'Title',
       
    // ]);


    // $wp_customize->add_control('brasos_call_to_content', [
    //     'type' => 'textarea',
    //     'section' => 'brasos_call_to_action',
    //     'label' => 'Content'
       
    // ]);

    // $wp_customize->add_control('brasos_call_to_btn#1', [
    //     'type' => 'text',
    //     'section' => 'brasos_call_to_action',
    //     'label' => 'Text btn #1',
       
    // ]);

    // $wp_customize->add_control('brasos_call_to_btn#2', [
    //     'type' => 'text',
    //     'section' => 'brasos_call_to_action',
    //     'label' => 'Text btn #2',
       
    // ]);


    $bg_image =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos',
        [
            'label'    => 'Mude a Imagem 1',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_1',
        ]
        
    );

    $bg_image_2 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-2',
        [
            'label'    => 'Mude a Imagem 2',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_2',
        ]
    );
   

    $bg_image_3 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-3',
        [
            'label'    => 'Mude a Imagem 3',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_3',
        ]
    );


    $wp_customize->add_control($bg_image);
    $wp_customize->add_control($bg_image_2);
    $wp_customize->add_control($bg_image_3);
 

}
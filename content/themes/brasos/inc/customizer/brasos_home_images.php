<?php

function brasos_home_images($wp_customize) {

 

    $wp_customize->add_setting('brasos_bg_slide_1', []);
    $wp_customize->add_setting('brasos_bg_slide_1_url',[]);
        

    $wp_customize->add_setting('brasos_bg_slide_2', []);
    $wp_customize->add_setting('brasos_bg_slide_2_url',[]);

    $wp_customize->add_setting('brasos_bg_slide_3', []);
    $wp_customize->add_setting('brasos_bg_slide_3_url',[]);

    $wp_customize->add_setting('brasos_bg_slide_4', []);
    $wp_customize->add_setting('brasos_bg_slide_4_url',[]);

    $wp_customize->add_setting('brasos_bg_slide_5', []);
    $wp_customize->add_setting('brasos_bg_slide_5_url',[]);

    $wp_customize->add_setting('brasos_bg_slide_6', []);
    $wp_customize->add_setting('brasos_bg_slide_6_url',[]);



    

    $bg_image =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos',
        [
            'label'    => 'Mude a Imagem 1',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_1',
        ]
        
    );

    $wp_customize->add_control( 'brasos_bg_slide_1_url', array(
            'type' => 'url',
            'section' => 'brasos_home_images',
            'label' =>  'Insira o link da Imagem 1',
        ) );
        

    $bg_image_2 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-2',
        [
            'label'    => 'Mude a Imagem 2',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_2',
        ]
    );

    
    $wp_customize->add_control( 'brasos_bg_slide_2_url', array(
        'type' => 'url',
        'section' => 'brasos_home_images',
        'label' =>  'Insira o link da Imagem 2',
    ) );
   
    $bg_image_3 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-3',
        [
            'label'    => 'Mude a Imagem 3',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_3',
        ]
    );

    
    $wp_customize->add_control( 'brasos_bg_slide_3_url', array(
        'type' => 'url',
        'section' => 'brasos_home_images',
        'label' =>  'Insira o link da Imagem 3',
    ) );

    $bg_image_4 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-4',
        [
            'label'    => 'Mude a Imagem 4',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_4',
        ]
    );

    
    $wp_customize->add_control( 'brasos_bg_slide_4_url', array(
        'type' => 'url',
        'section' => 'brasos_home_images',
        'label' =>  'Insira o link da Imagem 4',
    ) );
    
    $bg_image_5 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-5',
        [
            'label'    => 'Mude a Imagem 5',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_5',
        ]
    );

    
    $wp_customize->add_control( 'brasos_bg_slide_5_url', array(
        'type' => 'url',
        'section' => 'brasos_home_images',
        'label' =>  'Insira o link da Imagem 5',
    ) );

    $bg_image_6 =  new WP_Customize_Image_Control(
        $wp_customize,
        'brasos-6',
        [
            'label'    => 'Mude a Imagem 6',
            'section'  => 'brasos_home_images',
            'settings' => 'brasos_bg_slide_6',
        ]
    );

    
    $wp_customize->add_control( 'brasos_bg_slide_6_url', array(
        'type' => 'url',
        'section' => 'brasos_home_images',
        'label' =>  'Insira o link da Imagem 6',
    ) );

  

    $wp_customize->add_control($bg_image);
    $wp_customize->add_control($bg_image_2);
    $wp_customize->add_control($bg_image_3);
    $wp_customize->add_control($bg_image_4);
    $wp_customize->add_control($bg_image_5);
    $wp_customize->add_control($bg_image_6);


 
 

}
<?php

function brasos_main($wp_customize) {


    $wp_customize->add_setting('brasos_main_active',[]);

    $wp_customize->add_setting('brasos_main_nbrarticles',
    [
        'default' => 6
    ]);

    $wp_customize->add_setting('brasos_main_title', []);

    $wp_customize->add_setting('brasos_main_content', []);

    $wp_customize->add_setting('brasos_main_category', []);

    $categories = get_categories([
        'order'   => 'ASC'
        
    ]);

    foreach ($categories as $category) {

    $array_choices[$category->name] = $category->name;

    
    }



    $wp_customize->add_control('brasos_main_active',[


        'type' =>'checkbox',
        'section' => 'brasos_main',
        'label' => 'Ativar  main',
        'description' => 'Ativar ou desativar a secao main'

    ]);

    

    $wp_customize->add_control(

        'brasos_main_nbrarticles',
        [
            'type' => 'number',
            'input_attrs' => [
                'min' => 0,
                'max' => 10,
                'step' => 1
            ],
            'section' => 'brasos_main',
            'label' => 'Numero de artigos',
            'description' => 'Numero de artigos na pagina'
        ]
    );

    $wp_customize->add_control('brasos_main_title', [
        'type' => 'text',
        'section' => 'brasos_main',
        'label' => 'Title',
        'description' => 'Permite modificar o titulos dos Artigos.'
    ]);

    $wp_customize->add_control('brasos_main_content', [
        'type' => 'textarea',
        'section' => 'brasos_main',
        'label' => 'Content'
       
    ]);


    $wp_customize->add_control('brasos_main_category', [
        'type' => 'select',
        'choices' => $array_choices,
        'section' => 'brasos_main',
        'label' => 'Select Category'
        
    ]);


}
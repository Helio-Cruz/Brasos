<?php

function brasos_header($wp_customize){


    $wp_customize->add_setting('brasos_header_active',[]);
    $wp_customize->add_setting('brasos_page_select_1',[]);
    $wp_customize->add_setting('brasos_page_select_2',[]);
    $wp_customize->add_setting('brasos_page_select_3',[]);

    $wp_customize->add_control('brasos_header_active',[


        'type' =>'checkbox',
        'section' => 'brasos_header',
        'label' => 'Ativar Carrosel'
       

    ]);

    $wp_customize->add_control('brasos_page_select_1',[
        

        'type' =>'dropdown-pages',
        'section' => 'brasos_header',
        'label' => 'Slide#1',
        'description' => ' Select a page for the slide#1'
        

    ]);



    $wp_customize->add_control('brasos_page_select_2',[


        'type' =>'dropdown-pages',
        'section' => 'brasos_header',
        'label' => 'Slide#2',
        'description' => ' Select a page for the slide#2'

    ]);

    $wp_customize->add_control('brasos_page_select_3',[


        'type' =>'dropdown-pages',
        'section' => 'brasos_header',
        'label' => 'Slide#3',
        'description' => ' Select a page for the slide#3'

    ]);


}
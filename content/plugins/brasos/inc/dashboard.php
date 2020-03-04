<?php

function brasos_add_dashboard_widgets()
{
    wp_add_dashboard_widget(
        'brasos_dashboard_widget_pub',  
        'Agencia Fazer',  
        'brasos_dashboard_widget_function'  
    );
}

function brasos_dashboard_widget_function()
{
    ?>
    <!-- <h3>Agencia Fazer</h3> -->
    <img src="<?php echo get_template_directory_uri() . '/public/images/agencia-fazer.png' ?>" alt="" style="with:100px;height:100px;position:relative; left: 45px ">
    <p>Telefone:</p>
    <p>Email:</p>
    <p>Site: agenciafazer.com.br</p>
    <?php
}

add_action('wp_dashboard_setup', 'brasos_add_dashboard_widgets');

function remove_dashboard_meta() {
//    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
     remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}

add_action('wp_dashboard_setup', 'remove_dashboard_meta');

remove_action('welcome_panel', 'wp_welcome_panel');
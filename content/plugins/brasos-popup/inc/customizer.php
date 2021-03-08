<?php


class PopupCustom
{


    public function __construct()
    {


        add_action('customize_register', [$this, 'brasos_popup_register'], 20);
        add_action('init', [$this, 'set_plugin_popup_cookie']);

       add_action('wp_footer', [$this, 'showPopup'], 80);
    }

    public function  brasos_popup_register($wp_customize)
    {


        $wp_customize->add_panel('brasos_popup_panel', [
            'title' => 'Brasos Popup',
            'description' => 'Brasos Painel Popup - Gestao',
            'priority' => 2,
        ]);


        $wp_customize->add_section('brasos_popup_customize', [
            'title' => 'Brasos Pop-up',
            'panel' => 'brasos_popup_panel',
        ]);




        $wp_customize->add_setting('brasos_popup_customize', []);

        $popup_image =  new WP_Customize_Image_Control(
            $wp_customize,
            'brasos_popup_customize',
            [
                'label'    => 'Mude a Imagem do Pop-up',
                'section'  => 'brasos_popup_customize',
                'settings' => 'brasos_popup_customize',
            ]
        );

        $wp_customize->add_control($popup_image);
    }

    public function set_plugin_popup_cookie()
    {
        setcookie(
            'the_popup_plugin_cookie',
            '1',
            //  time() + 60,
            (time() +  MINUTE_IN_SECONDS),
            COOKIEPATH,
            COOKIE_DOMAIN,
            is_ssl()
        );
    }

    public function showPopup()
    {
        require __DIR__ . './../templates/popup.php';
    }
 
  
    public function activate()
    {
        flush_rewrite_rules();
    }

    public function deactivation()
    {
        $this->showPopup();
        flush_rewrite_rules();
    }
}

$popupCustom = new PopupCustom();

register_activation_hook(__FILE__, [$popupCustom, 'activate']);
register_deactivation_hook(__FILE__, [$popupCustom, 'deactivation']);

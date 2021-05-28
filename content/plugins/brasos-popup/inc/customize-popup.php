<?php


class PopupCustom
{
    public function __construct()
    {

        add_action('wp_enqueue_scripts', [$this, 'init_js'], 20);
        add_action('wp_enqueue_scripts', [$this, 'uikit'], 20);

        add_action('customize_register', [$this, 'brasos_popup_register'], 20);

        add_action('wp_footer', [$this, 'showPopup'], 3);
        add_action('init', [$this, 'set_plugin_popup_cookie']);
    }

    public function  brasos_popup_register($wp_customize)
    {
        
        $wp_customize->add_panel('brasos_popup_panel', [
            'title' => 'Brasos Popup',
            'description' => 'Brasos Painel Popup - Gestao',
            'priority' => 2,
        ]);

        $wp_customize->add_section('brasos_popup_customize', [
            'title' => 'Brasos Popup',
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



    public function init_js()
    {
        wp_enqueue_script(
            'init_js',
            plugin_dir_url(__DIR__) . 'public/js/index.js',
            [],
            '1.0.0',
            true
        );
    }

    public function uikit()
    {
        wp_enqueue_script(
            'uikit',
            'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.17/js/uikit.min.js',
            [],
            '1.0.0',
            true
        );
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
}

$popupCustom = new PopupCustom();
register_activation_hook(__FILE__, [$popupCustom , 'activate']);
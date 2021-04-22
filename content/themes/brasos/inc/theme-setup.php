<?php

if (!function_exists('brasos_setup')) :

    function brasos_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        add_theme_support('menus');

        register_nav_menus([
            'menu_header' => 'Menu de navigation en haut de la page',
            'menu_footer' => 'Menu de navigation en bas de la page',

        ]);



        // Supprime WP EMOJI
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('wp_print_styles', 'print_emoji_styles');

        // Supprime le lien vers Windows Live Editor Manifest
        remove_action('wp_head', 'wlwmanifest_link');

        // Supprime le lien RSD + XML
        remove_action('wp_head', 'rsd_link');

        // Supprime la meta generator
        remove_action('wp_head', 'wp_generator');

        // Supprime les extra feed rss
        remove_action('wp_head', 'feed_links_extra', 3);

        // Supprime les feeds des Posts et des Commentaires
        remove_action('wp_head', 'feed_links', 2);
    }


    function brasos_excerpt_length($length)
    {
        return 25;
    }
    add_filter('excerpt_length', 'brasos_excerpt_length');

    function brasos_excerpt_more($more)
    {
        return '...';
    }
    add_filter('excerpt_more', 'brasos_excerpt_more');

    /*
    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(array(
            'label' => 'Imagem de fundo para o titulo',
            'id' => 'evento-thumbnail-2',
            'post_type' => 'evento'
            )
        );
    };
    
    
*/
/*
    function my_login_stylesheet()
    { ?>
        <style type="text/css">
            body.login {
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgb(255, 255, 255);
                background: linear-gradient(160deg,
                        rgba(255, 255, 255, 1) 0%,
                        rgba(109, 160, 165, 1) 65%,
                        rgba(0, 110, 120, 1) 100%);
            }

            body.login div#login {
                border-radius: 2px;
                text-align: center;
                background: rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 600px;
                padding: 40px 0;

                @media (min-width: 350px) {
                    width: 80%;
                    padding: 40px 20px;
                }
            }

            body.login #login a {
                width: 300px;
            }

            body.login form#loginform,
            body.login form#lostpasswordform,
            body.login form#registerform {
                background: white;
                max-width: 300px;
                margin: auto;
                text-align: left;
                margin-top: 1em;
            }

            body.login #login_error,
            body.login .message,
            body.login .message register {
                max-width: 320px;
                margin: auto;
            }

            body.login div#login a {
                color: white;
            }

            body.login div#login a:hover {
                color: #006e78;
            }

            body.login div#login input#wp-submit {
                background: #006e78;
            }

            body.login input:focus {
                border-color: #006e78;
            }

            body.login input[type="checkbox"]:checked::before {
                color: #006e78;
            }
        </style>
<?php }
    add_action('login_enqueue_scripts', 'my_login_stylesheet');
*/


endif;

add_action('after_setup_theme', 'brasos_setup');

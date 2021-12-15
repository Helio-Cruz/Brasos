<?php

/**
 * Order Downloads.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-downloads.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!--
    
-->

<section class="woocommerce-order-downloads" style="text-align:center;">
    <?php if (isset($show_title)) : ?>
        <h2 class="woocommerce-order-downloads__title"><?php esc_html_e('Downloads', 'woocommerce'); ?></h2>
    <?php endif; ?>
    <div style="background: url('<?= get_template_directory_uri() . '/public/images/book.jpg' ?>'); border-radius: 5px; padding: 10em; margin: 1em;object-fit: cover;background-position: 20% 98%; ">

        <h2 style="text-transform: uppercase;color: #006e78;font-weight: 900;">
            Clique abaixo para acessar o Evento Brasostba 2021
        </h2>




        <div>
            <?php foreach ($downloads as $download) : ?>

                <?php foreach (wc_get_account_downloads_columns() as $column_id => $column_name) : ?>

                    <?php
                    if (has_action('woocommerce_account_downloads_column_' . $column_id)) {
                        do_action('woocommerce_account_downloads_column_' . $column_id, $download);
                    } else {
                        switch ($column_id) {
                            case 'download-file':
                                echo '<a target="_blank" style="margin: 20px 0; font-size: 16px; padding: 1em 3em; background-color:#6da0a5;font-weight:bold" href="' . esc_url($download['download_url']) . '" class="  button  ">' . esc_html($download['download_name']) . '</a>';
                                break;
                        }
                    }
                    ?>

                <?php endforeach; ?>

            <?php endforeach; ?>
        </div>
    </div>
</section>

 
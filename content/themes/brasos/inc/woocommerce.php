<?php
/**
 * Functions for the templating system.
 * @version  2.5.0
 */

if (!function_exists('woocommerce_output_related_products')) {

  /**
   * Output the related products.
   */
  function woocommerce_output_related_products()
  {

    $args = array(
      'posts_per_page' => 0,
      'columns' => 4,
      'orderby' => 'rand', // @codingStandardsIgnoreLine.
    );

    woocommerce_related_products(apply_filters('woocommerce_output_related_products_args', $args));
  }
}

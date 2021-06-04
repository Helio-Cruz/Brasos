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

function custom_override_checkout_fields($fields)
{
  // Remove billing fields
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_last_name']);
  unset($fields['billing']['billing_first_name']);
  // Remove shipping and order fields
  // unset($fields['order']);
  // unset( $fields['shipping'] );

  // Modify existing billing fields
  // $fields['billing']['billing_first_name']['label'] = 'Full Name';
  // $fields['billing']['billing_first_name']['autocomplete'] = 'name';

  // Add billing fields
  $fields['billing']['billing_full_name'] = [
    'label' => __('Full Name', 'woocommerce'),
    'required' => true,
    'clear' => false,
    'type' => 'text',
    'autocomplete' => 'name',
    'class' => array('form-row-wide')
  ];
  $fields['billing']['billing_crm'] = [
    'label' => 'CRM',
    'required' => true,
    'clear' => false, // add clear or not
    'type' => 'text',
    'class' => array('form-row-wide')
  ];
  $fields['billing']['billing_speciality'] = [
    'label' => __('Speciality', 'woocommerce'),
    'required' => true,
    'clear' => false,
    'type' => 'text',
    'class' => array('form-row-wide')
  ];
  $fields['billing']['billing_cpf'] = [
    'label' => 'CPF',
    'required' => true,
    'clear' => false,
    'type' => 'text',
    'class' => array('form-row-wide')
  ];
  $fields['billing']['billing_area'] = [
    'label' => __('Area of ​​interest', 'woocommerce'),
    'required' => true,
    'clear' => false,
    'type' => 'text',
    'class' => array('form-row-wide')
  ];
  /*
  $fields['billing_crm'] = [
    'label' => __('NIF', 'woocommerce'),
    'placeholder' => _x('Your NIF here....', 'placeholder', 'woocommerce'),
    'required' => false,
    'clear' => false,
    'type' => 'text',
    'class' => array('form-row-first')
  ];
  */

  // Modify billing fields order
  $fields['billing']['billing_full_name']['priority'] = 1;
  $fields['billing']['billing_crm']['priority'] = 2;
  $fields['billing']['billing_speciality']['priority'] = 3;
  $fields['billing']['billing_cpf']['priority'] = 4;
  $fields['billing']['billing_email']['priority'] = 5;
  $fields['billing']['billing_phone']['priority'] = 6;
  $fields['billing']['billing_area']['priority'] = 7;
  $fields['billing']['billing_country']['priority'] = 8;
  $fields['billing']['billing_city']['priority'] = 9;
  $fields['billing']['billing_state']['priority'] = 10;

  return $fields;
}
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
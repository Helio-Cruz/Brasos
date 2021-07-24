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


/**
 * Add the field to the checkout
 */
add_action('woocommerce_after_checkout_billing_form', 'my_custom_checkout_field');

function my_custom_checkout_field($checkout)
{
  echo '<div class="woocommerce-billing-fields__field-wrapper">';
  woocommerce_form_field('especialidade', array(
    'type'          => 'text',
    'label'         => __('Especialidade'),
    'required' => true,
    'class' => array('form-row-wide'),
  ), $checkout->get_value('especialidade'));

  woocommerce_form_field('crm', array(
    'type'          => 'text',
    'label'         => __('CRM'),
    'required' => true,
    'class' => array('form-row-wide'),
  ), $checkout->get_value('crm'));
  echo '</div>';
}

/**
 * Process the checkout
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

/**
 * Update the order meta with field value
 */
add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');

function my_custom_checkout_field_update_order_meta($order_id)
{
  if (!empty($_POST['especialidade'])) {
    update_post_meta($order_id, 'My Field', sanitize_text_field($_POST['especialidade']));
  }
  if (!empty($_POST['crm'])) {
    update_post_meta($order_id, 'My Field 2', sanitize_text_field($_POST['crm']));
  }
}

/**
 * Display field value on the order edit page
 */
add_action('woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1);

function my_custom_checkout_field_display_admin_order_meta($order)
{
  echo '<p><strong>' . __('Especialidade') . ':</strong> ' . get_post_meta($order->id, 'My Field', true) . '</p>';
  echo '<p><strong>' . __('CRM') . ':</strong> ' . get_post_meta($order->id, 'My Field 2', true) . '</p>';
}


// remove billing fields
add_filter('woocommerce_checkout_fields', 'remove_fields',  10, 1);
function remove_fields($fields)
{
  unset($fields['billing']['billing_address_2']);

  $fields['billing']['billing_first_name']['priority'] = 1;
  $fields['billing']['billing_last_name']['priority'] = 2;
  $fields['billing']['billing_cpf']['priority'] = 3;
  $fields['billing']['billing_address_1']['priority'] = 4;
  $fields['billing']['billing_number']['priority'] = 5;
  $fields['billing']['billing_neighborhood']['priority'] = 6;
  $fields['billing']['billing_postcode']['priority'] = 45;
  $fields['billing']['billing_city']['priority'] = 46;
  $fields['billing']['billing_state']['priority'] = 47;
  $fields['billing']['billing_country']['priority'] = 48;
  $fields['billing']['billing_email']['priority'] = 49;
  $fields['billing']['billing_phone']['priority'] = 50;

  return $fields;
}

//REORDER ADDRESS FIELDS
add_filter('woocommerce_default_address_fields', 'reorder_fields', 10, 1);
function reorder_fields($fields)
{
  $fields['address_1']['priority'] = 4;
  $fields['number']['priority'] = 5;
  $fields['neighborhood']['priority'] = 6;
  $fields['postcode']['priority'] = 7;
  $fields['city']['priority'] = 46;
  $fields['state']['priority'] = 47;
  $fields['country']['priority'] = 48;

  return $fields;
}




function custom_breadcrumbs()
{ ?>


  <div id="custom-breadcrumbs">

    <div class="account-access">
      <a href="<?php echo get_permalink(get_page_by_path('/brasostba-2021')) ?>">
        <div uk-icon="icon: reply"></div> Pagina do Evento
      </a>
      <a href="<?= home_url('/my-account'); ?>">
        <div uk-icon="icon: lock"></div> Minha-Conta
      </a>
    </div>

    <span <?php if (is_page('shop')) { ?> class="active" <?php } ?>><a href="<?= home_url('/inscricao'); ?>">Ingressos</a></span> <a uk-icon="icon: chevron-right"></a>
    <span <?php if (is_page('checkout')) { ?> class="active" <?php } ?>><a href="<?= home_url('/checkout'); ?>">Pagamento</a></span>

  </div>
<?php
} ?>

<?php



function send_data_into_members_table()
{
  //Your Code Here
}

add_action('woocommerce_checkout_process', 'send_data_into_members_table');


//One product by checkout 
function _empty_cart($cart_item_data)
{

  WC()->cart->empty_cart();

  return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', '_empty_cart', 10);

// remove cart message
function remove_cart_message()
{
  return;
}

add_filter('wc_add_to_cart_message_html', 'remove_cart_message');

 

 
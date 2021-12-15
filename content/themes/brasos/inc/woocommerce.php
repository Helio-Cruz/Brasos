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
}

/**
 * Display field value on the order edit page
 */
add_action('woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1);

function my_custom_checkout_field_display_admin_order_meta($order)
{
  echo '<p><strong>' . __('Especialidade') . ':</strong> ' . get_post_meta($order->id, 'My Field', true) . '</p>';
}



// remove billing fields
add_filter('woocommerce_checkout_fields', 'remove_fields',  10, 1);
function remove_fields($fields)
{
  unset($fields['billing']['billing_address_2']);


  $fields['billing']['billing_first_name']['priority'] = 1;
  $fields['billing']['billing_last_name']['priority'] = 2;
  $fields['billing']['billing_cpf']['priority'] = 5;
  $fields['billing']['billing_address_1']['priority'] = 8;
  $fields['billing']['billing_number']['priority'] = 9;
  $fields['billing']['billing_neighborhood']['priority'] = 10;
  $fields['billing']['billing_postcode']['priority'] = 45;
  $fields['billing']['billing_city']['priority'] = 46;
  $fields['billing']['billing_state']['priority'] = 47;
  $fields['billing']['billing_country']['priority'] = 48;
  $fields['billing']['billing_email']['priority'] = 3;
  $fields['billing']['billing_phone']['priority'] = 4;

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
        <div uk-icon="icon: reply" style="color:#006e78"></div> Pagina do Evento
      </a>
      <a href="<?= home_url('/my-account'); ?>">
        <div uk-icon="icon: lock" style="color:#006e78"></div> Minha-Conta
      </a>
      <a href="<?php echo wp_logout_url(home_url()); ?>"> <?php
                                                          $current_user = wp_get_current_user();
                                                          printf(__('Olá, %s', 'textdomain'), esc_html($current_user->user_firstname)) . '<br />'; ?>. Sair
      </a>


    </div>
    <b style="color:#006e78"> <span <?php if (is_page('shop')) { ?> class="active" <?php } ?>><a href="<?= home_url('/inscricao'); ?>">Ingressos</a></span> &#9290;</b>
    <span <?php if (is_page('checkout')) { ?> class="active" <?php } ?>><a href="<?= home_url('/checkout'); ?>">Checkout</a></span>

  </div>
<?php
} ?>

<?php





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



function woo_login_redirect()
{
  if (
    !is_user_logged_in()
    && (is_woocommerce() || is_cart() || is_checkout())
  ) {
    wp_redirect(home_url('/my-account'));
    // minha-conta on production website
    exit;
  }
}
add_action('template_redirect', 'woo_login_redirect');


// remove single product page link
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);


// Do not save address on checkout Page
add_filter('woocommerce_checkout_update_customer_data', '__return_false');




function set_checkout_field_input_value_default($fields)
{

  $fields['billing']['billing_address_1']['default'] = 'Rua das Almas';
  $fields['billing']['billing_number']['default'] = '111';
  $fields['billing']['billing_neighborhood']['default'] = 'Bras';
  $fields['billing']['billing_postcode']['default'] = '00101-080';
  $fields['billing']['billing_city']['default'] = 'São Paulo';

  return $fields;
}
add_filter('woocommerce_checkout_fields', 'set_checkout_field_input_value_default');


function change_default_checkout_state()
{
  return 'SP'; // state code
}

add_filter('default_checkout_billing_state', 'change_default_checkout_state');





// Save registration checkbox field value
//Not become member regiter form woocommerce
add_action('woocommerce_created_customer', 'save_account_registration_field');
function save_account_registration_field($customer_id)
{
  $value = isset($_POST['xoo_el_reg_terms']) ? '1' : '0';
  update_user_meta($customer_id, 'xoo_el_reg_terms', $value);
  if (isset($_POST['xoo_el_reg_terms'])) {
    $user = new WP_User($customer_id);
    $user->remove_role('subscriber');
    $user->add_role('customer');
  }
}


function example_custom_order_fields($fields, $order)
{
  $new_fields = array();

  $coupon_codes = $order->get_coupon_codes();

  $coupons_string = '';

  foreach ($coupon_codes as $coupon) {
    $coupons_string .= $coupon . ' ';
  }

  $new_fields[0] = array(
    'label' => 'Cupom utilizado',
    'value' => $coupons_string
  );

  return array_merge($fields, $new_fields);
}
add_filter('wcdn_order_info_fields', 'example_custom_order_fields', 10, 2);



function print_coupon_order($order)
{
  do_action('rnoc_show_order_coupon', $order, true, '', '');
}
add_action('wcdn_after_branding ', 'print_coupon_order');


// To change add to cart text on product archives(Collection) page
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text');
function woocommerce_custom_product_add_to_cart_text()
{
  return __('Comprar / Usar Cupom', 'woocommerce');
}



function wpb_woo_my_account_order()
{
  $myorder = array(


    // 'dashboard'          => __('Painel', 'woocommerce'),
    'orders'             => __('Pedido', 'woocommerce'),
    'downloads' => __('Acessar Brasostba 2021', 'woocommerce'),
    //  'edit-account'       => __('Detalhes da conta', 'woocommerce'),
    'customer-logout'    => __('Sair', 'woocommerce'),
  );

  return $myorder;
}
add_filter('woocommerce_account_menu_items', 'wpb_woo_my_account_order');


/**
 * WooCommerce My Account Page Logout Redirect
 */
add_action('wp_logout', 'owp_redirect_after_logout');
function owp_redirect_after_logout()
{
  wp_redirect(home_url());
  exit();
}


// Rename My account > Orders "view" action button text
add_filter('woocommerce_my_account_my_orders_actions', 'change_my_account_my_orders_view_text_button', 10, 2);
function change_my_account_my_orders_view_text_button($actions, $order)
{
  $actions['view']['name'] = __('Certificado', 'woocommerce');

  return $actions;
}

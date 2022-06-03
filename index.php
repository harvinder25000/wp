<?php
/**
 * @package Akismet
 */
/*

Plugin Name: Sid Techno Custom plugin
Plugin URI: https://sidtechno.com/
Description: Totally cusotm plugin for custom site.
Version: 1
*/

// Allow 1 item per cart
add_filter( 'woocommerce_add_to_cart_validation', 'remove_cart_item_before_add_to_cart', 20, 3 );
function remove_cart_item_before_add_to_cart( $passed, $product_id, $quantity ) {
    if( ! WC()->cart->is_empty() )
        WC()->cart->empty_cart();
    return $passed;
}
function wc_remove_all_quantity_fields( $return, $product ) {
    return true;
}

// Remove quantity field
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );

add_filter( 'woocommerce_cart_item_quantity', 'wc_cart_item_quantity', 10, 3 );
function wc_cart_item_quantity( $product_quantity, $cart_item_key, $cart_item ){
    if( is_cart() ){
        $product_quantity = '';
    }
    return $product_quantity;
}




add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
     $fields['billing']['billing_trainer'] = array(
	    'label'     => __('Trainer', 'woocommerce'),
	    'placeholder'   => _x('Trainer', 'placeholder', 'woocommerce'),
	    'required'  => true,
	    'class'     => array('form-row-wide'),
	    'clear'     => true,
	    'type' => 'select'
     );
	$fields['billing']['billing_trainer']['options'] = array(
	  'option_1' => 'Option 1 text',
	  'option_2' => 'Option 2 text'
	);
     return $fields;
}

/**
 * Display field value on the order edit page
 */
 
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Trainer From Checkout Form').':</strong> ' . get_post_meta( $order->get_id(), '_billing_trainer', true ) . '</p>';
}





//ADD TRAINER CODE STARTS



function my_admin_scripts() {
 //CSS
wp_enqueue_style( 'my-style1', plugins_url( '/css/admin_custom.css', __FILE__ ), false, '1.0', 'all' ); 
wp_enqueue_style( 'my-style2', plugins_url( '/css/switchery.min.css', __FILE__ ), false, '1.0', 'all' ); 
wp_enqueue_style( 'my-style3', plugins_url( '/css/switch.min.css', __FILE__ ), false, '1.0', 'all' ); 
wp_enqueue_style( 'my-style4', plugins_url( '/css/style-dash.css', __FILE__ ), false, '1.0', 'all' ); 
wp_enqueue_style( 'my-style5', plugins_url( '/css/palette-gradient.min.css', __FILE__ ), false, '1.0', 'all' ); 
wp_enqueue_style( 'my-style6', plugins_url( '/css/admin_custom.css', __FILE__ ), false, '1.0', 'all' ); 
wp_enqueue_style( 'my-style7', plugins_url( '/css/bootstrap-extended.min.css', __FILE__ ), false, '1.0', 'all' ); 


//JS
wp_enqueue_script( 'sc1', plugins_url( '/js/switchery.min.js', __FILE__ ), false, '1.0', 'all',true ); 
wp_enqueue_script( 'sc2', plugins_url( '/js/switch.min.js', __FILE__ ), false, '1.0', 'all' ,true); 
wp_enqueue_script( 'sc3', plugins_url( '/js/custom.js', __FILE__ ), false, '1.0', 'all' ,true); 
wp_enqueue_script( 'sc4', plugins_url( '/js/bootstrap-multiselect.js', __FILE__ ), false, '1.0' ,true); 
 wp_localize_script( 'aj-demo', 'aj_ajax_demo', array(
                      'ajax_url' => admin_url( 'admin-ajax.php' ),
                      'aj_demo_nonce' => wp_create_nonce('aj-demo-nonce') 
  ));
					  
}
add_action( 'admin_enqueue_scripts', 'my_admin_scripts' );


//ADMIN PAGES
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() 
{ 
	$menu_slug = 'add-trainer-slug';
	add_menu_page( 'Manage Trainers', 'Manage Trainers', 'read', $menu_slug, false );
	add_submenu_page( $menu_slug, 'Manage Trainers', 'Manage Trainers', 'read', $menu_slug, 'wpdocs_orders_function' );
}

function  wpdocs_orders_function()
{ 
	include( plugin_dir_path( __FILE__ ) . 'add-trainer-form.php');
	return;
}
 

 
 
 
 
 add_action( 'wp_ajax_nopriv_aj_ajax_demo_get_count', 'aj_ajax_demo_process' );
add_action( 'wp_ajax_aj_ajax_demo_get_count', 'aj_ajax_demo_process' );  // For logged in users.
function aj_ajax_demo_process() {    
    
    $post_type = sanitize_text_field($_POST['post_type']);
    if (post_type_exists($post_type)) {
        $count_posts = wp_count_posts($post_type);
        wp_send_json($count_posts->publish);
    }
    
    wp_send_json_error();
    wp_die();
} 


?>
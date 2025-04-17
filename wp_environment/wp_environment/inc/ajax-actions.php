<?php 

// include files 
require_once(__DIR__ . '/remove-item-from-sidecart.php'); 
require_once(__DIR__ . '/apply-coupon.php'); 
require_once(__DIR__ . '/update-cart-with-quantity.php'); 


function custom_ajax_add_to_cart() { 


    if (!isset($_POST['product_id']) || !isset($_POST['quantity'])) {
        wp_send_json_error(['message' => 'Invalid request']);
    }

    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $color_id = isset($_POST['color_id']) ? intval($_POST['color_id']) : '';
    $bracelet_id = isset($_POST['bracelet_id']) ? intval($_POST['bracelet_id']) : '';

    $product = wc_get_product($product_id);
    $currency_symbol = get_woocommerce_currency_symbol();
    if ($product && $product->is_type('variable')) {   

        $available_variations = $product->get_available_variations(); 

        WC()->cart->add_to_cart($product_id, $quantity, $variation_id, [
            'attribute_pa_color' => $color_id,  // Ensure these attributes match your actual product attribute slugs
            'attribute_pa_bracelates' => $bracelet_id
        ]);

    } else {   
        WC()->cart->add_to_cart($product_id, $quantity);
    }

   // Get updated cart HTML
   ob_start(); 
   require_once(__DIR__ . '/ajax-template/side-cart-top-list.php'); 
   $cart_html = ob_get_clean(); 

  // Get updated cart subtotal HTML
   ob_start(); 
   require_once(__DIR__ . '/ajax-template/side-cart-bottom-total.php');
   $updated_total_html = ob_get_clean(); 

      wp_send_json_success([
            'cart_html' => $cart_html ,
            'updated_price_total' => $updated_total_html ,
      ]);

}

add_action('wp_ajax_custom_add_to_cart', 'custom_ajax_add_to_cart');
add_action('wp_ajax_nopriv_custom_add_to_cart', 'custom_ajax_add_to_cart');



// search products by ajax 
add_action('wp_ajax_search_products', 'search_products');
add_action('wp_ajax_nopriv_search_products', 'search_products');

function search_products() {
    if (!isset($_POST['search'])) {
        wp_die();
    }

    $search_query = sanitize_text_field($_POST['search']); 
    $args = [
        'post_type'      => 'product',
        'posts_per_page' => 5,
        's'              => $search_query,
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<ul class="search-results-list">';
        while ($query->have_posts()) {
            $query->the_post();
            global $product;

            $product_id    = get_the_ID();
            $product_title = get_the_title();
            $product_link  = get_permalink();
            $product_image = get_the_post_thumbnail_url($product_id, 'thumbnail'); // Get product thumbnail

            $regular_price = wc_price($product->get_regular_price()); // Regular price
            $sale_price    = $product->is_on_sale() ? wc_price($product->get_sale_price()) : ''; // Sale price

            echo '<li class="search-result-item">
                    <a href="' . esc_url($product_link) . '">
                        <div class="product-search-wrapper">
                            <div class="product-search-image">
                                <img src="' . esc_url($product_image) . '" alt="' . esc_attr($product_title) . '">
                            </div>
                            <div class="product-search-info">
                                <h4 class="product-search-title">' . esc_html($product_title) . '</h4>
                                <p class="product-search-price">' . ($sale_price ? '<span class="sale-price">' . $sale_price . '</span> <span class="regular-price"><del>' . $regular_price . '</del></span>' : '<span class="regular-price">' . $regular_price . '</span>') . '</p>
                            </div>
                        </div>
                    </a>
                  </li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No products found.</p>';
    }

    wp_die();
}







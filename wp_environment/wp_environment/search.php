<?php get_header(); ?>

<section class="shop-main container">
<h2 class="page-title fs-35">SEARCH RESULTS FOR "<?php echo get_search_query(); ?>" (<?php echo $wp_query->found_posts; ?>)</h2>
<div class="mb-4 pb-3"></div>

<div class="products-grid row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid">

<?php 
while ( have_posts() ) {
    the_post();

    $product_id = get_the_id();
    $product = wc_get_product( $product_id );
    $main_image = home_url('/wp-content/plugins/core-field/assets/img/woocommerce-placeholder.png');
    $gallery_image_id = $product->get_gallery_image_ids();
    if(!empty(get_the_post_thumbnail_url())){
        $main_image = get_the_post_thumbnail_url();
    } else if (!empty($gallery_image_id)){
        $main_image = wp_get_attachment_url($gallery_image_id[0]);
    }

    $gallery_image_url = $main_image;
    if(!empty($gallery_image_id)) {
        $gallery_image_url = wp_get_attachment_url($gallery_image_id[0]);
    }
?>
<div class="product-card-wrapper">
    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
        <div class="pc__img-wrapper">
            <a href="<?= get_the_permalink();?>">
                <img loading="lazy" src="<?= $main_image;?>" alt="product_img" class="pc__img" style="height:100%;">
                <img loading="lazy" src="<?= $gallery_image_url;?>" alt="product_img" class="pc__img pc__img-second" style="height:100%;">
            </a>
            
            <form action="" method="post" class="add_cart_handler">
                <input type="hidden" name="product_id" value="<?= $product_id;?>">
                <input type="number" name="quantity" value="1">
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium" title="Add To Cart">
                    <span class="cart_text">Add To Cart</span>
                    <span class="spinner"></span>
                </button>
            </form>
        </div>

        <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="<?= get_the_permalink();?>"><?= get_the_title();?></a></h6>
            <div class="product-card__price d-flex">
                <span class="money price price-sale"><?= wc_price($product->get_price());?></span>
            </div>

            <div class="wishlist_wrapper">
                <?php 
                $user_id = '';
                $wishlist_id = '';
                $has_wishlisted = false;
                if(is_user_logged_in()) {
                    $user_id = get_current_user_id();
                    $wishlist_args = array(
                        'post_type' => 'wishlists',
                        'posts_per_page' => -1,
                        'author' => $user_id,
                    );
                    $wishlist_query = new WP_Query($wishlist_args);
                    if ($wishlist_query->have_posts()) {
                        while ($wishlist_query->have_posts()) {
                            $wishlist_query->the_post();
                            // $wishlisted_product_id = get_field('product_id');  
                            $wishlisted_product_id =  get_the_ID();
                            if($wishlisted_product_id == $product_id) {
                                $has_wishlisted = true;
                                $wishlist_id = get_the_id();
                            }
                        }
                    }
                    wp_reset_postdata();
                    $icon1 = home_url('/wp-content/plugins/core-field/assets/img/heart-1.png');
                    $icon2 = home_url('/wp-content/plugins/core-field/assets/img/heart-2.png');
                }
                ?>
                <form action="" class="add_wishlist <?= $has_wishlisted ? 'd-none' : '' ?>">
                    <input type="hidden" name="w_product_id" value="<?= $product_id;?>">
                    <input type="hidden" name="user_id" value="<?= $user_id;?>">
                    <button type="submit" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0">
                        <img src="<?= $icon1;?>" alt="">
                    </button>
                    <span class="spinner spinner2"></span>
                </form>
                <form action="" class="remove_wishlist <?= $has_wishlisted ? '' : 'd-none' ?>">
                    <input type="hidden" name="wishlist_id" value="<?= $wishlist_id;?>">
                    <button type="submit" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 active">
                        <img src="<?= $icon2;?>" alt="">
                    </button>
                    <span class="spinner spinner2"></span>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

</div><!-- /.products-grid row -->

<div class="pagination_ecom">
            <?php
            // Display pagination if there are more results
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '« Previous', 'textdomain' ),
                'next_text' => __( 'Next »', 'textdomain' ),
            ) );
            ?>
</div>

</section>




<?php get_footer(); ?>

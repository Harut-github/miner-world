<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<section>
<div class="container">
<div class="woocommerce-products">
	<div class="woocommerce-products__header">
		<div class="filter__location">
			<strong>Место покупки</strong>
			<?php 
              $args = array(
                'show_option_all'    => '',
                'show_option_none'   => __('No categories'),
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'list',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'use_desc_for_title' => 1,
                'child_of'           => 0,
                'feed'               => '',
                'feed_type'          => '',
                'feed_image'         => '',
                'exclude'            => '',
                'exclude_tree'       => '',
                'include'            => '',
                'hierarchical'       => true,
                'title_li'           => __( '' ),
                'number'             => NULL,
                'echo'               => 1,
                'depth'              => 0,
                'current_category'   => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'location',
                'walker'             => 'Walker_Category',
                'hide_title_if_empty' => false,
                'separator'          => '<br />',
              );

              echo '<ul>';
                wp_list_categories( $args );
              echo '</ul>';
              ?>
		</div>
		<div class="filter__category">
			<strong>Каталог</strong>
			<?php 
              $args = array(
                'show_option_all'    => '',
                'show_option_none'   => __('No categories'),
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'list',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'use_desc_for_title' => 1,
                'child_of'           => 0,
                'feed'               => '',
                'feed_type'          => '',
                'feed_image'         => '',
                'exclude'            => '',
                'exclude_tree'       => '',
                'include'            => '',
                'hierarchical'       => true,
                'title_li'           => __( '' ),
                'number'             => NULL,
                'echo'               => 1,
                'depth'              => 0,
                'current_category'   => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'product_cat',
                'walker'             => 'Walker_Category',
                'hide_title_if_empty' => false,
                'separator'          => '<br />',
              );

              echo '<ul>';
                wp_list_categories( $args );
              echo '</ul>';
              ?>
		</div>
	</div>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<!-- <header class="woocommerce-products-header"> -->
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
<!-- </header> -->
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );
	?>

	<?php
	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();
			/**
			 * Hook: woocommerce_shop_loop.
			 */
			//do_action( 'woocommerce_shop_loop' );

			//wc_get_template_part( 'content', 'product' );
			?>
			<?php global $product; ?>
			<li class="product-item">
				<div class="product-item__box">
					<div class="product-item__top">
						<?php if( $product->is_on_sale()) : ?>
 							<div class="product-item__tagrecommended product-item__sale">
 								Скидка!
 							</div>
						<?php elseif($product->is_featured()) : ?>
							<div class="product-item__tagrecommended product-item__recomended">	Рекомендуем
							</div>
						<?php elseif($product->get_review_count() > 4) : ?>	
							<div class="product-item__tagrecommended product-item__sale">
								Выбор покупателей
							</div>
						<?php else: ?>
							<div class="product-item__tagrecommended"></div>
						<?php endif;?>
						<div class="product-item__comparisons">
							<svg fill="black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.16659 5.00004H4.99992V1.50004C4.99992 1.19062 4.877 0.893875 4.65821 0.675083C4.43942 0.45629 4.14267 0.333374 3.83325 0.333374C3.52383 0.333374 3.22709 0.45629 3.00829 0.675083C2.7895 0.893875 2.66659 1.19062 2.66659 1.50004V5.00004H1.49992C1.1905 5.00004 0.893753 5.12296 0.674961 5.34175C0.456168 5.56054 0.333252 5.85729 0.333252 6.16671C0.333252 6.47613 0.456168 6.77287 0.674961 6.99167C0.893753 7.21046 1.1905 7.33337 1.49992 7.33337H6.16659C6.47601 7.33337 6.77275 7.21046 6.99154 6.99167C7.21034 6.77287 7.33325 6.47613 7.33325 6.16671C7.33325 5.85729 7.21034 5.56054 6.99154 5.34175C6.77275 5.12296 6.47601 5.00004 6.16659 5.00004ZM3.83325 9.66671C3.52383 9.66671 3.22709 9.78962 3.00829 10.0084C2.7895 10.2272 2.66659 10.524 2.66659 10.8334V22.5C2.66659 22.8095 2.7895 23.1062 3.00829 23.325C3.22709 23.5438 3.52383 23.6667 3.83325 23.6667C4.14267 23.6667 4.43942 23.5438 4.65821 23.325C4.877 23.1062 4.99992 22.8095 4.99992 22.5V10.8334C4.99992 10.524 4.877 10.2272 4.65821 10.0084C4.43942 9.78962 4.14267 9.66671 3.83325 9.66671ZM11.9999 19C11.6905 19 11.3938 19.123 11.175 19.3417C10.9562 19.5605 10.8333 19.8573 10.8333 20.1667V22.5C10.8333 22.8095 10.9562 23.1062 11.175 23.325C11.3938 23.5438 11.6905 23.6667 11.9999 23.6667C12.3093 23.6667 12.6061 23.5438 12.8249 23.325C13.0437 23.1062 13.1666 22.8095 13.1666 22.5V20.1667C13.1666 19.8573 13.0437 19.5605 12.8249 19.3417C12.6061 19.123 12.3093 19 11.9999 19ZM22.4999 9.66671H21.3333V1.50004C21.3333 1.19062 21.2103 0.893875 20.9915 0.675083C20.7728 0.45629 20.476 0.333374 20.1666 0.333374C19.8572 0.333374 19.5604 0.45629 19.3416 0.675083C19.1228 0.893875 18.9999 1.19062 18.9999 1.50004V9.66671H17.8333C17.5238 9.66671 17.2271 9.78962 17.0083 10.0084C16.7895 10.2272 16.6666 10.524 16.6666 10.8334C16.6666 11.1428 16.7895 11.4395 17.0083 11.6583C17.2271 11.8771 17.5238 12 17.8333 12H22.4999C22.8093 12 23.1061 11.8771 23.3249 11.6583C23.5437 11.4395 23.6666 11.1428 23.6666 10.8334C23.6666 10.524 23.5437 10.2272 23.3249 10.0084C23.1061 9.78962 22.8093 9.66671 22.4999 9.66671ZM20.1666 14.3334C19.8572 14.3334 19.5604 14.4563 19.3416 14.6751C19.1228 14.8939 18.9999 15.1906 18.9999 15.5V22.5C18.9999 22.8095 19.1228 23.1062 19.3416 23.325C19.5604 23.5438 19.8572 23.6667 20.1666 23.6667C20.476 23.6667 20.7728 23.5438 20.9915 23.325C21.2103 23.1062 21.3333 22.8095 21.3333 22.5V15.5C21.3333 15.1906 21.2103 14.8939 20.9915 14.6751C20.7728 14.4563 20.476 14.3334 20.1666 14.3334ZM14.3333 14.3334H13.1666V1.50004C13.1666 1.19062 13.0437 0.893875 12.8249 0.675083C12.6061 0.45629 12.3093 0.333374 11.9999 0.333374C11.6905 0.333374 11.3938 0.45629 11.175 0.675083C10.9562 0.893875 10.8333 1.19062 10.8333 1.50004V14.3334H9.66659C9.35717 14.3334 9.06042 14.4563 8.84163 14.6751C8.62284 14.8939 8.49992 15.1906 8.49992 15.5C8.49992 15.8095 8.62284 16.1062 8.84163 16.325C9.06042 16.5438 9.35717 16.6667 9.66659 16.6667H14.3333C14.6427 16.6667 14.9394 16.5438 15.1582 16.325C15.377 16.1062 15.4999 15.8095 15.4999 15.5C15.4999 15.1906 15.377 14.8939 15.1582 14.6751C14.9394 14.4563 14.6427 14.3334 14.3333 14.3334Z" />
							</svg>
						</div>	
					</div>
					<div class="product-item__img">
						<a href="<?php the_permalink();?>">
							<?php echo $product->get_image();?>
						</a>
					</div>
					<div class="product-item__description">
						<a href="<?php the_permalink();?>">
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
							<strong>Покупатели оценивают на: <?php echo $product->get_review_count();?> из 5</strong>
						</a>
					</div>
					<div class="product-item__price">
						<a href="<?php the_permalink();?>">
							<?php echo $product->get_price_html();?>
						</a>
					</div>
					<div class="product-item__btn">
						<button 
						   class="btn button alt ajax_add_to_cart add_to_cart_button"
						   type="submit"
					       data-quantity="1" 
					       data-product_id="<?php echo $product->id; ?>">
							Добавить в корзину
							<img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/cart.svg" alt="">
						</button>
					</div>
				</div>
			</li>
			<?php
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	//do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	//do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
//do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );
?>
</div>
</section>
<?php
get_footer( 'shop' );

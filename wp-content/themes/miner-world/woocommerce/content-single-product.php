<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="container">
	<div class="single__title">
		<div class="single__titleitem">
			<?php woocommerce_template_single_title(); ?>
			<div class="single__rate">
				<span>Покупатели оценивают на 4,6 из 5</span>
				<div class="single__links">
					<a href="">Описание</a>
					<a href="">Все характеристики</a>
					<a href="">Отзывы (0)</a>
				</div>
			</div>
		</div>
		<div class="single__comparisons">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/comparisons.svg" alt="">
		</div>
	</div>
</div>

<div class="container">
	<div class="single__info">
		<div class="single__gallery">
			<?php woocommerce_show_product_images(); ?>
		</div>
		<div class="single__excerpt">
			<?php woocommerce_template_single_excerpt();?>
			<strong>Прибыльность майнера: 1,295.57 ₽/сутки</strong>
		</div>
		<div class="single__rezerv">
			<div class="single__tags">
				<?php if( $product->is_on_sale()) : ?>
				<div class="single__tagrecommended product-item__sale">
					Скидка!
				</div>
				<?php elseif($product->is_featured()) : ?>
				<div class="single__tagrecommended product-item__recomended">
					Рекомендуем
				</div>
				<?php elseif($product->get_review_count() > 4) : ?>	
				<div class="single__tagrecommended product-item__sale">
					Выбор покупателей
				</div>
				<?php else: ?>
				<?php endif;?>
				<div class="single__tagavailable">
					В наличии в Москве
				</div>
			</div>
			<div class="single__price">
				<?php woocommerce_template_single_price();?>
			</div>
			<div class="single__paylink">
				<a href="<?php echo home_url('pay-and-delivery'); ?>">Любая удобная форма оплаты.</a>
				<a href="<?php echo home_url('pay-and-delivery'); ?>">Доставка по по всей России..</a>
			</div>
			<div class="single__btn">
				<button type="submit" data-quantity="1" data-product_id="<?php echo $product->id; ?>" class="button btn alt ajax_add_to_cart add_to_cart_button product_type_simple">
	      		Добавить в корзину
	      		<img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/cart.svg" alt="">
	      		</button>
			</div>
			<div class="single__call">
				или купить в один клик 
				<img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/call.svg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="single__related products__loop">
		<h2>С этим товаром покупают</h2>
		<div class="product">
			<?php 
			$tag_ids = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
			$query = new WP_Query( $args );
			$args = array( 
			'post_type' => 'product',
			'posts_per_page' => 4,
			'tag__in' => $tag_ids,
			); 
			$query = new WP_Query( $args ); 
			if ( $query->have_posts() ) { 
			while ( $query->have_posts() ) { 
			$query->the_post(); ?>  
			<?php get_template_part( 'template-parts/praduct-item'); ?>
			<?php } wp_reset_postdata(); } ?>
		</div>
	</div>
</div>

<div id="single-content">
	<div class="container">
		<div class="single__content">
			<?php the_content();?>
		</div>	
	</div>	
</div>

<div class="container">
	<div class="single__similar products__loop">
		<h2>Похожие товары</h2>
		<div class="product">
			  <?php 
			  $related_tax = 'product_cat';
              $cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) ); ?>
              <?php 
              $query = new WP_Query( $args );
              $args = array( 
              'post_type' => 'product',
              'posts_per_page' => 4,
              'tax_query' => array(
                    array(
                        'taxonomy' => $related_tax,
                        'field' => 'id',
                        'include_children' => false, 
                        'terms' => $cats_tags_or_taxes,
                        'operator' => 'IN' 
                    )
                )
              ); 
              $query = new WP_Query( $args ); 
              if ( $query->have_posts() ) { 
              while ( $query->have_posts() ) { 
              $query->the_post(); ?> 
              <?php get_template_part( 'template-parts/praduct-item'); ?>
              <?php 
              } 
              wp_reset_postdata(); 
              } ?>
		</div>
	</div>
</div>

<div id="single-reviews">
	<div class="container">
		<div class="single__reviews">
			<h2>Отзывы</h2>
			<div class="single__reviewsbox">
				<div class="single__reviewsitem">
					<div class="single__reviewsimg">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/img/man.png" alt="">
					</div>
					<div class="single__reviewstext">
						<h2>Иван Иванов</h2>
						<span>Оценка товара покупателем: 4,6 из 5</span>
						<p>Элементы политического процесса, превозмогая сложившуюся непростую экономическую ситуацию, смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. С учётом сложившейся международной обстановки, консультация с широким активом напрямую зависит от поэтапного и последовательного развития общества.</p>
					</div>
				</div>
				<div class="single__reviewsitem">
					<div class="single__reviewsimg">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/img/man.png" alt="">
					</div>
					<div class="single__reviewstext">
						<h2>Иван Иванов</h2>
						<span>Оценка товара покупателем: 4,6 из 5</span>
						<p>Элементы политического процесса, превозмогая сложившуюся непростую экономическую ситуацию, смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. С учётом сложившейся международной обстановки, консультация с широким активом напрямую зависит от поэтапного и последовательного развития общества.</p>
					</div>
				</div>
			</div>
			<div class="single__reviewbtn">
				<button class="btn">Оставить отзыв</button>
			</div>
		</div>
	</div>
</div>




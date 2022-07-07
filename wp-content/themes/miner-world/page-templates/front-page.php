<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section>
	<div class="home__banner">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	</div>
</section>
<section>
	<div class="container">
		<div class="home__top">
			<h2>Популярные товары </h2>
		</div>
		<div class="product">
			<?php get_template_part( 'template-parts/praduct-item'); ?>
		</div>
	</div>
</section>
<section class="home__company-bg">
	<div class="container">
		<div class="cooperate__list">
			<h2><?php the_field('home_list_title'); ?></h2>
			<ul>
				<?php if(get_field('home_list_repeater')): ?>
				  <?php while(the_repeater_field('home_list_repeater')): ?>
				    <li>
						<img src="<?php the_sub_field('home_list_repeater_img'); ?>" alt="">
						<p><?php the_sub_field('home_list_repeater_text'); ?></p>
					</li>
				  <?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<div class="cooperate__list-text">
				<?php the_field('home_list_text'); ?>
			</div>
		</div>
	</div>
</section>
<section class="home__compan-about">
	<div class="container">
		<div class="company__about-title">
			<h2><?php the_field('home_company_title'); ?></h2>
		</div>
	</div>
	<div class="company__about-img">
		<img src="<?php the_field('home_company_img'); ?>" alt="">
		<div class="company__about-mini">
			<?php the_field('home_company_mini'); ?>
		</div>
	</div>
	<div class="container">
		<div class="company__about-text">
			<p><?php the_field('home_company_text'); ?></p>
		</div>
	</div>
</section> 
<?php get_footer(); ?>
<?php /* Template Name: Company */ ?>
<?php get_header(); ?>
<section class="cooperate_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<div class="cooperate_title">
			<h1><?php the_field('company_title'); ?></h1>
		</div>
	</div>
</section>
<section class="company_bg">
	<div class="container">
		<div class="cooperate__list">
			<h2><?php the_field('company_list_title'); ?></h2>
			<ul>
				<?php if(get_field('company_list_repeater')): ?>
				  <?php while(the_repeater_field('company_list_repeater')): ?>
				    <li>
						<img src="<?php the_sub_field('company_list_repeater_img'); ?>" alt="">
						<p><?php the_sub_field('company_list_repeater_text'); ?></p>
					</li>
				  <?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<div class="cooperate__list-text">
				<?php the_field('company_list_text'); ?>
			</div>
		</div>
	</div>
</section>
<section class="company__about">
	<div class="container">
		<div class="company__about-title">
			<h2><?php the_field('company_about_title'); ?></h2>
		</div>
	</div>
	<div class="company__about-img">
		<img src="<?php the_field('company_about_img'); ?>" alt="">
		<div class="company__about-mini">
			<?php the_field('company_about_mini_text'); ?>
		</div>
	</div>
	<div class="container">
		<div class="company__about-text">
			<p><?php the_field('company_about_text'); ?></p>
		</div>
	</div>
</section>
<section class="company__prezentation">
	<div class="container">
		<div class="company__prezentation-title">
			<h2><?php the_field('company_prezentation_title'); ?></h2>
		</div>
	</div>
	<div class="company__prezentation-img">
		<img src="<?php the_field('company_prezentation_img'); ?>" alt="">
	</div>
	<div class="container">
		<div class="company__prezentation-text">
			<p><?php the_field('company_prezentation_text'); ?></p>
		</div>
	</div>
</section>
<section>
	<div class="company__gallery">
		<?php 
		$images = get_field('company_gallery');
		if( $images ): ?>
	        <?php foreach( $images as $image ): ?>
                <a class="company__gallery-img" href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
	        <?php endforeach; ?>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="company__gallery-text">
			<p><?php the_field('company_gallery_text'); ?></p>
		</div>
	</div>
</section>
<section class="company__sevices">
	<div class="container">
		<div class="company__sevices-title">
			<h2><?php the_field('company_sevices_title'); ?></h2>
		</div>
	</div>
	<div class="company__sevices-img">
		<img src="<?php the_field('company_sevices_img'); ?>" alt="">
	</div>
	<div class="container">
		<div class="company__sevices-text">
			<p><?php the_field('company_sevices_text'); ?></p>
		</div>
	</div>
</section>
<section class="company__reviews">
	<div class="container">
		<div class="company__reviews-title">
			<h2><?php the_field('company_reviews_title'); ?></h2>
		</div>
		<div class="company__reviews-box">
			<?php if(get_field('company_reviews_repeater')): ?>
			  <?php while(the_repeater_field('company_reviews_repeater')): ?>
			     <div class="company__reviews-item">
			     	<div class="company__reviews-info">
			     		<div class="company__reviews-img">
			     			<img src="<?php the_sub_field('company_reviews_img'); ?>" alt="">
			     		</div>
			     		<div class="company__reviews-name">
			     			<strong><?php the_sub_field('company_reviews_name'); ?></strong>
			  				<span><?php the_sub_field('company_reviews_date'); ?></span>
			     		</div>
			     	</div>
			     	<div class="company__reviews-text">
			     		<p><?php the_sub_field('company_reviews_text'); ?></p>
			     	</div>
			     </div>	
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
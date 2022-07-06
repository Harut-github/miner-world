<?php /* Template Name: Pay and Delivery */ ?>
<?php get_header(); ?>
<div class="container">
	<div class="delivery__title">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="delivery__box">
		<div class="delivery__text">
			<?php the_content(); ?>
		</div>
		<div class="delivery__img">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/form-blue'); ?>

<?php get_footer(); ?>
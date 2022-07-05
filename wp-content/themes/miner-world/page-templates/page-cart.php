<?php /* Template Name: Cart */ ?>
<?php get_header(); ?>
<div class="container">
	<div class="cart__title">
		<h2><?php the_title(); ?></h2>
	</div>
	<?php the_content(); ?>
</div>
<?php get_template_part( 'template-parts/form-blue'); ?>
<?php get_footer(); ?>
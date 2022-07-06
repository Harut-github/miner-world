<?php /* Template Name: Cooperate */ ?>
<?php get_header(); ?>
<section class="cooperate_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<div class="cooperate_title">
			<h1><?php the_field('cooperate_title'); ?></h1>
		</div>
	</div>
</section>
<section class="cooperate__bg">
	<div class="container">
		<div class="cooperate__list">
			<h2><?php the_field('cooperate_list_title'); ?></h2>
			<ul>
				<?php if(get_field('cooperate_list_repeater')): ?>
				  <?php while(the_repeater_field('cooperate_list_repeater')): ?>
				    <li>
						<img src="<?php the_sub_field('cooperate_list_repeater_img'); ?>" alt="">
						<p><?php the_sub_field('cooperate_list_repeater_text'); ?></p>
					</li>
				  <?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<div class="cooperate__list-text">
				<?php the_field('cooperate_list_text'); ?>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="open__button">
			<?php the_field('cooperate_btn_text'); ?> 
			<button class="open__btn"><?php the_field('cooperate_btn_name'); ?> </button>
		</div>
	</div>
</section>
<?php get_footer(); ?>
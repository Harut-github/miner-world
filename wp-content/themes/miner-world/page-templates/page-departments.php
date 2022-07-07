<?php /* Template Name: Departments */ ?>
<?php get_header(); ?>
<div class="container">
	<div class="departments__title">
		<h2><?php the_title(); ?></h2>
	</div> 
	<div class="departments">
		<div class="tabs">
		    <ul class="tabs__caption">
		    	<?php if(get_field('departments_repeater')): ?>
				  <?php while(the_repeater_field('departments_repeater')): ?>
				  	<li><?php the_sub_field('departments_repeater_city'); ?></li>
				  <?php endwhile; ?>
				<?php endif; ?>
		    </ul>
		    <?php if(get_field('departments_repeater')): ?>
			  <?php while(the_repeater_field('departments_repeater')): ?>
				<div class="tabs__content">
			    	<div class="departments__box">
						<div class="departments__city">
							<h2><?php the_sub_field('departments_repeater_city'); ?></h2>
						</div>
						<div class="departments__item">
							<div class="departments__phone">
								<span><?php the_sub_field('departments_repeater_text_phone'); ?></span>
								<a href="tel:<?php the_sub_field('departments_repeater_phone'); ?>"><?php the_sub_field('departments_repeater_phone'); ?></a>
							</div>
							<div class="departments__address">
								<span><?php the_sub_field('departments_repeater_text_address'); ?></span>
								<p><?php the_sub_field('departments_repeater_address'); ?></p>
							</div>
						</div>
					</div>
					<div class="departments__map">
						<?php the_sub_field('departments_repeater_map'); ?>
					</div>
			    </div>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
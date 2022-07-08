<?php /* Template Name: News */ ?>
<?php get_header(); ?>
<section>
	<div class="container">
		<div class="news__general-title">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="news">
			<div class="news__sidbar">
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
	                'taxonomy'           => 'category',
	                'walker'             => 'Walker_Category',
	                'hide_title_if_empty' => false,
	                'separator'          => '<br />',
	              );
	              echo '<ul>';
	              echo '<li><strong>Категории</strong></li>';

	                wp_list_categories( $args );
	              echo '</ul>';
	            ?>
			</div>
			<div class="news__box">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php $args = array(  
				    'post_type' => 'post',
				    'posts_per_page' => 9,
				    'paged'=> $paged,
				);?>
				<?php $loop = new WP_Query( $args );  ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
				<div class="news__border">  
					<a class="news__item" href="<?php the_permalink(); ?>">
					  <div class="news__img">
					    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
					  </div>
					  <div class="news__title"><?php the_title(); ?></div>
					  <div class="news__date"><?php echo get_the_date('d.m.Y'); ?></div>
					</a>
				</div>
				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>
			</div>
			
		</div>
	</div>
</section>


<?php get_footer(); ?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package miner-world
 */

get_header();
?>
<section class="single__page">
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
			<div class="single__box">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'miner-world' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'miner-world' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</section>


		


<?php

get_footer();

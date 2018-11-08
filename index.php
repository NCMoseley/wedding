<?php
/**
 * The template for displaying all pages.
 *
 * @package Streamline_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="difference" class="difference">Only<span></span>Days</div>
			<?php while (have_posts()) : the_post(); ?>
      
				<?php get_template_part('template-parts/content', 'page'); ?>
		
			<?php endwhile; // End of the loop.?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

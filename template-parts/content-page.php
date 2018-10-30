<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Streamline_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="content-border-box">
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->
		<!-- <div id="hero-banner" class="hero-banner"><h1>Your next vacation!</h1></div> -->
		<div class="entry-content">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div><!-- .entry-content -->
	</div>
	<?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
        ?>
</article><!-- #post-## -->
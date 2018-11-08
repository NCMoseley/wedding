<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Streamline_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
        ?>
</article><!-- #post-## -->
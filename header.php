<?php
/**
 * The header for our theme.
 *
 * @package Streamline_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php bloginfo('name'); ?></a></h1>
			</div><!-- .site-branding -->

			<div id='welcome' class='welcome'>

			</div>
			<!-- <div id="hero-banner" class="hero-banner"><h1>Your next vacation!</h1></div> -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="mobile-nav">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/welcome')); ?>"><i class="far fa-smile-beam"></a></i></li>
						<li><a href="<?php echo esc_url(home_url('/accomodation')); ?>"><i class="fas fa-bed"></i></a></li>
						<li><a href="<?php echo esc_url(home_url('/information')); ?>"><i class="fas fa-info-circle"></i></a></li>
						<li><a href="<?php echo esc_url(home_url('/rsvp')); ?>"><i class="fas fa-envelope-open"></i></a></li>
					</ul>
				</div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html('Primary Menu'); ?></button>
				<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' )); ?>
				<div class="countdown"></div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
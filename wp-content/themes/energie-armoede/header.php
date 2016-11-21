<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<script>
function toggleMobileMenu(id) {
    var div = document.getElementById(id);
    div.style.display = div.style.display == "block" ? "none" : "block";
}
</script>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-wrapper">

	<header class="site-header">
			<nav id="mobile-navigation" class="navigation" role="navigation">


				<div id="mobile-menu">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
				</div>

				<div id="navigation-items-mobile">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/ea_logo.svg">
						</a>

						<div id="mobile-menu-button" onclick="toggleMobileMenu('mobile-menu')">
							<svg width="31px" height="25px" viewBox="475 363 31 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <path d="M476.5,365 L493,365" id="Line" stroke="#005A73" stroke-width="2" stroke-linecap="round" fill="none"></path>
						    <path d="M476.5,375 L499,375" id="Line-Copy" stroke="#005A73" stroke-width="2" stroke-linecap="round" fill="none"></path>
						    <path d="M476.5,386 L504.5,386" id="Line-Copy-2" stroke="#005A73" stroke-width="2" stroke-linecap="round" fill="none"></path>
							</svg>
						</div>

					</nav>

			<nav id="site-navigation" class="navigation" role="navigation">
				<div id="navigation-items">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_bloginfo('siteurl'); ?>/wp-content/uploads/2016/11/ea_logo.svg">
						</a>

					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
				</div>
			</nav>

	</header><!-- #masthead -->

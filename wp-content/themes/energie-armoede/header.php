<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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

			<nav id="site-navigation" class="navigation" role="navigation">

				<div id="navigation-items">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="/energiearmoede/wp-content/uploads/2016/11/ea_logo.svg">
						</a>

					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
				</div>
			</nav>

	</header><!-- #masthead -->

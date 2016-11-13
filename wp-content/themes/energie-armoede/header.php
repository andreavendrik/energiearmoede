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

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="site-branding">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>

				<nav id="site-navigation" class="navigation" role="navigation">
					<span class="site-title clr">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span><!-- .site-title -->

					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
				</nav><!-- #site-navigation -->

		</div><!-- .site-branding -->


		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

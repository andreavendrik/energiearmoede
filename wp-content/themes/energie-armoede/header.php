<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://use.typekit.net/nil6uze.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/js/flexibility-master/flexibility.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Bitter:400,700|Roboto:400,700|Bree+Serif" rel="stylesheet">
	<?php wp_head(); ?>
</head>

 <script>flexibility(document.documentElement);</script>
<body <?php body_class(); ?>>

	<header class="site-header">

      <!-- Mobile Menu Slide-out Panel -->

			<div id="mobile-menu">
				<?php wp_nav_menu( array(
					'theme_location' => 'secondary',
				) ); ?>
			</div>

      <!-- Mobile Menu Topbar -->

			<nav id="mobile-navigation" class="navigation" role="navigation">

				<div id="navigation-items-mobile">

          <!-- Logo in mobile menu -->

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/ea_logo.svg" border=0>
						</a>

            <!-- Button in mobile menu -->

						<div id="mobile-menu-button">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/menu.png" border=0>
						</div>

					</nav>

<!-- Desktop menu -->

			<nav id="site-navigation" class="navigation" role="navigation">
				<div id="navigation-items">
					<div id="navigation-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/ea_logo.svg" border=0>
						</a>
					</div>

					<div id="navigation-links">
						<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
						<!-- <button id="download-toolkit"  onclick="window.location='http://www.example.com';">Download als PDF</button> -->
					</div>
				</div>
			</nav>

	</header>

<!-- Slide out mobile menu script -->
  <script>
  jQuery(document).ready(function(){
      jQuery('#mobile-menu-button').live('click', function(event) {
           jQuery('#mobile-menu').slideToggle(200,'swing');
      });
    });
  </script>

  <div class="site-wrapper">

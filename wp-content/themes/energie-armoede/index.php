<?php get_header();
$args = array(
	'category' => 5,
	'post_status' => 'publish',
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

		<?php if ( is_404() ) : ?>

			<header class="page-header">
				<h1 class="header-title"><?php esc_html_e( 'Oeps! Deze pagina bestaat niet.', 'wpex' ); ?></h1>
			</header><!-- .page-header -->

		<?php endif; ?>

		<header class="index-header"
		 style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/energie-armoede/images/headerbeeld.jpg')">
		</header>

		<?php if ( have_posts() ) : ?>

			<section class="index-content">

				<div class="header-title">
					<div><h1><?php echo get_bloginfo('name') ?></h1></div>
					<div><h3><?php echo get_bloginfo('description') ?></h3></div>
				</div>

			</section>

				<section class="best-practices">
					<div class="best-practices-title">
						<h2>De belangrijkste lessen</h2>
					</div>

					<div class="best-practices-content">
						<div>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/best_practice_01.svg">
							<p>
								<span>Vind de intrinsieke motivatie van deelnemers aan het project.</span> Dan besparen zij meer. Geld is niet altijd de belangrijkste drijfveer. Energieadvies is maatwerk en mensenwerk.
							</p>
					</div>
					<div>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/best_practice_02.svg">
						<p>
							<span>Bezoek huishoudens meer dan een keer,</span> herhaal de gegeven informatie, breng samen met bewoners besparende producten aan en installeer apps om energieverbruik te monitoren samen.
						</p>
					</div>
					<div>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/best_practice_03.svg">
						<p>
							<span>Gebruik bij de opzet van een project voldoende tijd en middelen.</span> Waardeer de energiecoaches, train hen de juiste skills en betrek organisaties erbij die het vertrouwen hebben van de doelgroep.
						</p>
					</div>
				</div>
				</section>

				<section class="categories">

					<h1>De toolkit</h1>
					<h3>Hier vindt u handige instrumenten om succesvol aan de slag<br> te gaan met de aanpak van energiearmoede.</h3>

				<?php
				$category_name = 'Project opzet';
				$category_image_url = get_bloginfo('siteurl') . '/wp-content/themes/energie-armoede/images/project-opzet.svg';
				include(get_template_directory() . '/category-tile.php');

				$category_name = 'Materialen';
				$category_image_url = get_bloginfo('siteurl') . '/wp-content/themes/energie-armoede/images/materialen.svg';
				include(get_template_directory() . '/category-tile.php');

				$category_name = 'Communicatie';
				$category_image_url = get_bloginfo('siteurl') . '/wp-content/themes/energie-armoede/images/communicatie.svg';
				include(get_template_directory() . '/category-tile.php');

				$category_name = 'Stories';
				$category_image_url = get_bloginfo('siteurl') . '/wp-content/themes/energie-armoede/images/stories.svg';
				include(get_template_directory() . '/category-tile.php');
				?>
			</section>


<!-- .entry -->

		<?php else : ?>

			<?php // You can display a message there aren't any posts yet here ?>

		<?php endif; ?>


<?php get_footer(); ?>

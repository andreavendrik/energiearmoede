<?php get_header();
$args = array(
	'category' => 5,
	'post_status' => 'publish',
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

		<?php if ( is_404() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oeps! Deze pagina bestaat niet.', 'wpex' ); ?></h1>
			</header><!-- .page-header -->

		<?php endif; ?>

		<header class="index-header">
			<div class="header-title">
				<h1><?php echo get_bloginfo('name') ?></h1>
				<h3><?php echo get_bloginfo('description') ?></h3>
			</div>
		</header>

		<?php if ( have_posts() ) : ?>

			<main class="categories">

				<?php
				$category_name = 'Project opzet';
				$category_image_url = '/energiearmoede/wp-content/uploads/2016/11/project.png';
				include(get_template_directory() . '/category-tile.php');

				$category_name = 'Materialen';
				$category_image_url = '/energiearmoede/wp-content/uploads/2016/11/materials.png';
				include(get_template_directory() . '/category-tile.php');

				$category_name = 'Communicatie';
				$category_image_url = '/energiearmoede/wp-content/uploads/2016/11/materials.png';
				include(get_template_directory() . '/category-tile.php');

				$category_name = 'Stories';
				$category_image_url = '/energiearmoede/wp-content/uploads/2016/11/materials.png';
				include(get_template_directory() . '/category-tile.php');
				?>

			</main><!-- .entry -->

		<?php else : ?>

			<?php // You can display a message there aren't any posts yet here ?>

		<?php endif; ?>


<?php get_footer(); ?>

<?php get_header();
$args = array(
	'category' => 5,
	'post_status' => 'publish',
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

		<?php if ( is_404() ) : ?>

			<header class="page-header" id="error-message">
				<h1 class="header-title"><?php esc_html_e( 'Oeps! Deze pagina bestaat niet.', 'wpex' ); ?></h1>
			</header><!-- .page-header -->

		<?php endif; ?>

		<header class="index-header"
		 style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/energie-armoede/images/headerbeeld.jpg')">
		</header>

		<?php if ( have_posts() ) : ?>

			<section class="index-content">

				<div class="header-title">
					<div><h1><?php echo strip_tags(get_field('header_titel', 95), '<strong><br>'); ?></h1></div>
					<div><h3><?php echo strip_tags(get_field('header_beschrijving', 95), '<strong><br>'); ?></h3></div>
				</div>

			</section>

				<section class="best-practices">
					<div class="best-practices-title">
						<h2><?php echo get_field('belangrijkste_lessen_titel', 95); ?></h2>
					</div>

					<div class="best-practices-content">
						<div id="best-practices-1">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/best_practice_01.svg">
							<p>
								<?php echo strip_tags(get_field('belangrijkste_les_1', 95), '<strong><br>'); ?>
							</p>
					</div>
					<div id="best-practices-2">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/best_practice_02.svg">
						<p>
								<?php echo strip_tags(get_field('belangrijkste_les_2', 95), '<strong><br>'); ?>
						</p>
					</div>
					<div id="best-practices-3">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/images/best_practice_03.svg">
						<p>
								<?php echo strip_tags(get_field('belangrijkste_les_3', 95), '<strong><br>'); ?>
						</p>
					</div>
				</div>
				</section>

				<section class="categories">

					<h1><?php echo strip_tags(get_field('toolkit_titel', 95), '<strong><br>'); ?></h1>
					<h3><?php echo strip_tags(get_field('toolkit_beschrijving', 95), '<strong><br>'); ?></h3>

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


<script>

/* Every time the window is scrolled ... */
$(window).scroll( function(){

    /* Check the location of each desired element */
    $('#best-practices-1').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > bottom_of_object ){

            $(this).animate({'opacity':'1','margin-top':'0px'},500);
						$('#best-practices-2').delay(500).animate({'opacity':'1','margin-top':'0px'},500);
						$('#best-practices-3').delay(1000).animate({'opacity':'1','margin-top':'0px','margin-bottom':'20px'},500);
        }
    });

});
</script>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/energie-armoede/js/flexibility-master/flexibility.js"></script>
<?php get_footer(); ?>

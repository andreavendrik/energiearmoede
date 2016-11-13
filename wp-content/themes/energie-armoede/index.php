<?php get_header(); ?>

	<main>

		<?php if ( is_404() ) : ?>

			<header class="page-header clr">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wpex' ); ?></h1>
			</header><!-- .page-header -->

		<?php endif; ?>

		<header class="index-header">
			<div class="header-title">
				<p>Dit is de titel van de website</p>
				<p>Dit is een  korte beschrijving van de website</p>
			</div>
		</header>

		<?php if ( have_posts() ) : ?>

				<article class="categories">

						<div class="category-tile" id="category-1">
							<?php
							$category_id = get_cat_ID( 'Project Opzet' );
							$category_link = get_category_link( $category_id );
							?>

							<a href="<?php echo esc_url( $category_link ); ?>" title="Project Opzet">
								<img src="/energiearmoede/wp-content/uploads/2016/11/project.png">
							</a>
							<div class="category-data">
								<p>
									<a href="<?php echo esc_url( $category_link ); ?>" title="Project Opzet">Project opzet</a>
								</p>
								<p>
									<?php echo wt_get_category_count(5); ?> artikelen
								</p>
								<p>
									<?php echo category_description( $category_id ); ?>
								</p>
							</div>
					</div>

					<div class="category-tile" id="category-2">
						<?php
						$category_id = get_cat_ID( 'Materialen' );
						$category_link = get_category_link( $category_id );
						?>

						<a href="<?php echo esc_url( $category_link ); ?>" title="Materialen">
							<img src="/energiearmoede/wp-content/uploads/2016/11/materials.png">
						</a>
						<div class="category-data">
							<p>
								<a href="<?php echo esc_url( $category_link ); ?>" title="Materialen">Materialen</a>
							</p>
							<p>
								<?php echo wt_get_category_count(3); ?> artikelen
							</p>
							<p>
								<?php echo category_description( $category_id ); ?>
							</p>
						</div>
				</div>

				<div class="category-tile" id="category-3">
					<?php
					$category_id = get_cat_ID( 'Communicatie' );
					$category_link = get_category_link( $category_id );
					?>

					<a href="<?php echo esc_url( $category_link ); ?>" title="Communicatie">
						<img src="/energiearmoede/wp-content/uploads/2016/11/materials.png">
					</a>
					<div class="category-data">
						<p>
							<a href="<?php echo esc_url( $category_link ); ?>" title="Communicatie">Communicatie</a>
						</p>
						<p>
							<?php echo wt_get_category_count(3); ?> artikelen
						</p>
						<p>
							<?php echo category_description( $category_id ); ?>
						</p>
					</div>
			</div>

			<div class="category-tile" id="category-4">
				<?php
				$category_id = get_cat_ID( 'Stories' );
				$category_link = get_category_link( $category_id );
				?>

				<a href="<?php echo esc_url( $category_link ); ?>" title="Stories">
					<img src="/energiearmoede/wp-content/uploads/2016/11/project.png">
				</a>
				<div class="category-data">
					<p>
						<a href="<?php echo esc_url( $category_link ); ?>" title="Materialen">Stories</a>
					</p>
					<p>
						<?php echo wt_get_category_count(3); ?> artikelen
					</p>
					<p>
						<?php echo category_description( $category_id ); ?>
					</p>
				</div>
		</div>

					<!-- <header class="entry-header">
						<?php the_title( sprintf(
							'<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
							'</a></h2>'
						); ?>
					</header> -->

				</article><!-- .entry -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php // You can display a message there aren't any posts yet here ?>

		<?php endif; ?>

	</main><!-- #main -->

<?php get_footer(); ?>

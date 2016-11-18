<?php
get_header();

$post = get_post();
$categories = get_the_category($post->ID);
$category = $categories[0];

$related_posts = get_posts([
	"category_name" => $category->name,
	"offset" => 0,
	"posts_per_page" => -1
]);

$next_post = get_next_post($post->ID);
$prev_post = get_adjacent_post($post->ID);

?>

<header id="category-header" style="background-image:url('<?php echo z_taxonomy_image_url($category->term_id); ?>')" />
	<h4><a href="<?php echo get_bloginfo('url'); ?>">< terug naar overzicht</a></h4>
	<h2>Categorie: <?php echo $category->name; ?></h2>
	<article><?php echo $category->description; ?></article>
</header>

<nav id="prev-next-post-nav">
	<div id="prev-post-nav">
		<?php if($prev_post->ID): ?>
			<a href="<?php echo get_permalink($prev_post->ID); ?>">
				<svg width="15px" height="25px" viewBox="440 361 20 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <polyline id="Page-1" stroke="#005A73" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" points="442 388 456.018 376.203 442 364"></polyline>
				</svg></a>
		<?php endif; ?>
	</div>
	<div id="current-post-nav">
		<h4>Artikel X/XX</h4>
	</div>
	<div id="next-post-nav">
		<?php if($next_post->ID): ?>
			<a href="<?php echo get_permalink($next_post->ID); ?>">
				<svg width="15px" height="25px" viewBox="440 361 20 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<polyline id="Page-1" stroke="#005A73" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" points="442 388 456.018 376.203 442 364"></polyline>
			</a>
		<?php endif; ?>
	</div>
</nav>

<main id="content">

	<article id="main-content">

		<h1><?php echo $post->post_title; ?></h1>
		<article>

			<?php
				$some_long_text =  $post->post_content;
				echo wpautop( $some_long_text );
				?>
		</article>
	</article>

	<aside id="content-navigation">
		<h1>Artikelen</h1>
		<ul id="related-posts">
			<?php foreach($related_posts as $related_post): ?>
				<li>
					<a href="<?php echo get_permalink($related_post->ID); ?>"><?php echo $related_post->post_title; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</aside>

</main>



<?php get_footer(); ?>

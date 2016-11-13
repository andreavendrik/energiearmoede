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

<header id="category-header">
	<a href="<?php echo get_bloginfo('url'); ?>">terug naar overzicht</a>
	<h2><?php echo $category->name; ?></h2>
	<article><?php echo $category->description; ?></article>
	<nav id="prev-next-post-nav">
		<?php if($prev_post->ID): ?>
			<a href="<?php echo get_permalink($prev_post->ID); ?>">Vorige post</a>
		<?php endif; ?>
		<?php if($next_post->ID): ?>
			<a href="<?php echo get_permalink($next_post->ID); ?>">Volgende post</a>
		<?php endif; ?>
	</nav>
</header>

<main id="content">
	<h1><?php echo $post->post_title; ?></h1>
	<article><?php echo $post->post_content; ?></article>
</main>

<aside>
	<ul id="related-posts">
		<?php foreach($related_posts as $related_post): ?>
			<li>
				<a href="<?php echo get_permalink($related_post->ID); ?>"><?php echo $related_post->post_title; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</aside>

<?php get_footer(); ?>

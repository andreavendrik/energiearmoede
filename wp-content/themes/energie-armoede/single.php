<?php
get_header();

$post = get_post();
$categories = get_the_category($post->ID);
$category = $categories[0];

$related_posts = get_posts(array(
	"category_name" => $category->name,
	"offset" => 0,
	"posts_per_page" => -1,
	"order" => "ASC"
));

$post_no = 0;
foreach($related_posts as $key => $related_post):
if($related_post->ID == $post->ID) $post_no = ($key+1);
endforeach;

$next_post = get_next_post($post->ID);
$prev_post = get_adjacent_post($post->ID);

?>

<header id="article-header" class="general-header" style="background-image:url('<?php echo z_taxonomy_image_url($category->term_id); ?>')" />
	<h2><?php echo $category->name; ?></h2>
	<article><?php echo $category->description; ?></article>
</header>

<main class="general-content" id="article-content">

<!-- List of articles in same category -->

	<aside id="content-navigation">
		<h4>Artikelen in deze categorie</h4>
		<ul id="related-posts">
			<?php foreach($related_posts as $related_post): ?>
				<li>
					<a href="<?php echo get_permalink($related_post->ID); ?>"><?php echo $related_post->post_title; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</aside>


	<!-- Previous post button -->

	<article>

		<!-- Content of article -->

		<h1><?php echo $post->post_title; ?></h1>
		<div id="article-introduction">
			<?php
				$auto_paragraphs =  $post->introduction;
				echo wpautop( $auto_paragraphs );
				?>
		</div>
		<div id="article-text">
			<?php
				$auto_paragraphs =  $post->content;
				echo wpautop( $auto_paragraphs );
				?>
		</div>
	</article>

</main>



<?php get_footer(); ?>

<?php

$post = get_post();
$categories = get_the_category($post->ID);
$category = $categories[0];

$related_posts = get_posts(array(
	"category_name" => $category->name,
	"offset" => 0,
	"posts_per_page" => -1
));

$next_post = get_next_post($post->ID);
$prev_post = get_adjacent_post($post->ID);

?>

<header id="page-header" class="general-header" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>')" />
	<div class="general-header-content">
		<h1><?php echo get_the_title() ?></h1>
	</div>
</header>

<main class="general-content" id="page-content">
  <article>
    <?php
      $auto_paragraphs =  $post->post_content;
      echo wpautop( $auto_paragraphs );
    ?>
  </article>
</main>
<?php /* Template Name: Page template
*
* @package WordPress
* @subpackage energiearmoede
*/

get_header();

$categories = get_the_category();
$category = $categories[0];

$related_posts = get_posts(array(
	"category_name" => $category->name,
	"offset" => 0,
	"posts_per_page" => 1,
	"order" => "ASC"
));

$post = $related_posts[0];

get_template_part('post-content');
get_footer(); ?>

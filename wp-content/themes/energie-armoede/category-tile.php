<?php
$category_id = get_cat_ID( $category_name );
$category_link = get_category_link( $category_id );
$category_posts = get_posts(array(
  'category_name' => $category_name,
  'posts_per_page' => -1,
  'order' => 'ASC'
));
$most_recent_post_in_category = $category_posts[0];
?>

<div class="category-tile" id="category-1">
  <div class="category-image">
    <a
      href="<?php echo get_permalink($most_recent_post_in_category->ID); ?>"
      title="<?php echo $category_name; ?>">
      <img src="<?php echo $category_image_url; ?>" border=0>
    </a>
  </div>
  <div class="category-data">
  <a
    href="<?php echo get_permalink($most_recent_post_in_category->ID); ?>"
    title="<?php echo $category_name; ?>">
    <div>
      <h2>
        <?php echo $category_name; ?>
      </h2>
      <h4>
        <?php echo count($category_posts); ?> artikelen
      </h4>
        <?php echo category_description( $category_id ); ?>
    </div>
  </a>
  </div>
</div>

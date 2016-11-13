<?php
$category_id = get_cat_ID( $category_name );
$category_link = get_category_link( $category_id );
$category_posts = new WP_Query([
  'cat' => $category_id,
  'posts_per_page' => -1,
]);
?>

<div class="category-tile" id="category-1">
<a
  href="<?php echo get_permalink($recent_posts->ID); ?>"
  title="<?php echo $category_name; ?>">
  <img src="<?php echo $category_image_url; ?>">
</a>
<div class="category-data">
  <p>
    <a
      href="<?php echo esc_url( $category_link ); ?>"
      title="<?php echo $category_name; ?>"><?php echo $category_name; ?></a>
  </p>
  <p>
    <?php echo $category_posts->found_posts; ?> artikelen
  </p>
  <p>
    <?php echo category_description( $category_id ); ?>
  </p>
</div>
</div>

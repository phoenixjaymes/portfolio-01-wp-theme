<?php if ( get_the_post_thumbnail() ): ?>
          
<?php
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
?>

  <div class="entry-image">
    <img src="<?php echo $thumbnail_url[0];  ?>" alt="<?php the_title(); ?>">
  </div>
<?php endif; ?>

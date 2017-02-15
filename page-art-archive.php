<?php
/*
 * Template Name: Art Archive Page
 */
?>

<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">
      
      <div class="main-content__wrap">

        <div class="art">
          
          <?php
    
            $num_posts = ( is_front_page() ) ? 6 : -1;

            $args = array(
              'post_type' => 'art',
              'posts_per_page' => $num_posts
            );

            $query = new WP_Query( $args );
          ?>

          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <?php
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
            ?>

            <figure class="art__item">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0];  ?>" alt="<?php the_title(); ?>"></a>
<!--              <figcaption><?php the_field( 'description' ); ?></figcaption>-->
            </figure>

          <?php endwhile; endif; wp_reset_postdata(); ?> 

        </div><!-- End art -->
    
      </div>        

    <?php get_template_part( 'content', 'footer' ); ?>

  </main>

<?php get_footer(); ?>
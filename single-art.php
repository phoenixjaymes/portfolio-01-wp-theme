<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
      <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
      ?>
      
        <figure class="art-single">
          <img src="<?php echo $thumbnail_url[0];  ?>" alt="<?php the_title(); ?>">
          <figcaption><?php the_field( 'description' ); ?></figcaption>
        </figure>
      
        <ul class="entry-nav">
          <li class="nav-item"><?php previous_post_link('%link', '<span class="nav-arrow">&#8612;</span> Previous Post'); ?></li>
          <li class="nav-item"><?php next_post_link('%link', 'Next Post <span class="entry-nav__arrow">&#8614;</span>'); ?></li>
        </ul>

      <?php endwhile; else: ?>

        <header class="entry-header">
          <h3 class="entry-header__title">Oh no!</h3>
        </header>

        <div class="entry-content">
          <p>Sorry, we could not find the content you are looking for.</p>
        </div>

      <?php endif; ?>
    
      </div>        

    <?php get_template_part( 'content', 'footer' ); ?>

  </main>

<?php get_footer(); ?>
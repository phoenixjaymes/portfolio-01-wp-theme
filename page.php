<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">
      
      <div class="main-content__wrap">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

        <?php endwhile; else: ?>
          <h2>Oops</h2>
          <p>No page was found</p>

        <?php endif; ?>
    
      </div>
      
    </div>

    <?php get_template_part( 'content', 'footer' ); ?>

  </main>

<?php get_footer(); ?>
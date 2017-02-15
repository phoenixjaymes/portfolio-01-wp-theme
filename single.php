<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="entry">
          <?php get_template_part( 'content', 'thumbnail' ); ?>
          
          
          <header class="entry-header">
            <h3 class="entry-header__title"><?php the_title(); ?></h3>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer class="entry-footer">
            <ul class="entry-footer__ul">
              <li class="entry-footer__item">by <?php the_author_posts_link(); ?></a></li>
              <li class="entry-footer__item"> on <?php the_time('d M y'); ?></li>
              <li class="entry-footer__item"> in <?php the_category(', '); ?></li>
            </ul>
          </footer>

        </article>
      
        <ul class="entry-nav">
          <li class="nav-item"><?php previous_post_link('%link', '<span class="nav-arrow">&#8612;</span> Previous Post'); ?></li>
          <li class="nav-item"><?php next_post_link('%link', 'Next Post <span class="entry-nav__arrow">&#8614;</span>'); ?></li>
        </ul>
      
        <?php comments_template(); ?>

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
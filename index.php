<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="entry">
          <header class="entry-header">
            <h3 class="entry-header__title"><a href="single.html"><?php the_title(); ?></a></h3>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer class="entry-footer">
            <ul class="entry-footer__ul">
              <li class="entry-footer__item">by <a href="">Jaymes Young</a></li>
              <li class="entry-footer__item"> on <a href="">17 Jan 2017</a></li>
              <li class="entry-footer__item"> in <a href="">categories</a>, <a href="">IOS</a>, <a href="">JS</a>, <a href="">PHP</a></li>
            </ul>
          </footer>

        </article>

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
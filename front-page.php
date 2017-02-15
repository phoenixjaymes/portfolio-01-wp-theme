<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">

      <div class="art">

        <?php get_template_part( 'content', 'art' ); ?>

      </div><!-- end art -->

    </div>        

    <?php get_template_part( 'content', 'footer' ); ?>

  </main>

<?php get_footer(); ?>
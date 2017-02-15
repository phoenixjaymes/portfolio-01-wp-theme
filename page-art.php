<?php
/*
 * Template Name: Art Page
 */
?>

<?php get_header(); ?>

  <main class="main-content">
        
    <div class="main-content__display">
      
      <div class="main-content__wrap">

        <div class="art">
          
          <?php get_template_part( 'content', 'art' ); ?>

        </div><!-- End art -->
    
      </div>        

    <?php get_template_part( 'content', 'footer' ); ?>

  </main>

<?php get_footer(); ?>
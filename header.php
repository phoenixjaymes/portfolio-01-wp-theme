<!DOCTYPE html>

<html lang="en">
  <head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <nav class="secondary-nav">
      
      <?php
        $defaults = array(
          'container' => false,
          'theme_location' => 'secondary-menu',
          'menu_class' => 'secondary-menu'
        );

        wp_nav_menu($defaults);
      ?>
      
    </nav>
    
    <div class="content-wrap">
      
      <header class="main-header">
        
        <div class="main-header__wrap">
          
          <?php if ( get_header_image() != "" ): ?>
            <div class="main-header__featured">
              <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php header_image(); ?>" alt="Header graphic"></a>
            </div>
          <?php endif; ?>

          <h1><?php bloginfo( 'name' ); ?></h1>  
          
          <div class="main-header__info">
            <p><?php bloginfo( 'description' ); ?></p>
          </div>

          <nav class="main-nav">
            
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'main-menu'
              );

              wp_nav_menu($defaults);
            ?>
            
          </nav>
          
        </div>
        
      </header>
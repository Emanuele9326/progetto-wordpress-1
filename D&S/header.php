<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package D&S
 * @since D&S 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() )?>/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Meta for IE support -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
  <?php
     if ( function_exists( 'wp_body_open' ) ) {
         wp_body_open();
        };
   ?>
    <!--NavBar-->
    <div class="container-mobile container d-block ">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark  mb-auto">
            <div class="style-mobile container-fluid">
                <a class="navbar-brand my-auto" href="#">
                    <?php 
                      $custom_logo_id = get_theme_mod( 'custom_logo' );
                      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                       
                      if ( has_custom_logo() ) {
                          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                      } else {
                          echo '<h1>' . get_bloginfo('name') . '</h1>';
                      }
                    ?>
                </a>
                <div class="button">
                <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
               
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between mt-4" id="navbarNavAltMarkup">
                    <?php
                       wp_nav_menu(
                        array( 
                            'menu_class' => 'nav-link',
                            'container_class'  => 'navbar-nav',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'header-menu',
                            'fallback_cb'=>'wpnotes_default_menu',
                            
                           
                        )
                    );
                    ?>

                </div>
                <div class="widget navbar-nav d-flex flex-row mb-4 me-lg-4 d-none d-lg-block ">

                  <?php if( is_active_sidebar('sidebar-1')): ?>
   
                 <?php dynamic_sidebar('sidebar-1'); ?>
    
                 <?php endif; ?>
                </div>
                
            </div>
            
        </nav>
    </div>
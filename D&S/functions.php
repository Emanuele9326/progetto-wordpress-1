<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package D&S
 
 * @since D&S 1.0
 */

 
/**
 * Essential theme supports
 * */
function theme_setup(){

 add_theme_support( "title-tag" ) ;
 /** automatic feed link*/
 add_theme_support( 'automatic-feed-links' );

 add_theme_support( "wp-block-styles" ) ;

 add_theme_support( "responsive-embeds" );

 add_theme_support( "html5", array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
 
 add_theme_support( "align-wide" );

}
add_action('after_setup_theme','theme_setup');

//style - bootstrap.js

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
 wp_enqueue_script('bootstrap',get_template_directory_uri().'/bootstrap/bootstrap/js/bootstrap.js',array ( 'jquery' ),'5.0',true);
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

 

//logo
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//menu

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Desktop Horizontal Menu', 'd&s' )
       )
     );
   }
add_action( 'init', 'register_my_menus' );
   

function DeS_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// navbar #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Social #1', 'd&s' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Social icons will be displayed', 'd&s' ),
			)
		)
	);

}

add_action( 'widgets_init', 'DeS_sidebar_registration' );


   // Provides a default menu featuring the 'Home' link, if not other menu has been provided.
function wpnotes_default_menu() {

    $html = '<ul id="wpnotes-default-menu">';
        $html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
            $html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'Home', 'd&s' ) . '">';
                $html .= __( 'Home', 'd&s' );
            $html .= '</a>';
        $html .= '</li>';
        
      $html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
         $html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'STORIA', 'd&s' ) . '">';
             $html .= __( 'STORIA', 'd&s' );
         $html .= '</a>';
      $html .= '</li>';

      $html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
         $html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'CONTATTI', 'd&s' ) . '">';
             $html .= __( 'CONTATTI', 'd&s' );
         $html .= '</a>';
       $html .= '</li>';

    $html .= '</ul>';

    echo $html;

} // end wpnotes_default_menu


add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-link ms-4';
  return $classes;
}



//link manager

add_filter('pre_option_link_manager_enabled', '__return_true');
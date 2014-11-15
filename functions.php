<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
$defaults = array(
	'default-image'          => get_template_directory_uri() . '/images/fieldgirl.jpg',
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
);
add_theme_support( 'custom-header', $defaults);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     if( in_array('current-page-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

?>

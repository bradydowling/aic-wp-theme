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



function unblemished_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
}
add_action( 'customize_register', 'unblemished_customize_register' );

$wp_customize->add_setting( 'unblemished_primary_color' , array(
    'default'     => '#5F80CF',
    'transport'   => 'refresh',
) );

$wp_customize->add_setting( 'unblemished_secondary_color' , array(
    'default'     => '#FB4A4A',
    'transport'   => 'refresh',
) );

$wp_customize->add_setting( 'unblemished_tertiary_color' , array(
    'default'     => '#B5B8BC',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
	'label'        => __( 'Theme Primary Color', 'unblemished' ),
	'section'    => 'colors',
	'settings'   => 'unblemished_primary_color',
	'priority'   => 10,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
	'label'        => __( 'Theme Secondary Color', 'unblemished' ),
	'section'    => 'colors',
	'settings'   => 'unblemished_secondary_color',
	'priority'   => 11,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tertiary_color', array(
	'label'        => __( 'Theme Tertiary (third) Color', 'unblemished' ),
	'section'    => 'colors',
	'settings'   => 'unblemished_tertiary_color',
	'priority'   => 12,
) ) );
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
   //All custom Unblemished settings
   // Adding theme colors
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
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_primary_color', array(
		'label'        => __( 'Theme Primary Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_primary_color',
		'priority'   => 10,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color', array(
		'label'        => __( 'Theme Secondary Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_secondary_color',
		'priority'   => 11,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color', array(
		'label'        => __( 'Theme Tertiary (third) Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_tertiary_color',
		'priority'   => 12,
	) ) );
	
	
	// Allowing changing of bottom jumbotron on front page
	$wp_customize->add_section( 'unblemished_second_jumbotron' , array(
	    'title'      => __( 'Bottom Jumbotron', 'unblemished' ),
	    'priority'   => 70,
	) );
	
	$wp_customize->add_setting( 'unblemished_jumbotron_heading' , array(
	    'default'     => 'My Heading',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_jumbotron_content' , array(
	    'default'     => 'Our product has been the number one of its kind for years.',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_jumbotron_background' , array(
	    'default'     => '',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_jumbotron_heading', array(
		'label'        => __( 'Heading/Title', 'unblemished' ),
		'section'    => 'unblemished_second_jumbotron',
		'settings'   => 'unblemished_jumbotron_heading',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_jumbotron_content', array(
		'label'        => __( 'Marketing Statement', 'unblemished' ),
		'section'    => 'unblemished_second_jumbotron',
		'settings'   => 'unblemished_jumbotron_content',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'unblemished_jumbotron_background', array(
		'label'        => __( 'Background Image', 'unblemished' ),
		'section'    => 'unblemished_second_jumbotron',
		'settings'   => 'unblemished_jumbotron_background',
	) ) );
}
add_action( 'customize_register', 'unblemished_customize_register' );

function unblemished_customize_css()
{
    ?>
    <style type="text/css">
     	.btn-aic-primary {background:<?php echo get_theme_mod('unblemished_primary_color'); ?>;}
     	.btn-aic-secondary {background:<?php echo get_theme_mod('unblemished_secondary_color'); ?>;}
     	.btn-aic-light {background:<?php echo get_theme_mod('unblemished_tertiary_color'); ?>;}
		/*.btn-aic-primary:hover {background: #3a62c1;}*/
    </style>
    <?php
}
add_action( 'wp_head', 'unblemished_customize_css');
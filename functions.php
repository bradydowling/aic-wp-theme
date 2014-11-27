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
	// Allowing changing of theme colors
	$wp_customize->add_section( 'unblemished_color_settings' , array(
	    'title'      => __( 'Unblemished Colors', 'unblemished' ),
	    'priority'   => 70,
	) );

	// Adding theme colors
	$wp_customize->add_setting( 'unblemished_primary_color' , array(
	    'default'     => '#5F80CF',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_primary_color_border' , array(
	    'default'     => '#3A62C1',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_primary_color_text' , array(
	    'default'     => '#FFFFFF',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_secondary_color' , array(
	    'default'     => '#FB4A4A',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_secondary_color_border' , array(
	    'default'     => '#D23A2C',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_secondary_color_text' , array(
	    'default'     => '#FFFFFF',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_tertiary_color' , array(
	    'default'     => '#B5B8BC',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'unblemished_tertiary_color_border' , array(
	    'default'     => '#828589',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_setting( 'unblemished_tertiary_color_text' , array(
	    'default'     => '#FFFFFF',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_primary_color', array(
		'label'      => __( 'Primary Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_primary_color',
		'priority'   => 10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_primary_color_border', array(
		'label'      => __( 'Primary Border/Hover Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_primary_color_border',
		'priority'   => 11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_primary_color_text', array(
		'label'      => __( 'Primary (Button) Text Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_primary_color_text',
		'priority'   => 12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color', array(
		'label'      => __( 'Secondary Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_secondary_color',
		'priority'   => 13,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color_border', array(
		'label'      => __( 'Secondary Border/Hover Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_secondary_color_border',
		'priority'   => 14,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color_text', array(
		'label'      => __( 'Secondary (Button) Text Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_secondary_color_text',
		'priority'   => 15,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color', array(
		'label'      => __( 'Tertiary Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_tertiary_color',
		'priority'   => 16,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color_border', array(
		'label'      => __( 'Tertiary Border/Hover Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_tertiary_color_border',
		'priority'   => 17,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color_text', array(
		'label'      => __( 'Tertiary (Button) Text Color', 'unblemished' ),
		'section'    => 'unblemished_color_settings',
		'settings'   => 'unblemished_tertiary_color_text',
		'priority'   => 18,
	) ) );

	$wp_customize->add_section( 'unblemished_front_page' , array(
	    'title'      => __( 'Unblemished Front Page', 'unblemished' ),
	    'priority'   => 80,
	) );
	// Bottom Jumbotron text and background image
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
	
	$wp_customize->add_setting( 'unblemished_jumbotron_text_color' , array(
	    'default'     => '#FFFFFF',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_jumbotron_heading', array(
		'label'      => __( 'Heading/Title', 'unblemished' ),
		'section'    => 'unblemished_front_page',
		'settings'   => 'unblemished_jumbotron_heading',
		'priority'   => 19,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_jumbotron_content', array(
		'label'      => __( 'Marketing Statement', 'unblemished' ),
		'section'    => 'unblemished_front_page',
		'settings'   => 'unblemished_jumbotron_content',
		'priority'   => 20,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'unblemished_jumbotron_background', array(
		'label'      => __( 'Background Image', 'unblemished' ),
		'section'    => 'unblemished_front_page',
		'settings'   => 'unblemished_jumbotron_background',
		'priority'   => 21,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_jumbotron_text_color', array(
		'label'      => __( 'Jumbotron Text Color', 'unblemished' ),
		'section'    => 'unblemished_front_page',
		'settings'   => 'unblemished_jumbotron_text_color',
		'priority'   => 22,
	) ) );
}
add_action( 'customize_register', 'unblemished_customize_register' );

function unblemished_customize_css()
{
    ?>
    <style type="text/css">
     	.btn-aic-primary {
     		background:<?php echo get_theme_mod('unblemished_primary_color'); ?>;
     		border-color:<?php echo get_theme_mod('unblemished_primary_color_border'); ?>;
			color:<?php echo get_theme_mod('unblemished_primary_color_text'); ?>;
     	}
     	.btn-aic-primary:hover {
			background:<?php echo get_theme_mod('unblemished_primary_color_border'); ?>;
			color:<?php echo get_theme_mod('unblemished_primary_color_text'); ?>;
		}
     	.btn-aic-secondary {
     		background:<?php echo get_theme_mod('unblemished_secondary_color'); ?>;
     		border-color:<?php echo get_theme_mod('unblemished_secondary_color_border'); ?>;
			color:<?php echo get_theme_mod('unblemished_secondary_color_text'); ?>;
     	}
     	.btn-aic-secondary:hover {
			background:<?php echo get_theme_mod('unblemished_secondary_color_border'); ?>;
			color:<?php echo get_theme_mod('unblemished_secondary_color_text'); ?>;
		}
     	.btn-aic-light {
     		background:<?php echo get_theme_mod('unblemished_tertiary_color'); ?>;
     		border-color:<?php echo get_theme_mod('unblemished_tertiary_color_border'); ?>;
     		color:<?php echo get_theme_mod('unblemished_tertiary_color_text'); ?>;
     	}
     	.btn-aic-light:hover {
			background:<?php echo get_theme_mod('unblemished_tertiary_color_border'); ?>;
			color:<?php echo get_theme_mod('unblemished_tertiary_color_text'); ?>;
		}
		.jumbotron.second {
		    color:<?php echo get_theme_mod('unblemished_jumbotron_text_color'); ?>;
		}
    </style>
    <?php
}
add_action( 'wp_head', 'unblemished_customize_css');
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

function register_my_menu() {
  register_nav_menu('primary',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menu' );

require_once('wp_bootstrap_navwalker.php');


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
		'section'    => 'colors',
		'settings'   => 'unblemished_primary_color',
		'priority'   => 20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_primary_color_border', array(
		'label'      => __( 'Primary Border/Hover Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_primary_color_border',
		'priority'   => 21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_primary_color_text', array(
		'label'      => __( 'Primary (Button) Text Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_primary_color_text',
		'priority'   => 22,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color', array(
		'label'      => __( 'Secondary Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_secondary_color',
		'priority'   => 23,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color_border', array(
		'label'      => __( 'Secondary Border/Hover Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_secondary_color_border',
		'priority'   => 24,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_secondary_color_text', array(
		'label'      => __( 'Secondary (Button) Text Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_secondary_color_text',
		'priority'   => 25,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color', array(
		'label'      => __( 'Tertiary Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_tertiary_color',
		'priority'   => 26,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color_border', array(
		'label'      => __( 'Tertiary Border/Hover Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_tertiary_color_border',
		'priority'   => 27,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_tertiary_color_text', array(
		'label'      => __( 'Tertiary (Button) Text Color', 'unblemished' ),
		'section'    => 'colors',
		'settings'   => 'unblemished_tertiary_color_text',
		'priority'   => 28,
	) ) );





	// Stuff for front page top jumbotron.
	$wp_customize->add_setting( 'unblemished_top_jumbotron_button_left_link' , array(
	    'default'     => '#',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_top_jumbotron_button_left_link', array(
		'label'      => __( 'Left Button Link', 'unblemished' ),
		'section'    => 'header_image',
		'settings'   => 'unblemished_top_jumbotron_button_left_link',
		'priority'   => 20,
	) ) );










	// Stuff for first call to action.
	$wp_customize->add_section( 'unblemished_action_item_1' , array(
	    'title'      => __( 'Action Item 1', 'unblemished' ),
	    'priority'   => 71,
	) );

	$wp_customize->add_setting( 'unblemished_action_1_header' , array(
	    'default'     => 'Hello World',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_1_header', array(
		'label'      => __( 'Header', 'unblemished' ),
		'section'    => 'unblemished_action_item_1',
		'settings'   => 'unblemished_action_1_header',
		'priority'   => 18,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_1_content' , array(
	    'default'     => 'Here is some content for your first action item.',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_1_content', array(
		'label'      => __( 'Content', 'unblemished' ),
		'section'    => 'unblemished_action_item_1',
		'settings'   => 'unblemished_action_1_content',
		'priority'   => 19,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_1_button_text' , array(
	    'default'     => 'See More',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_1_button_text', array(
		'label'      => __( 'Button Text', 'unblemished' ),
		'section'    => 'unblemished_action_item_1',
		'settings'   => 'unblemished_action_1_button_text',
		'priority'   => 20,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_1_image_source' , array(
	    'default'     => 'fake_image_source_file.jpg',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
       'label'      => __( 'Upload an image', 'unblemished' ),
       'section'    => 'unblemished_action_item_1',
       'settings'   => 'unblemished_action_1_image_source',
       'priority'    => 21,
    ) ) );

	$wp_customize->add_setting( 'unblemished_action_1_image_side' , array(
	    'default'     => 'left',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_1_image_side', array(
		'label'      => __( 'Image Side', 'unblemished' ),
		'section'    => 'unblemished_action_item_1',
		'settings'   => 'unblemished_action_1_image_side',
		'type'     => 'radio',
		'choices'  => array(
			'left'  => 'Left',
			'right' => 'Right',
		),
		'priority'   => 22,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_1_button_color' , array(
	    'default'     => 'primary',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_1_button_color', array(
		'label'      => __( 'Button Color', 'unblemished' ),
		'section'    => 'unblemished_action_item_1',
		'settings'   => 'unblemished_action_1_button_color',
		'type'     => 'radio',
		'choices'  => array(
			'primary'  => 'Primary',
			'secondary' => 'Secondary',
			'light' => 'Tertiary',
		),
		'priority'   => 23,
	) ) );














	// Stuff for second call to action.
	$wp_customize->add_section( 'unblemished_action_item_2' , array(
	    'title'      => __( 'Action Item 2', 'unblemished' ),
	    'priority'   => 72,
	) );

	$wp_customize->add_setting( 'unblemished_action_2_header' , array(
	    'default'     => 'Hello World',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_2_header', array(
		'label'      => __( 'Header', 'unblemished' ),
		'section'    => 'unblemished_action_item_2',
		'settings'   => 'unblemished_action_2_header',
		'priority'   => 18,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_2_content' , array(
	    'default'     => 'Here is some content for your first action item.',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_2_content', array(
		'label'      => __( 'Content', 'unblemished' ),
		'section'    => 'unblemished_action_item_2',
		'settings'   => 'unblemished_action_2_content',
		'priority'   => 19,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_2_button_text' , array(
	    'default'     => 'See More',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_2_button_text', array(
		'label'      => __( 'Button Text', 'unblemished' ),
		'section'    => 'unblemished_action_item_2',
		'settings'   => 'unblemished_action_2_button_text',
		'priority'   => 20,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_2_image_source' , array(
	    'default'     => 'fake_image_source_file.jpg',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'unblemished_action_2_image_source', array(
	   'label'      => __( 'Upload an image', 'unblemished' ),
	   'section'    => 'unblemished_action_item_2',
	   'settings'   => 'unblemished_action_2_image_source',
       'priority'   => 21,
    ) ) );

	$wp_customize->add_setting( 'unblemished_action_2_image_side' , array(
	    'default'     => 'right',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_2_image_side', array(
		'label'      => __( 'Image Side', 'unblemished' ),
		'section'    => 'unblemished_action_item_2',
		'settings'   => 'unblemished_action_2_image_side',
		'type'     => 'radio',
		'choices'  => array(
			'left'  => 'Left',
			'right' => 'Right',
		),
		'priority'   => 22,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_2_button_color' , array(
	    'default'     => 'secondary',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_2_button_color', array(
		'label'      => __( 'Button Color', 'unblemished' ),
		'section'    => 'unblemished_action_item_2',
		'settings'   => 'unblemished_action_2_button_color',
		'type'     => 'radio',
		'choices'  => array(
			'primary'  => 'Primary',
			'secondary' => 'Secondary',
			'light' => 'Tertiary',
		),
		'priority'   => 23,
	) ) );











	// Stuff for third call to action.
	$wp_customize->add_section( 'unblemished_action_item_3' , array(
	    'title'      => __( 'Action Item 3', 'unblemished' ),
	    'priority'   => 73,
	) );

	$wp_customize->add_setting( 'unblemished_action_3_header' , array(
	    'default'     => 'Hello World',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_3_header', array(
		'label'      => __( 'Header', 'unblemished' ),
		'section'    => 'unblemished_action_item_3',
		'settings'   => 'unblemished_action_3_header',
		'priority'   => 18,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_3_content' , array(
	    'default'     => 'Here is some content for your first action item.',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_3_content', array(
		'label'      => __( 'Content', 'unblemished' ),
		'section'    => 'unblemished_action_item_3',
		'settings'   => 'unblemished_action_3_content',
		'priority'   => 19,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_3_button_text' , array(
	    'default'     => 'See More',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_3_button_text', array(
		'label'      => __( 'Button Text', 'unblemished' ),
		'section'    => 'unblemished_action_item_3',
		'settings'   => 'unblemished_action_3_button_text',
		'priority'   => 20,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_3_image_source' , array(
	    'default'     => 'fake_image_source_3.jpg',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'unblemished_action_3_image_source', array(
       'label'      => __( 'Upload an image', 'unblemished' ),
       'section'    => 'unblemished_action_item_3',
       'settings'   => 'unblemished_action_3_image_source',
       'priority'   => 21,
    ) ) );

	$wp_customize->add_setting( 'unblemished_action_3_image_side' , array(
	    'default'     => 'left',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_3_image_side', array(
		'label'      => __( 'Image Side', 'unblemished' ),
		'section'    => 'unblemished_action_item_3',
		'settings'   => 'unblemished_action_3_image_side',
		'type'     => 'radio',
		'choices'  => array(
			'left'  => 'Left',
			'right' => 'Right',
		),
		'priority'   => 22,
	) ) );

	$wp_customize->add_setting( 'unblemished_action_3_button_color' , array(
	    'default'     => 'primary',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_action_3_button_color', array(
		'label'      => __( 'Button Color', 'unblemished' ),
		'section'    => 'unblemished_action_item_3',
		'settings'   => 'unblemished_action_3_button_color',
		'type'     => 'radio',
		'choices'  => array(
			'primary'  => 'Primary',
			'secondary' => 'Secondary',
			'light' => 'Tertiary',
		),
		'priority'   => 23,
	) ) );










	$wp_customize->add_section( 'unblemished_bottom_jumbotron' , array(
	    'title'      => __( 'Bottom Jumbotron', 'unblemished' ),
	    'priority'   => 74,
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
		'section'    => 'unblemished_bottom_jumbotron',
		'settings'   => 'unblemished_jumbotron_heading',
		'priority'   => 19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_jumbotron_content', array(
		'label'      => __( 'Marketing Statement', 'unblemished' ),
		'section'    => 'unblemished_bottom_jumbotron',
		'settings'   => 'unblemished_jumbotron_content',
		'priority'   => 20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'unblemished_jumbotron_background', array(
		'label'      => __( 'Background Image', 'unblemished' ),
		'section'    => 'unblemished_bottom_jumbotron',
		'settings'   => 'unblemished_jumbotron_background',
		'priority'   => 21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unblemished_jumbotron_text_color', array(
		'label'      => __( 'Jumbotron Text Color', 'unblemished' ),
		'section'    => 'unblemished_bottom_jumbotron',
		'settings'   => 'unblemished_jumbotron_text_color',
		'priority'   => 22,
	) ) );

















	// Stuff for second call to action.
	$wp_customize->add_section( 'unblemished_final_section' , array(
	    'title'      => __( 'Final Section', 'unblemished' ),
	    'priority'   => 75,
	) );

	$wp_customize->add_setting( 'unblemished_final_section_header' , array(
	    'default'     => 'Hello World',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_final_section_header', array(
		'label'      => __( 'Header', 'unblemished' ),
		'section'    => 'unblemished_final_section',
		'settings'   => 'unblemished_final_section_header',
		'priority'   => 18,
	) ) );

	$wp_customize->add_setting( 'unblemished_final_section_tagline' , array(
	    'default'     => 'Here is a tagline, please buy the product already.',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_final_section_tagline', array(
		'label'      => __( 'Tagline', 'unblemished' ),
		'section'    => 'unblemished_final_section',
		'settings'   => 'unblemished_final_section_tagline',
		'priority'   => 19,
	) ) );

	$wp_customize->add_setting( 'unblemished_final_section_button_text' , array(
	    'default'     => 'See More',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_final_section_button_text', array(
		'label'      => __( 'Button Text', 'unblemished' ),
		'section'    => 'unblemished_final_section',
		'settings'   => 'unblemished_final_section_button_text',
		'priority'   => 20,
	) ) );

	$wp_customize->add_setting( 'unblemished_final_section_button_color' , array(
	    'default'     => 'primary',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unblemished_final_section_button_color', array(
		'label'      => __( 'Button Color', 'unblemished' ),
		'section'    => 'unblemished_final_section',
		'settings'   => 'unblemished_final_section_button_color',
		'type'     => 'radio',
		'choices'  => array(
			'primary'  => 'Primary',
			'secondary' => 'Secondary',
			'light' => 'Tertiary',
		),
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

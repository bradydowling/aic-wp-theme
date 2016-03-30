<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="utf-8">
    <title><?php if (is_front_page()) {echo bloginfo('name');} else {echo get_the_title();} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="//www.demandforce.com/widget/css/widget.css" />
    <link type="text/css" rel="stylesheet" href="style-widget.css" />
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  <nav>
    <div class="navbar navbar-red navbar-fixed-top" role="navigation">
	<?php
	  // Fix menu overlap bug..
	  if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>';
	?>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" alt="advance eyecare logo"><?php echo bloginfo('name'); ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array( 
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-left',
                            'depth'             => 2,
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'theme_location'    => 'primary',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker()
                        ) );
                    }
                    else {
                ?>
                <ul class="nav navbar-nav navbar-left">
                    <?php wp_list_pages(array('title_li' => '')); ?>
                </ul>
                <?php } ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a><i class="fa fa-phone fa-lg"></i> 704-752-1744</a></li>
                </ul>
            </div>
        </div>
    </div>
  </nav>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="utf-8">
    <title><?php if (is_front_page()) {echo bloginfo('name');} else {echo get_the_title();} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <!-- Font Awesome Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font - Header: Comfortaa -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'> -->

    <!-- Font - Header: Varela Round -->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <!-- Font - Body: Open Sans -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  <nav>
    <!-- Fixed navbar -->
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
                <ul class="nav navbar-nav navbar-left">
                    <?php wp_list_pages(array('title_li' => '')); ?>
                </ul>
                <ul class="nav navbar-nav navbar-right social-icons">
                    <li class="facebook"><a href="https://www.facebook.com/advanceicare"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="google-plus"><a href="http://www.demandforce.com/b/advanceicare"><i class="fa fa-google-plus fa-lg"></i></a></li>
                    <li class="email"><a href="mailto:advanceicare@gmail.com"><i class="fa fa-envelope fa-lg"></i></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
  </nav>

<?php get_header(); ?>

  <header>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php $header_textcolor = get_header_textcolor() ? : 'FFFFFF';?>
    <div class="jumbotron first" style="background-image:url(<?php header_image(); ?>); color:#<?=$header_textcolor?>;">
      <img src="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
      <div class="container">
        <h1>Advance Eyecare</h1>
        <div class="row">
            <p class="col-md-4 blurb"><?php bloginfo('description'); ?><!-- The first optometrists in the Ballantyne area, Advance Eyecare has been providing quality eyecare for years. --></p>
        </div>
        <div class="row">
          <a href="#" class="btn btn-aic-primary first-button btn-lg col-md-2 col-xs-12" role="button">Schedule Us</a>
          <a href="forms" class="btn btn-aic-light last-button btn-lg col-md-offset-1 col-md-2 col-xs-12" role="button">Print Forms</a>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
        <div class="row col-md-offset-1 col-md-10">
            <div class="col-md-6 pull-<?php echo get_theme_mod('unblemished_action_1_image_side'); ?>">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/aic_outside.jpg" class="img-responsive img-rounded margin">
            </div>
            <div class="col-md-6">
                <h2><?php echo get_theme_mod('unblemished_action_1_header'); ?></h2>
                <p><?php echo get_theme_mod('unblemished_action_1_content'); ?></p>
                <a href="<?php echo '#nothing'; ?>" class="btn btn-aic-<?php echo get_theme_mod('unblemished_action_1_button_color'); ?> last-button btn-lg col-md-6 col-xs-12" role="button"><?php echo get_theme_mod('unblemished_action_1_button_text'); ?></a>
            </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="row col-md-offset-1 col-md-10">
            <div class="col-md-6 pull-<?php echo get_theme_mod('unblemished_action_2_image_side'); ?>">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/aic_outside.jpg" class="img-responsive img-rounded margin">
            </div>
            <div class="col-md-6">
                <h2><?php echo get_theme_mod('unblemished_action_2_header'); ?></h2>
                <p><?php echo get_theme_mod('unblemished_action_2_content'); ?></p>
                <a href="<?php echo '#nothing'; ?>" class="btn btn-aic-<?php echo get_theme_mod('unblemished_action_2_button_color'); ?> last-button btn-lg col-md-6 col-xs-12" role="button"><?php echo get_theme_mod('unblemished_action_2_button_text'); ?></a>
            </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="row col-md-offset-1 col-md-10">
            <div class="col-md-6 pull-<?php echo get_theme_mod('unblemished_action_3_image_side'); ?>">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/aic_outside.jpg" class="img-responsive img-rounded margin">
            </div>
            <div class="col-md-6">
                <h2><?php echo get_theme_mod('unblemished_action_3_header'); ?></h2>
                <p><?php echo get_theme_mod('unblemished_action_3_content'); ?></p>
                <a href="<?php echo '#nothing'; ?>" class="btn btn-aic-<?php echo get_theme_mod('unblemished_action_3_button_color'); ?> last-button btn-lg col-md-6 col-xs-12" role="button"><?php echo get_theme_mod('unblemished_action_3_button_text'); ?></a>
            </div>
        </div>
    </div>
  </section>

  <section>
    <div class="jumbotron second">
      <div class="container">
          <h2><?php echo get_theme_mod('unblemished_jumbotron_heading'); ?></h2>
          <div class="row">
              <div class="col-md-4 blurb"><?php echo get_theme_mod('unblemished_jumbotron_content'); ?></div>
          </div>
          <div class="row">
              <a href="#" class="btn btn-aic-secondary last-button btn-lg col-md-2" role="button">Our Styles</a>
          </div>
      </div>
    </div>
  </section>

  <section>
    <div class="text-center">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/logo-thick-web.png" class="big-logo"/>
      <h1><?php echo get_theme_mod('unblemished_final_section_header'); ?></h1>
      <p><?php echo get_theme_mod('unblemished_final_section_tagline'); ?></p>
      <a href="#" class="btn btn-aic-<?php echo get_theme_mod('unblemished_final_section_button_color'); ?> btn-lg" role="button"><?php echo get_theme_mod('unblemished_final_section_button_text'); ?></a>
    </div>
  </section>

<?php get_footer(); ?>

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

  <!-- <section>
    <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <div class="col-md-6">
            <img src="<?php echo get_bloginfo('template_url') ?>/images/sarit_award2.jpg" class="img-responsive img-rounded margin">
            </div>
            <div class="col-md-6">
                <h2>Expertise You Can Trust</h2>
                <p>With over 50 years of combined experience, Advanced Eyecare has one of the most knowledgable staffs in the greater Charlotte area. Our doctors are not only experienced but also personable and dependable.</p>
                <a href="staff" class="btn btn-aic-secondary last-button btn-lg col-md-6 col-xs-12" role="button">Meet Our Staff</a>
            </div>
          </div>
        </div>
    </div>
  </section> -->

  <?php
  $post_limits = array(
  	'posts_per_page'   => 2,
  	'offset'           => 0,
  	'category_name'    => '', // This will be 'front-page' at some point.
  	'orderby'          => 'date',
  	'order'            => 'ASC',
  	'post_type'        => 'post',
  	'post_status'      => 'publish',
  	'suppress_filters' => true,
	);

  $latest_blog_posts = new WP_Query($post_limits);

  if ( $latest_blog_posts->have_posts() ) {
    $post_num = 1;
  	while ( $latest_blog_posts->have_posts() ) {
  		$latest_blog_posts->the_post();
  ?>
  <section>
    <div class="container">
        <div class="row col-md-offset-1 col-md-10">
            <div class="col-md-6 <?php if ($post_num % 2 == 0) {echo 'pull-right';} else { echo 'pull-left';} ?>">
                <?php
                if ( has_post_thumbnail() ) {
                  $default_attr = array(
                  	'class' => "img-responsive img-rounded margin",
                  );
                	the_post_thumbnail($default_attr);
                }
                else { ?>
                <img src="<?php echo get_bloginfo('template_url') ?>/images/aic_outside.jpg" class="img-responsive img-rounded margin">
          <?php } ?>
            </div>
            <div class="col-md-6">
                <h2><?php the_title(); ?></h2>
                <p><?php if (has_excerpt()) {the_excerpt();} else {the_content();} ?></p>
                <a href="<?php echo get_permalink(); ?>" class="btn <?php if ($post_num % 2 == 0) {echo 'btn-aic-secondary';} else { echo 'btn-aic-primary';} ?> last-button btn-lg col-md-6 col-xs-12" role="button">See More</a>
            </div>
        </div>
    </div>
  </section>
  <?php
  		$post_num++;
  	}
  }
?>
  <!-- <section>
    <div class="container">
        <div class="row col-md-offset-1 col-md-10">
            <div class="col-md-6 pull-right">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/aic_outside.jpg" class="img-responsive img-rounded margin">
            </div>
            <div class="col-md-6">
                <h2>Great Location</h2>
                <p>You can find us in the Ballantyne area in South Charlotte. After doubling the size of our office last year, we're ready for all the traffic the Charlotte area is throwing at us.</p>
                <a href="location" class="btn btn-aic-primary last-button btn-lg col-md-6 col-xs-12" role="button">See A Map</a>
            </div>
        </div>
    </div>
  </section> -->

  <section>
    <div class="jumbotron second">
      <div class="container">
          <h2>See Well, Look Good</h2>
          <div class="row">
              <div class="col-md-4 blurb">With such a huge selection of frames, finding the right fit for you doesn’t have to take all day. Take a look at some of our brands and frames to get a jump on the selection process.</div>
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
      <h1>Advance Your Eyecare</h1>
      <p>If you're ready to advance your eyecare then don't wait. Schedule an appointment today.</p>
      <a href="#" class="btn btn-aic-primary btn-lg" role="button">Make an Appointment</a>
    </div>
  </section>

<?php get_footer(); ?>

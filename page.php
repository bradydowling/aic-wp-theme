<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



  <article>
    <div class="container">
	  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
    $url = $thumb['0'];
    ?>
    <div class="jumbotron first page" style="background-image:url(<?=$url?>);"></div>
        <div class="row col-md-offset-1 col-md-10">
          <h1 class="text-center"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
  </article>

<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

	        <?php /*?>
	        <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
	        <?php comments_template( '', true ); ?>
	        <?php */?>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
<div class="container" style="background: url('<?php the_field('background_image'); ?>'); background-size: cover;" >
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_header(); ?>
  <div class="row text-center" >
    <h1 class="text-center page-title">Thank you for your submission.<br><span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
    <div style="padding: 20px;">
      <p>Your case information is very valuable to us, we will contact you regarding your case as soon as we can.</p>
    </div>
  </div>
</div>

<?php endwhile; else : ?>

<p><?php _e( 'Sorry, no pages found' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>

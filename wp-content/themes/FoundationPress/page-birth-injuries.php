<div class="container" style="background: url('<?php the_field('background_image'); ?>'); background-size: cover;" >
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_header(); ?>
  <div class="row text-center" >
    <h1 class="text-center" style="font-size: 50px; padding-bottom: 0; margin-top: 10%; color: #384D5E; text-transform: uppercase;"><?php the_title(); ?> <br><span style="border-bottom: 5px solid #DC8623; padding: 0; margin: 0; line-height: 0; font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
  </div>
  <div class="row">
    <div class="columns small-12 medium-12 large-8" id="about">

      <?php the_field('content'); ?>
    </div>
    <div id="form" class="columns small-12 medium-12 large-4">
        <?php the_field('ninja'); ?>
    </div>
  </div>
  <div class="row">
    <div class="columns small-12 medium-12 large-12">
      <div class="embed-container" style="padding: 10%;">
         <?php the_field('video'); ?>
       </div>
    </div>
  </div>
</div>

<?php endwhile; else : ?>

<p><?php _e( 'Sorry, no pages found' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>

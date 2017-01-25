<div class="container" style="background: url('<?php the_field('background_image'); ?>'); background-size: cover;" >
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_header(); ?>
  <div class="row text-center" >
    <h1 class="text-center page-title"><?php the_title(); ?> <br><span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
  </div>
  <div class="row">
    <div class="columns small-12 medium-12 large-8" id="blog-post">
      <p id="date" style="font-size: 20px !important; color: #9FA1A0; margin: 0; text-transform: uppercase;">
        <?php echo get_field('date'); ?>
      </p>
      <p id="entry" class="body-copy" style="font-size: 16px !important; color: #9FA1A0;margin: 0; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
        <?php echo get_field('entry'); ?>
      </p>
    </div>
    <div id="form" class="columns small-12 medium-12 large-4">
        <?php the_field('ninja'); ?>
    </div>
  </div>
</div>

<?php endwhile; else : ?>

<p><?php _e( 'Sorry, no pages found' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>

<div class="container" style="background: url('<?php the_field('background_image'); ?>'); background-size: cover;" >
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_header(); ?>
  <div class="row text-center" >
    <h1 class="text-center page-title"><?php the_title(); ?> <br><span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
  </div>
  <div class="row">
    <div class="columns small-12 medium-12 large-8" id="blog-post">
        <div id="date">
          <?php get_field('date'); ?>
        </div>
        <div id='entry'><?php get_field('entry'); ?></div>
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

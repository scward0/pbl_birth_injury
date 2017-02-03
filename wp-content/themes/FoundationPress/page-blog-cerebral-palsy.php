<div class="container" style="background: url('<?php the_field('background'); ?>'); background-size: cover;" >
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_header(); ?>
  <div class="row text-center" >
    <h1 class="text-center page-title"><?php the_title(); ?> <br><span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
  </div>
  <div class="row">
    <div class="columns small-12 medium-12 large-8" id="blog-post">

      <div class="menu-centered">
        <ul class="menu menu-categories">
          <li><a href="http://198.58.102.147/pbl_birth_injury/blog/">All</a></li>
          <li><a href="http://198.58.102.147/pbl_birth_injury/blog-birth-injuries/">Birth Injury</a></li>
          <li><a href="http://198.58.102.147/pbl_birth_injury/blog-cerebral-palsy/">Cerebral Palsy</a></li>
        </ul>
      </div>


      <?php
        $args = array(
          'post_type' => 'blog_post'
        );
        $query = new WP_Query ($args);
        ?>

      <?php if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
        <?php if( get_field('category') == 4 ); ?>
          <h4><?php the_title(); ?></h4>
          <div id="date">
            <?php the_field('date'); ?>
          </div>
          <div id="entry">
            <?php echo wp_trim_words( get_field('entry'), 40, '...'); ?><br>
          </div>
          <a href="<?php the_permalink(); ?>" class="read-more">Full Article</a>
          <br><br><br>
        <?php endif; ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
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
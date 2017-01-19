<div class="collapse" style="padding: 0;">
  <div class="slick">
    <div style="background: url('http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/BirthInjury_Hero1.jpg'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; " src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/hero2.png">
      <img style="display: none;" alt="" />
    </div>
    <div style="background: url('http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/BIRTHbackground.jpg'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <img style="display: none;" alt="" />
    </div>
    <div style="background: url('http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/ABOUTbackground.jpg'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <img style="display: none;" alt="" />
    </div>
  </div>
  <?php get_header(); ?>
  <div class="headline">
    <div class="headline-border">
      <h1 class="text-center">ONE OF THE NATION'S LARGEST FIRMS</h1>
      <p class="text-center">
        HANDLING BIRTH INJURY CASES
      </p>
      <p class="text-center">
        <a id="learn-more" class="button large" href="http://localhost/PBL_Birth_Injury/birth-injuries/">DO I HAVE A CASE?</a>
      </p>
    </div>
  </div>
</div>

 <section class="row no-max collapse" id='pillars' style="padding: 0; margin: 0; background: white; ">
   <div class="small-12 medium-12 large-4 columns">
     <div class="block text-center">
       <img src="http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/Experience.jpg" alt="" />
       <h3 >Experience<br><br><span class="smaller">Led by Charles Thronson, the Personal Injury practice group at Parsons Behle and Latimer has more than thirty years of experience representing clients in complex medical malpractice cases.</span></h3>
     </div>
   </div>
   <div class="small-12 medium-12 large-4 columns">
     <div class="block text-center">
       <img src="http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/Results.jpg" alt="" />
       <h3>Results<br><br><span class="smaller">We represent victims of medical negligence and believe they deserve the best possible legal representation in Utah. Our track record includes achieving a number of multi-million dollar settlements for our clients.</span></h3>
     </div>
   </div>
   <div class="small-12 medium-12 large-4 columns">
     <div class="block text-center">
       <img src="http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/Integrity.jpg" alt="" />
       <h3>Integrity<br><br><span class="smaller">Our clients face enormous financial and emotional hardships as a result of medical malpractice. Our team works hand-in-hand to understand our client's injuries and assess their economic impact.</span></h3>
     </div>
   </div>
 </section>

 <?php

 $args = array(
   'post_type' => 'practice_area'
 );
 $query = new WP_Query ($args);

  ?>

<section class="container no-max" id='practice-areas' style="background: white; padding: 5%;">
  <?php if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post() ?>
    <?php  $i++; ?>
    <div class="row">

      <div class="columns small-12 medium-12 large-6">

        <?php if ( ($i % 2) == 1 ): ?>
          <div style="padding: 5%;">
            <div id="practice-blurb-left">
              <h3 style="text-align: right;"><?php echo get_the_title(); ?></h3>
              <p style="text-align: right; font-size: 24px;">
                <?php echo wp_trim_words( get_field('description'), 40, '...'); ?><br>
                <a href="<?php the_permalink(); ?>" style="color: #E39F69; font-size: 16px; text-transform: uppercase;">Read More</a>
              </p>
            </div>
          </div>


        <?php else: ?>
          <div class="practice-area text-center" style="padding: 0; margin: 0; float: right;">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
          </div>
        <?php endif;   ?>

      </div>


      <div class="columns small-12 medium-12 large-6">

        <?php if ( ($i % 2) == 0 ): ?>
          <div style="padding: 5%">
            <div id="practice-blurb-right">
              <h3 style="text-align: left;"><?php echo get_the_title(); ?></h3>
              <p style="text-align: left; font-size: 24px;">
                <?php echo wp_trim_words( get_field('description'), 40, '...'); ?><br>
                <a href="<?php the_permalink(); ?>" style="color: #E39F69; font-size: 16px; text-transform: uppercase;">Read More</a>
              </p>
            </div>
          </div>


        <?php else: ?>
          <div class="practice-area text-center" style="padding: 0; margin: 0; float: left;">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
          </div>
        <?php endif;   ?>

      </div>

    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</section>

<section id="video" style="background: white; padding: 100px 0 100px 0;">
  <div class="row text-center">
    <img src="http://placehold.it/1025x500">
  </div>
</section>


<section style="padding: 0; margin: 0; background: white">
  <div class="row">
    <div class="columns small-12 medium-6 large-6">
        <div class="practice-area" style="padding: 0; margin: 0; float: right;">
          <a href="#"><img src="http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/Charles.jpg" alt="" /></a>
        </div>
    </div>
    <div class="columns small-12 medium-6 large-6">
      <div style="padding: 5%">
        <div style="padding: 50px 20px 20px 20px; border-left: solid 2px #DD8724;">
          <h3 style="text-align: left;">MEET CHARLES</h3>
          <p style="text-align: left; font-size: 24px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
            <a href="#" style="color: #E39F69; font-size: 16px; text-transform: uppercase;">Read More</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="columns small-12 medium-6 large-6">
      <div style="padding: 5%">
        <div style="padding: 50px 20px 20px 20px; border-right: solid 2px #DD8724;">
          <h3 style="text-align: right;">ABOUT PARSONS BEHLE & LATIMER</h3>
          <p style="text-align: right; font-size: 24px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
            <a href="#" style="color: #E39F69; font-size: 16px; text-transform: uppercase;">Read More</a>
          </p>
        </div>
      </div>
    </div>
    <div class="columns small-12 medium-6 large-6">
        <div class="practice-area" style="padding: 0; margin: 0; float: left;">
          <a href="#"><img src="http://localhost/PBL_Birth_Injury/wp-content/uploads/2017/01/PBL.jpg" alt="" /></a>
        </div>
    </div>
  </div>
</section>

<section>
  <style media="screen">
    .awards{
      width: 95px;
      margin: 8px;
    }
    @media screen and (max-width: 640px){
      .awards{
        width: 50px;
        margin: 15px;
      }
      .pbl-logo{
      width: 75px;
      }
    }
    @media screen and (max-width: 640px){
      .awards{
        width: 120px;
        margin: 15px;
      }
    }
  </style>
  <div class="container" style="background: #9FACB5;">
    <div class="footer">
      <div class="row" style="padding-top: 50px;">
        <div class="columns small-12 medium-2 large-2">
          <a href="https://www.justice.org/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/AAFJ_logo.png"  class="awards" alt="AAFJ" />
        </div>
        <div class="columns small-12 medium-2 large-2">
          <a href="https://www.superlawyers.com/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/SuperLaw100.png" class="awards" alt="Top 100" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2">
          <a href="https://www.bestlawyers.com/lawyers/charles-h-thronson/29293/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/BestLogo_2012.png"  class="awards" alt="Best 2012" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2">
          <a href="https://www.bestlawyers.com/lawyers/charles-h-thronson/29293/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/BestLogo_2016.png" class="awards" alt="Best 2016" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2">
          <a href="https://www.superlawyers.com/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/SuperLawMountain.png" class="awards" alt="Mountain States" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2" >
          <a href="https://www.utahassociationforjustice.org/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/UAFJ_logo.png" class="awards" alt="UAFJ" /></center></a>
        </div>
      </div>

      <div class="row">
        <div class="columns small-12 medium-2 large-2" >
          <a href="http://www.acq5.com/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/ACQ5.png" class="awards" alt="ACQ5" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2" >
          <a href="http://www.utahbusiness.com/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/UTBus_Peers.png" class="awards" alt="Peers" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2" >
          <a href="http://www.naopia.com/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/NAOPIALogo.png"  class="awards" alt="NAOPIAL" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2">
          <a href="https://www.distinguishedcounsel.org/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/top_one.png" class="awards" alt="Top One" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2" >
          <a href="http://www.utahbusiness.com/" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/UtahBus_Elite.png"  class="awards" alt="Legal Elite" /></center></a>
        </div>
        <div class="columns small-12 medium-2 large-2" >
          <a href="http://www.martindale.com/Mr-Charles-H-Thronson/2596500-lawyer.htm" target="_blank"><center><img src="http://198.58.102.147/pbl_med_mal/wp-content/uploads/2017/01/AVPreeminent.png" class="awards" alt="AV" /></center></a>
        </div>
      </div>


    </div>
  </div>

</section>

<?php get_footer(); ?>

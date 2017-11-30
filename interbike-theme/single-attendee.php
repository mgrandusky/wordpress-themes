<?php

/*

Template Name Posts: Attendee

*/

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('attendee');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
                        
						
                            
                            <div class="hdr-top">
        <a href="<?php the_field('buy_tickets_link'); ?>"><button class="red-btn lrg-fnt no-width">BUY TICKETS</button></a>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>show/faq"><span>FAQ</span></a><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us"><span>CONTACT US</span></a></p>
        </div>
		<div class="cad-logo">
		    <p><img src="<?php the_field('logo'); ?>" border="0" /></p>
    		<h6>
            <b><?php the_field('event_title'); ?><br/>
            <?php the_field('date'); ?></b><br/>
				<?php the_field('time'); ?></h6>
        </div>	
		<div id="slider clearfix"> 
		  <!-- Start Slider-->
		  <?php echo get_new_royalslider(3); ?>
		  <!-- End Slider --> 
		</div>           
        
        <div class="clearfix pad10 cad-block1">
          <div class="three-fourth">
          <h1 class="vlrg-fnt"><?php the_field('title'); ?></h1>
	      <?php the_field('content'); ?>
          </div>
          <div class="one-fourth vdivider">
              <p class="presentedby">Presented By</p>
	          <a href="<?php the_field('feature_sponsor_url'); ?>" target="_blank"><img src="<?php the_field('featured_sponsor_image'); ?>" border="0" /></a>
          </div>  
         </div>         
          
          <div class="centerBtn">
				<a href="<?php the_field('buy_tickets_link'); ?>"><button class="red-btn lrg-fnt shade"><b>Get Your Tickets NOW!</b></button> </a>        
                <p class="lrg-fnt"><strong>Questions? Call Us: (949) 226-5700</strong></p>
          </div>    
          
       	 <hr class="divider clearfix" />
		
		 <div class="clearfix cad-block1">
          <div class="two-third">
			<?php the_field('video_frame'); ?>
          </div>
          <div class="one-third">
              <h1 class="padBtm-0"><?php the_field('video_title'); ?></h1>
              <?php the_field('video_content'); ?> 
              
              <a href="http://www.interbike.com/show/photos-and-videos/" class="readmore"><span>All video</span> &rsaquo;</a></p>           
          </div>  
         </div>         
                        
                        <?php endwhile; ?>

			<?php endif; ?>

			</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>


</div>

<?php get_footer(); ?>
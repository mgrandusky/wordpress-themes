<?php

/*

Template Name Posts: Why Exhibit

*/

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('inner');
        });
</script>
<div class="main-container">

<?php 
   $displayClock = do_shortcode("[pods name='countdown_clock_why_exhibit' field='display_countdown_clock']");
   
   if ($displayClock == 'Yes') {
?>    

  <div class="clock-outsideContainer">
  <div id="countdown" style="display:block" class="clock-container">
      <div class="clock-section"> 

          <div  class="clock-left-col">
              <p><?php echo do_shortcode("[pods name='countdown_clock_why_exhibit' field='left_column_text']"); ?></p>
          </div>    
  
            <div id="clockdiv">
            <div class="col-clock">
                  <span class="dash days"></span>
                <div class="countdown-title">DAYS</div>
            </div>       
            <div class="col-clock">
                <span class="dash hours"></span>
                 <div class="countdown-title">HOURS</div>
            </div>   
            <div class="col-clock">
                <span class="dash minutes"></span>
                <div class="countdown-title minutes">MINUTES</div>            
            </div>   
             <div class="col-clock">
                <span class="dash seconds"></span>
                <div class="countdown-title seconds">SECONDS</div>            
            </div>            
          </div>


          <div class="clock-right-col">

        <?php 
          $regbtn_link = do_shortcode("[pods name='countdown_clock_why_exhibit' field='register_button_link']");
      
          if ($regbtn_link != '') { ?>
                <p class="btn-cc"><a href="<?php echo do_shortcode("[pods name='countdown_clock_why_exhibit' field='register_button_link']"); ?>" class="reg-btn-rnd" target="_blank"><?php echo do_shortcode("[pods name='countdown_clock_why_exhibit' field='register_button_text']"); ?> &rsaquo;</a></p>
        <?php }  ?> 

         </div>
     </div>
    </div>  
    
</div>

<?php } ?>   

<script>
  // Initiate Countdown Clock
        $(document).ready(function() {

        // countdown clock code
            function getTimeRemaining(endtime) {
              var t = Date.parse(endtime) - Date.parse(new Date());
              var seconds = Math.floor((t / 1000) % 60);
              var minutes = Math.floor((t / 1000 / 60) % 60);
              var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
              var days = Math.floor(t / (1000 * 60 * 60 * 24));
              return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
              };
            }

            function initializeClock(id, endtime) {
              var clock = document.getElementById(id);
              var daysSpan = clock.querySelector('.days');
              var hoursSpan = clock.querySelector('.hours');
              var minutesSpan = clock.querySelector('.minutes');
              var secondsSpan = clock.querySelector('.seconds');


              function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                  clearInterval(timeinterval);
                }
              }

              updateClock();
              var timeinterval = setInterval(updateClock, 1000);
            }


            var deadline = new Date('<?php echo do_shortcode("[pods name='countdown_clock_why_exhibit' field='date_format_mmddyyyy']"); ?> <?php echo do_shortcode("[pods name='countdown_clock_why_exhibit' field='time_format_hhmm']"); ?> GMT-0400');


            //var deadline = new Date(Date.parse(new Date()) + 6 * 1000); 

            initializeClock('clockdiv', deadline);
    });

</script>      




  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
  	    <h1 class="header">Why Exhibit</h1>  

 	   <section>	
            <h1 class="headline"><?php the_field('headline'); ?></h1>     
                 <div class="open-text">
            <?php the_field('content'); ?>
			</div>
	    </section>	            

	     <section class="video padbottom20">
        		<h2><?php the_field('headline_video'); ?></h2>

			<?php $video_listings = get_field('video_code'); ?>
              <?php if($video_listings): ?>
              <?php foreach ($video_listings as $video_listing) { ?>
              <div class="video-container"><?php echo $video_listing['video_code']; ?></div>
              <?php } ?>
              <?php endif; ?>
          
	     </section>
                
	    <section>	
               <!-- <h2 class="sub-header">Buyer Quotes</h2> //-->
					<?php $quote_listings = get_field('quotes'); ?>
					<?php if($quote_listings): ?>
					<?php foreach ($quote_listings as $quote_listing) { ?>
                	<div class="quote-block">
						<blockquote><?php echo $quote_listing['quote']; ?></blockquote>
                    <p>—<?php echo $quote_listing['author']; ?>,<br/>
                    <?php echo $quote_listing['company/title']; ?></p>
                    </div>
                    <?php } ?>
					<?php endif; ?>
					                  
                </section>

		<section class="open-text">
				<h2 class="sub-header"><?php the_field('headline2'); ?></h2>                 
	            <?php the_field('content2'); ?>
		</section>                
                
               <section>
                <h2><strong><?php the_field('store_headline'); ?></strong></h2> 
				<div class="open-text displayInline">
                      <div class="image-content">
	                      <img src="<?php the_field('image_map'); ?>">
                      </div>
                      <div class="copy-text">
	                    <?php the_field('store_content'); ?>
                      </div>
                </section> 
                
		<section class="open-text">
                <h2><?php the_field('headilne3'); ?></h2> 
                <?php the_field('content3'); ?>
                </section>                                


        </section>
      </article>
    </div>
	<aside> 
		<?php get_sidebar(); ?>
	</aside>
	</div>
	<!-- #main --> 
</div>
<!-- #main-container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php get_footer(); ?>

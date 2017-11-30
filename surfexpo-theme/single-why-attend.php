<?php

/*

Template Name Posts: Why Attend

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
   $displayClock = do_shortcode("[pods name='countdown_clock_why_attend' field='display_countdown_clock']");
   
   if ($displayClock == 'Yes') {
?>    

  <div class="clock-outsideContainer">
  <div id="countdown" style="display:block" class="clock-container">
      <div class="clock-section"> 

          <div  class="clock-left-col">
              <p><?php echo do_shortcode("[pods name='countdown_clock_why_attend' field='left_column_text']"); ?></p>
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
          $regbtn_link = do_shortcode("[pods name='countdown_clock_why_attend' field='register_button_link']");
      
          if ($regbtn_link != '') { ?>
                <p class="btn-cc"><a href="<?php echo do_shortcode("[pods name='countdown_clock_why_attend' field='register_button_link']"); ?>" class="reg-btn-rnd" target="_blank"><?php echo do_shortcode("[pods name='countdown_clock_why_attend' field='register_button_text']"); ?> &rsaquo;</a></p>
        <?php }  ?> 

         </div>
     </div>
    </div>  
    
</div>

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


            var deadline = new Date('<?php echo do_shortcode("[pods name='countdown_clock_why_attend' field='date_format_mmddyyyy']"); ?> <?php echo do_shortcode("[pods name='countdown_clock_why_attend' field='time_format_hhmm']"); ?> GMT-0400');


            //var deadline = new Date(Date.parse(new Date()) + 6 * 1000); 

            initializeClock('clockdiv', deadline);
    });

</script>   

<?php } ?>   

  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="header"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
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

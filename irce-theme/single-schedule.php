<?php

/*

Template Name Posts: Schedule

*/

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('inner');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
			<h2 class="header">Schedule of Events</h2>  
           
				<div class="show-table">
					<h5><?php the_field('day1'); ?></h5>                
						<?php $event_listings = get_field('events1'); ?>
						<?php if($event_listings): ?>
						<?php foreach ($event_listings as $event_listing) { ?>
	                    <div class="pr-list">
							<p><?php echo $event_listing['time']; ?></p>
    	    		        <p><?php echo $event_listing['event']; ?></p>
	                    </div>
	                    <?php } ?>
						<?php endif; ?>                                                                                              
                </div>		
      
				<div class="show-table">
					<h5><?php the_field('day2'); ?></h5>                
	                    <?php $event_listings = get_field('events2'); ?>
						<?php if($event_listings): ?>
						<?php foreach ($event_listings as $event_listing) { ?>
	                    <div class="pr-list">
							<p><?php echo $event_listing['time']; ?></p>
    	    		        <p><?php echo $event_listing['event']; ?></p>
	                    </div>
	                    <?php } ?>
						<?php endif; ?>                                                                                                                   
                </div>      
                
                
				<div class="show-table">
					<h5><?php the_field('day3'); ?></h5>                
	                    <?php $event_listings = get_field('events3'); ?>
						<?php if($event_listings): ?>
						<?php foreach ($event_listings as $event_listing) { ?>
	                    <div class="pr-list">
							<p><?php echo $event_listing['time']; ?></p>
    	    		        <p><?php echo $event_listing['event']; ?></p>
	                    </div>
	                    <?php } ?>
						<?php endif; ?>                                                                                                                   
                </div>                    
      
      
         
			
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

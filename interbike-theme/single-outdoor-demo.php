<?php

/*

Template Name Posts: Outdoor Demo

*/

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('event');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
							<div class="od-logo">
		    <h5><span class="ir">Outdoor Demo</span></h5>
    		<h6><b><?php the_field('event_date'); ?></b><br>
				<?php the_field('event_location'); ?></h6>
        </div>	
		<div id="slider clearfix"> 
		  <!-- Start Slider-->
		  <?php echo get_new_royalslider(4); ?>
		  <!-- End Slider --> 
		</div>    
<br>       
        <hr class="divider clearfix" />
        
        <div class="clearfix">
          <div class="two-third">
          <h1><?php the_field('title'); ?></h1>
	      <?php the_field('content'); ?>
          </div>
          <div class="one-third">
              <h4>Demo Hours</h4>
	          <p><strong><?php the_field('demo_date_1'); ?></strong><br/>
              <?php the_field('demo_time_1'); ?></p><br>
	          <p><strong><?php the_field('demo_date_2'); ?></strong><br/>
              <?php the_field('demo_time_2'); ?></p> <br> 
              
              <p><a href="http://ibnet.a2zinc.net/ODD2017/Public/eventmap.aspx?shExhList=1" class="view-fp-icon dark">View the floor plan</a></p>           
          </div>  
         </div>         
          
   
          
       	 <hr class="divider clearfix" />
		
          <div class="clearfix">
          <div class="col-7">
          	<h1><?php the_field('map_title'); ?></h1>
            <?php the_field('map_content'); ?>           
          </div>
          <div class="col-5 pad-left">
          <h3><?php the_field('map_name'); ?></h3>
          <a href="<?php the_field('map_url'); ?>"><img src="<?php the_field('map_image'); ?>" alt="" class="border-gray"/></a>
          </div>
          
          
       	 <hr class="divider clearfix" />
		
          <div class="clearfix">
          <div class="col-7">
          	<h1><?php the_field('wtd_title'); ?></h1>
            <?php the_field('wtd_content'); ?>
          </div>
          <div class="col-5 pad-left">
          <?php the_field('wtd_video'); ?>
          </div>
          
      	 <hr class="divider clearfix" />          
          <div class="clearfix">
         	 <h1>Sponsors</h1>
             <div class="sponsors">
         	<?php if(get_field('sponsor_1')) { ?><p><a href="<?php the_field('sponsor_1_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_1'); ?>" border="0" alt=""/></a></p><?php } ?>
	    <?php if(get_field('sponsor_2')) { ?><p><a href="<?php the_field('sponsor_2_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_2'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_3')) {  ?><p><a href="<?php the_field('sponsor_3_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_3'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_4')) {  ?><p><a href="<?php the_field('sponsor_4_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_4'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_5')) {  ?><p><a href="<?php the_field('sponsor_5_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_5'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_6')) {  ?><p><a href="<?php the_field('sponsor_6_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_6'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_7')) {  ?><p style="margin-top:10px;"><a href="<?php the_field('sponsor_7_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_7'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_8')) {  ?><p style="margin-top:10px;"><a href="<?php the_field('sponsor_8_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_8'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_9')) {  ?><p style="margin-top:10px;"><a href="<?php the_field('sponsor_9_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_9'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_10')) {  ?><p style="margin-top:10px;"><a href="<?php the_field('sponsor_10_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_10'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_11')) {  ?><p style="margin-top:10px;"><a href="<?php the_field('sponsor_11_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_11'); ?>" border="0" alt=""/></a></p><?php } ?>
            <?php if(get_field('sponsor_12')) {  ?><p style="margin-top:10px;"><a href="<?php the_field('sponsor_12_url'); ?>" target="_blank"><img src="<?php the_field('sponsor_12'); ?>" border="0" alt=""/></a></p>  <?php } ?>                                                          
            </div>
          
          
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
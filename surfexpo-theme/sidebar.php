    <!-- Start Quick Links -->
    <div class="quicklinks clearfix"> 
  		<? show_links(); ?>
	  </div>
      <!-- End Quick Links --> 
      <div class="rc-content clearfix">
      	<h4>Future Shows</h4>
        <h5><?php the_field('date', 'option'); ?></h5>
		<p><strong><?php the_field('location', 'option'); ?></strong></p>
      </div>

      <!-- Image and Link 300x100-->
      <div class="clearfix"><a href="<?php the_field('image_url', 'option'); ?>"><img src="<?php the_field('image', 'option'); ?>"/></a></div>

      <!-- Mailing      
      <div class="rc-content image-nl">
      	<h4>Show Alerts</h4>
		<img src="<?php echo get_template_directory_uri(); ?>/images/surf/mailing-icon.png" border="0" />
		<div>
        <p>Tk signup now to get the latest news and updates from Surf Expo in Orlando</p>
        <p><a href="#" class="submit-no-color">Sign Up</a></p>
        </div>
      </div>      --> 
<?php if(is_front_page()){ ?>
      <!-- Start Sidebox Ad -->
      <div class="ad">
          <!-- Show ad tag -->
          <?php the_ad_group(5); ?>	
      </div>
      <!-- End Sidebox Ad --> 

<? }else{ ?>
      <!-- Start Sidebox Ad -->
      <div class="ad">
          <!-- Show ad tag -->
          <?php the_ad_group(5); ?>	
      </div>
      <!-- End Sidebox Ad --> 
      <!-- Start Sidebox Ad -->
      <div class="ad">
        <?php the_ad_group(7); ?>
      </div>
      <!-- End Sidebox Ad --> 

      <!-- Start Sidebox Ad -->
      <div class="ad">
        <?php the_ad_group(6); ?>
      </div>
      <!-- End Sidebox Ad -->
<? } ?>
		


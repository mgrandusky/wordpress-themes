<?php

/*

Template Name Posts: Advertising + Sponsorship

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
      <article id="contentInfo">
        <section>
		<section class="open-text clearfix padbottom20">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<h1 class="header"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
               </section>


	     <section id="tabs" class="divider clearfix">
	         <h6><a href="javascript:void(0);">Before The Show</a></h6>
	          <a href="javascript:void(0);" class="ad-opps-toggle"></a>     

	            <ul class="clearfix addopps">
	              <li><a href="#beforetheshow" alt="Before The Show">Before The Show</a></li>
	              <li><a href="#attheshow"  alt="At The Show">At The Show</a></li>
	              <li><a href="#aftertheshow" alt="After The Show">After The Show</a></li>
	              <li><a href="#nocost" alt="No Cost">No Cost</a></li>             
	            </ul>
	            <div class="tabcontent">

	              <section id="beforetheshow">
	                <article class="section-row open-text">
	                  <div>
	                      <p class="title">Before The Show</p>
		                      <?php the_field('before_the_show_content'); ?>
	                   </div>
	                     <!--div class="tab-right"> </div-->
	                </article>

	               

					<?php $bts_listings = get_field('before_the_show'); ?>
					<?php if($bts_listings): ?>
					<?php foreach ($bts_listings as $bts_listing) { ?>
	                <article class="section-row open-text">
		              <div class="copy-text">
	                      	<h2><?php echo $bts_listing['title']; ?></h2>
		                  <?php echo $bts_listing['content']; ?>                        
	                      </div>
	                      <div class="tab-right">
		                      <p>
		                      <span class="price">$<?php echo $bts_listing['price']; ?> </span><br/>
	        	              <span><strong>Deadline: <?php echo $bts_listing['date']; ?> </strong></span></p>
	                	      <img src="<?php echo $bts_listing['image']; ?> "/>
		                      <p><a href="<?php echo $bts_listing['request_info_link']; ?> " class="orange-bdr btn-block">Request Info</a></p>
				           <?php echo $bts_listing['additional_content']; ?>                                                               

	                      </div>
	                </article>  
					<?php } ?>
					<?php endif; ?>
	                                                                                
	              </section>
	              <!-- end tab1 -->


	              <section id="attheshow">
	                <article class="section-row open-text">
		            <div>
	                      <p class="title">At The Show</p>
		                   <?php the_field('at_the_show_content'); ?>
	                     </div>
	                     <!--div class="tab-right"> </div-->
	                </article>
	                <?php $ats_listings = get_field('at_the_show'); ?>
					<?php if($ats_listings): ?>
					<?php foreach ($ats_listings as $ats_listing) { ?>
	                <article class="section-row open-text">
		                  <div class="copy-text">
	                      <h2><?php echo $ats_listing['title']; ?></h2>
		                  <?php echo $ats_listing['content']; ?>                        
	                      </div>

	                      <div class="tab-right">
	                      <p>
	                      <span class="price">$<?php echo $ats_listing['price']; ?> </span><br/>
	                      <span><strong>Deadline: <?php echo $ats_listing['date']; ?> </strong></span></p>
	                      <img src="<?php echo $ats_listing['image']; ?> "/>
	                      <p><a href="<?php echo $ats_listing['request_info_link']; ?> " class="orange-bdr btn-block">Request Info</a></p>
	                      <?php echo $ats_listing['additional_content']; ?>                                               

	                      </div>
	                </article>  
					<?php } ?>
					<?php endif; ?>              

	              </section>     
	
	              <section id="aftertheshow">
	                <article class="section-row open-text">
		                  <div>
	                      <p class="title">After The Show</p>
		                  <?php the_field('after_the_show_content'); ?>
	                      </div>
	                     <!--div class="tab-right"> </div-->
	                </article>
	                <?php $afts_listings = get_field('after_the_show'); ?>
					<?php if($afts_listings): ?>
					<?php foreach ($afts_listings as $afts_listing) { ?>
	                <article class="section-row open-text">
		             <div class="copy-text">
	                      <h2><?php echo $afts_listing['title']; ?></h2>
		                  <?php echo $afts_listing['content']; ?>                        
	                      </div>

	                      <div class="tab-right">
	                      <p>
	                      <span class="price">$<?php echo $afts_listing['price']; ?> </span><br/>
	                      <span><strong>Deadline: <?php echo $afts_listing['date']; ?> </strong></span></p>
	                      <img src="<?php echo $afts_listing['image']; ?> "/>
	                      <p><a href="<?php echo $afts_listing['request_info_link']; ?> " class="orange-bdr btn-block">Request Info</a></p>
	                      <?php echo $afts_listing['additional_content']; ?>                                                                                          

	                      </div>
	                </article>  
					<?php } ?>
					<?php endif; ?>                 

	              </section>     
	              <!-- end tab3 -->


	              <section id="nocost">
	                <article class="section-row open-text">
		                  <div>
	                      <p class="title">No Cost</p>
		                  <?php the_field('no_cost_content'); ?>
	                      </div>
	                     <!--div class="tab-right"> </div-->
	                </article>                
	                <?php $nc_listings = get_field('no_cost'); ?>
					<?php if($nc_listings): ?>
					<?php foreach ($nc_listings as $nc_listing) { ?>
	                <article class="section-row open-text">
		                  <div class="copy-text">
	                      <h2><?php echo $nc_listing['title']; ?></h2>
		                  <?php echo $nc_listing['content']; ?>                        
	                      </div>

	                      <div class="tab-right">
	                      <p>
	                      <span class="price">$<?php echo $nc_listing['price']; ?> </span><br/>
	                      <span><strong>Deadline: <?php echo $nc_listing['date']; ?> </strong></span></p>
	                      <img src="<?php echo $nc_listing['image']; ?> "/>
	                      <p><a href="<?php echo $nc_listing['request_info_link']; ?> " class="orange-bdr btn-block">Request Info</a></p>
                              <?php echo $nc_listing['additional_content']; ?>                                                                                            
	                      </div>
	                </article>  
					<?php } ?>
					<?php endif; ?>                 

	              </section>
	              <!-- end tab4 -->


	            </div>
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
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <script>
 var $tabs = $("#tabs");
$tabs.tabs({
  create: function(event, ui) {
    // Adjust hashes to not affect URL when clicked.
    var widget = $tabs.data("uiTabs");
    widget.panels.each(function(i){
      this.id = "uiTab_" + this.id; // Prepend a custom string to tab id.
      widget.anchors[i].hash = "#" + this.id;
      $(widget.tabs[i]).attr("aria-controls", this.id);
    });
  },
  activate: function(event, ui) {
    // Add the original "clean" tab id to the URL hash.
    window.location.hash = ui.newPanel.attr("id").replace("uiTab_", "");
  },
});
		
//Toggles top nav open and close on click
$(document).ready (function () {
    $('#tabs h6 a').click(function(){

        if ($('#tabs ul').hasClass('show')) {
            $('#tabs ul').removeClass('show');
            $('#tabs h6 a').removeClass('active');
            $('#tabs h6').removeClass('active');
        } else {
            $('#tabs ul').addClass('show');
            $('#tabs a').addClass('active');
            $('#tabs h6').addClass('active');
        }
    });
});		
		
	//Toggles top nav open and close on click
	$(document).ready (function () {
    
    $('#tabs ul.addopps li a').click(function(){
        var title = $(this).attr('alt');
        $('#tabs h6 a').text(title);
         if ($('#tabs ul').hasClass('show')) {
            $('#tabs ul').removeClass('show');
            $('#tabs h6 a').removeClass('active');
            $('#tabs h6').removeClass('active');
        }        
        
    });
});		
		
    </script> 


<?php get_footer(); ?>

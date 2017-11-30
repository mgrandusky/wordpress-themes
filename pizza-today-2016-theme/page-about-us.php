<?php 

/**  Template Name: About Us Template */ 

?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tab.css">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
      
      <section class="full-width twelve row">
      <h1 class="header"><a href="#">About Us</a></h1>
      
      <section class="twelve columns row">
	     <div id="tabs" class="divider clearfix">
         <h5><a href="javascript:void(0);">About Us</a></h5>
          <a href="javascript:void(0);" class="ad-opps-toggle"></a>     
     
            <ul class="clearfix addopps">
              <li><a href="#aboutus" alt="About Us">About Us</a></li>
              <li><a href="#meetthestaff"  alt="Meet The Staff">Meet The Staff</a></li>
              <li><a href="#awards" alt="Awards and Accolades">Awards and Accolades</a></li>

            </ul>
            <div class="tabcontent">
              <div id="aboutus">
                
                <div class="section-row">
	                  <p class="copy-text"><?php the_field('content'); ?></p>
                </div>
                
              </div>
              <div id="meetthestaff">

                <div class="section-row">
                	<div class="opp-header">
	                  <h4>Meet the Staff</h4>
        	        </div>  
            	
                    <div class="opp-content">
	                  <?php $staff_listings = get_field('staff'); ?>
			  <?php if($staff_listings): ?>
			  <?php foreach ($staff_listings as $staff_listing) : ?>

<div class="section-row">
                    <div class="opp-content">
                                  <p class="img-fl"><img src="<?php echo $staff_listing['photo']; ?>"></p>
                      <div class="media-right">
                      <h2><?php echo $staff_listing['name']; ?></h2>
                                       <b><?php echo $staff_listing['title']; ?></b>
                                      <?php echo $staff_listing['bio']; ?>
<br>
                                Email: <a href="mailto:<?php echo $staff_listing['email']; ?>" style="color:#e83936;"><?php echo $staff_listing['email']; ?></a><br>
                                Phone: <?php echo $staff_listing['phone']; ?><br>
                                Mailing Address: <?php echo $staff_listing['mail']; ?>
                      </div>
                    </div>
                </div
				<hr>


			<?
			  endforeach;
			  endif; 
			?>
                    </div>
                </div>
              </div>
              <div id="awards">

                <div class="section-row">
	                  <h4>Awards</h4>
	                  <p class="copy-text"><?php the_field('aa_content'); ?></p>
                </div>
              </div>       
            </div>
      </div>      
      
      </section>
      </section>
    </div>
  </div>
<?php
endwhile;
endif;
?>
	      <?php get_sidebar(); ?>


  
  <!-- #main --> 

</div>

<!-- #main-container -->

 

<?php get_footer(); ?>
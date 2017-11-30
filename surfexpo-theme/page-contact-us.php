<?php

/*

Template Name: Contact Us

*/

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('contact-us');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
		<h1 class="header">Contact Us</h2>  

	
	            <ul class="no-marginList">
		            <li class="one-fourth">
					  <p><strong>Surf Expo</strong><br>
	                  <?php the_field('address'); ?></p>
		            </li>            
	    	        <li class="one-fourth">
	                  <p><?php if(get_field('phone1')){ ?><a href="tel:<?php the_field('phone1'); ?>" class="phone-icon"><?php the_field('phone1'); ?></a><?php } ?><br/>
	                  <?php if(get_field('phone2')){ ?><a href="tel:<?php the_field('phone2'); ?>" class="phone-icon"><?php the_field('phone2'); ?></a><?php } ?><br/>
	                  <?php if(get_field('phone3')){ ?><a href="tel:<?php the_field('phone3'); ?>" class="phone-icon"><?php the_field('phone3'); ?></a><?php } ?><br/>
	                  <?php if(get_field('mobile_phone')){ ?><a href="tel:<?php the_field('mobile_phone'); ?>" class="cellphone-icon"><?php the_field('mobile_phone'); ?></a>  <?php } ?></p>                                                    
	    	        </li>            
	             </ul>   
  		     <hr class="divider"/>
	            <h2 class="header">SALES</h2>
	            <ul class="no-marginList">
					<?php $sales_listings = get_field('sales'); ?>
					<?php if($sales_listings): ?>
					<?php foreach ($sales_listings as $sales_listing) { ?>
		            <li class="one-fourth">
					  <?php if($sales_listing['image']){ ?>
	    	          <p><img src="<?php echo $sales_listing['image']; ?>" border="0"/></p>
					  <?php }else{ ?>
					  <p><img src="<?php echo get_template_directory_uri(); ?>/images/surf/contact-placeholder.jpg" border="0"/></p>
					  <?php } ?>
					  <p><a href="mailto:<?php echo $sales_listing['email']; ?>"><strong><?php echo $sales_listing['name']; ?></strong></a><br/>
	                  <?php echo $sales_listing['title']; ?><br/>
	                  <?php echo $sales_listing['department']; ?></p>
	                  <a href="tel:<?php echo $sales_listing['phone']; ?>" class="phone-icon"><?php echo $sales_listing['phone']; ?></a><br>
                          <a href="mailto:<?php echo $sales_listing['email']; ?>" class="email-icon">Email Me</a>

		            </li>  
		          	<?php } ?>
					<?php endif; ?>           
				</ul>
				<hr class="divider"/>
	

		    <h2 class="header">BUYER RELATIONS</h2>
	            <ul class="no-marginList">
		            <?php $br_listings = get_field('buyer_relations'); ?>
					<?php if($br_listings): ?>
					<?php foreach ($br_listings as $br_listing) { ?>
		            <li class="one-fourth">
					  <?php if($br_listing['image']){ ?>
	    	          <p><img src="<?php echo $br_listing['image']; ?>" border="0"/></p>
					  <?php }else{ ?>
					  <p><img src="<?php echo get_template_directory_uri(); ?>/images/surf/contact-placeholder.jpg" border="0"/></p>
					  <?php } ?>
					  <p><a href="mailto:<?php echo $br_listing['email']; ?>"><strong><?php echo $br_listing['name']; ?></strong></a><br/>
	                  <?php echo $br_listing['title']; ?><br/>
	                  <?php echo $br_listing['department']; ?></p>
	                  <a href="tel:<?php echo $br_listing['phone']; ?>" class="phone-icon"><?php echo $br_listing['phone']; ?></a><br>
			  <a href="mailto:<?php echo $br_listing['email']; ?>">Email Me</a>
		            </li>  
		          	<?php } ?>
					<?php endif; ?>                      
	            </ul>      

		   <hr class="divider"/>            
		   <h2 class="header">MARKETING</h2>
		            <ul class="no-marginList">
			            <?php $marketing_listings = get_field('marketing'); ?>
						<?php if($marketing_listings): ?>
						<?php foreach ($marketing_listings as $marketing_listing) { ?>
			            <li class="one-fourth">
						  <?php if($marketing_listing['image']){ ?>
		    	          <p><img src="<?php echo $marketing_listing['image']; ?>" border="0"/></p>
						  <?php }else{ ?>
						  <p><img src="<?php echo get_template_directory_uri(); ?>/images/surf/contact-placeholder.jpg" border="0"/></p>
						  <?php } ?>
						  <p><a href="mailto:<?php echo $marketing_listing['email']; ?>"><strong><?php echo $marketing_listing['name']; ?></strong></a><br/>
		                  <?php echo $marketing_listing['title']; ?><br/>
		                  <?php echo $marketing_listing['department']; ?></p>
		                  <a href="tel:<?php echo $marketing_listing['phone']; ?>" class="phone-icon"><?php echo $marketing_listing['phone']; ?></a><br>
				  <a href="mailto:<?php echo $marketing_listing['email']; ?>">Email Me</a>
			            </li>  
			          	<?php } ?>
						<?php endif; ?>                               
		            </ul>      

					<hr class="divider"/>
		    <h2 class="header">Operations</h2>
	            <ul class="no-marginList">
		            <?php $op_listings = get_field('operations'); ?>
					<?php if($op_listings): ?>
					<?php foreach ($op_listings as $op_listing) { ?>
		            <li class="one-fourth">
					  <?php if($op_listing['image']){ ?>
	    	          <p><img src="<?php echo $op_listing['image']; ?>" border="0"/></p>
					  <?php }else{ ?>
					  <p><img src="<?php echo get_template_directory_uri(); ?>/images/surf/contact-placeholder.jpg" border="0"/></p>
					  <?php } ?>
					  <p><a href="mailto:<?php echo $op_listing['email']; ?>"><strong><?php echo $op_listing['name']; ?></strong></a><br/>
	                  <?php echo $op_listing['title']; ?><br/>
	                  <?php echo $op_listing['department']; ?></p>
	                  <a href="tel:<?php echo $op_listing['phone']; ?>" class="phone-icon"><?php echo $op_listing['phone']; ?></a><br>
			  <a href="mailto:<?php echo $op_listing['email']; ?>">Email Me</a>
		            </li>  
		          	<?php } ?>
					<?php endif; ?>          
	            </ul>

		   <hr class="divider"/>

		    <h2 class="header">Accounting</h2>
	            <ul class="no-marginList">
		            <?php $ac_listings = get_field('accounting'); ?>
					<?php if($ac_listings): ?>
					<?php foreach ($ac_listings as $ac_listing) { ?>
		            <li class="one-fourth">
					  <?php if($ac_listing['image']){ ?>
	    	          <p><img src="<?php echo $ac_listing['image']; ?>" border="0"/></p>
					  <?php }else{ ?>
					  <p><img src="<?php echo get_template_directory_uri(); ?>/images/surf/contact-placeholder.jpg" border="0"/></p>
					  <?php } ?>
					  <p><a href="mailto:<?php echo $ac_listing['email']; ?>"><strong><?php echo $ac_listing['name']; ?></strong></a><br/>
	                  <?php echo $ac_listing['title']; ?><br/>
	                  <?php echo $ac_listing['department']; ?></p>
	                  <a href="tel:<?php echo $ac_listing['phone']; ?>" class="phone-icon"><?php echo $ac_listing['phone']; ?></a><br>
			  <a href="mailto:<?php echo $ac_listing['email']; ?>">Email Me</a>
		            </li>  
		          	<?php } ?>
					<?php endif; ?>
	            </ul>

				<hr class="divider"/>        

		    <h2 class="header">Show Director</h2>
	            <ul class="no-marginList">
		            <?php $sd_listings = get_field('show_director'); ?>
					<?php if($sd_listings): ?>
					<?php foreach ($sd_listings as $sd_listing) { ?>
		            <li class="one-fourth">
					  <?php if($sd_listing['image']){ ?>
	    	          <p><img src="<?php echo $sd_listing['image']; ?>" border="0"/></p>
					  <?php }else{ ?>
					  <p><img src="<?php echo get_template_directory_uri(); ?>/images/surf/contact-placeholder.jpg" border="0"/></p>
					  <?php } ?>
					  <p><a href="mailto:<?php echo $sd_listing['email']; ?>"><strong><?php echo $sd_listing['name']; ?></strong></a><br/>
	                  <?php echo $sd_listing['title']; ?><br/>
	                  <?php echo $sd_listing['department']; ?></p>
	                  <a href="tel:<?php echo $sd_listing['phone']; ?>" class="phone-icon"><?php echo $sd_listing['phone']; ?></a><br>
			  <a href="mailto:<?php echo $sd_listing['email']; ?>">Email Me</a>
		            </li>  
		          	<?php } ?>
					<?php endif; ?>            
	            </ul>                            
			
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
<?php get_footer(); ?>

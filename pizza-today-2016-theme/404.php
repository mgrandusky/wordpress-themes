<?php get_header(); ?>
<script>jQuery('body').addClass('error-block');</script>
<div class="container" id="main">
	<div class="fluid-width">	
		<div class="inner-block row">
			<section class="twelve columns"> 
				<h3>404 page not found</h3>                                            
			        <h4>Sorry, the page you were looking for doesn't exist.</h4>
        	    		<p>Please try the links below or use the search above to help find your way<br/>
            			<a href="<?php bloginfo('siteurl'); ?>/">Home</a> | <a href="<?php bloginfo('siteurl'); ?>/site-map">Site Map</a> | <a href="<?php bloginfo('siteurl'); ?>/contact-us">Contact Us</a></p>
           	 	</section>
          	</div>
      	</div>
	
	<?php include 'sidebar-404.php'; ?>
</div>
<?php get_footer(); ?>
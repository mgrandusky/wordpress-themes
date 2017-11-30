<?php

/*

Template Name Posts: Exhibitor Resources

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
		<h1 class="header">Exhibitor Resources</h1> 
            
		<section>
			<h1 class="headline"><?php the_field('headline'); ?></h1>            
            <?php the_field('content'); ?>
        	    <!-- <p class="button"><a href="<?php //the_field('get_started_link'); ?>" class="orange-loadmore font-large">Get Started</a></p>	//-->
            
	            <hr class="divider"/>
        	    <h2 class="header"><?php the_field('headline2'); ?></h2>
            <?php the_field('content2'); ?>
            
	            <hr class="divider"/>            
		    <h2 class="header">OPERATIONS</h2><strong></strong>            
            
            <ul class="no-marginList">
				<?php $operation_listings = get_field('operations'); ?>
				<?php if($operation_listings): ?>
				<?php foreach ($operation_listings as $operation_listing) { ?>
            <li class="one-third">
              <p><a href="#"><img src="<?php echo $operation_listing['image']; ?>" border="0"/></a></p>
              <p><strong><a href="mailto:<?php echo $operation_listing['email']; ?>"><?php echo $operation_listing['name']; ?></a></strong><br/>
                  <?php echo $operation_listing['title']; ?><br/>
                  <a href="tel:<?php echo $operation_listing['phone']; ?>" class="phone-icon"><?php echo $operation_listing['phone']; ?></a></p>
            </li>
            <?php } ?>
			<?php endif; ?>
            </ul>
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

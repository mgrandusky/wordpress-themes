<?php

/*

Template Name Posts: Show Seminars

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
		<h1 class="header">Professional Learning Labs</h1>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<section class="feature">
				        <?php the_content(); ?>
						<p><em>Presented by:</em><a href="<?php the_field('presented_by_(link)'); ?>" target="_blank"><img src="<?php the_field('presented_by_(logo)'); ?>" border="0" class="padLeft10"/></a></p>
			          </section>
				
				<?php endwhile; ?>
			<?php endif; ?>
			<section>        
		        	 <p class="shaded-box"><?php the_field('day1'); ?></p>
		             <?php $seminar_listings = get_field('seminars1'); ?>
					<?php if($seminar_listings): ?>
					<?php foreach ($seminar_listings as $seminar_listing) { ?>

						<p><em><?php echo $seminar_listing['time1']; ?></em></p>
				        <?php echo $seminar_listing['seminar1']; ?>
                    	<?php if ($seminar_listing != end($seminar_listings)) { ?><hr class="divider site-color"/><?php } ?>
                    <?php } ?>
					<?php endif; ?>            
		         </section>

		         <section>        
		        	 <p class="shaded-box"><?php the_field('day2'); ?></p>
		             <?php $seminar_listings = get_field('seminars2'); ?>
					<?php if($seminar_listings): ?>
					<?php foreach ($seminar_listings as $seminar_listing) { ?>
                    
						<p><em><?php echo $seminar_listing['time2']; ?></em></p>
				        <?php echo $seminar_listing['seminar2']; ?>
                    	<?php if ($seminar_listing != end($seminar_listings)) { ?><hr class="divider site-color"/><?php } ?>
                    <?php } ?>
					<?php endif; ?>
		          </section>         


			 <section>        
		        	 <p class="shaded-box"><?php the_field('day3'); ?></p>
		
					<?php $seminar_listings = get_field('seminars3'); ?>
					<?php if($seminar_listings): ?>
					<?php foreach ($seminar_listings as $seminar_listing) { ?>
						<p><em><?php echo $seminar_listing['time3']; ?></em></p>
				         <?php echo $seminar_listing['seminar3']; ?>
						<?php if ($seminar_listing != end($seminar_listings)) { ?><hr class="divider site-color"/><?php } ?>
                    <?php } ?>
					<?php endif; ?>
		              
		        </section>
			<?php if(get_field('day4')){ ?>
			 <section>        
		        	 <p class="shaded-box"><?php the_field('day4'); ?></p>
		
					<?php $seminar_listings = get_field('seminars4'); ?>
					<?php if($seminar_listings): ?>
					<?php foreach ($seminar_listings as $seminar_listing) { ?>
						<p><em><?php echo $seminar_listing['time4']; ?></em></p>
				         <?php echo $seminar_listing['seminar4']; ?>
						<?php if ($seminar_listing != end($seminar_listings)) { ?><hr class="divider site-color"/><?php } ?>
                    <?php } ?>
					<?php endif; ?>
		              
		        </section>
			<?php } ?>
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

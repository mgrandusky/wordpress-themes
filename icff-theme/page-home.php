<?php 
/** 
 * Template Name: Home Template */ 
?>
<?php get_header(); ?>

	<div id="main" class="cf">
		<div id="content" class="cf">
			<div id="spotlight">
				<a href="category/spotlights" style="color:#000;text-decoration:none;"><h2>Spotlight</h2></a>
				<?php echo getLatestSpotlight() ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry home cf">
                			<div>
                    				<a href="<?php echo the_field('link_url_1'); ?>" style="color:#000;text-decoration:none;"><h3><?php the_field('heading_1'); ?></h3></a>
		   				<a href="<?php echo the_field('link_url_1'); ?>"><img src="<?php echo the_field('image_1'); ?>" alt=""></a>
                    				<hr>
                    				<div>
                        				<?php the_field('content_1'); ?>
                        				<p><strong><a href="<?php echo the_field('link_url_1'); ?>" style="font-family: 'pt serif', times, serif;font-style: italic;"><?php the_field('link_text_1'); ?></a></strong></p>
                    				</div>
                			</div>
                			<div>
                    				<a href="<?php echo the_field('link_url_2'); ?>" style="color:#000;text-decoration:none;"><h3><?php the_field('heading_2'); ?></h3></a>
		   				<a href="<?php echo the_field('link_url_2'); ?>"><img src="<?php echo the_field('image_2'); ?>" alt=""></a>
                   	 			<hr>
                    				<div>
                        				<?php the_field('content_2'); ?>
                        				<p><strong><a href="<?php echo the_field('link_url_2'); ?>" style="font-family: 'pt serif', times, serif;font-style: italic;"><?php the_field('link_text_2'); ?></a></strong></p>
                    				</div>
                			</div>
                			<div>
                    				<a href="<?php echo the_field('link_url_3'); ?>" style="color:#000;text-decoration:none;"><h3><?php the_field('heading_3'); ?></h3></a>
		   				<a href="<?php echo the_field('link_url_3'); ?>"><img src="<?php echo the_field('image_3'); ?>" alt=""></a>
                    				<hr>
                    				<div>
                        				<?php the_field('content_3'); ?>
                        				<p><strong><a href="<?php echo the_field('link_url_3'); ?>" style="font-family: 'pt serif', times, serif;font-style: italic;"><?php the_field('link_text_3'); ?></a></strong></p>
                    				</div>
                			</div>            
				</div>
			<?php endwhile; // end of the loop. ?>	
		</div>
		<?php get_sidebar(); ?>
	</div>


<?php get_footer(); ?>
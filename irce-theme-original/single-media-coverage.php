<?php
/*
Template Name Posts: Media Coverage
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('media-coverage');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          <h1>Media Coverage</h1>
			<?php $args = array( 'post_type' => 'media-coverage', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
					  <div class="media-section">
				   <?php if(get_field('logo')): ?>
			           <a href="<?php echo the_field('link_to_site'); ?>"><img src="<?php echo the_field('logo'); ?>"/></a>
				   <?php endif; ?>
				   <?php if(get_field('link_to_site')): ?>
			           <h2><a href="<?php echo the_field('link_to_site'); ?>" target="_blank"><?php the_title(); ?></a></h2>
                                   <?php else: ?>
			           <h2><?php the_title(); ?></h2>
                                   <?php endif; ?>
			           <?php echo the_field('excerpt'); ?>
			           <?php if(get_field('link_to_site')): ?>
			           <p><a href="<?php echo the_field('link_to_site'); ?>" class="full-story" target="_blank">Full Story &raquo;</a></p>
						<?php endif; ?>
						<?php if(get_field('link_to_pdf')): ?>
					   <p><a href="<?php echo the_field('link_to_pdf'); ?>" class="pdf-icon" target="_blank">Download PDF</a></p>
						<?php endif; ?>
			          </div>
			<?php endwhile; ?>

			</section>
		  </article>
	    </div>
		<aside>			
			<?php get_sidebar(); ?>
		</aside>
	</div>
	<?php get_footer(); ?>
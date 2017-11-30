<?php
/*
Template Name Posts: The Market Featured
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
        
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry events">
            <h2 class="entry-title"><?php the_title(); ?></h2>
		
                    <?php $args = array( 'post_type' => 'featured');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="event cf">
			                    <a href="<?php echo the_field('featured_url'); ?>"><img src="<?php echo the_field('image'); ?>" alt=""></a>
			                    <div>
			                        <h3 style="font-size: 1.5em;font-weight:400;margin:15px 0;"><?php the_title(); ?></h3>
			                        <p><?php echo the_field('content'); ?></p>
									
			                    </div>
			                </div>
			                
					<?php endwhile; ?>
					
			
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php
/*
Template Name Posts: Exhibitor Spotlight
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
        
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry events">
            <h2>Spotlights</h2>
                <p><?php echo category_description( '4' ); ?></p>
                <hr>
                <div>
				<?php $args = array( 'post_type' => 'exhibitors-spotlight' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $thumb_id = get_post_thumbnail_id(); ?>
					<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
					<?php $thumb_url = $thumb_url_array[0]; ?>
					<div class="spot">
						<a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo $thumb_url ?>" alt=""></a>
                    	<p><a href="<?php echo post_permalink( $ID ); ?>"><strong><?php the_title() ?></strong></a></p>
          
					</div>
				<?php endwhile; ?>
				</div>
								



        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
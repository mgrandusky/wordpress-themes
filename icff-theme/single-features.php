<?php
/*
Template Name Posts: Featured
*/
?>
<?php get_header(); ?>
	<div id="main" class="cf">
		<div id="content" class="cf">
			<div class="entry cf">
                <h2>Features</h2>
				<p>Innovative exhibits and events highlight contemporary design’s current best and brightest.</p>
                <hr>
                <div>
				<?php $args = array( 'post_type' => 'features' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $thumb_id = get_post_thumbnail_id(); ?>
					<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
					<?php $thumb_url = $thumb_url_array[0]; ?>
        
          				<div class="result">
		                    <h2><?php the_title() ?></h2>
				    <h3 style="font-size:18px;line-height:18px;"><?php the_subtitle() ?></h3>
		                   <?php if($thumb_url != "https://www.icff.com/wp-content/uploads/2015/04/default.png"){ ?><img src="<?php echo $thumb_url ?>" alt="" class="right" style="margin-left:10px;"><?php } ?>
		                    	
		                    <?php the_content(); ?>
		                    

		                </div>
		                <hr>

				<?php endwhile; ?>
				</div>
				</div>
		</div>
<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
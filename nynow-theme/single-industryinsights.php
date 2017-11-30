<?php
/*
Template Name Posts: Industry Insights
*/
?>
<?php get_header(); ?>
<style>
img {
    border: 0px none;
    float: left;
    margin-right: 15px;
}
</style>
	<div id="main" class="cf">
		<div id="content" class="cf">
			<article class="hentry press-releases">
                <h2>Industry Insights</h2>
                <hr>
                <div>
				<?php $args = array( 'post_type' => 'industry-insights', 'paged' => get_query_var('paged')  );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
				
				?>
                <?php $thumb_id = get_post_thumbnail_id(); ?>
<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
<?php $thumb_url = $thumb_url_array[2];  ?>
          				<div class="result">
		               
							<h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h3>
		                    
			
		                    <? the_post_thumbnail(array(150,150)); ?><?php the_excerpt(); ?>
		                    <a href="<?php echo post_permalink( $ID ); ?>">Read More &raquo;</a>
<br clear="all">
		                </div>
		                <hr>

				<?php endwhile; ?>
				</div>
				</article>
		<?php wp_pagenavi( array( 'query' => $loop ) );

		wp_reset_postdata(); ?>
			
		</div>
<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
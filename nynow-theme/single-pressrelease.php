<?php
/*
Template Name Posts: Press Releases
*/
?>
<?php get_header(); ?>
	<div id="main" class="cf">
		<div id="content" class="cf">
			<article class="hentry press-releases">
                <h2>Press Releases</h2>
                <hr>
                <div>
				<?php $args = array( 'post_type' => 'press-release', 'paged' => get_query_var('paged')  );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
          				<div class="result">
		               
							<h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h3>
		                    <span class="tagline"><?php the_subtitle() ?></span><br><br>
			
		                    <?php the_excerpt(); ?>
		                    <a href="<?php echo post_permalink( $ID ); ?>">Read More &raquo;</a>

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
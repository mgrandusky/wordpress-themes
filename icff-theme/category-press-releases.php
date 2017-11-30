<?php get_header(); ?>
	<div id="main" class="cf">
		<div id="content" class="cf">
			<div class="entry cf">
                <h2>Press Releases</h2>
                <hr>
                <div>	
				
				<?php 
				wp_reset_query();
 
    				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'press-release', 'posts_per_page' => 5, 'paged' => $paged );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
        
          				<div class="result">
		                    <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h2>
		                    <?php the_excerpt(); ?>
		                    <a href="<?php echo post_permalink( $ID ); ?>" style="font-style: italic;font-family: 'pt serif', times, serif;">Read More</a>

		                </div>
		                <hr>

				<?php endwhile; ?>
				</div>
				</div>
		<?php if(function_exists('wp_pagenavi') ) { wp_pagenavi(array( 'query' => $loop )); } ?>
		</div>
<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
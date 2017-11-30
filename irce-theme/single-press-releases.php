<?php

/*

Template Name Posts: Press Releases

*/

?>

	

<?php get_header(); ?>

<script>jQuery('body').addClass('press-releases');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

                <h1>Press Releases</h1>

              

                <div>	

				

				<?php 

				wp_reset_query();

 

    				$paged = get_query_var('paged') ? get_query_var('paged') : 1;

				$args = array( 'post_type' => 'press-release', 'posts_per_page' => 10, 'paged' => $paged );

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

	

        

          			

						<div class="media-section">

				           <h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h2>

				           <p><?php the_excerpt(); ?>

				           <a href="<?php echo post_permalink( $ID ); ?>" class="readmore-bold">Full Story &raquo;</a></p>



				          </div>

		           



				<?php endwhile; ?>

				<div class="paginate" style="height:30px;border-top:1px solid #ddd;display:none;">

		<?php if(function_exists('wp_pagenavi') ) { 
			wp_pagenavi(array( 'query' => $loop )); ?>
		
		<?php } ?>

				</div>

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

<?php get_footer(); ?>
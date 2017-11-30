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

                <h1 class="header">Press Releases</h1>

              

                <div>	

				

				<?php 

				wp_reset_query();

 

    				$paged = get_query_var('paged') ? get_query_var('paged') : 1;

				$args = array( 'post_type' => 'press-release', 'posts_per_page' => 10, 'paged' => $paged );

				$loop = new WP_Query( $args );

				

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

	
<?php $thumb_id = get_post_thumbnail_id(); ?>
				<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
				<?php $thumb_url = $thumb_url_array[2];  ?>
        

          			

						<div class="media-section" style="margin-bottom:15px;">

				           <? the_post_thumbnail(array(150,150), array('class' => 'alignright')); ?><h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h2>

				           <p style="margin-top:-15px;"><?php the_excerpt(); ?>

				           <a href="<?php echo post_permalink( $ID ); ?>" class="readmore-bold">Read More &raquo;</a></p>
					   


				          </div>

		           



				<?php endwhile; ?>

				<div style="height:30px;border-top:2px solid #000;margin-top:50px;">

		<?php if(function_exists('wp_pagenavi') ) { wp_pagenavi(array( 'query' => $loop )); } ?>

				</div>

		</section>

      </article>

    </div>

	      <?php get_sidebar(); ?>

	  </div>

	  <!-- #main --> 

	</div>

	<!-- #main-container -->

<?php get_footer(); ?>
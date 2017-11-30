<?php

/*

Template Name Posts: Show News

*/

?>

	

<?php get_header(); ?>

<script>jQuery('body').addClass('inner');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article id="contentInfo">

        <section>

                <h1 class="header">Show News</h1>
		<section class="no-marginList" id="pressreleases-list">

				<?php 

				wp_reset_query();

 

    				$paged = get_query_var('paged') ? get_query_var('paged') : 1;

				$args = array( 'post_type' => 'latest-news', 'cat' => '4');

				$loop = new WP_Query( $args );


				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $thumb_id = get_post_thumbnail_id(); ?>
				<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
				<?php $thumb_url = $thumb_url_array[2];  ?>
        

		           
				<article class="media-right">
				    	 <div class="image-box"><a href="<?php echo post_permalink( $ID ); ?>"><? the_post_thumbnail("full", array('class' => 'alignnone')); ?></a></div>
					  <div class="div-left">
					     <h2 class="article-headline"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h2>
				    	               <?php the_excerpt(); ?>
				                       <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Full Story</span> &raquo;</a>
								</div>

				 </article>


				<?php endwhile; ?>

				</section>

	             <hr class="divider"/> 
	        	     <div class="lm-block clearfix">
	       				 <input type="button" class="submit-no-color orange-loadmore learnmorebtn" id="loadMore" value="Load More">             
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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<script type="text/javascript">

	$( window ).load(function() {
	    // Handler for .ready() called.


		var currentIndex = 10;
		var numMore = 10;
		var totalItems = $("section#pressreleases-list article").length;
		var maxCount = 200;


		$("section#pressreleases-list article").hide();
		$("section#pressreleases-list article").addClass("firstLoad");
		if ($( "section#pressreleases-list article" ).hasClass( "firstLoad" )) { 
			$("section#pressreleases-list article.firstLoad").slice(0,10).show();
			clickButton();
		}

		function clickButton() {
	    var currentLength = $("section#pressreleases-list article.firstLoad:visible").length;
	        if (currentLength >= totalItems || currentLength >= maxCount) {
	            $("#loadMore").hide();     
	            $(".lm-block").hide();       
	   	        $("section#pressreleases-list article").removeClass("firstLoad");			
	        } else {
	            $("#loadMore").show();
	            $(".lm-block").show();   
	        }

		}
		$("#loadMore").click(function (e) { 
	    	e.preventDefault();


			if ($( "section#pressreleases-list article" ).hasClass( "firstLoad" )) { 
				    $("section#pressreleases-list article.firstLoad").slice(currentIndex, currentIndex + 10).show();	

				    currentIndex += 10;
			    	clickButton();			   
		    } 

		});
	});
	</script>

<?php get_footer(); ?>
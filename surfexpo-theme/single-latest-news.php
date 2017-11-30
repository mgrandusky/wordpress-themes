<?php

/*

Template Name Posts: Latest News

*/

?>

<?php get_header(); ?>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
 <script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.b77086fe-9305-474d-b4eb-d43fe36fccf8",onhover: false, "doNotCopy":true,"hashAddressBar":false,"doNotHash":true});var st_type="wordpress4.0";</script>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('inner press-article');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
		
			<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();  ?>     

			<?php $categories = get_the_category( $post->ID );
		

			?>
			<?php if($categories[0]->name == "Industry News"){ ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>news/industry-news" ><h1 class="header">Industry News</h1></a> 
		<?php }else{ ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>news/show-news" ><h1 class="header">Show News</h1></a> 
		<?php } ?> 
	          <article class="open-text">
	            <h1 class="article-headline large"><?php the_title(); ?></h1>
		    <h2 class="article-subheader"><?php the_field('subtitle'); ?></h2>

	            <p class="article-date">Posted <?php the_date('m/d/Y'); ?></p>

					<div class="share clearfix">
	               		<span style="cursor:pointer;" class='st_facebook_custom' displayText='Facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
	                    <span style="cursor:pointer;" class='st_twitter_custom' displayText='Tweet' st_via="SurfExpo" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
	                    <span style="cursor:pointer;" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_email_custom' displayText='Email'></span>
					    <span style="cursor:pointer;" class="print" onclick="javascript:window.print()">Print</span>                    
	               </div>

<?php $thumb_id = get_post_thumbnail_id(); ?>
											<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
											<?php $thumb_url = $thumb_url_array[0]; ?>
											<?php if($thumb_url != "http://prod.surfexpo.com/wp-includes/images/media/default.png"){ ?>
											<p><img src="<?php echo $thumb_url ?>" alt="" class="featured"></p>
											<?php } ?>
	            <?php the_content(); ?>
				<?php

				                        } // end while

				                    } // end if

				                    ?>


	          </article>
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


<?php get_footer(); ?>

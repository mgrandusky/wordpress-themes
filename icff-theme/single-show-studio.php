<?php
/*
Template Name Posts: ICFF Studio
*/
?>
<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content" class="cf">
				<div class="entry studio cf">
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
							
                            the_post(); 
                            //
                            ?>
							<?php $thumb_id = get_post_thumbnail_id(); ?>
							<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
							<?php $thumb_url = $thumb_url_array[0]; ?>
                            <h2 class="entry-title">ICFF Studio</h2>
							<div id="attachment_465" class="wp-caption-featured alignnone" style="margin: 0;">
		                        <img src="<?php echo $thumb_url ?>" alt="" style="width:100%; height:auto;" class="featured">
		                        <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		                    </div>
                            <?php
                            // Post Content here
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </section>

<div id="studio-home" class="cf">
        <div class="cf">
		<h2>Participants</h2>
		
	<section class="selectyear-studio" style="float:right;margin-top:-70px;width:295px;color:#fff;margin-right:0px;">YEAR<br>



	<?php wp_dropdown_categories( 'child_of=35&order=DESC&orderby=name' ); ?>
	<script type="text/javascript">
		$( document ).ready(function() {
				$('.2015').show();
				$('.2015').addClass( "visible" );
				$('.2014').hide();
				$('.2013').hide();
				$('.2012').hide();
				var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		if (x%3 == 0){
		$(this).addClass('end3');
		}
		console.log(x);
		x++;
	});
			});
		
		var dropdown = document.getElementById("cat");
		function onCatChange() {
			
			if($('#cat').val() == '32'){
				$('.2015').hide();
				$('.2015').removeClass( "visible" );
				$('.2014').show();
				$('.2014').addClass( "visible" );
				$('.2013').hide();
				$('.2013').removeClass( "visible" );
				$('.2012').hide();
				$('.2012').removeClass( "visible" );
				var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		if (x%3 == 0){
		$(this).addClass('end3');
		}
		console.log(x);
		x++;
	});
			}
			if($('#cat').val() == '33'){
				$('.2015').hide();
				$('.2015').removeClass( "visible" );
				$('.2014').hide();
				$('.2014').removeClass( "visible" );
				$('.2013').show();
				$('.2013').addClass( "visible" );
				$('.2012').hide();
				$('.2012').removeClass( "visible" );
				var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		if (x%3 == 0){
		$(this).addClass('end3');
		}
		console.log(x);
		x++;
	});
			}
			if($('#cat').val() == '34'){
				$('.2015').hide();
				$('.2015').removeClass( "visible" );
				$('.2014').hide();
				$('.2014').removeClass( "visible" );
				$('.2013').hide();
				$('.2013').removeClass( "visible" );
				$('.2012').show();
				$('.2012').addClass( "visible" );
				var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		if (x%3 == 0){
		$(this).addClass('end3');
		}
		console.log(x);
		x++;
	});
			}
			 
		
	
	if($('#cat').val() == '49'){
				$('.2015').show();
				$('.2015').addClass( "visible" );
				$('.2014').hide();
				$('.2014').removeClass( "visible" );
				$('.2013').hide();
				$('.2013').removeClass( "visible" );
				$('.2012').hide();
				$('.2012').removeClass( "visible" );
				var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		if (x%3 == 0){
		$(this).addClass('end3');
		}
		console.log(x);
		x++;
	});
			}
			 
		
		}
	
		dropdown.onchange = onCatChange;
				
			</script>



</section>
            
		
			
				<?php $args = array( 'post_type' => 'studio_participants','posts_per_page'=> '-1', 'order' => 'ASC'); ?>
	
				<?php $loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
					<?php $thumb_id = get_post_thumbnail_id();  ?>
					<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);  ?>
					<?php  $thumb_url = $thumb_url_array[0]; ?>
					<?php  $category = get_the_category( $custompost ); ?>
					<?php $tag_ids = wp_get_post_tags( $post->ID ); ?>
			
					<div class="<?php echo $category[0]->cat_name; ?>">
						<a href="<?= get_post_meta($post->ID, 'participants_url', true); ?>" target="_blank"><img src="<?php echo $thumb_url ?>" alt=""></a>
					<hr style="border-top:1px solid #fff;">
                    	<a href="<?= get_post_meta($post->ID, 'participants_url', true); ?>" target="_blank"><?php the_title() ?></a></p>
          
					</div>
				<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
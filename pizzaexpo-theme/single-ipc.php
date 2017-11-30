<?php

/*

Template Name Posts: IPC

*/

?>
<?php get_header(); ?>

    <div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
    
    <div id="main" class="container">

        <div id="content" class="col-md-8 col-sm-7">
<?php /*$thumb_id = get_post_thumbnail_id(); ?>
<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
<?php $thumb_url = $thumb_url_array[0]; ?>
            <?php if($thumb_url != "http://www.pizzaexpo.com/wp-includes/images/media/default.png"): ?><img class="ft-img" src="<?php echo $thumb_url ?>" alt=""><?php endif;*/ ?>
          	<?php if (have_posts()) : ?>
            <?php /*
            // $thumb_id = get_post_thumbnail_id(); 
            // $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); 
            // $thumb_url = $thumb_url_array[0]; 
        ?>
        <!-- <?php #if($thumb_url != "http://www.pizzaexpo.com/wp-includes/images/media/default.png"): ?>
            <img class="ft-img" src="<?php #echo $thumb_url ?>" alt="">
        <?php #endif; ?> -->
        <?php */
        if ( has_post_thumbnail() ) : 
            the_post_thumbnail(); 
        endif;
        ?>
        
            <article class="entry">


						<?php while (have_posts()) : the_post(); ?>



				

		

						<?php the_content(); ?>

		



					



						<?php endwhile; ?>



						<?php endif; ?>
                        <hr />
                        <h2>RESULTS FOR THE COMPETITION</h2>
<div class="sponsor">SPONSORED BY<br><img src="http://www.pizzaexpo.com/wp-content/uploads/2015/11/Cal_Milk_150x150_true.jpg" alt="" style="float:right;"/></div>
                        <br/>

                       
                        	<select id="cat" name="cat" class="postform" style="width:200px;">
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
                                <option value="2012">2012</option>
							</select>
                                               <script type="text/javascript">
		$( document ).ready(function() {
				$('.2016').show();
				$('.2015').hide();
				$('.2014').hide();
				$('.2013').hide();
				$('.2012').hide();
			});
	
		var dropdown = document.getElementById("cat");
		function onCatChange() {

			if($('#cat').val() == '2016'){
				$('.2016').show();
				$('.2015').hide();
				$('.2014').hide();
				$('.2013').hide();
				$('.2012').hide();

			}
			
			if($('#cat').val() == '2015'){
				$('.2016').hide();
				$('.2015').show();
				$('.2014').hide();
				$('.2013').hide();
				$('.2012').hide();

			}
			if($('#cat').val() == '2014'){
				$('.2016').hide();
				$('.2015').hide();
				$('.2014').show();
				$('.2013').hide();
				$('.2012').hide();
			}
			if($('#cat').val() == '2013'){
				$('.2016').hide();
				$('.2015').hide();
				$('.2014').hide();
				$('.2013').show();
				$('.2012').hide();
			}
			if($('#cat').val() == '2012'){
				$('.2016').hide();
				$('.2015').hide();
				$('.2014').hide();
				$('.2013').hide();
				$('.2012').show();
			}
			 
		
		}
	
		dropdown.onchange = onCatChange;
			</script>
						<br clear="all" />
				<?php $args = array( 'post_type' => 'ipc-results', 'posts_per_page' => 100);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="<?php the_title(); ?>" style="display:none;">

				   <?php the_content(); ?>

		        </div>

			     <?php endwhile; ?>
   
	      </article>

	    </div>





	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>

</div>

<?php get_footer(); ?>
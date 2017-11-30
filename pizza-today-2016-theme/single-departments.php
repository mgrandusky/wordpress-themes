<?php get_header(); ?>
<script>
$(document).ready(function() {
          $('body').addClass('inner');
        }); 
</script>
<style>#menu-item-49413 a { color: #ed3830; }</style>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
 
 <?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
		<section class="article-head twelve columns row">
	        <p><span class="date"><?php the_date(); ?></span> | <span class="cat"><?php if (get_the_term_list( $ID, 'departments-categories', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'departments-categories', '', ', ', '' ) ?><?php endif; ?></span></p>
    		<h1 class="article-headline"><?php the_title(); ?></h1>
        	<p class="author">By <?php the_author(); ?></p>
	        <!--div class="flex-parent between alignCenter">
    	        <h1 class="article-headline">Pizza Trends: The Big Dance</h1><p class="gallery-slider-index">1 of 12</p>
        	</div-->
	        <hr class="thick"/>
        </section>

		

        <section class="article-block columns twelve row"> 		           
   	      <article> 
                <div class="row">
                   <div class="one columns social left-col">
                    	<div class="share-col">Share</div>
		    	        <!-- Share This -->
                        <div class="share clearfix"> 
							<span class='st_facebook_custom' displayText='Facebook'></span>
							<span class='st_twitter_custom' displayText='Tweet' st_via="KBB"></span>
							<span class='st_linkedin_custom' displayText='LinkedIn'></span>
							<span class='st_googleplus_custom' displayText='Google +'></span>
							<span class='st_email_custom' displayText='Email'></span>
							<span class="print"><a href="javascript:window.print()">Print</a></span> 
	            		</div>     
                    </div>              
                    
                    <div class="eleven columns right-col">  
	                  <section>
				<?php the_content(); ?>
                    </section>
	           <section class="more-block row">
    	     	   <h2 class="more-title">More <?php echo get_the_term_list( $ID, 'departments-categories', '', ', ', '' ) ?></h2>
<div class="flex-parent start alignStart twelve row">
<?php
	$postTitle = get_the_title(); 
 				$category = explode(',',get_the_term_list( $ID, 'departments-categories', '', ', ', '' ));
				if($category[1]): $cat = $category[1]; else: $cat = $category[0]; endif;
				$args = array(
	'posts_per_page' =>7,
	'post_type' => 'departments', 
	'tax_query' => array(
		array(
			'taxonomy' => 'departments-categories',
			'field'    => 'slug',
			'terms'    => $cat,
		),
	),
	
);
$I = 1;
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
			if(get_the_title() != $postTitle):
			if($I <= 3):
		      		?>
	                      
<article class="row four columns half-tab"> 
<?php if(has_post_thumbnail()): ?>
    	    	    	  	<p class="img-fl" style="max-width:250px;"><a href="<?= post_permalink( $ID ); ?>"><?php the_post_thumbnail( array(220, 220) ); ?></a></p>
						<?php else: ?>
					<p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/default_220.png"></a></p>
						<?php endif; ?>	
	                	    <div>
			                            <br>    
    			    	    	<h2 class="article-headline-more"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>                
<p><?php echo excerpt(20); ?>
                                <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
                		     </div>   
	    			      </article>
        	            	    	      <?php
$I++;
endif;
endif;
                endwhile; ?>             
            </div>       
	                                                                               
			        </section>                   
					</div>
      		    </div>
   	      </article>
    	</section>              
<?php


endwhile;
endif;
?>
    </div>
  </div>


	      <?php get_sidebar(); ?>


  


</div>





<?php get_footer(); ?>      
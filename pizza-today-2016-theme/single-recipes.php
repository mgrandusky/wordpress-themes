<?php get_header(); ?>
<style>#menu-item-49414 a { color: #ed3830; }</style>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
 <?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
		<section class="article-head twelve columns row">
		<span class="date row"  style="text-transform:uppercase;font-weight:600;"><?php if (get_the_term_list( $ID, 'recipes_custom', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'recipes_custom', '', ', ', '' ) ?><?php endif; ?></span>
    		<h1 class="article-headline"><?php the_title(); ?></h1>

	        
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
    	     	   <h2 class="more-title"><a href="#">More <?php echo get_the_term_list( $ID, 'recipes_custom', '', ', ', '' ) ?></a></h2>
<div class="flex-parent start alignStart twelve row">
<?php
	$postTitle = get_the_title(); 
 				$category = explode(',',get_the_term_list( $ID, 'recipes_custom', '', ', ', '' ));
				if($category[1]): $cat = $category[1]; else: $cat = $category[0]; endif;
 
				$args = array(
	'posts_per_page' =>7,
	'post_type' => 'recipes', 
	'tax_query' => array(
		array(
			'taxonomy' => 'recipes_custom',
			'field'    => 'slug',
			'terms'    => $cat,
		),
	),
	
);
$I = 1;
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
			if(get_the_title() != $postTitle):
			if($I <= 6):
		      		?>
	                      
<article class="row four columns half-tab"> 
<?php if(has_post_thumbnail()): ?>
    	    	    	  	<p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><?php the_post_thumbnail( array(220, 220) ); ?></a></p>
						<?php else: ?>
					<p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/default_220.png"></a></p>
						<?php endif; ?>	
	                	    <div>
			                                
    			    	    	<h2 class="article-headline-more"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>               
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
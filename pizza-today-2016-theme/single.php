<?php get_header(); ?>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
 <?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
		<section class="article-head twelve columns row">
	        <p><span class="date"><?php the_date(); ?></span> | <span class="cat"><?php if (get_the_term_list( $ID, 'product_showcase_custom', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'product_showcase_custom', '', ', ', '' ) ?><?php endif; ?></span></p>
    		<h1 class="article-headline"><?php the_title(); ?></h1>
        	<p class="author">By <?php the_author(); ?></p>
	        
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
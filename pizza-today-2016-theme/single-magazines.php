<?php get_header(); ?>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
      
      <section class="full-width twelve row">
      
      
	      <div class="two-col twelve columns row">
          	<p style="font-size:24px;font-weight:500;font-family:'Roboto Slab', sans-serif;font-size:24px;"><?php the_title(); ?></p><p><a href="<?php bloginfo('siteurl'); ?>/magazines" class="more"><span>ALL MAGAZINE ISSUES</span><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
          </div>
          
          <section class="feature-section twelve columns row">
          <hr/>
    	        <article class="row">
                       <a href="#"><?php the_post_thumbnail('medium'); ?></a>
                       <div>
			<div class="mag-content">
    	                   <?php the_content(); ?>
			</div>
                       </div>    
	            </article>      
		  </section>
		  <section class="no-marginList twelve columns row magazine" id="article-list">
		<?php
			// Find connected posts
				$connected = new WP_Query( array(
				  'connected_type' => 'posts_to_magazines',
				  'connected_items' => get_queried_object(),
				  'nopaging' => true,
				) );
				
				// Display connected posts
				if ( $connected->have_posts() ) :
				?>

				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    	        <article class="row">
                       <p class="img-fl"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(300, 200) ); ?></a></p>
                       <div class="media-right">
                       	   <p><?php echo get_the_date(); ?> |
				<span class="cat">
				<?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?>
				<?php if (get_the_term_list( $ID, 'departments-categories', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'departments-categories', '', ', ', '' ) ?><?php endif; ?>
				</span>
			   </p>
    	                   <h2 class="article-headline">
        	                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    			            <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="readmore">Read More</a></p>
                       </div>    
	            </article>
                            <?php endwhile; ?>
				
				<?php 
				// Prevent weirdness
				wp_reset_postdata();

				endif;
				?>                                                 
         
               </section> 
               
		   <!--   <div class="two-col twelve columns row">
    	      	<p><a href="#" class="more"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;<span>PREVIOUS ISSUE</span></a></p>
                <p><a href="#" class="more"><span>NEXT ISSUE</span><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
        	  </div> //-->
      
      </section>
    </div>
  </div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
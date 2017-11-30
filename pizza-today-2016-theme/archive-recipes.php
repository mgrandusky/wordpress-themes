<?php get_header(); ?>
<script>
$(document).ready(function() {
          $('body').addClass('inner');
        }); 
</script>

  <div class="container" id="main">

	  <div class="fluid-width">	
		<div class="inner-block row">
        
	         <section> 
				<h1 class="header top">Recipes</h1>  

	            <section class="no-marginList eleven columns row" id="article-list">
   

        <?php

$args = array(
	'posts_per_page' => 10,
	'post_type' => 'recipes', 
	'paged' => $paged,
	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();

?>

	  
    	        <article class="row">
                       <?php if(has_post_thumbnail()): ?>
				          <p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><?php the_post_thumbnail( array(220, 220) ); ?></a></p>
						<?php else: ?>
					<p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/default_220.png"></a></p>
						<?php endif; ?>	

                       <div class="media-right med">
			<span class="date row"  style="text-transform:uppercase;font-weight:600;"><?php if (get_the_term_list( $ID, 'recipes_custom', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'recipes_custom', '', ', ', '' ) ?><?php endif; ?></span>
                       <h2 class="article-headline"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
    		            <p><?php the_excerpt(); ?>
                           <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
                       </div>    
	            </article>            

<?php
endwhile;
?>
           	 </section>
    
<?php if(function_exists('wp_paginate')) { wp_paginate(); }   ?>             

        	 </section>   

          </div>
      </div>
<?php get_sidebar(); ?>


  
  <!-- #main --> 

</div>

<!-- #main-container -->

<?php get_footer(); ?>
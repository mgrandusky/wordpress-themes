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
				<h1 class="header top">Our Experts</h1>  

	            <section class="no-marginList eleven columns row" id="article-list">
   

        <?php

$args = array(
	'posts_per_page' => 10,
	'post_type' => 'our-experts', 
	'paged' => $paged,
	'orderby' => 'title',
	'order'   => 'ASC',
	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();

?>

	  
    	        <article class="row">
                       
                       <p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><img src="<?php the_field('picture'); ?>" ></a></p>
				

                       <div class="media-right med expert">
                       <h2 class="article-headline"><?php the_title(); ?></h2>
    		            <p><?php the_content(); ?>
                           <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>See all articles by <?php the_title(); ?></span> &rsaquo;</a></p>
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
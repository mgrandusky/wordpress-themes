<?php 

/**  Template Name: News Template */ 

?>

<?php get_header(); ?>
 <div class="container" id="main">

	  <div class="fluid-width">	
		<div class="inner-block row">
        
	         <section> 
				<h1 class="header top">News</h1>  

	            <section class="no-marginList eleven columns row" id="article-list">
   

        <?php

$args = array(
	'posts_per_page' => 30,
	'post_type' => array('pizza-headlines','pizza-expo-news','press-release','videos'), 

	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
//$obj = get_post_type_object( 'pizza-headlines' );
//echo $obj->labels->singular_name;
?>

	  
    	        <article class="row">
                	   <p class="date row"><?php echo get_the_date(); ?> | </p>
			<?php if(has_post_thumbnail()): ?>
                       <p class="img-fr"><a href=""><?php the_post_thumbnail( array(220, 220) ); ?></a></p>
			<?php endif; ?>		
                       <div class="media-right med">
                       <h2 class="article-headline"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
    		            <p><?php the_excerpt(); ?>
                           <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
                       </div>    
	            </article>            

<?php
endwhile;
?>
           	 </section>
    
        	     <div class="lm-block row">
       				 <input type="button" class="btn-shade learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>              

        	 </section>   

          </div>
      </div>
<?php get_sidebar(); ?>


  
  <!-- #main --> 

</div>

<!-- #main-container -->

<script type="text/javascript"> 
$(document).ready(function() {
 
    // Handler for .ready() called.
var currentIndex = 10;
var numMore = 10;
 
var totalItems = $("section#article-list article").length;
var maxCount = 100;
 
$("section#article-list article").hide();
$("section#article-list article").slice(0,10).show();
 
clickButton();
 
function clickButton() {
    var currentLength = $("section#article-list article:visible").length;
 
                      if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();    
            $(".lm-block").hide();      
        } else {
            $("#loadMore").show();
            $(".lm-block").show();  
        }
       
         jQuery("img.lazy").lazy({
             bind: "event",
             effect: "fadeIn",
             effectTime: 600
        })     
        
}
 
$("#loadMore").click(function (e) {
    e.preventDefault();
    $("section#article-list article").slice(currentIndex, currentIndex + 10).show();
    currentIndex += 10;
    clickButton();
});
 
});
</script>    


<?php get_footer(); ?>
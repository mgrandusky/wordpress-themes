<?php

/*

Template Name Posts: Buyers Exhibitor Catalog

*/

?>

<?php get_header(); ?>

<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
	     <h1 class="header"><?php the_title(); ?></h1>  
            <ul class="no-marginList" id="catalogList">
				<?php $catalog_listings = get_field('catalogs'); ?>
				<?php if($catalog_listings): ?>
				<?php foreach ($catalog_listings as $catalog_listing) { ?>
					<li class="one-fourth">
		              <p><a href="<?php echo $catalog_listing['link']; ?>" target="_blank"><img src="<?php echo $catalog_listing['cover']; ?>" border="0"/></a></p>
					  <span><a href="<?php echo $catalog_listing['link']; ?>" target="_blank"><?php echo $catalog_listing['title']; ?></a></span>
		            </li>
					
             <?php } ?>
				<?php endif; ?>
                                                 
                                       
			</ul>
        	     <div class="lm-block clearfix">
			<hr class="divider">
       				 <input type="button" class="submit-no-color orange-loadmore learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>             
		
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

<script type="text/javascript">

$( window ).load(function() {
    // Handler for .ready() called.
	

	var currentIndex = 24;
	var numMore = 24;
	var totalItems = $("ul#catalogList li").length;
	var maxCount = 200;
	
	
	$("ul#catalogList li").hide();
	$("ul#catalogList li").addClass("firstLoad");
	if ($( "ul#catalogList li" ).hasClass( "firstLoad" )) { 
		$("ul#catalogList li.firstLoad").slice(0,24).show();
		clickButton();
	}
	
	function clickButton() {
    var currentLength = $("ul#catalogList li.firstLoad:visible").length;
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();     
            $(".lm-block").hide();       
   	        $("ul#catalogList li").removeClass("firstLoad");			
        } else {
            $("#loadMore").show();
            $(".lm-block").show();   
        }
        
	}
	$("#loadMore").click(function (e) { 
    	e.preventDefault();


		if ($( "ul#catalogList li" ).hasClass( "firstLoad" )) { 
			    $("ul#catalogList li.firstLoad").slice(currentIndex, currentIndex + 12).show();	

			    currentIndex += 12;
		    	clickButton();			   
	    } 

	});
});
</script>

<?php get_footer(); ?>

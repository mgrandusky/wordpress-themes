<?php

/*

Template Name Posts: Events

*/

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('inner');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
		<h1 class="header">EVENTS</h1>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<section class="feature">
				<?php the_content(); ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>

			  
				<?php $event_listings = get_field('events'); ?>
				<?php if($event_listings): ?>
				<?php foreach ($event_listings as $event_listing) { ?>
				  <article>        
			    	     <hr class="divider site-color"/>
			        	 <p><em><?php echo $event_listing['date']; ?></em></p>
				         <h2><?php echo $event_listing['title']; ?></h2>
			    	     <?php if($event_listing['location']){ ?><p style="margin-bottom:0px;"><strong>Location:</strong> <?php echo $event_listing['location']; ?></p><?php } ?>
			        	 <?php if($event_listing['time']){ ?><p><strong>Time:</strong> <?php echo $event_listing['time']; ?></p><?php } ?>
			  			 <?php if($event_listing['image']){ ?><a href=""><img class="imageFloatRight" src="<?php echo $event_listing['image']; ?>" border="0"/></a><?php } ?>
				         <p><?php echo $event_listing['content']; ?></p>    
				         <?php if($event_listing['learn_more_link']){ ?><p><a href="<?php echo $event_listing['learn_more_link']; ?>" class="submit-no-color orange-bdr">Learn More</a></p><?php } ?> 
			         </article>


					
             <?php } ?>
				<?php endif; ?>
			  
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
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script> ß

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script type="text/javascript">

	$(".headerOptions").click(function () {

	    $header = $(this);
	    //getting the next element
	    $content = $header.next();
		if($(this).hasClass('open-options') == true){
			$(this).removeClass('open-options');
		} else{
		    $(this).addClass('open-options');
		}
		
	    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    	$content.slideToggle(500, function () {
        //execute this after slideToggle is done

        });

});

$( window ).load(function() {
    // Handler for .ready() called.
	

	var currentIndex = 21;
	var numMore = 21;
	var totalItems = $("ul#myList li").length;
	var maxCount = 200;
	
	
	$("ul#myList li").hide();
	$("ul#myList li").addClass("firstLoad");
	if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
		$("ul#myList li.firstLoad").slice(0,21).show();
		clickButton();
	}
	
	function clickButton() {
    var currentLength = $("ul#myList li.firstLoad:visible").length;
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();     
            $(".lm-block").hide();       
   	        $("ul#myList li").removeClass("firstLoad");			
        } else {
            $("#loadMore").show();
            $(".lm-block").show();   
        }
        
	}
	$("#loadMore").click(function (e) { 
    	e.preventDefault();


		if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
			    $("ul#myList li.firstLoad").slice(currentIndex, currentIndex + 20).show();	

			    currentIndex += 20;
		    	clickButton();			   
	    } 

	});
});
</script>
<?php get_footer(); ?>

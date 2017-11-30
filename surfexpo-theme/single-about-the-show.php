<?php

/*

Template Name Posts: About the Show

*/

?>
<?php get_header(); ?>

<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
        <h1 class="header">About The Show</h1>
        <section>
          <h1 class="headline caps">
            <?php the_field('headline'); ?>
          </h1>
          <div class="bg-block">
            <ul class="no-marginList displayFlex-block">
              <li class="one-third">
                <div class="centertxt">
                  <p><span class="lrgFont white">
                    <?php the_field('number_of_booths'); ?>
                    </span> <span class="medFont white">BOOTHS</span> </p>
                </div>
              </li>
              <li class="one-third">
                <div class="centertxt">
                  <p><span class="lrgFont white">
                    <?php the_field('number_of_store_fronts'); ?>
                    </span> <span class="medFont white">STORE FRONTS</span> </p>
                </div>
              </li>
              <li class="one-third">
                <div class="centertxt">
                  <p><span class="lrgFont white">
                    <?php the_field('number_of_attendees'); ?>
                    </span> <span class="medFont white">ATTENDEES</span> </p>
                </div>
              </li>
            </ul>
          </div>
         </section> 
         
         <section>
          <div class="video">
            <div class="two-third">
              <div class="video-container">
                <?php the_field('vemeo_iframe'); ?>
              </div>
            </div>
            <div class="one-third">
              <h2>
                <?php the_field('video_title'); ?>
              </h2>
              <p>
                <?php the_field('video_dates'); ?>
              </p>
              <br/>
              <br/>
              <?php the_field('video_description'); ?>
            </div>
          </div>
          <?php the_field('top_content'); ?>
          </section>
          
          <section>
          <h3 class="medFont"><strong>
            <?php the_field('tag_line'); ?>
            </strong></h3>
          <div class="show-categories">
            <div class="one-sixth bg-block">
              <ul>
                <?php if(get_field('surf_copy')){ ?>
                <li class="default-icon-first"><a href="javascript:void(0)" class="surf-icon"></a> <span>SURF</span>
                  <div class="text-content1 default">
                    <?php the_field('surf_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                <?php if(get_field('skate_copy')){ ?>
                <li><a href="javascript:void(0)" class="skate-icon"></a> <span>SKATE</span>
                  <div class="text-content1 default">
                    <?php the_field('skate_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                <?php if(get_field('sup_copy')){ ?>
                <li><a href="javascript:void(0)" class="sup-icon"></a> <span>SUP</span>
                  <div class="text-content1 default">
                    <?php the_field('sup_copy'); ?>
                  </div>
                </li>
                <?php } ?>
				<?php if(get_field('bluewater_copy')){ ?>
                <li><a href="javascript:void(0)" class="bluewater-icon"></a> <span>BLUEWATER</span>
                  <div class="text-content1 default">
                    <?php the_field('bluewater_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                <?php if(get_field('swim_copy')){ ?>
                <li><a href="javascript:void(0)" class="swim-icon"></a> <span>SWIM</span>
                  <div class="text-content1 default">
                    <?php the_field('swim_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                <?php if(get_field('resort_copy')){ ?>
                <li><a href="javascript:void(0)" class="resort-icon"></a> <span>RESORT</span>
                  <div class="text-content1 default">
                    <?php the_field('resort_copy'); ?>
                  </div>
                </li>
                <?php } ?>                
                <?php if(get_field('coastal_gift_copy')){ ?>
                <li><a href="javascript:void(0)" class="coastalgift-icon"></a> <span>COASTAL GIFT</span>
                  <div class="text-content1 default">
                    <?php the_field('coastal_gift_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                <?php if(get_field('souvenir_copy2')){ ?>
                <li><a href="javascript:void(0)" class="souvenir-icon"></a> <span>SOUVENIR</span>
                  <div class="text-content1 default">
                    <?php the_field('souvenir_copy2'); ?>
                  </div>
                </li>
                <?php } ?>                
                <?php if(get_field('boutique_copy')){ ?>
                <li><a href="javascript:void(0)" class="boutique-icon"></a> <span>BOUTIQUE</span>
                  <div class="text-content1 default">
                    <?php the_field('boutique_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                <?php if(get_field('footware_copy')){ ?>
                <li><a href="javascript:void(0)" class="footwear-icon"></a> <span>FOOTWEAR</span>
                  <div class="text-content1 default">
                    <?php the_field('footware_copy'); ?>
                  </div>
                </li>
                <?php } ?>
                
                <?php if(get_field('performance_copy')){ ?>
                <li><a href="javascript:void(0)" class="performance-icon"></a> <span>PERFORMANCE</span>
                  <div class="text-content1 default">
                    <?php the_field('performance_copy'); ?>
                  </div>
                </li>
                <?php } ?> 
              </ul>
            </div>
            <div id="dest"></div>
          </div>
          <hr class="divider"/>
        </section>
          
        <section>  
          <h2 class="sub-header">Awards</h2>
          <div class="awards">
            <ul class="no-marginList">
              <?php $award_listings = get_field('awards'); ?>
              <?php if($award_listings): ?>
              <?php foreach ($award_listings as $award_listing) { ?>
              <li class="one-third">
                <div>
                  <p><img src="<?php echo $award_listing['logo']; ?>"/></p>
                </div>
                <?php echo $award_listing['content']; ?> </li>
              <?php } ?>
              <?php endif; ?>
            </ul>
          </div>
          <hr class="divider"/>
         </section>
          
         <section> 
          <h2 class="sub-header">Industry Partners</h2>
          <div class="endorsements">
            <ul class="no-marginList">
              <?php $endorsement_listings = get_field('endorsements'); ?>
              <?php if($endorsement_listings): ?>
              <?php foreach ($endorsement_listings as $endorsement_listing) { ?>
              <li class="one-fourth"><a href="<?php echo $endorsement_listing['url']; ?>" target="_blank"><img src="<?php echo $endorsement_listing['endorsement_logo']; ?>"/></a></li>
              <?php } ?>
              <?php endif; ?>
            </ul>
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
<script>

$(document).ready(function() {
 
    // run test on initial page load
    checkSize();
	
    // run test on resize of the window
    $(window).resize(function(){
	if ($(window).width() <= 800){	
		checkSize();
	}	
});	
});	
	
function checkSize(){

	$("ul.no-marginList").each(function(){ //loop through each first
	  var largest = 0;
	  $(this).find(".titlebox").each(function(){ //find each .titlebox within its parent (rest is the same)
    	 var findHeight = $(this).height();
	     if(findHeight > largest){
    	    largest = findHeight;
	     }  
	  });
	  $(this).find(".titlebox").css({"height":largest+"px"}); //update all .titlebox inside of this ul
	  $(this).find(".titlebox").css({"line-height":largest+"px"});
	});
}

$(document).ready (function () {
	var copycontent = "";
	copycontent = $('.show-categories .one-sixth ul li div.default').html();
	$('.show-categories .one-sixth li:first-of-type').addClass('default-icon-first');
	$('#dest').html(copycontent);

	$('.show-categories .one-sixth li a, .show-categories .one-sixth li div').hover(function() {


		$('#dest').html('');
		$('.show-categories .one-sixth li').removeClass('default-icon');		
		$('.show-categories .one-sixth li').removeClass('default-icon-first');				
		$('.show-categories .one-sixth li a').css('background-position','50% 0%');	
		
		if ($(this).parent('li').hasClass('default-icon')) {
			$(this).parent('li').removeClass('default-icon');

		} else {
			$(this).parent('li').addClass('default-icon');			
			$('.show-categories .one-sixth li.default-icon a').css('background-position','50% 100%');			
			}

    	$(this).parent().find('.text-content1').clone().appendTo('#dest');
	    $('#dest').show();
	}, function() {
    	//$('#dest').hide();
		//var copycontent = "";
		//copycontent = $('.show-categories .one-sixth p.show .default').html();
	    $('#dest').html('');
		$('.show-categories .one-sixth li a').css('background-position','50% 0%');						
		var copycontent = "";
		copycontent = $('.show-categories .one-sixth li.default-icon div.text-content1').html();
		$('.show-categories .one-sixth li.default-icon a').css('background-position','50% 100%');
       
		$('#dest').html(copycontent);		
		//$('.show-categories .one-sixth li').removeClass('default-icon');
		//$('.show-categories .one-sixth li:first-of-type').addClass('default-icon-first');		
		
	}); 

});

	
</script>
<?php get_footer(); ?>

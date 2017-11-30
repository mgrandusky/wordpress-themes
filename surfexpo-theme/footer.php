<div class="bottom-container">

    <div class="seo-container">
    <?php if(is_front_page()){ ?>
	    <div class="wrapper">
        	<div class="seo-portion">
		    <?php the_field('home_page_seo', 'option'); ?>
            </div>
    	</div>
    <?php } ?>    
    </div>

	 <div class="footer-container">
	  <footer class="wrapper">
    	<div id='surfexpo_728_Bottom' class="btm-ad row" style="padding-top:15px;">	
		<script type='text/javascript'>	
			googletag.cmd.push(function() { googletag.display('surfexpo_728_Bottom'); });	
		</script>	
	</div>
	    <div class="copyright">
    	  <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About Us</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>exhibitors/advertising-sponsorship/">Advertising</a> | 
	      <a href="<?php echo esc_url( home_url( '/' ) ); ?>site-map">Site Map</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>the-show/faq">FAQ</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-use">Terms of Use</a></p>
	      <p>&copy;<?php echo date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank" style="color:#71868B;">Emerald Expositions, LLC</a>. All rights reserved.</p>
	    </div>
	  </footer>
	</div>
</div>

<?php wp_footer(); ?>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script type="text/javascript">
  jQuery('document').ready(function(){
    // $('').insertAfter('.new-royalslider-1');

    var sliderJQ = jQuery('.new-royalslider-1').royalSlider();
    var sliderInstance = sliderJQ.data('royalSlider');

    // $('#slider .caption').html($(sliderInstance.slidesJQ[sliderInstance.currSlideId]).find('.rsContent > div').html());
    sliderInstance.slides[0].holder.on('rsAfterContentSet', function() {
        $('#slider .caption').html($(sliderInstance.slidesJQ[sliderInstance.currSlideId]).find('.rsContent > div').html());
    });
    function updCount() {
        // slideCountEl.html( (sliderInstance.currSlideId+1) + ' of ' + sliderInstance.numSlides );
        // $('#slider .caption').html(sliderInstance.description);
        $('#slider .caption').html($(sliderInstance.slidesJQ[sliderInstance.currSlideId]).find('.rsContent > div').html());
    }
    sliderInstance.ev.on('rsAfterSlideChange', updCount);
    updCount();



    // $('<div class="caption"> The caption goes here</div>').insertAfter('.new-royalslider-1');
  });
</script>

</body>
</html>
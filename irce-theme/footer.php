<div class="footer-container">
  <footer class="wrapper">
    <div id='IRCE_728_Bot' class="btm-ad row" style="width:728;height:90;">
	<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('IRCE_728_Bot'); });
	</script>
    </div>
    <div class="copyright">
      <p><a href="http://www.irce.com/">Home</a> | <a href="http://www.irce.com/exhibitions/overview/">About</a> | <a href="http://www.irce.com/exhibitions/contact-us/">Contact Us</a> | <a href="http://www.irce.com/exhibitors/sponsorship-opportunities/">Sponsorship Opportunities</a> | <a href="mailto:sophia@sophiaandco.com ">Press Inquiries</a> | <a href="http://www.irce.com/sitemap">Site Map</a></p>
      <p>&copy; <?= date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank">Emerald Expositions, LLC.</a> All Rights Reserved.</p>
      <p><a href="http://www.irce.com/terms-of-use">Terms of Use</a> | <a href="http://www.irce.com/privacy-policy">Privacy Policy</a></p>
    </div>
  </footer>
</div>

<?php wp_footer(); ?>
<?php if(is_front_page()){ ?>
<script type="text/javascript">
  jQuery('document').ready(function(){
    $('<div class="caption cf clearfix" style="background-color:#000;"></div>').insertAfter('.new-royalslider-1 .rsOverflow');
    var sliderJQ = jQuery('.new-royalslider-1').royalSlider();
    var sliderInstance = sliderJQ.data('royalSlider');
    sliderInstance.slides[0].holder.on('rsAfterContentSet', function() {
        $('#slider .caption').html($(sliderInstance.slidesJQ[sliderInstance.currSlideId]).find('.rsSlideRoot .flex-caption').html());
    });
    function updCount() {
        $('#slider .caption').html($(sliderInstance.slidesJQ[sliderInstance.currSlideId]).find('.rsSlideRoot .flex-caption').html());
    }
    sliderInstance.ev.on('rsAfterSlideChange', updCount);
    updCount();
  });
</script>
<?php } ?>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script> 
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/gallery-script.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> 

<script>
        $(function() {
        $("#tabs").tabs();
        });
    </script>  

<script>
$(document).ready (function () {
   
   var col2title = $( ".rwd-table th.col2-title" ).html();
   var col3title = $( ".rwd-table th.col3-title" ).html();
   var col4title = $( ".rwd-table th.col4-title" ).html();      
   

   $("span.sm-col2-title").html(col2title);	
   $("span.sm-col3-title").html(col3title);	
   $("span.sm-col4-title").html(col4title);	      

    
});
</script>

</body>
</html>
<div class="footer-container">
  <footer class="wrapper seo">

<div id='ib_728_bottom' style="margin: 0px auto;max-width:728px;">
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('ib_728_bottom'); });
</script>
</div>
    <div class="copyright">
<div class="buy-ride">
	<a href="http://nbda.com/about/buy-where-you-ride-pg435.htm" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/buy_ride_icon.png" alt="Buy Ride Icon"></a>
    </div>
      <div><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About Us</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>show/faq">FAQ</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>site-map">Site Map</a>
      <p>&copy; <?= date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank">Emerald Expositions, LLC.</a> All Rights Reserved.</p>
      <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-use">Terms of Use</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy</a></p></div>

    </div>

  </footer>
</div>


<?php wp_footer(); ?>

<script>
jQuery( "#list" ).load( "<?php echo get_template_directory_uri(); ?>/exhibitor-home.php" );
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript">
$('document').ready(function(){
    var ct = 0;
    setTimeout(function(){
    console.log($('.ui-tabs-panel .royalSlider'));
    $('.ui-tabs-panel .royalSlider').each(function(){
        var this_ = $(this);
        // console.log(ct);
        // console.log('ok');
        // console.log($('.rsGCaption', this_).html());
        $('<div class="contain cf"></div>').insertBefore($('.rsNav', this_[0]));
        $($('.rsGCaption', this_[0])).appendTo($('.contain', this_));
        ct++;
    });
    }, 5000);
});
</script>

</body>
</html>
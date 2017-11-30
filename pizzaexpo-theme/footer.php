<footer>
<?php $pizzaexpooptions = pods( 'pizzaexpooptions', $params ); ?>
    <div id="foot" class="container">
        <div id="seo">
           <?php //echo $pizzaexpooptions->field( 'home_page_seo' ); ?>
        </div>
        <div class="ad-space">
            <div id='pizzaexpo_728_Bottom' style="width:300;height:250;">
				<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('pizzaexpo_728_Bottom'); });
				</script>
			</div>
        </div>
        <div class="copy">
            <p>&copy; <?= date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank">Emerald Expositions, LLC.</a> All Rights Reserved.</p>
            <a href="http://www.pizzaexpo.com/privacy-policy">Privacy Policy</a> | <a href="http://www.pizzaexpo.com/terms-of-use">Terms of Use</a>
        </div>
        <div class="foot-menu">
            <ul>
                <li><a href="http://www.pizzaexpo.com/">Home</a></li> | 
                <li><a href="http://www.pizzaexpo.com/show/about-the-show/">About Us</a></li> | 
                <li><a href="http://www.pizzaexpo.com/exhibitor/sponsorship-opportunities">Sponsorship Opportunities</a></li> | 
                <li><a href="http://www.pizzaexpo.com/show/contact-us/">Contact Us</a></li> | 
                <li><a href="http://www.pizzaexpo.com/site-map/">Site Map</a></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<?php if(is_front_page()){ ?>
    <script id="new-royalslider-init-code" type="text/javascript">
        jQuery(document).ready(function() {

            if($( window ).width() > 769 ){
                $('.rsNav.rsBullets').append($('.rsGCaption'));
            } else {
                $('.rsNav.rsBullets').prepend($('.rsGCaption'));

            }
            var slider = $(".home .royalSlider").data('royalSlider');
            var readyHandler = function() {

                //console.log('ok');
                if($( window ).width() > 769 ){
                    var something = $('.royalSlider').data('royalSlider');
                    //console.log(something.currSlide.content.context);
                    desc = $('.home .royalSlider .rsSlide:nth-child('+ (parseInt(something.currSlideId, 10)+parseInt(1, 10)) +') .rsdesc').html();
                    //console.log(something.currSlideId);
                    //console.log($('.home .royalSlider .rsSlide:nth-child('+ (parseInt(something.currSlideId, 10)+parseInt(1, 10)) +') .rsdesc').html());
                    $('.home .royalSlider .rsSlide:nth-child('+ something.currSlideId+1 +') .rsdesc').html();
    
                    $('.rsNav.rsBullets').append($('.rsGCaption'));
                } else {
                    $('.rsNav.rsBullets').prepend($('.rsGCaption'));

                }

            };
            slider.ev.on('rsAfterSlideChange', readyHandler);

        });
    </script>
    <script type="text/javascript">
        // jQuery('document').ready(function(){
        //     setTimeout(function(){
        //         desc = $('.home .royalSlider .rsdesc').first().html();
        //         console.log(desc);
        //         $('.rsGCaption').append('<p style="display: block;margin-left: 0px;color: #333;font-size: 0.75em;">' + desc + '</p>');
                $('.home .royalSlider').css({ 'height': 'auto' });
        //         $('.home .royalSlider').css({ 'height': $('.home .royalSlider').height() });
        //     }, 12)
        // });
    </script>
    <style type="text/css">
    .rsNav.rsBullets .rsGCaption {
    display: block;
    position: absolute;
    left: 0;
    bottom: 0;
    padding: 20px;
    width:auto!important;
    margin: 0;
    font-family: 'Source Sans Pro', sans-serif;
    text-align: left;
    font-size: 24px;
    font-weight: bold;
    line-height: 20px;
    color: white;
    /* background-color: #222222; */
    background: rgba(0, 0, 0, 0)!important;
    border-radius: 0px!important;
    border-top: 0 solid #008c44!important; 
    padding-right: 80px;
    z-index: 1;
}
    </style>
    <?php } ?>

<script>
$('document').ready(function(){
 
    $('#network-container h5 a').click(function(){
        if ($('#network-container ul').hasClass('show')) {
            $('#network-container ul').removeClass('show');
            $('#network-container h5 a').removeClass('active');
            $('#network-container h5').removeClass('active');
            $('#network-container nav').removeClass('active');
        } else {
            $('#network-container ul').addClass('show');
            $('#network-container h5 a').addClass('active');
            $('#network-container h5').addClass('active');
            $('#network-container nav').addClass('active');
        }
 
    });
   
    $('#network-container h5 a').hover(function(){
       $(this).toggleClass('hover');      
    });
 
    $('#network-container h5 a').on("touchstart", function(){
        $(this).removeClass('hover');            
    });
 
});

</script>
</body>
</html>
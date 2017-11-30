<!DOCTYPE html>

<html lang="en">

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->

<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->

<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->

<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">

<?php if (is_single('agendas') || is_single('speakers') || is_single('exhibitions')) { ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/sort.js" async></script>
  <? } ?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style2.css"/>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css"/>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/additionalstyle.css"/>
	<?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.plugin.js'></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.js'></script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

	    <script charset="utf-8" type="text/javascript" src="http://ws.sharethis.com/button/buttons.js"></script>

    <script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.b77086fe-9305-474d-b4eb-d43fe36fccf8",onhover: false, "doNotCopy":true,"hashAddressBar":false,"doNotHash":true});var st_type="wordpress4.0";</script>

<script type='text/javascript'>

var googletag = googletag || {};

googletag.cmd = googletag.cmd || [];

(function() {

var gads = document.createElement('script');

gads.async = true;

gads.type = 'text/javascript';

var useSSL = 'https:' == document.location.protocol;

gads.src = (useSSL ? 'https:' : 'http:') + 

'//www.googletagservices.com/tag/js/gpt.js';

var node = document.getElementsByTagName('script')[0];

node.parentNode.insertBefore(gads, node);

})();

</script>



<script type='text/javascript'>

googletag.cmd.push(function() {



googletag.defineSlot('/5993/nbm.con.irce', [728, 90], 'IRCE_728_Top').addService(googletag.pubads())

.setTargeting("pos", "top")
.setCollapseEmptyDiv(true);



googletag.defineSlot('/5993/nbm.con.irce', [[300, 250], [300, 600]], 'IRCE_300_Top').addService(googletag.pubads())

.setTargeting("pos", "top")
.setCollapseEmptyDiv(true);



googletag.defineSlot('/5993/nbm.con.irce', [300, 250], 'IRCE_300_Mid1').addService(googletag.pubads())

.setTargeting("pos", "middle1")
.setCollapseEmptyDiv(true);



googletag.defineSlot('/5993/nbm.con.irce', [300, 250], 'IRCE_300_Bot').addService(googletag.pubads())

.setTargeting("pos", "bottom")
.setCollapseEmptyDiv(true);



googletag.defineSlot('/5993/nbm.con.irce', [728, 90], 'IRCE_728_Bot').addService(googletag.pubads())

.setTargeting("pos", "bottom")
.setCollapseEmptyDiv(true);



googletag.pubads().setTargeting("s1","?")

googletag.pubads().setTargeting("s2","?")

googletag.pubads().setTargeting("url","?")



googletag.pubads().enableSingleRequest();

googletag.enableServices();

});

</script>

<?php $irceoptions = pods( 'irceoptions', $params ); ?>

<?php if(is_page(array('terms-of-use','privacy-policy','terms','privacy'))){ ?>
    <script>
      $.ajaxSetup({
          scriptCharset: "utf-8", //maybe "ISO-8859-1"
          contentType: "application/json; charset=utf-8"
      });
      $.ajax({
        type: 'GET',
        url: 'https://www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=privacy-policy',
        data: { get_param: 'value' },
        dataType: 'json',
        success: function (data) {
          $.each(data, function(index, element) {
            $("#privacy").html(element.content.rendered);
          });
        }
      });
      $.ajax({
        type: 'GET',
        url: 'https://www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=terms-of-use',
        data: { get_param: 'value' },
        dataType: 'json',
        success: function (data) {
          $.each(data, function(index, element) {
            $("#terms").html(element.content.rendered);
          });
        }
      });
    </script>
<?php } ?>





<script>

    jQuery(function () {
      var d = new Date(<?= do_shortcode('[pods name="irceoptions" field="countdown_clock_date"]') ?>);
        d.setMonth( d.getMonth( ) - 1 );
        $('#defaultCountdown').countdown({

            until: d,

            format: 'dHMS',

            padZeroes: true, 

            layout: '<div class="days"><span class="count-number">{dn}</span><span class="count-label">{dl}</span></div> <div class="hours"><span class="count-number">{hn}</span><span class="count-label">{hl}</span></div><div class="minutes"><span class="count-number">{mn}</span><span class="count-label">{ml}</span></div><div class="seconds"><span class="count-number">{sn}</span><span class="count-label">{sl}</span></div>'

        });

    });

</script>

</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NVQ93D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NVQ93D');</script>
<!-- End Google Tag Manager -->


<!-- Start TopAd -->

<div id="IRCE_728_Top" class="top-ad row"> 

  <script type="text/javascript">googletag.cmd.push(function() { googletag.display('IRCE_728_Top'); });</script>

</div>

<!-- End TopAd -->



<div class="header-container">

  <header class="wrapper clearfix">

    <span class="ir"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">IRCE</a></span>

    <h2><b><?php echo $irceoptions->field( 'event_date' ); ?></b><br>

        <?php echo $irceoptions->field( 'event_location' ); ?></h2>

    <!-- Start Social -->

    <?php display_social(); ?>

    <!-- End Social --> 

  </header>

</div>



<!-- Navmenu Start -->

<nav id="main" class="wrapper clearfix">

  <h4><a href="javascript:void(0)">Menu</a></h4>

          <?php wp_nav_menu(array(



	'container' => false,                           // remove nav container



	'container_class' => 'menu cf',                 // class of container (should you choose to use it)



	'menu_class' => 'nav top-nav cf',               // adding custom nav class



	'theme_location' => 'menu-1',                 // where it's located in the theme



	'before' => '',                                 // before the menu



	'after' => '',                                  // after the menu



	'link_before' => '',                            // before each link



	'link_after' => '',                             // after each link



'items_wrap'      => '<ul id="%1$s" class="cf">%3$s</ul>',



'depth' => 0,                                   // limit the depth of the nav



	'fallback_cb' => ''                             // fallback function (if there is one)



)); ?>

  

  <!-- search start -->

  <div id="search">

    <h5><span class="ir"><a href="javascript:void(0)">Search</a></span></h5>

    <form role="search" method="get" id="searchform" class="searchform cf" action="<?php bloginfo('siteurl'); ?>/">

      <fieldset>

        <input id="s" name="s" type="text" class="in-search" value="Search" onBlur="if(this.value == '') this.value = 'Search'" onFocus="if(this.value == 'Search') this.value = ''" />

        <input id="searchsubmit" type="submit" class="search" onClick="if(q.value =='Search') q.value =''" value="" />

      </fieldset>

    </form>



  </div>

  <!-- search end --> 

</nav>

<?php 
     $displayClock = do_shortcode("[pods name='countdown_clock' field='countdown_onoff']");

     if ($displayClock == 'Yes') {

?>         

<div class="wrapper clearfix">
  <div id="countdown-clock" class="pe-counter countdown">
    <div class="countdown-top">
      <div id="registration">
            <h5><?php echo do_shortcode("[pods name='irceoptions' field='countdown_text_left']"); ?></h5>
      </div>  
      <div id="defaultCountdown"></div>
      <div class="countdown-bottom">
          <div id="countdown-right">
              <span><?php echo do_shortcode("[pods name='irceoptions' field='countdown_text_right']"); ?>
              </span>
          </div>
        <a target="_blank" href="<?php echo do_shortcode("[pods name='irceoptions' field='countdown_register_link']"); ?>"><?php echo do_shortcode("[pods name='irceoptions' field='countdown_register_link_text']"); ?> &gt;</a>
      </div>
    </div>
  </div>
</div>

<?php } ?>

   
<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/css/style2.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/additionalstyle.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <?php if(is_front_page()){ ?>

        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/css/countdown.css">

    <?php } ?>  
  
  <!-- for photos and video page-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/js/jquery.plugin.js"></script> 
  <script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/js/jquery.countdown.js"></script> 


  <script charset="utf-8" type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
  <script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.b77086fe-9305-474d-b4eb-d43fe36fccf8",onhover: false, "doNotCopy":true,"hashAddressBar":false,"doNotHash":true});var st_type="wordpress4.0";</script>
  <script>

  $(function() {
  		$( "#tabs-po" ).css("opacity", 0); 
      		 setTimeout(function(){ $( "#tabs-po" ).tabs();$( "#tabs-po" ).css("opacity", 1); }, 300);
   	 });
  </script>
<?php if(is_page(array('terms-of-use','privacy-policy','terms','privacy'))){ ?>
    <script>
      $.ajaxSetup({
          scriptCharset: "utf-8", //maybe "ISO-8859-1"
          contentType: "application/json; charset=utf-8"
      });
      $.ajax({
        type: 'GET',
        url: 'https://emeraldexpositions.com/wp-json/wp/v2/pages?slug=privacy-policy',
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
        url: 'https://emeraldexpositions.com/wp-json/wp/v2/pages?slug=terms-of-use',
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
googletag.defineSlot
('/5993/nbm.ts.ib', [[728, 90], [300, 50], [970, 90]],  'ib_728_top').addService(googletag.pubads())
.setTargeting("pos", "top").setCollapseEmptyDiv(true);

googletag.defineSlot('/5993/nbm.ts.ib', [300, 250],  'ib_300_top').addService(googletag.pubads())
.setTargeting("pos", "top").setCollapseEmptyDiv(true);

googletag.defineSlot('/5993/nbm.ts.ib', [300, 250],  'ib_300_middle1').addService(googletag.pubads())
.setTargeting("pos", "middle1").setCollapseEmptyDiv(true);

googletag.defineSlot('/5993/nbm.ts.ib', [300, 250],  'ib_300_bottom').addService(googletag.pubads())
.setTargeting("pos", "bottom").setCollapseEmptyDiv(true);

googletag.defineSlot('/5993/nbm.ts.ib', [[728, 90], [300, 50], [970, 90]],  'ib_728_bottom').addService(googletag.pubads())
.setTargeting("pos", "bottom").setCollapseEmptyDiv(true);

googletag.defineOutOfPageSlot('/5993/nbm.ts.ib','ib_prestitial')	
.addService(googletag.pubads())	
.setTargeting("pos", "prestitial");	
googletag.defineOutOfPageSlot('/5993/nbm.ts.ib','ib_interstitial')	
.addService(googletag.pubads())	
.setTargeting("pos", "interstitial");

googletag.pubads().setTargeting("pos","")
googletag.pubads().setTargeting("s1","")
googletag.pubads().setTargeting("url","");        
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

<script>

    jQuery(function () { 

        if($('#countdown_dashboard')) {
          var d = new Date(<?php the_field('countdown_clock_date', 'option'); ?>);
          d.setMonth( d.getMonth( ) - 1 );
          $('#countdown_dashboard').countdown({

              until: d,

              format: 'dHMS',

              padZeroes: true, 

              layout: '<div class="col-clock"> <div class="days dash days_dash"> <div class="digit"> <div class="bottom count-number" style="display:block">{dnn}</div></div></div><div class="countdown-title">{dl}</div></div><div class="col-clock"> <div class="hours dash hours_dash"> <div class="digit"> <div class="bottom count-number" style="display:block">{hnn}</div></div></div><div class="countdown-title">{hl}</div></div><div class="col-clock"> <div class="minutes dash minutes_dash"> <div class="digit"> <div class="bottom count-number" style="display:block">{mnn}</div></div></div><div class="countdown-title">{ml}</div></div><div class="col-clock"> <div class="seconds dash seconds_dash"> <div class="digit"> <div class="bottom count-number" style="display:block">{snn}</div></div></div><div class="countdown-title">{sl}</div></div>'


          });
        }

    });

</script> 

</head>
<body>
<!-- Google Tag Manager -- Interbike -- Place Below Body Tag -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5B9PC2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5B9PC2');</script>
<!-- End Google Tag Manager -- Interbike -->

<?php if ( is_front_page() ) {	 ?>
<div id="ib_prestitial" style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('ib_prestitial'); });
</script>
</div>
<?php } else { ?>
<div id="ib_interstitial" style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('ib_interstitial'); });
</script>
</div>
<?php } ?>
<div id="network-container">
  <nav class="wrapper">
    <h4>IBNet</h4>
    <h5><a href="javascript:void(0)">Interbike</a></h5>
    <ul>
      <li><a class="active" style="color:#fff; text-decoration: none;" >Interbike</a></li>
      <!-- <li><a href="http://www.theibdsummit.com">The IBD Summit</a></li> //-->
      <li><a href="http://www.cyclofest.com">CycloFest</a></li>
    </ul>
  </nav>
</div>
<center>
<!-- Start bottomAd -->
<div id='ib_728_top' style="margin: 20px auto;max-width:728px;">
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('ib_728_top'); });
</script>
</div>
<!-- End bottomAd -->
</center>
<div class="header-container">
  <header class="wrapper clearfix">
    <h3><div class="ir"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Interbike</a></div></h3>
    <h4 class="two-fifths"><b><?php the_field('conference_date', 'option'); ?></b><br>
      <?php the_field('conference_location', 'option'); ?></h4>
    <!-- Start Social -->
    <ul class="social">
      <li class="fb"><div class="ir"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank" title="follow us on Facebook"></a></div></li>
      <li class="tw"><div class="ir"><a href="<?php the_field('twitter', 'option'); ?>" target="_blank" title="follow us on Twitter"></a></div></li>
      <li class="ig"><div class="ir"><a href="<?php the_field('instagram', 'option'); ?>" target="_blank" title="follow us on Instagram"></a></div></li>
      <li class="fk"><div class="ir"><a href="<?php the_field('flicker', 'option'); ?>" target="_blank" title="follow us on Flicker"></a></div></li>
    </ul>
    <!-- End Social --> 
  </header>
</div>

<!-- Navmenu Start -->
<nav id="main" class="wrapper clearfix">
  
    <?php wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    	'menu_class' => 'nav bottom-nav cf',               // adding custom nav class
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
    <h5><div class="ir"><a href="javascript:void(0)">Search</a></div></h5>
    <form role="search" method="get" id="searchform" class="searchform cf" action="<?php bloginfo('siteurl'); ?>/">
      <fieldset>
        <input id="s" name="s" type="text" class="in-search" value="What are you looking for?" onBlur="if(this.value == '') this.value = 'What are you looking for?'" onFocus="if(this.value == 'What are you looking for?') this.value = ''" />
        <input id="searchsubmit" type="submit" class="search" onClick="if(q.value =='Search') q.value =''" value="" />
      </fieldset>
    </form>
  </div>
  <!-- search end --> 
<h4><a href="javascript:void(0)"></a></h4>
</nav>
    </div>  
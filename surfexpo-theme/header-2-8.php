<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<!--Lead Forensics -->
	<script type="text/javascript" src="http://www.prt-or-067.com/js/32608.js"></script>
	<noscript><img src="http://www.prt-or-067.com/32608.png" style="display:none;" /></noscript>
	<!--Lead Forensics -->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" href="Surf_Expo_Flavicon.ico" />
	<link rel="stylesheet" href="css/normalize.min.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6736472/645784/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css"> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nav.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

	<?php if ( is_single('exhibitors-listfloor-plan')) {  ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/exhibitors-list.css">
	<?php } ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script type="text/javascript" src="http://www.prt-or-067.com/js/32608.js"></script>
	<noscript><img src="http://www.prt-or-067.com/32608.png" style="display:none;" /></noscript>
	<?php wp_head(); ?>
<script>
$.ajaxSetup({
    scriptCharset: "utf-8", //maybe "ISO-8859-1"
    contentType: "application/json; charset=utf-8"
});

$.getJSON('http://whateverorigin.org/get?url=' + 
    encodeURIComponent('http://www.emeraldexpositions.com/ucopy/privacy.html') + '&callback=?',
    function(data) {
      $("#privacy").html(data.contents);
});
$.getJSON('http://whateverorigin.org/get?url=' + 
    encodeURIComponent('http://www.emeraldexpositions.com/ucopy/terms.html') + '&callback=?',
    function(data) {
      $("#terms").html(data.contents);
});
</script>
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
googletag.defineSlot('/5993/nbm.ts.surfexpo', [300, 250], 'surfexpo_300_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top");
googletag.defineSlot('/5993/nbm.ts.surfexpo', [300, 250], 'surfexpo_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos", "middle1");
googletag.defineSlot('/5993/nbm.ts.surfexpo', [300, 250], 'surfexpo_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");	
googletag.defineSlot('/5993/nbm.ts.surfexpo', [728, 90], 'surfexpo_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineOutOfPageSlot('/5993/nbm.ts.surfexpo','surfexpo_prestitial')	
.addService(googletag.pubads())	
.setTargeting("pos", "prestitial");	
googletag.defineOutOfPageSlot('/5993/nbm.ts.surfexpo','surfexpo_interstitial')	
.addService(googletag.pubads())	
.setTargeting("pos", "interstitial");
googletag.pubads().setTargeting("s1","")
googletag.pubads().setTargeting("s2","")	
googletag.pubads().setTargeting("url","?"); 
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<!-- FEATHER CODE //-->
<script type="text/javascript">
feathr_account_id = "564f54e2161d7292b043667d";
(function () {
    var loadBoomer = function(){
        if (!/complete|loaded/.test(document.readyState)) {setTimeout(loadBoomer, 10);return}
        var scr = document.createElement("script");
        scr.src = "//cdn.feathr.co/js/boomerang.min.js";
        scr.async = true;
        __feathr_loaded = true;
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
    };
    if (/complete|loaded/.test(document.readyState)) {setTimeout(loadBoomer, 10);}
    else if (window.addEventListener) {window.addEventListener('load', loadBoomer, false);}
    else {window.attachEvent('onload', loadBoomer)}
}());
</script>
</head>
<body>
<!-- Google Tag Manager -- Surf Expo Expo -- Place Below Body Tag -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MMWDRH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MMWDRH');</script>
<!-- End Google Tag Manager -- Photo Plus Expo -->
	<!-- Start TopAd -->

	<!-- End TopAd -->

	<div class="header-container">
	  <header class="wrapper clearfix">
	    <h3><span class="ir"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SURF EXPO</a></span></h3>
	    <h4 class="two-fifths date-image"><img src="<?php the_field('show_graphic', 'option'); ?>" alt="January 14-16 2016"/></h4> 
	    <!-- Start Social -->
	    <?php display_social(); ?>
	    <!-- End Social --> 
	  </header>
	</div>

	<!-- Navmenu Start -->
	<div class="nav-container">
	<nav id="main" class="wrapper clearfix">
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
	  <h4><a href="javascript:void(0)"></a></h4>  
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
	</div>
 
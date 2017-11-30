<?php /** @package WordPress @subpackage Default_Theme  **/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>


<!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>

<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tab.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tab2.css">

<!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

<!-- JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  

<script charset="utf-8" type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>

<?php if(is_page(array('terms-of-use','privacy-policy'))){ ?>
    <script>
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
<?php
$url = parse_url(get_permalink($post_id));
$targeturl = substr($url['path'],0,50);
//$targeturl = str_replace(' ', '-', strtolower(get_the_title())); 
//$targeturl = preg_replace('/[^a-zA-Z0-9-_.]/', '', $targeturl);

?>
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
googletag.cmd.push(function()  {
googletag.defineSlot('/5993/nbm.con.pizzatoday',  [[728, 90], [300, 50], [970, 90]],  'pizzatoday_728_Top')
.addService(googletag.pubads())
.setTargeting("pos",  "top")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.pizzatoday',  [300, 250], 'pizzatoday_300_Top')
.addService(googletag.pubads())
.setTargeting("pos",  "top")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.pizzatoday',  [300, 250],  'pizzatoday_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos",  "middle1")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.pizzatoday',  [300, 250],  'pizzatoday_300_Middle2')
.addService(googletag.pubads())
.setTargeting("pos",  "middle2")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.pizzatoday',  [300, 250],  'pizzatoday_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos",  "bottom")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.pizzatoday',  [[728, 90], [300, 50], [970, 90]],  'pizzatoday_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom")
.setCollapseEmptyDiv(true);
googletag.defineOutOfPageSlot('/5993/nbm.con.pizzatoday','pizzatoday_prestitial')
.addService(googletag.pubads())
.setTargeting("pos", "prestitial")
.setCollapseEmptyDiv(true);
googletag.defineOutOfPageSlot('/5993/nbm.con.pizzatoday','pizzatoday_wallpaper')
.addService(googletag.pubads())
.setTargeting("pos", "wallpaper")
.setCollapseEmptyDiv(true);
googletag.defineOutOfPageSlot('/5993/nbm.con.pizzatoday','pizzatoday_sliding_billboard')
.addService(googletag.pubads())
.setTargeting("pos", "sliding_billboard");
googletag.defineOutOfPageSlot('/5993/nbm.con.pizzatoday','pizzatoday_interstitial')
.addService(googletag.pubads())
.setTargeting("pos", "interstitial");
googletag.pubads().setTargeting("s1","")
googletag.pubads().setTargeting("s2","")
googletag.pubads().setTargeting("url","<?php  echo  $targeturl ?>");       
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<?php wp_head(); ?>
<?php if(is_front_page()): ?>
<style>
.container {
    position: relative;
    width: 98%;
    max-width: 1260px;
    margin: 0px auto;
    padding: 0px;
    box-sizing: border-box;
}
.fluid-width {
    max-width: 1260px;
}
@media screen and (max-width: 599px) { 

.home #slider .rsOverflow, .home #slider .royalSlider {
    height:250px !important;
	background-color:#000;
	}
} 


</style>
<?php endif; ?>
</head>
<body class="home">
<!-- Google Tag Manager -- Pizza Today -- Place immediately following body tag -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MHL4XS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHL4XS');</script>
<!-- End Google Tag Manager -- Pizza Today -->
<!-- Start Network Menu -->

<?php if(is_front_page()){ ?>
<div id="pizzatoday_prestitial">
<script type="text/javascript"> 
googletag.cmd.push(function() { googletag.display('pizzatoday_prestitial'); }); 
</script> 
</div>  
  
<div id="pizzatoday_wallpaper">
<script type="text/javascript"> 
googletag.cmd.push(function() { googletag.display('pizzatoday_wallpaper'); });  
</script> 
</div>  
  
<div id="pizzatoday_sliding_billboard" style="height: 0px;">
<script type="text/javascript"> 
googletag.cmd.push(function() { googletag.display('pizzatoday_sliding_billboard'); });  
</script> 
</div>  
<?php } else { ?>
  <div id="pizzatoday_interstitial">
  <script type="text/javascript">
  googletag.cmd.push(function() { googletag.display('pizzatoday_interstitial'); });
  </script>
  </div>
<?php } ?>





<div id="network-container">
     <nav>
          <h5 class="">
          <a href="javascript:void(0)">PIZZA NETWORK</a></h5>
          <ul>
               <li><a target="" href="http://www.pizzaexpo.com">PIZZA EXPO</a></li>
               <li><a  target="" class="active" href="http://www.pizzatoday.com/">PIZZA TODAY</a></li>
<li><a target="" href="http://www.pizzaandpastaexpo.com">PIZZA & PASTA EXPO</a></li>
               <li><a target="" href="http://mediakit.pizzatoday.com">MEDIA KIT</a></li>
          </ul>
     </nav>
</div>


<!-- End Network Menu -->

<div class="ad-container" style="text-align:center;padding:10px 0px 10px 0px;">
  <div id='pizzatoday_728_Top'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('pizzatoday_728_Top'); });
</script>
</div>
</div>

<div class="header-container">
  <header class="container">
    <div class="four columns show-info"> 
		<h3><span class="ir"><a href="<?php bloginfo('siteurl'); ?>/">Pizza Today</a></span></h3>
    </div>
    
    <nav class="seven columns" id="menu">
      <div class="responsive_menu_container"><!-- MENU CONTAINER --> 
        
        <?php wp_nav_menu(array(



	'container' => false,                           // remove nav container



	'container_class' => 'menu cf',                 // class of container (should you choose to use it)



	'menu_class' => 'nav top-nav cf',               // adding custom nav class



	'theme_location' => 'menu-1',                 // where it's located in the theme



	'before' => '<span class="open-sub tab-nav"><a href="javascript:void(0);"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></span>',                                 // before the menu



	'after' => '',                                  // after the menu



	'link_before' => '',                            // before each link



	'link_after' => ' ',                             // after each link



'items_wrap'      => '<ul id="%1$s" class="responsive_menu cf">%3$s</ul>',



'depth' => 0,                                   // limit the depth of the nav



	'fallback_cb' => ''                             // fallback function (if there is one)



)); ?>
		
        
      </div>
      <!-- END MENU CONTAINER -->
     <div class="mobile-nav">
	      <h4><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></h4>
      </div>
    </nav>
   <script>$('.sub-menu').addClass('sub-menu plain-drop').removeClass('sub-menu');</script>
    <div class="logo-tab row">
	    <h3><span class="ir"><a href="<?php bloginfo('siteurl'); ?>/">PIZZA TODAY</a></span></h3>
    </div>
    <div class="five columns header-right">
	    <div id="search">
    	      <h5><a href="javascript:void(0)"><i class="fa fa-search"></i></a></h5>
              <ul><li>
        	  <form role="search" method="get" id="searchform" class="searchform cf" action="<?php bloginfo('siteurl'); ?>/">
	                   <input id="s" name="s" type="text" class="in-search" value="Search" onBlur="if(this.value == '') this.value = 'Search'" onFocus="if(this.value == 'Search') this.value = ''" />

        <input id="searchsubmit" type="submit" class="search" onClick="if(q.value =='Search') q.value =''" value="" />
        	 </form>
             </li></ul>
		</div> 

    	<div class="social-icons"> 
        <span class="header-div">|</span>
        <a href="<?php the_field('facebook', 'option'); ?>" class="fb" target="_blank"><i class="fa fa-facebook fa" aria-hidden="true"></i></a> 
        <a href="<?php the_field('instagram', 'option'); ?>" class="ig" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
        <a href="<?php the_field('twitter', 'option'); ?>" class="tw" target="_blank"><i class="fa fa-twitter fa" aria-hidden="true"></i></a> 
		<a href="<?php the_field('pinterest', 'option'); ?>" class="pin" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
	    <a href="<?php the_field('youtube', 'option'); ?>" class="utube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
	    <a href="<?php the_field('google_plus', 'option'); ?>" class="gplus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
	</div>        
        
  </header>
</div>
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
    <title>Impressions Magazine | Homepage</title>
    <meta name="author" content="">

    <!-- Mobile Specific Metas
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- FONT
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->


    <!-- CSS
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <!-- Favicon
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />

    <!-- JS
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="https://use.fontawesome.com/7e1eb8de7c.js"></script>
    <script type="text/javascript">var switchTo5x=true;</script>
    <script charset="utf-8" type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
    stLight.options({
      publisher: 'cc141113-18c9-4c3c-86c9-73e1fc716f7b',
      onhover: false,
      minorServices:false,
      shorten:false
    });
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PLJQ854');</script>
  <!-- End Google Tag Manager -->
    <!-- AD Tags ___________________________________________________ -->
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
googletag.defineSlot('/5993/nbm.con.imp',  [[728, 90], [300, 50], [970, 90]],  'IMP_728_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top")
.setCollapseEmptyDiv(true,true);
googletag.defineSlot('/5993/nbm.con.imp', [[300, 250],[300, 600]],  'IMP_300_Top')
.addService(googletag.pubads())
.setTargeting("pos", "top")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.imp',  [[300, 250],[300, 600]],  'IMP_300_Middle1')
.addService(googletag.pubads())
.setTargeting("pos", "middle1")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.imp', [300, 250],  'IMP_300_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom")
.setCollapseEmptyDiv(true);
googletag.defineSlot('/5993/nbm.con.imp',  [[728, 90], [300, 50], [970, 90]],  'IMP_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.defineOutOfPageSlot('/5993/nbm.con.imp','IMP_prestitial')
.addService(googletag.pubads())
.setTargeting("pos", "prestitial");
googletag.defineOutOfPageSlot('/5993/nbm.con.imp','IMP_wallpaper')
.addService(googletag.pubads())
.setTargeting("pos", "wallpaper")
.setCollapseEmptyDiv(true,true);
googletag.defineSlot('/5993/nbm.con.imp', [1280, 30], 'IMP_sliding_billboard')
.addService(googletag.pubads())
.setTargeting("pos", "sliding_billboard")
.setCollapseEmptyDiv(true,true);
googletag.defineOutOfPageSlot('/5993/nbm.con.imp','IMP_interstitial')
.addService(googletag.pubads())
.setTargeting("pos", "interstitial");

googletag.pubads().setTargeting("s1","")
.setTargeting("s2","")
.setTargeting("url","");
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

    <!-- Privacy Policy / Terms of Use
      _________________________________________________-->
    <?php if(is_page(array('terms-of-use','privacy-policy'))){ ?>
        <script>
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

    <?php wp_head(); ?>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/new-royalslider/lib/royalslider/jquery.royalslider.min.js'></script>
    <?php if(is_front_page()){ ?>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
      $('.new-royalslider-1').royalSlider({template:'default',image_generation:{imageWidth:1920,imageHeight:550,thumbImageWidth:'',thumbImageHeight:''},thumbs:{thumbWidth:96,thumbHeight:72},video:{forceMaxVideoCoverResolution:'standard'},block:{moveOffset:20,speed:400,delay:200},width:'100%',height:550,autoScaleSlider:!0,autoScaleSliderWidth:1920,autoScaleSliderHeight:550,imageScaleMode:'fill',globalCaption:!0, autoPlay: {
        // autoplay options go here
        enabled: true,
        pauseOnHover: true
      }});
    });
    </script>
    <?php } ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLJQ854" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->   
  <!-- Start Network Menu -->
  <div id="network-container">
    <nav class="clearfix container" id="network">
      <div class="left-nav">
        <h5 class="left"><a href="javascript:void(0)">Impressions <i class="fa fa-angle-down" aria-hidden="true"></i></a></h5>
        <ul>
          <li class="hide-mobile"><strong><a class="active" href="http://www.impressionsmagazine.com">Impressions</a></strong></li>
          <li><a class="active" href="http://www.impressionsmagazine.com">Magazine</a></li>
          <li><a href="http://www.impressionsmediakit.com">Advertise</a></li>
          <li><a href="http://www.impressionsmagazine.com/subscribe/">Subscribe</a></li>
        </ul>
       </div>
       <div class="right-nav"> 
    <h5 class="right"><a href="javascript:void(0)">ISS <i class="fa fa-angle-down" aria-hidden="true"></i></a></h5>
      <ul>
        <li class="hide-mobile"><strong><a href="http://issshows.com/">ISS</a></strong></li>  
        <li><a href="http://issshows.com/long-beach.shtml">Long Beach</a></li>
        <li><a href="http://issshows.com/atlantic-city.shtml">Atlantic City</a></li> 
        <li><a href="http://issshows.com/houston.shtml">Houston</a></li> 
        <li><a href="http://issshows.com/orlando.shtml">Orlando</a></li> 
        <li><a href="http://issshows.com/fort-worth.shtml">Fort Worth</a></li>
      </ul>
        </div>
    </nav>
  </div>
  <!-- End Network Menu -->
      <header>

<div class="ad-space">
        <div id='IMP_728_Top'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('IMP_728_Top'); });
</script>
</div>
      </div>
      <div class="brand container">
        <a href="<?php bloginfo('siteurl'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/impressions_logo.png" alt=""></a>
        <div class="social">
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true" ></i></a>
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="<?php the_field('linked_in', 'option'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
      <nav>
        <div class="container">
          <div class="toggle">
            <a href="#" class="menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i></a>
          </div>
          <?php  
          wp_nav_menu(
            array(
              'container' => false,                           // remove nav container
              'container_class' => 'menu cf',                 // class of container (should you choose to use it)
              'menu_class' => 'nav top-nav',               // adding custom nav class
              'theme_location' => 'header-menu',                 // where it's located in the theme
              'before' => '',                                 // before the menu
              'after' => '',                                  // after the menu
              'link_before' => '',                            // before each link
              'link_after' => '',                             // after each link
              'items_wrap'      => '<ul id="%1$s" class="menu container">%3$s</ul>',
              'depth' => 0,                                   // limit the depth of the nav
              'fallback_cb' => ''                             // fallback function (if there is one)
            )
          );  ?>
          <div id="search-s" class="search">
            <a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i></a>
            <form action="<?php bloginfo('siteurl')?>/?">
              <input id="s" name="s" type="text" class="in-search" value="Search" onBlur="if(this.value == '') this.value = 'Search'" onFocus="if(this.value == 'Search') this.value = ''" />
              <!--button type="submit" class="btn btn-success">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button-->
            </form>
          </div>
        </div>
      </nav>
    </header>
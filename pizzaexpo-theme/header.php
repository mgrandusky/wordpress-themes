<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pizza Expo</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/royalslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rs-universal.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.countdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/additionalstyle.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600|Source+Sans+Pro:400,600,700|Oswald:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.royalslider.min.js" type="text/javascript"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/countdown-clock.js"></script>-->
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.plugin.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.js"></script>
<script>
$(document).ready (function () {
    $('.info-box-link a').click(function(){
        $(this).parent('p').siblings('div.info').toggle();
        if($(this).hasClass('open')) {
            $(this).removeClass('open');
        } else {
            $(this).addClass('open');
        }
    });
    
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

googletag.defineSlot('/5993/nbm.con.pizzaexpo', [234, 60], 'pizzaexpo_234_Top').addService
(googletag.pubads())
.setTargeting("pos", "top");


googletag.defineSlot('/5993/nbm.con.pizzaexpo', [300, 250], 'pizzaexpo_300_Top').addService(googletag.pubads())
.setTargeting("pos", "top");


googletag.defineSlot('/5993/nbm.con.pizzaexpo', [300, 250], 'pizzaexpo_300_Middle1').addService(googletag.pubads())
.setTargeting("pos", "Middle1");


googletag.defineSlot('/5993/nbm.con.pizzaexpo', [300, 250], 'pizzaexpo_300_Bottom').addService(googletag.pubads())
.setTargeting("pos", "Bottom");


googletag.defineSlot('/5993/nbm.con.pizzaexpo', [[728, 90], [970, 90]], 'pizzaexpo_728_Bottom').addService(googletag.pubads())
.setTargeting("pos", "Bottom");

googletag.defineOutOfPageSlot('/5993/nbm.con.pizzaexpo', 'pizzaexpo_prestitial').addService(googletag.pubads())
.setTargeting("pos", "prestitial");

googletag.defineOutOfPageSlot('/5993/nbm.con.pizzaexpo', 'pizzaexpo_interstitial').addService(googletag.pubads())
.setTargeting("pos", "interstitial");


googletag.pubads().setTargeting("s1","?")
googletag.pubads().setTargeting("pos","?")
googletag.pubads().setTargeting("url","?");
googletag.pubads().enableSingleRequest();
googletag.pubads().collapseEmptyDivs();
googletag.enableServices();

});
</script>
<?php $pizzaexpooptions = pods( 'pizzaexpooptions', $params ); ?>
<script>
    jQuery(function () {
        var d = new Date(<?= do_shortcode('[pods name="pizzaexpooptions" field="countdown_clock_date"]') ?>);
        d.setMonth( d.getMonth( ) - 1 );
        jQuery('#defaultCountdown').countdown({
            until: d,
            format: 'dHMS',
            layout: '<div class="days"><span class="count-label">{dl}</span><span class="count-number">{dn}</span></div> <div class="hours"><span class="count-label">{hl}</span><span class="count-number">{hn}</span></div><div class="minutes"><span class="count-label">{ml}</span><span class="count-number">{mn}</span></div><div class="seconds"><span class="count-label">{sl}</span><span class="count-number">{sn}</span></div>'
        });

    });
</script> 
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


<script>
$.ajax({
      type: 'GET',
      url: 'https://www.pizzatoday.com/wp-json/wp/v2/news?news-categories=4120&orderby=date&order=desc&per_page=15',
      data: { get_param: 'value' },
      dataType: 'json',
      success: function (data) {
          var count = 0;
          $.each(data, function(index, element) {

                var excerpt = element.content.rendered.replace(/^<div[^>]*>|<\/div>$/g, '').replace(/^<h1[^>]*>|<\/h1>$/g, '').replace(/['"]+/g, '').replace(/(<p>|<\/p>)/g, "").replace(/<img[^>]*>/g,"").replace(/<p class="wp-caption-text"[^>]*>/g,"").replace(/<ol[^>]*>/g,"").replace(/<ul[^>]*>/g,"").replace(/<li[^>]*>/g,"").replace(/<br[^>]*>/g,"").replace(/<a[^>]*>/g,"").replace(/(\r\n|\n|\r)/gm,"").replace(/"/g, "");
                //var excerpt = element.content.rendered.replace(/['"]+/g, '').replace(/<ol[^>]*>/g,"").replace(/<ul[^>]*>/g,"").replace(/<li[^>]*>/g,"").replace(/<br[^>]*>/g,"").replace(/<a[^>]*>/g,"").replace(/(\r\n|\n|\r)/gm,"").replace(/"/g, "");
                var regex = /(<([^>]+)>)/ig;
                var result = excerpt.replace(regex, "").substring(0, 180);
                result = result.substr(0, Math.min(result.length, result.lastIndexOf(" "))) +"...";
                var date = new Date(element.date);
                var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                var year = date.getFullYear();
                var month = months[date.getMonth()];
                var day = date.getDate(); 
                var formatDate = month + ' ' + day + ', '  + year;
                var stringified = JSON.stringify(element.pure_taxonomies);
                stringified = stringified.replace("news-categories","news_categories");
                var taxonomies = JSON.parse(stringified);
                var cat_name = taxonomies.news_categories[0].name;
                //console.log (cat_name + ' : ' + date);
                var cat_link = cat_name.replace(" ", "-").toLowerCase();
                if((cat_name != 'Videos') && (cat_name == 'Pizza Expo News')  && (count < 3)) {

                      $('#news').append(
                      '<article class="news col-md-4 col-sm-4"><span class="meta-date">' + formatDate + '</span><h5 class="news-title"><a href="' + element.link + '">' + element.title.rendered + '</a></h5><p class="desc">' + result + '</p> <a href="' + element.link + '" class="readmore"><span>Read More</span></a></article>'
                      ).hide().fadeIn();
                      count++;
                }
          });
      }
  });
</script>

</head>
 
<body>
<!-- Google Tag Manager -- Pizza Expo -- Place immediately following body tag -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PPGQM5"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PPGQM5');</script>

<!-- End Google Tag Manager -->
<?php if ( is_front_page() ) {	 ?>
<div id="pizzaexpo_prestitial" style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('pizzaexpo_prestitial'); });
</script>
</div>
<?php }else{ ?>
<div id="pizzaexpo_interstitial" style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('pizzaexpo_interstitial'); });
</script>
</div>
<?php } ?>

<!-- Start TopAd -->



<!-- End TopAd -->



<div class="header-container">
    <header>
   <div id="network-container">
      <nav>
        <h5 class=""> <a href="javascript:void(0)" class="">PIZZA NETWORK</a></h5>
        <ul>
          <li><a class="active" href="#">PIZZA EXPO</a></li>
          <li><a href="http://www.pizzatoday.com/">PIZZA TODAY</a></li>
<li><a href="http://www.pizzaandpastaexpo.com">PIZZA & PASTA EXPO</a></li>
          <li><a href="http://mediakit.pizzatoday.com">MEDIA KIT</a></li>
        </ul>
      </nav>
    </div>

        <div class="container header br">
              <?php
                $displayCountdown = do_shortcode('[pods name="pizzaexpooptions" field="display_countdown_clock"]');
                if ($displayCountdown == "Yes"){   
              ?>
             <div id="countdown-clock" class="pe-counter countdown col-md-5">
                <p><?= do_shortcode('[pods name="pizzaexpooptions" field="countdown_clock_header"]') ?></p>
                <style type="text/css">
                  #defaultCountdown { width: 266px; height: 60px;float:left; }
                </style>
                <div id="defaultCountdown"></div>
                <div id="pizzaexpo_234_Top">
                  <script type="text/javascript">googletag.cmd.push(function() { googletag.display('pizzaexpo_234_Top'); });</script>
                 </div>
            </div>
            <?php
            }
            ?>
            <div class="logo-dates">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand col-md-3 col-sm-5">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/brand.png" alt="">
              </a>
              <div class="col-md-4 col-sm-5 dates">
                  <span class="date"><?php echo $pizzaexpooptions->field( 'expo_dates' ); ?></span>
                  <br>
                  <span class="date-pub"><?php echo $pizzaexpooptions->field( 'expo_opens' ); ?></span>
                  <br>
                  <span class="location"><?php echo $pizzaexpooptions->field( 'expo_location' ); ?></span>
              </div>
            </div>      	
        </div>
        <nav id="menu">
            <div class="container cf">
            <a href="#" class="toggle-menu"></a>
           <?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => '', 'items_wrap' => '<ul class="top-menu">%3$s</ul>'));?>
                <div class="social">
                    <div class="search-thing">
                        <a href="#" class="btn-search"></a>
                        <form role="search" style="display: none;" action="<?php bloginfo('siteurl'); ?>/" method="get" id="search">
				<input id="s" name="s" type="text" class="in-search" value="Search" onBlur="if(this.value == '') this.value = 'Search'" onFocus="if(this.value == 'Search') this.value = ''" />
				<input id="search-" type="submit" onClick="if(q.value =='Search') q.value =''" value="" />
			</form>
                    </div>
                    <a href="<?php echo $pizzaexpooptions->field( 'facebook_url' ); ?>" class="fb" target="_blank"></a>
                    <a href="<?php echo $pizzaexpooptions->field( 'twitter_url' ); ?>" class="tw" target="_blank"></a>
                  
                </div>
            </div>
        </nav>
    </header>
</div>


   
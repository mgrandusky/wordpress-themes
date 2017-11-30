<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="google-site-verification" content="q0giSg3UBKqOapDxuBAUnkb2hC6SFE3_56Na-JDS4fo" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php if (is_home () ) { bloginfo(‘name’); }
elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo(‘name’); }
elseif (is_single() ) { single_post_title();}
elseif (is_page() ) { single_post_title();}
else { wp_title(‘’,true); } ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body>

<div id="wrap">
<div id="wrap_in">

	<div id="top" class="wrap">
		<div class="col-left">

<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="400" height="120" id="Asimonsays" align="middle">
				<param name="movie" value="https://www.asimonsays.com/Asimonsays.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="https://www.asimonsays.com/Asimonsays.swf" width="400" height="120">
					<param name="movie" value="Asimonsays.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<h1><a href="<?php bloginfo('url'); ?>"><img src="http://www.asimonsays.com/wp-content/uploads/2012/08/logo.png" alt="A Simon Says" style="margin-top:-5px;width:300px;  max-width: 100%; height:auto;"></a></h1>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>

		</div>
		<div class="col-right wrap">
			<a href="http://www.facebook.com/pages/A-Simon-Says/158137450898982" target="_blank"><img src="http://www.asimonsays.com/wp-content/uploads/2012/06/facebook.jpg" alt="Follow Us On Facebook" /></a>
			<a href="http://twitter.com/asimonsaysnj" target="_blank"><img src="http://www.asimonsays.com/wp-content/uploads/2012/06/twitter.jpg" alt="Follow Us On Twitter" /></a>
			<a href="mailto:amy@asimonsays.com" target="_blank"><img src="http://www.asimonsays.com/wp-content/uploads/2012/06/email.jpg" alt="Email ASimonSays" /></a>
		</div>
	</div>
	<div id="toggle"><a href="#" class="menu"></a></div>
	<div id="menu">
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
	</div>
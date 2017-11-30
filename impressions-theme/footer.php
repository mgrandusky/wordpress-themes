  <footer>
    <div class="container" style="display: block;">
	<?php if(is_post_type_archive('news')): ?><div class="seo"><?php the_field('news', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'news-categories', 'screen-printing' )): ?><div class="seo"><?php the_field('news_>_screen_printing', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'news-categories', 'embroidery' )): ?><div class="seo"><?php the_field('news_>_embroidery', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'news-categories', 'digital-decorating' )): ?><div class="seo"><?php the_field('news_>_digital_decorating', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'news-categories', 'industry' )): ?><div class="seo"><?php the_field('news_>_industry', 'option'); ?></div><hr><?php endif; ?>
	
	<?php if(is_post_type_archive('screen-printing')): ?><div class="seo"><?php the_field('screen_printing', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'screen-printing-categories', 'process-techniques' )): ?><div class="seo"><?php the_field('screen_printing_>_process_+_techniques', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'screen-printing-categories', 'production' )): ?><div class="seo"><?php the_field('screen_printing_>_production', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'screen-printing-categories', 'graphics-design' )): ?><div class="seo"><?php the_field('screen_printing_>_graphics_+_designs', 'option'); ?></div><hr><?php endif; ?>

	<?php if(is_post_type_archive('embroidery')): ?><div class="seo"><?php the_field('embroidery', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'embroidery-categories', 'process-techniques' )): ?><div class="seo"><?php the_field('embroidery_>_process_+_techniques', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'embroidery-categories', 'production' )): ?><div class="seo"><?php the_field('embroidery_>_production', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'embroidery-categories', 'design-digitizing' )): ?><div class="seo"><?php the_field('embroidery_>_design_+_digitizing', 'option'); ?></div><hr><?php endif; ?>

	<?php if(is_post_type_archive('digital-decorating')): ?><div class="seo"><?php the_field('digital_decorating', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'digital-decorating-categories', 'process-techniques' )): ?><div class="seo"><?php the_field('digital_decorating_>_process_+_techniques', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'digital-decorating-categories', 'sublimation' )): ?><div class="seo"><?php the_field('digital_decorating_>_sublimation', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'digital-decorating-categories', 'dtg' )): ?><div class="seo"><?php the_field('digital_decorating_>_direct-to-garment', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'digital-decorating-categories', 'heat-transfer' )): ?><div class="seo"><?php the_field('digital_decorating_>_heat_transfer', 'option'); ?></div><hr><?php endif; ?>

	<?php if(is_post_type_archive('products')): ?><div class="seo"><?php the_field('products', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'products-categories', 'apparel-printing' )): ?><div class="seo"><?php the_field('products_>_apparel', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'products-categories', 'screen-printing' )): ?><div class="seo"><?php the_field('products_>_screen_printing', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'products-categories', 'embroidery' )): ?><div class="seo"><?php the_field('products_>_embroidery', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'products-categories', 'digital-decorating' )): ?><div class="seo"><?php the_field('products_>_digital_decorating', 'option'); ?></div><hr><?php endif; ?>

	<?php if(is_post_type_archive('galleries')): ?><div class="seo"><?php the_field('galleries', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'galleries-categories', 'screen-printing' )): ?><div class="seo"><?php the_field('galleries_>_screen_printing', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'galleries-categories', 'embroidery' )): ?><div class="seo"><?php the_field('galleries_>_embroidery', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'galleries-categories', 'digital-decorating' )): ?><div class="seo"><?php the_field('galleries_>_digital_decorating', 'option'); ?></div><hr><?php endif; ?>

	<?php if(is_post_type_archive('build-your-business')): ?><div class="seo"><?php the_field('build_your_business', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'build-your-business-categories', 'management' )): ?><div class="seo"><?php the_field('build_your_business_>_management', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'build-your-business-categories', 'trends' )): ?><div class="seo"><?php the_field('build_your_business_>_trends', 'option'); ?></div><hr><?php endif; ?>
	<?php if(is_tax( 'build-your-business-categories', 'shop-talk' )): ?><div class="seo"><?php the_field('build_your_business_>_shop_talk', 'option'); ?></div><hr><?php endif; ?>


      <div class="ad-space">
        <div id='IMP_728_Bottom'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('IMP_728_Bottom'); });
</script>
</div>
      </div>
      <hr>
      <nav>
        <ul>
          <li><span>Sections</span>
          <ul>
            <li><a href="<?php bloginfo('siteurl'); ?>/news">News</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/screen-printing">Screen Printing</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/embroidery">Embroidery</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/digital-decorating">Digital Decorating</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/products">Products</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/galleries">Galleries</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/build-your-business">Build Your Business</a></li>
          </ul></li>
          <li><span>Resources</span>
          <ul>
            <li><a href="<?php bloginfo('siteurl'); ?>/about">About Us</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/contact">Contact Us</a></li>
            <li><a href="http://www.impressionsmediakit.com" target="_blank">Advertise</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/subscribe">Subscribe</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/newsletters">Newsletters</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/industry-associations">Industry Associations</a></li>
			<li><a href="http://www.impressionsdirectory.com/" target="_blank">Buyers Guide</a></li>
			<li><a href="<?php bloginfo('siteurl'); ?>/catalog-request">Catalog Request</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/sitemap">Site Map</a></li>
          </ul></li>
          <li><span>Brand</span>
          <ul>
            <li><a href="http://issshows.com/index.shtml">ISS</a></li>
            <li><a href="<?php bloginfo('siteurl'); ?>/">Impressions</a></li>
       
            <li style="list-style: none;color: #707070;"><a href="#" >&nbsp;</a></li>
            <li style="list-style: none;color: #707070;"><a href="#" >&nbsp;</a></li>
            <li style="list-style: none;color: #707070;">&copy; <?php echo date('Y'); ?> <a href="https://www.emeraldexpositions.com/" style="color: inherit;" class="linkunderline">Emerald Expositions, LLC.</a> All Rights Reseved</li>
            <li style="list-style: none;color: #707070;"><a href="#" >&nbsp;</a></li>
            <li style="list-style: none;color: #707070;"><a href="<?php bloginfo('siteurl'); ?>/terms-of-use">Terms</a> | <a href="<?php bloginfo('siteurl'); ?>/privacy-policy">Privacy</a></li>
          </ul></li>
        </ul>
      </nav>
<style>
a.linkunderline:hover { text-decoration:underline; }
</style>
    </div>
  </footer>
  <link rel='stylesheet' id='new-royalslider-core-css-css'  href='<?php echo get_template_directory_uri(); ?>/new-royalslider/lib/royalslider/royalslider.css' type='text/css' media='all' />
  <link rel='stylesheet' id='rsUni-css-css'  href='<?php echo get_template_directory_uri(); ?>/new-royalslider/lib/royalslider/skins/universal/rs-universal.css' type='text/css' media='all' />
  <!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/new-royalslider/lib/royalslider/jquery.royalslider.min.js'></script> -->
  <script id="new-royalslider-init-code" type="text/javascript">
    // jQuery(document).ready(function($) {
    //   $('.new-royalslider-1').royalSlider({template:'default',image_generation:{imageWidth:1920,imageHeight:550,thumbImageWidth:'',thumbImageHeight:''},thumbs:{thumbWidth:96,thumbHeight:72},video:{forceMaxVideoCoverResolution:'standard'},block:{moveOffset:20,speed:400,delay:200},width:'100%',height:550,autoScaleSlider:!0,autoScaleSliderWidth:1920,autoScaleSliderHeight:550,imageScaleMode:'fill',globalCaption:!0});
    // });

    jQuery(document).ready(function($) {
      $('.new-royalslider-3').royalSlider({
        template:'default',
        image_generation:{lazyLoading:!0,imageWidth:513,imageHeight:340,thumbImageWidth:96,thumbImageHeight:72},
        thumbs:{paddingBottom:4,thumbWidth:96,thumbHeight:72,appendSpan:!0}/*,fullscreen:{enabled:!0,nativeFS:!0}*/,
        video:{forceMaxVideoCoverResolution:'standard'},
        block:{moveOffset:20,speed:400,delay:200},
        width:'100%',height:'100%',/*autoScaleSlider:!0,*/
        autoScaleSliderWidth:960,autoScaleSliderHeight:454,imageAlignCenter:!1,
        controlNavigation:'thumbnails',arrowsNavHideOnTouch:!0,keyboardNavEnabled:!0,fadeinLoadedSlide:!1,arrowsNav:!1
      });
    });
    <?php if(!is_front_page()){ ?>
      $('.new-royalslider-2').royalSlider({
        template:'default',
        image_generation:{imageWidth:960,imageHeight:630,thumbImageWidth:'',thumbImageHeight:''},
        thumbs:{thumbWidth:96,thumbHeight:72},video:{forceMaxVideoCoverResolution:'standard'},
        block:{moveOffset:20,speed:400,delay:200},
        deeplinking: { enabled: true, change: true, prefix: 'slider-' },
        width:'100%',height:630,autoScaleSlider:!0,autoScaleSliderWidth:960,
        autoScaleSliderHeight:630,imageScaleMode:'fit',controlNavigation:'none',globalCaption:!0
      });
      // $('#featured .royalSlider .rsGCaption').html('<span class="slide"></span>')
      var sliderJQ = jQuery('.new-royalslider-2').royalSlider();
      var sliderInstance = sliderJQ.data('royalSlider');
      var curr = sliderInstance.currSlideId+1;
      var all = sliderInstance.numSlides;
      sliderInstance.slides[sliderInstance.currSlideId].holder.on('rsAfterContentSet', function() {
        // sliderInstance.currSlide.content.find('.slide_caption').html()
        $('#featured .royalSlider .rsGCaption').html(sliderInstance.currSlide.content.find('.slide_caption').html());
        $('#featured .royalSlider .rsGCaption .slide').html( curr + ' of ' + all);
      });
      function updCount() {
        // console.log(curr);
        // console.log(curr + ' of ' + sliderInstance.numSlides );
        var curr = sliderInstance.currSlideId+1;
        var all = sliderInstance.numSlides;
        $('#featured .royalSlider .rsGCaption').html(sliderInstance.currSlide.content.find('.slide_caption').html());
        $('#featured .royalSlider .rsGCaption .slide').html( curr + ' of ' + all);
        console.log(curr + ' of ' + all);
      }
      if( $('.new-royalslider-2').length > 0){
        sliderInstance.ev.on('rsAfterSlideChange', updCount);
      }
    <?php } ?>
  </script>
<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){  /*maui parent menu*/
	// $('.menu .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>');
  $('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>').insertAfter('.menu .menu-item-has-children > a');
	$('.menu .sub-toggle').click(function() {
	   $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('fast', 'linear');
	   $(this).children('.fa-angle-right').first().toggleClass('fa-angle-down');
	});

});
</script>
<style>
@media print {
    body {
        background: #fff none !important;
        color: #000;
    }
	#network-container {
		display:none;
	}
	.social {
		display:none;
	}
	.ad-space {
		display:none;
	}
	header nav {
		display:none;
	}
	header {
		height:100px;
		clear:both;
		background: red !mportant;
	}
	main {
		clear: both;
		overflow: visible;

	}

    .container { display:block !important; }
	#sidebar { display: none;}
}
</style>
</body>
</html>
<div class="adbottom-container">
<div class="btm-ad twelve">  
  <?php if(is_page('about-us')): ?>
  	<div class="seo twelve">
	
		<?= do_shortcode('[pods name="seo_copy" field="about_us_copy"]') ?>
		
    	</div>
   <?php endif; ?>
   <?php if(is_post_type_archive('news')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="news_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'news-categories', 'pizza-headlines' )): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="news_pizza_headlines_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'news-categories', 'pizza-expo-news')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="news_pizza_expo_news_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'news-categories', 'press-release')): ?>
    <div class="seo twelve">

	<?= do_shortcode('[pods name="seo_copy" field="news_press_release_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'news-categories', 'videos')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="news_videos_copy"]') ?>

    </div>
    <?php endif; ?>
<?php if(is_post_type_archive('pizzeria-rankings')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="news_pizzeria_rankings_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_post_type_archive('departments')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="department_copy"]') ?>

    </div>
    <?php endif; ?>

    <?php if(is_tax( 'departments-categories', 'front-of-the-house')): ?>
    <div class="seo twelve">
	<?= do_shortcode('[pods name="seo_copy" field="departments_front_of_the_house_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'departments-categories', 'in-the-kitchen')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="departments_in_the_kitchen_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'departments-categories', 'back-office')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="departments_back_office_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'departments-categories', 'features')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="departements_features_copy"]') ?>

    </div>
    <?php endif; ?>
<?php if(is_post_type_archive('our-experts')): ?>
    <div class="seo twelve">

	<?= do_shortcode('[pods name="seo_copy" field="departments_our_experts_copy"]') ?>

    </div>
    <?php endif; ?>

    <?php if(is_post_type_archive('recipes') && !is_search()): ?>
    <div class="seo twelve">

	<?= do_shortcode('[pods name="seo_copy" field="recipes_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'pizzas')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_pizza_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'dough-breads')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_dough_bread_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'sauces')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_sauces_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'appetizers')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_appetizers_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'entrees')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_entrees_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'salad-sandwiches-soup')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_salads_sandwiches_soups_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'recipes_custom', 'desserts')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="recipes_desserts_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_post_type_archive('products')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="products_copy"]') ?>

    </div>
   <?php endif; ?>
    <?php if(is_tax( 'product_showcase_custom', 'equipment')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="products_equipment_copy"]') ?>

    </div>
    <?php endif; ?>
    <?php if(is_tax( 'product_showcase_custom', 'ingredients')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="products_ingredients_copy"]') ?>

    </div>
    <?php endif; ?> 
    <?php if(is_tax( 'product_showcase_custom', 'services')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="products_services_copy"]') ?>

    </div>
    <?php endif; ?> 
    <?php if(is_tax( 'product_showcase_custom', 'supplies')): ?>
    <div class="seo twelve">
	
	<?= do_shortcode('[pods name="seo_copy" field="products_supplies_copy"]') ?>

    </div>
    <?php endif; ?> 


<div id='pizzatoday_728_Bottom'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('pizzatoday_728_Bottom'); });
</script>
</div>
</div>
</div>
<div class="footer-container">
  <footer class="container row">
    <div class="ten columns row">
        <p> <a href="<?php bloginfo('siteurl'); ?>/about-us">About Us</a> | <a href="http://mediakit.pizzatoday.com/" target="_blank">Media Kit</a> | <a href="http://www.nxtbook.com/fx/archives/view.php?id=9cda820c293681dafa21b724c1f61ee1" target="_blank">Digital Edition</a> | <a href="<?php bloginfo('siteurl'); ?>/contact-us">Contact Us</a> | 
        <a href="<?php bloginfo('siteurl'); ?>/site-map">Site Map</a> | <a href="<?php bloginfo('siteurl'); ?>/terms-of-use">Terms of Use</a> | <a href="<?php bloginfo('siteurl'); ?>/privacy-policy">Privacy Policy</a></p>
    </div>
    <div class="six columns">
     <p> &copy; <?= date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank">Emerald Expositions, LLC</a>. All Rights Reserved.</p>
    </div>
  </footer>
</div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– --> 
<?php wp_footer(); ?>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php if(is_front_page()): ?>
<script src="<?php echo get_template_directory_uri(); ?>/royalslider/jquery-1.8.3.min.js" ></script>
<link href="<?php echo get_template_directory_uri(); ?>/royalslider/royalslider.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/royalslider/skins/default/rs-default.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/custom-royalslider.css" rel="stylesheet">
<script>
jQuery(document).ready(function($) {
	jQuery('#slider .new-royalslider-1').royalSlider({
		template:'default',
		image_generation:{
			imageWidth:1600,imageHeight:470,thumbImageWidth:'',thumbImageHeight:''},
		thumbs:{thumbWidth:96,thumbHeight:72},
		autoPlay:{enabled:!0},
		block:{moveOffset:20,speed:800,delay:400},
		width:'100%',
		height:'',
		autoScaleSlider:!0,
		autoScaleSliderWidth:1600,
		autoScaleSliderHeight:470,
    loop: false,
    imageScaleMode: 'fill',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    autoScaleSlider:true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,	
    fadeinLoadedSlide: true,		
		autoHeight:!0,
		globalCaption:!0,
		navigateByClick:!1});
});
</script>
<?php endif; ?>
<?php if(is_singular('news')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/royalslider/jquery-1.8.3.min.js" ></script>
<link href="<?php echo get_template_directory_uri(); ?>/royalslider/royalslider.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/royalslider/skins/default/rs-default.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/custom-royalslider.css" rel="stylesheet">
<script>
jQuery(document).ready(function($) {
	jQuery('#article-slider .new-royalslider-1').royalSlider({
		template:'default',
		image_generation:{
			imageWidth:1600,imageHeight:470,thumbImageWidth:'',thumbImageHeight:''},
		thumbs:{thumbWidth:96,thumbHeight:72},
		autoPlay:{enabled:!0},
		block:{moveOffset:20,speed:800,delay:400},
		width:'100%',
		height:'',
		autoScaleSlider:!0,
		autoScaleSliderWidth:1600,
		autoScaleSliderHeight:470,
    deeplinking: {
    		// deep linking options go gere
    		enabled: true,
		change: true,
    		prefix: 'slider-'
    	},
    loop: false,
    imageScaleMode: 'fill',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    autoScaleSlider:true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,	
    fadeinLoadedSlide: true,		
		autoHeight:!0,
		globalCaption:!0,
		navigateByClick:!1});
});
    jQuery(document).ready(function($) {
        // $('.royalSlider').each(function() {
            var slider = $('#article-slider .new-royalslider-1');
            var sliderInstance = slider.data('royalSlider');

            // if(sliderInstance) {
                // var slideCounter = $('<div class="rsSlideCount"></div>').appendTo( slider );

                var updCount = function () {
                    $('#article-slider .new-royalslider-1 .rsSlideCount').html( (sliderInstance.currSlideId+1) + ' of ' + sliderInstance.numSlides );
                }
                sliderInstance.ev.on('rsAfterSlideChange', updCount);
                updCount();
            // }

        // });
    });

</script>
<?php endif; ?>

<script>
jQuery(document).ready(function($) {
       $(function() {
	        $('#tabs').tabs();
        });
});		
    </script>
<script>$( ".wp-paginate li" ).first().addClass( "sp-first" );</script>
<script src="<?php echo get_template_directory_uri(); ?>/royalslider/jquery.royalslider.min.js"></script>
<script>
$('a[href^="http://"]').not('a[href*=pizzatoday],a[href*=pizzaexpo],a[href*=pizzaandpastaexpo]').attr('target','_blank');
/*$('a[href^="http://"]').not('a[href*=http://www.pizzaexpo.com]').attr('target','_blank');
$('a[href^="http://"]').not('a[href*=http://mediakit.pizzatoday.com]').attr('target','_blank');*/
</script>

</body>
</html>

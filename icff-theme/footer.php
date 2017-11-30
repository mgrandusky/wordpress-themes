<footer>
    <div class="seo">
    	<?php if ( is_front_page() ) { ?>
    		<?= do_shortcode('[pods name="sitesettings" field="home_seo"]') ?>
    	<?php }elseif ( is_single('About the Show')) {  ?>
    		<?= do_shortcode('[pods name="sitesettings" field="about_page_seo"]') ?>
    	<?php }elseif ( is_single('Why Attend?')) {  ?>
    		<?= do_shortcode('[pods name="sitesettings" field="why_attend_seo"]') ?>
    	<?php }elseif ( is_single('Why Exhibit?')) {  ?>
    		<?= do_shortcode('[pods name="sitesettings" field="why_exhibit_seo"]') ?>
    	<?php }elseif ( is_single('ICFF Talks')) {  ?>
    		<?= do_shortcode('[pods name="sitesettings" field="icff_talks_seo"]') ?>
    	<?php }elseif ( is_single('ICFF Studio')) {  ?>
    		<?= do_shortcode('[pods name="sitesettings" field="icff_studio_seo"]') ?>
    	<?php }elseif ( is_single('ICFF Editors Awards')) {  ?>
    		<?= do_shortcode('[pods name="sitesettings" field="editor_awards_seo"]') ?>
    	<?php } ?>
    </div>
    <hr class="hidden-phone" style="border-bottom: #aaa solid 1px; max-width: 1270px;">
        <!-- ICFFHomepage -->
    <div id='ICFF_Homepage_728_Bottom' class="hidden-phone" style="width:728px;height:90px;margin:0px auto;">
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('ICFF_Homepage_728_Bottom'); });
    </script>
    </div>
    <hr style="border-bottom: #aaa solid 1px; max-width: 1270px;">
        
    <div class="footer-nav cf">
		<?php wp_nav_menu(array(
    		'container' => false,                           // remove nav container
    		'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    		'menu_class' => 'nav top-nav cf',               // adding custom nav class
    		'theme_location' => 'menu-2',                 // where it's located in the theme
    		'before' => '',                                 // before the menu
        	'after' => '',                                  // after the menu
        	'link_before' => '',                            // before each link
        	'link_after' => '',                             // after each link
    		'items_wrap'      => '<ul id="%1$s" class="cf">%3$s</ul>',
    		'depth' => 0,                                   // limit the depth of the nav
    		'fallback_cb' => ''                             // fallback function (if there is one)
    	)); ?>
            
        <hr class="visible-phone" style="border-bottom: #aaa solid 1px;max-width: 1270px;">
        <div class="ctp">
    	    <?php dynamic_sidebar('footer-sidebar-1'); ?>
        </div>
    </div>
</footer>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.royalslider.min.js"></script> -->

<?php wp_footer(); ?>
<script>
$( "#list" ).load( "<?php echo get_template_directory_uri(); ?>/exhibitor-home.php" );

$('document').ready(function(){

	$('#gform_1').submit(function(){
	
		$('#gform_submit_button_1').hide();
		setTimeout(function(){
		$('#gform_submit_button_1').hide();
		if($("#field_1_1").hasClass('gfield_error')){
			$("#gform_wrapper_1").addClass('gform_validation_error');
			$('#gform_submit_button_1').show();		
		}
	},500);
	});
});
</script>

</body>
</html>
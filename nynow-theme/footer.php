  <footer>
        <div class="seo">
		<?php if ( is_front_page() ) { ?>
			<?php echo stripslashes(get_option('seo_copy_home')); ?>
			<hr>
		<?php }elseif ( is_single('First Time Attendees')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_first_time_attendees')); ?>
			<hr>
		<?php }elseif ( is_single('Why Exhibit?')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_why_exhibit')); ?>
			<hr>
		<?php }elseif ( is_single('Exhibitor List')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_exhibitors_list')); ?>
			<hr>
		<?php }elseif ( is_single('Programs')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_programs')); ?>
			<hr>
		<?php }elseif ( is_single('Events')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_events')); ?>
			<hr>
		<?php }elseif ( is_single('Display + Awards Submissions')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_displays_awards_submissions')); ?>
			<hr>
		<?php }elseif ( is_single('HOME')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_home')); ?>
			<hr>
		<?php }elseif ( is_single('tabletop-gourmet-housewares')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_home_tgh')); ?>
			<hr>
		<?php }elseif ( is_single('Accent on Design®')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_home_ad')); ?>
			<hr>
		<?php }elseif ( is_single('Home Furnishings + Textiles')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_home_hft')); ?>
			<hr>
		<?php }elseif ( is_single('LIFESTYLE')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_lifestyle')); ?>
			<hr>
		<?php }elseif ( is_single('Baby + Child')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_lifestyle_bc')); ?>
			<hr>
		<?php }elseif ( is_single('Gift')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_lifestyle_gift')); ?>
			<hr>
		<?php }elseif ( is_single('Personal Accessories')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_lifestyle_pa')); ?>
			<hr>
		<?php }elseif ( is_single('Personal Care + Wellness')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_lifestyle_pcw')); ?>
			<hr>
		<?php }elseif ( is_single('HANDMADE')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_handmade')); ?>
			<hr>
		<?php }elseif ( is_single('Stuff')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_handmade_stuff')); ?>
			<hr>
		<?php }elseif ( is_single('Artisan Resource<sup>&reg;</sup>')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_handmade_ar')); ?>
			<hr>
		<?php }elseif ( is_single('Handmade Designer Maker')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_handmade_dm')); ?>
			<hr>
		<?php }elseif ( is_single('Handmade Global Design')) {  ?>
			<?php echo stripslashes(get_option('seo_copy_collections_handmade_gd')); ?>
			<hr>
		<?php } ?>
        </div>        

	        <div class="ad-space">
	            <div id='nynow_728_Bottom' style=width:728;height:90;”>
			<script type='text/javascript'>
				googletag.cmd.push(function() { googletag.display('nynow_728_Bottom'); });
			</script>
		    </div>

	        </div>
	        <hr class="ad-space-bottom-border">

        
        <div class="footer-menu cf">
		<?php wp_nav_menu(
    array(
    		'container' => false,                           // remove nav container
    		'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    		'menu_class' => 'nav top-nav cf',               // adding custom nav class
    		'theme_location' => 'menu-2',                   // where it's located in the theme
    		'before' => '',                                 // before the menu
      	'after' => '',                                  // after the menu
      	'link_before' => '',                            // before each link
      	'link_after' => '',                             // after each link
    		'items_wrap' => '<ul id="%1$s" class="cf">%3$s</ul>',
    		'depth' => 0,                                   // limit the depth of the nav
    		'fallback_cb' => ''                             // fallback function (if there is one)
    	)
    ); ?>
            
        
        </div>
        <div class="copy">&copy; <?= date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank">Emerald Expositions, LLC.</a> All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="display:inline-block;"><a href="<?php bloginfo('siteurl'); ?>/terms-of-use">Terms of use</a> | <a href="<?php bloginfo('siteurl'); ?>/privacy-policy">privacy policy</a></div> </div>
     
    </footer>

<?php wp_footer(); ?>

<style type="text/css">
  #content .hentry .button{
    text-transform: uppercase;
    text-decoration: none;
    width: 100%;
    max-width: 355px;
    font-size: 22px;
    font-weight: bold;
  }
  #content .hentry .button.light{
    background-color: #ff5a34;
  }
  #content .hentry .button.dark{
    background-color: #837870;
  }
  #content .hentry .button:hover{
    background-color: #000;
    text-decoration: none;
  }
</style>
<?php if(!is_single(array('marketing-tools','faqs'))) { ?>
  <script type="text/javascript">
  $(document).ready(function(){
    setTimeout(function(){
      $('#ui-id-3').click( function(){
        window.location = "<?php the_field('seminars_details') ?>";
      });
    }, 500);
  });
  </script>
<?php } 
//window.location = "http://nynow.a2zinc.net/Summer2017/Public/sessions.aspx?view=sessions&ID=8185";
?>
</body>
</html>
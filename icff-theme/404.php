<?php get_header(); ?>

	<div id="main" class="cf error">
        	<div id="content" class="cf">
			
			<div class="entry e404 cf">
                <h2 style="font-size:9.375em; text-align:center; font-family: 'pt serif', times, serif; ">404</h2>
                <p style="font-size:1.875em; text-align:center; font-family: 'pt serif', times, serif; ">Sorry,the page you were looking for doesn't exist</p>
                <p style="font-size:1.125em; text-align:center; font-family: 'pt serif', times, serif; ">Please try the links below or use the search above to help find your way.</p>
                <p style="font-size:1.125em; text-align:center; font-family: 'pt serif', times, serif; "><a href="<?php bloginfo('siteurl'); ?>">Home</a> <a href="<?php bloginfo('siteurl'); ?>/sitemap">Site Map</a> <a href="<?php bloginfo('siteurl'); ?>/contact-us">Contact Us</a></p>
                <p>If you followed a broken link, please let us know where the broken link came from.</p>
            </div>
			
		</div>
		<?php //get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
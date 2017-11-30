<?php get_header(); ?>

	<div id="main" class="cf">
        <div id="content">
            <article class="hentry e404">
                <h2 style="font-size:3.75em; color:#ff5a34; line-height: normal;">404 page not found</h2>
                <br>
                <h3 style="font-size:1.5em; line-height: normal; font-weight: 400;">Sorry, the page you were looking for doesn't exist.</h3>
                <br><br>
                <p>Please try the links below or use the search above 
                to help find your way.</p>
                <a href="<?php bloginfo('siteurl'); ?>">Home</a> | <a href="<?php bloginfo('siteurl'); ?>/site-map">Site Map</a> | <a href="<?php bloginfo('siteurl'); ?>/contact-us">Contact Us</a>
                <br><br>
                <p>If you followed a broken link, please let us know where the 
                broken link came from.</p>
            </article>
        </div>
        <?php include 'sidebar-404.php'; ?>
    </div>
	
<?php get_footer(); ?>
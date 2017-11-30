<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9 error-page">
		<article>
			<section>
				<h3>404 page not found</h3>                                            
			    <span style="font-size:24px;font-weight:700;">Sorry, the page you were looking for doesn't exist.</span>
	            <p>Please try the links below or use the search above to help find your way<br/><br/>
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap">Site Map</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact Us</a></p>
	            <p>If you followed a broken link, please <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">let us know</a> where the broken link came from.</p>
			</section>
		</article>
 	</div>
	<?php include('sidebar-404.php'); ?>
  </main>
<?php get_footer(); ?>
<style>
a { text-decoration:none; }
a:hover { text-decoration:underline; }
</style>
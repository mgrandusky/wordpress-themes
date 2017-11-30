<?php get_header(); ?>
<script>jQuery('body').addClass('error-block');</script>
	<div class="main-container">
	  <div class="main wrapper clearfix">
	    <div id="contentwrapper">
	      <article>
	        <section>

				<h3>404 page not found</h3>                                            
			    <h4>Sorry, the page you were looking for doesn't exist.</h4>
	            <p>Please try the links below or use the search above to help find your way<br/><br/>
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>site-map">Site Map</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a></p>
	            <p>If you followed a broken link, please <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">let us know</a> where the broken link came from.</p>
	        </section>
	      </article>
	    </div>
	    <aside> 
	      <?php include 'sidebar-404.php'; ?>
	    </aside>
	  </div>
	  <!-- #main --> 
	</div>
	<!-- #main-container -->
<?php get_footer(); ?>
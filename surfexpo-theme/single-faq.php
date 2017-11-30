<?php

/*

Template Name Posts: FAQ

*/

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('inner');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
		<h1 class="header">FAQ</h1>

		<div class="clearfix open-text"> 
		    <ul>
		       <li><a href="#general"><strong>General Questions</strong></a></li>
		       <li><a href="#attendee"><strong>Attendee</strong></a></li>
	    	       <li><a href="#exhibitor"><strong>Exhibitor</strong></a></li>
		    </ul>


	            <section class="faq-section">	            
	                <a name="general"><h2 class="sub-header">General Questions</h2></a>
					<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php if(get_field('selector') == "General"): ?>
							<div class="question clearfix">                      
								<p class="info-box-link"><a name="javascript:void(0)"><?php the_title(); ?></a></p>
								<div class="info"><?php echo the_field('answer'); ?></div>    
							</div>                    
						<?php endif; ?>
					<?php endwhile; ?>
		    </section>
	            <section class="faq-section">	            
	                <a name="attendee"><h2 class="sub-header">Attendee</h2></a>
		  		    <?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php if(get_field('selector') == "Attendee"): ?>
							<div class="question clearfix">                      
								<p class="info-box-link"><a name="javascript:void(0)"><?php the_title(); ?></a></p>
								<div class="info"><?php echo the_field('answer'); ?></div>    
							</div>                    
						<?php endif; ?>
					<?php endwhile; ?>                                                                
		    </section>
	            <section class="faq-section">            
		            <a name="exhibitor"><h2 class="sub-header">Exhibitor</h2></a>
		  		    <?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php if(get_field('selector') == "Exhibitor"): ?>
							<div class="question clearfix">                      
								<p class="info-box-link"><a name="javascript:void(0)"><?php the_title(); ?></a></p>
								<div class="info"><?php echo the_field('answer'); ?></div>    
							</div>                    
						<?php endif; ?>
					<?php endwhile; ?>

		     </section>    
		</div>
        </section>
        

      </article>
    </div>
  
	<aside> 
		<?php get_sidebar(); ?>
	</aside>

	</div>

	<!-- #main --> 

</div>

<!-- #main-container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php get_footer(); ?>

<?php
/*
Template Name Posts: FAQS
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('faq');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          <h1><a id="top">FAQs</a></h1>
		<a href="#general">&bull; <strong>General</strong></a><br>
		<a href="#attendee">&bull; <strong>Attendee</strong></a><br>
		<a href="#exhibitor">&bull; <strong>Exhibitor</strong></a><br>

			<div class="faq-section">
	       	<h2 id="general" style="color:#333;"><strong>General</strong></h2>

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
			</div>
            
		<a href="#top"><i class="fa fa-angle-double-up"></i> Back to Top</a>
	        <div class="faq-section">
			<h2 id="attendee" style="color:#333;"><strong>Attendee</strong></h2>
			
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
			</div>
<a href="#top"><i class="fa fa-angle-double-up"></i> Back to Top</a>

			<div class="faq-section">
			  <h2 id="exhibitor" style="color:#333;"><strong>Exhibitor</strong></h2>

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
			</div>
<a href="#top"><i class="fa fa-angle-double-up"></i> Back to Top</a>


		</section>
	  </article>
    </div>
		
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
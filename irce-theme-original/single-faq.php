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
          <h1>FAQs</h1>
			<div class="faq-section">
	       	<h2>General</h2>

			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('question_section') == "General"): ?>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info">
	         	  	<?php echo the_field('answer'); ?>
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>

	        <div class="faq-section">
			  <h2>Attendee</h2>
			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('question_section') == "Attendee"): ?>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info">
	         	  	 <?php echo the_field('answer'); ?>
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>
			<div class="faq-section">
			  <h2>Exhibitor</h2>
			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('question_section') == "Exhibitor"): ?>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info">
	         	  	 <?php echo the_field('answer'); ?>
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>

	        <div class="faq-section">
			  <h2>Online Library</h2>
			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('question_section') == "Online Library"): ?>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info">
	         	  	 <?php echo the_field('answer'); ?>	
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>
		</section>
	  </article>
    </div>
	<aside>			
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php get_footer(); ?>
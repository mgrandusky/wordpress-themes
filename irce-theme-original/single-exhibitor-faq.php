<?php
/*
Template Name Posts: Exhibitor FAQS
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('faq');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          <h1>Exhibitor FAQs</h1>
			<div class="faq-section">

			<?php $args = array( 'post_type' => 'exhibitor-faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info">
	         	  	<?php echo the_field('answer'); ?>
		       		 </div>    
			 		</div>
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
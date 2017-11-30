<?php

/*

Template Name Posts: FAQs

*/

?>
<?php get_header(); ?>

    <div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
    
    <div id="main" class="container">

        <div id="content" class="col-md-8 col-sm-7">

            <?php 
                if ( has_post_thumbnail() ) : 
                    the_post_thumbnail('post-thumbnail', array('class' => 'ft-img')); 
                endif;
            ?>

        <style>p {margin:0px !important }</style>
            <article class="entry">
      

	        <div class="faq-section">
			  <h2 class="attendee" style="display:none;">Attendee</h2>
			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
				<?php if(get_field('category') == "Attendee"): ?>
				<script>$('.attendee').show();</script>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info" style="display:none;">
	         	  	 <?php echo the_field('answer'); ?>
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>
			<div class="faq-section">
			  <h2 class="exhibitor" style="display:none;">Exhibitor</h2>
			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('category') == "Exhibitor"): ?>
				<script>$('.exhibitor').show();</script>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info" style="display:none;">
	         	  	 <?php echo the_field('answer'); ?>
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>

	        <div class="faq-section">
			  <h2 class="international" style="display:none;">International</h2>
			<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('category') == "International"): ?>
					<script>$('.international').show();</script>
					<div class="question clearfix">  
					<p class="info-box-link"><a name="javascript:void(0)"><strong><?php the_title(); ?></strong></a></p>
				

					<div class="info" style="display:none;">
	         	  	 <?php echo the_field('answer'); ?>	
		       		 </div>    
			 		</div>
	             <?php endif; ?>
			<?php endwhile; ?>
			</div>
            <center><a class="btn red" href="../contact-us">STILL HAVE A QUESTION? ASK US</a></center>
            
            </article>

	    </div>





	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>

</div>

<?php get_footer(); ?>
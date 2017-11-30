<?php
/*
Template Name Posts: Sponsorship Opportunities
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('home');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
         	<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				<div class="open-text"><?php the_content(); ?>
				<?php if(get_field('sponsorship_pdf')): ?>
				<p><a href="<?php echo the_field('sponsorship_pdf'); ?>" class="pdf-icon"><strong>Download Sponsorship Opportunities PDF</strong></a><br></p>
				<?php endif; ?>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			
			<div id="tabs" class="divider clearfix">
		         <h5><a href="javascript:void(0);">Print</a></h5>
		          <a href="javascript:void(0);" class="ad-opps-toggle"></a>     

		            <ul class="clearfix addopps">
		              <li><a href="#print" alt="Print">Print</a></li>
		              <li><a href="#prepostshow"  alt="Pre & Post Show">Pre & Post Show</a></li>
		              <li><a href="#attheshow" alt="At the Show"> At the Show</a></li>
		              <li><a href="#irceconnect" alt="IRCE Connect">IRCE Connect</a></li>              
		            </ul>
		            <div class="tabcontent">
		              <div id="print">
						<?php $args = array( 'post_type' => 'spon-opp', 'posts_per_page' => 100);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php if(get_field('category') == "Print"): ?>
								<div class="section-row">
				                	<div class="opp-header">
					                  <h2><?php the_title(); ?></h2>
				    	              <span class="pricing"><?php echo the_field('cost'); ?></span>
				        	        </div>  

				                    <div class="opp-content">
				                      <img src="<?php echo the_field('image'); ?>" border="0" />                    
					                  <div class="copy-text"><?php echo the_field('description'); ?></div>
				                    </div>
				                </div>
					        <?php endif; ?>
						<?php endwhile; ?>
					</div>
		              <div id="prepostshow">
						<?php $args = array( 'post_type' => 'spon-opp', 'posts_per_page' => 100);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php if(get_field('category') == "Pre & Post Show"): ?>
								<div class="section-row">
				                	<div class="opp-header">
					                  <h2><?php the_title(); ?></h2>
				    	              <span class="pricing"><?php echo the_field('cost'); ?></span>
				        	        </div>  

				                    <div class="opp-content">
				                      <img src="<?php echo the_field('image'); ?>" border="0" />                    
					                  <div class="copy-text"><?php echo the_field('description'); ?></div>
				                    </div>
				                </div>
					        <?php endif; ?>
						<?php endwhile; ?>
					</div>
		              <div id="attheshow">
						<?php $args = array( 'post_type' => 'spon-opp', 'posts_per_page' => 100);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php if(get_field('category') == "At the Show"): ?>
								<div class="section-row">
				                	<div class="opp-header">
					                  <h2><?php the_title(); ?></h2>
				    	              <span class="pricing"><?php echo the_field('cost'); ?></span>
				        	        </div>  

				                    <div class="opp-content">
				                      <img src="<?php echo the_field('image'); ?>" border="0" />                    
					                  <div class="copy-text"><?php echo the_field('description'); ?></div>
				                    </div>
				                </div>
					        <?php endif; ?>
						<?php endwhile; ?>
					</div>
		              <div id="irceconnect">
						<?php $args = array( 'post_type' => 'spon-opp', 'posts_per_page' => 100);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php if(get_field('category') == "IRCE Connect"): ?>
								<div class="section-row">
				                	<div class="opp-header">
					                  <h2><?php the_title(); ?></h2>
				    	              <span class="pricing"><?php echo the_field('cost'); ?></span>
				        	        </div>  

				                    <div class="opp-content">
				                      <img src="<?php echo the_field('image'); ?>" border="0" />                    
					                  <div class="copy-text"><?php echo the_field('description'); ?></div>
				                    </div>
				                </div>
					        <?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
	  </article>
    </div>
	<aside>			
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php get_footer(); ?>
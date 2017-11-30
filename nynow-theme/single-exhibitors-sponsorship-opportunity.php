<?php
/*
Template Name Posts: Exhibitors Sponsorship Opportunities
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry marketing-tools">
            <h2 class="entry-title"><?php the_title(); ?></h2>
			
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Pre-Show</a></li>
                    <li><a href="#tabs-2">Onsite</a></li>
                </ul>
				<?php the_content(); ?>
				<hr>
                <div id="tabs-1">
					<h3 style="font-size:1.5em; font-weight: 400; margin:32px 0;">Pre-Show Opportunities</h3>
                    <?php $args = array( 'post_type' => 'spon-opp', 'meta_key' => 'opportunity_type', 'meta_value' => '1');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
	          				<div class="sponsor-type cf">
	                            
								<a href="<?php echo the_field('sample'); ?>" target="_blank"><img src="<?php echo the_field('image'); ?>" alt=""></a>
	                            <div>
									<b><?php the_title(); ?></b>
	                                <?php echo the_field('content'); ?>
	                                <a href="<?php echo the_field('sponsorship_link'); ?>"><?php echo the_field('link_text'); ?></a>
	                            </div>
							</div>
			                
					<?php endwhile; ?>
				</div>
                <div id="tabs-2">
					<h3 style="font-size:1.5em; font-weight: 400; margin:32px 0;">Onsite Opportunities</h3>
                    <?php $args = array( 'post_type' => 'spon-opp','meta_key' => 'opportunity_type', 'meta_value' => '11');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
	          				<div class="sponsor-type cf">
	                            <a href="<?php echo the_field('sample'); ?>" target="_blank"><img src="<?php echo the_field('image'); ?>" alt=""></a>
	                            <div>
									<b><?php the_title(); ?></b>
	                                <?php echo the_field('content'); ?>
	                                <a href="<?php echo the_field('sponsorship_link'); ?>"><?php echo the_field('link_text'); ?></a>
	                            </div>
							</div>
			                
					<?php endwhile; ?>
                </div>
                <div id="tabs-3">
                    <?php echo the_field('public_relations'); ?>
                </div>
            </div>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
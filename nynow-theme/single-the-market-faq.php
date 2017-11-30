<?php
/*
Template Name Posts: Market Place FAQs
*/
?>
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
        <article class="hentry faqs">
            <h2 class="entry-title">faqs</h2>
			
			
			<ul>
				<li><a href="#general-h">General</a></li>
				<li><a href="#exhibitor-h">Exhibitor</a></li>
				<li><a href="#attendee-h">Attendee</a></li>
			</ul>
			<h3 id="general-h" class="faq">General FAQ</h3>
			<div id="general">
			
				<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php if(get_field('category') == "General"): ?>
						<h3><?php the_title(); ?></h3>
						<div>

						<?php echo the_field('answer'); ?>

						</div>
		             <?php endif; ?>
				<?php endwhile; ?>

			</div>
			<h3 id="exhibitor-h" class="faq">Exhibitor FAQ</h3>
			<div id="exhibitor">
				<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php if(get_field('category') == "Exhibitor"): ?>
						<h3><?php the_title(); ?></h3>
						<div>

						<?php echo the_field('answer'); ?>

						</div>
		             <?php endif; ?>
				<?php endwhile; ?>
			</div>
			<h3 id="attendee-h" class="faq">Attendee FAQ</h3>
			<div id="attendee">
				<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 100);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php if(get_field('category') == "Attendee"): ?>
						<h3><?php the_title(); ?></h3>
						<div>

						<?php echo the_field('answer'); ?>

						</div>
		             <?php endif; ?>
				<?php endwhile; ?>
			</div>
			
			
		</article>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
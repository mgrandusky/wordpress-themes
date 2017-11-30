<?php

/*

Template Name Posts: Events

*/

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('featured-areas');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          <h1>Events</h1>

			<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

	            		<?php the_content(); ?>

			<?php endwhile; ?>

			<?php endif; ?>



				<?php $args = array( 'post_type' => ‘events’, 'posts_per_page' => 100);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="media-right clearfix">

				   <h2><?php the_title(); ?></h2>   

		           		<div class="image-box"><img src="<?php echo the_field('image'); ?>"/></div>

		           		<p class="div-left"><?php echo the_field('content'); ?></p>

		           		<?php if(get_field('event_button_text')): ?>

		           		<p>

		           			<!-- <a href="<?php //echo the_field('event_button_url'); ?>" class="button2"><?php //echo the_field('event_button_text'); ?></a></p> //-->

		           		<?php endif; ?>

		        	</div>

			     <?php endwhile; ?>



		

			</section>

	      </article>

	    </div>





	    <aside>			

			<?php get_sidebar(); ?>

		</aside>

</div>

<?php get_footer(); ?>
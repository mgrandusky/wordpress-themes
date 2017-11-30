<?php get_header(); ?>

	<div id="content_wrap" class="wrap">
		<div id="content" class="col-left">
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
<div class="postmeta"><p><?php the_author(); ?> on <?php the_time('F j, Y'); ?> | Filed Under <?php the_category(', ') ?></p></div>
			</div>
			
			<?php comments_template(); ?>
			
			<?php endwhile; ?>
			
			<?php endif; ?>
			
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>

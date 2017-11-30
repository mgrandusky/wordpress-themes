<?php get_header(); ?>

	<div id="content_wrap" class="wrap">
		<div id="content" class="col-left">
			
			<?php if (have_posts()) : ?>
			<h2 class="arh">Search results</h2>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
			</div>
			
			<?php endwhile; ?>

			<h2><?php next_posts_link('&laquo; Older Entries') ?> &nbsp; <?php previous_posts_link ('Recent Entries &raquo;') ?></h2>
			
			<?php else : ?>
			
			<h2>Search results</h2>
			<p>No matches. Please try again, or use the navigation menus to find what you search for.</p>
			
			<?php endif; ?>
			
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
<?php get_header(); ?>

	<div id="content_wrap" class="wrap">
		<div id="content" class="col-left">
		
			<?php if (have_posts()) : ?>
			<?php $post = $posts[0]; ?>

			<?php if (is_category()) { ?><h2 class="arh">Archive for '<?php echo single_cat_title(); ?>'</h2>
			<?php } elseif (is_day()) { ?><h2 class="arh">Archive for <?php the_time('F jS, Y'); ?></h2>
			<?php } elseif (is_month()) { ?><h2 class="arh">Archive for <?php the_time('F, Y'); ?></h2>
			<?php } elseif (is_year()) { ?><h2 class="arh">Archive for the year <?php the_time('Y'); ?></h2>
			<?php } elseif (is_author()) { ?><h2 class="arh">Archive by Author</h2>
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2 class="arh">Archives</h2>
			<?php } elseif (is_tag()) { ?><h2 class="arh">Tag Archives: <?php echo single_tag_title('', true); ?></h2>	

			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			</div>
			
			<?php endwhile; ?>

			<h2><?php next_posts_link('&laquo; Older Entries') ?> &nbsp; <?php previous_posts_link ('Recent Entries &raquo;') ?></h2>
			
			<?php endif; ?>
			
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>

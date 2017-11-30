<?php get_header(); ?>

	<div id="content_wrap" class="wrap">
		<div id="content" class="col-left">
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
<div class="postmeta">
           <p><?php the_author(); ?> on <?php the_time('F j, Y'); ?> | Filed Under <?php the_category(', ') ?> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>
       </div>
			</div>
			
			<?php endwhile; ?>

			<h2><?php next_posts_link('&laquo; Older Entries') ?> &nbsp; <?php previous_posts_link ('Recent Entries &raquo;') ?></h2>
			
			<?php endif; ?>
			
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
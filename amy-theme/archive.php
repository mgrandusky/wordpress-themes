<?php get_header(); ?>

	<div id="content_wrap" class="wrap">

		<div id="content" class="col-left">
		
			<?php if (have_posts()) : ?>
			<?php $post = $posts[0]; ?>

			<?php if (is_category()) { ?><h1 class="arh"><?php echo single_cat_title(); ?></h1>
			<?php } elseif (is_day()) { ?><h2 class="arh">Archive for <?php the_time('F jS, Y'); ?></h2>
			<?php } elseif (is_month()) { ?><h2 class="arh">Archive for <?php the_time('F, Y'); ?></h2>
			<?php } elseif (is_year()) { ?><h2 class="arh">Archive for the year <?php the_time('Y'); ?></h2>
			<?php } elseif (is_author()) { ?><h2 class="arh">Archive by Author</h2>
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2 class="arh">Archives</h2>
			<?php } elseif (is_tag()) { ?><h2 class="arh">Tag Archives: <?php echo single_tag_title('', true); ?></h2>	

			<?php } ?>
			


			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post" style="border-bottom:1px solid #cccccc;">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="postmeta">
           <p>By <?php the_author(); ?> | Filed Under <?php the_category(', ') ?> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>
       </div>
			<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
			<?php //content('150'); ?>
			<?php $new_excerpt_length = create_function('$length', "return 150 ;");
			
			add_filter('excerpt_length', $new_excerpt_length);?>
			<?php the_excerpt(); ?>
			<p align="right"><a href="<?php the_permalink() ?>">Read More</a></p>
<br clear="all">
			</div>
			
			<?php endwhile; ?>

			<h2><?php next_posts_link('&laquo; Older Entries') ?> &nbsp; <?php previous_posts_link ('Recent Entries &raquo;') ?></h2>
			
			<?php endif; ?>
			
		</div>
		
	</div>
<?php get_footer(); ?>

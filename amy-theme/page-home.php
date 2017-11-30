<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<div id="content_wrap" class="wrap">
<?php //get_sidebar(); ?>
		<div id="content" class="col-left" style="width:100%">
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post">
			<?php if ( ! is_front_page() ) { ?><h1><?php the_title(); ?></h1><?php } ?>
	
			<?php the_content(); ?>
			<?php edit_post_link('Edit Page', '', ''); ?>
			</div>
			
			<?php endwhile; ?>

			<?php //comments_template(); ?>
			
			<?php endif; ?>
			

</div>

</div>
			
		</div>
		
	</div>
<?php get_footer(); ?>
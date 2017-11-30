<?php
/*
Template Name Posts: The Market Programs
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
        
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry events">
            <h2 class="entry-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
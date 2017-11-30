<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
        <article class="hentry">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
				
			<?php endwhile; ?>
			<?php endif; ?>
		</article>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
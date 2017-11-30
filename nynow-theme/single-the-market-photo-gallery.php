<?php
/*
Template Name Posts: The Market Photo Gallery
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry gallery">
            <h2 class="entry-title"><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			<div id="tabs">
                <ul>
                    <li><a href="#tabs-1">HOME</a></li>
                    <li><a href="#tabs-2">LIFESTYLE</a></li>
                    <li><a href="#tabs-3">HANDMADE</a></li>
		    <li><a href="#tabs-4">Show Floor</a></li>
                   
                </ul>
                <div id="tabs-1">
                    <?php echo get_new_royalslider(2); ?>
				</div>
                <div id="tabs-2">
                    <?php echo get_new_royalslider(3); ?>
                </div>
                <div id="tabs-3">
                    <?php echo get_new_royalslider(4); ?>
                </div>
				<div id="tabs-4">
                    <?php echo get_new_royalslider(6); ?>
                </div>
			
            </div>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
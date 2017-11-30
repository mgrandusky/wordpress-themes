<?php
/*
Template Name Posts: Exhibitors Marketing Tools
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry marketing-tools">
            <h2 class="entry-title"><?php the_title(); ?></h2>
			<div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Exhibitor Education</a></li>
                    <li><a href="#tabs-2">Displays</a></li>
                    <li><a href="#tabs-3">Public Relations</a></li>
                </ul>
                <div id="tabs-1">
                    <?php echo the_field('exhibitor_eduction'); ?>
				</div>
                <div id="tabs-2">
                    <?php echo the_field('displays'); ?>
                </div>
                <div id="tabs-3">
                    <?php echo the_field('public_relations'); ?>
                </div>
            </div>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php
/*
Template Name Posts: Collection Handmade
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="hentry collections">
            <a href="<?php bloginfo('siteurl'); ?>/collections/handmade" style="text-decoration:none;"><h2 class="entry-title"><?php the_title(); ?></h2></a>
            <?php the_content(); ?>

			<?php $args = array( 'post_type' => 'handmade');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<div class="ct cf">
                <?php if(get_field('thumbnail_image')): ?><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('thumbnail_image'); ?>" alt=""></a><?php endif; ?>
                <div>
                    <?php echo the_field('excerpt'); ?>
					<p><a href="<?php echo post_permalink( $ID ); ?>">more &raquo;</a></p>
                </div>
            </div>

			<?php endwhile; ?>
           
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
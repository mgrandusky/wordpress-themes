<?php
/*
Template Name Posts: Collection Home Individual
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="hentry collections">
            <a href="<?php bloginfo('siteurl'); ?>/collections/handmade"><h2 class="entry-title">Handmade</h2></a>
            <h3><?php the_title(); ?></h3>
            <div style="float: right; margin: 0 0 0 10px;">
                <div style="background-color: #e0dddb; display: inline-block; width: 312px; padding: 24px 20px 10px 20px; margin-bottom:15px;">
                    <h3 style="font-size:1.5em; font-weight: 400; margin: 0 0 10px 0;">Contact Information</h3>
                    <p><?php echo the_field('contact_title'); ?>: <a href="mailto:<?php echo the_field('contact_email'); ?>"><?php echo the_field('contact_name'); ?></a>
		    <?php if(get_field('contact_title_2')): ?><br><?php echo the_field('contact_title_2'); ?>: <a href="mailto:<?php echo the_field('contact_email_2'); ?>"><?php echo the_field('contact_name_2'); ?></a></p><?php endif; ?>
                </div>
                <img style="display:block;" src="<?php echo the_field('featured_image'); ?>" alt="">
            </div>

            <?php echo the_field('content'); ?>
	    <div style="clear:both;"></div>
            <div class="col-3">
                <h3><?php echo the_field('heading_1'); ?></h3>
                <?php echo the_field('key_exhibitors'); ?>
            </div>
            <div class="col-3">
                <h3><?php echo the_field('heading_2'); ?></h3>
                <?php echo the_field('key_retailers'); ?>
            </div>
            <div class="col-3">
                <h3><?php echo the_field('heading_3'); ?></h3>
                <?php echo the_field('key_press'); ?>
            </div>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
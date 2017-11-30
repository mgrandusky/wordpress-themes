<?php
/*
Template Name Posts: Market Place Industry Partners
*/
?>
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <article class="hentry ip">
            <h2 class="entry-title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<a href="<?php echo the_field('industry_partner_1_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_1'); ?>" alt=""></a>
            		<a href="<?php echo the_field('industry_partner_2_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_2'); ?>" alt=""></a>
            		<a href="<?php echo the_field('industry_partner_3_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_3'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_4_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_4'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_5_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_5'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_6_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_6'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_7_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_7'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_8_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_8'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_9_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_9'); ?>" alt=""></a>
            <a href="<?php echo the_field('industry_partner_10_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_10'); ?>" alt=""></a>
			<a href="<?php echo the_field('industry_partner_11_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_11'); ?>" alt=""></a>
  			<a href="<?php echo the_field('industry_partner_12_link'); ?>" target="_blank"><img src="<?php echo the_field('industry_partner_12'); ?>" alt=""></a>

			
		</article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
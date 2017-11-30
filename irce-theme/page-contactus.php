<?php 
/** 
 * Template Name: Contact Template */ 
?>
<?php get_header(); ?>
    <div id="main" class="cf">
        <div id="content" class="cf">
         <div style="width: 66%; float: left; margin-bottom: 20px;"><?php echo do_shortcode( '[gravityform id="3" name="Contact Form" description="false"]' ); ?></div>
		<div style="float: left; margin-left: 16px;">
			<?php echo the_field('right_panel'); ?>
		</div>
		<div class="col-3" style="clear: both;">
			<?php echo the_field('column1'); ?>
		</div>
		<div class="col-3">
			<?php echo the_field('column2'); ?>
		</div>
		<div class="col-3">
			<?php echo the_field('column3'); ?>
		</div>
	</div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
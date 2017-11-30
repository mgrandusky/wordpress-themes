<?php 
/** 
 * Template Name: Artisan Resource Template 
*/ 
?>
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
        <article class="hentry ares">
            <h2 class="entry-title"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ar-logo.jpg" alt=""></a></h2>
            <a href="#"><img src="<?php echo the_field('masthead_image'); ?>" alt=""></a>
            <h3>Show Overview</h3>
            <hr style="border:0;margin-bottom:15px;">

            <div style="background-color: #e0dddb;">
                <h3 style="font-size:1.5em; font-weight: 400; margin-bottom: 10px;">Contact Information</h3>
                <p>Sales Director: <a href="mailto:<?php echo the_field('contact_email1'); ?>"><?php echo the_field('contact_name1'); ?></a> <br>
                TK Sales Director: <a href="mailto:<?php echo the_field('contact_email2'); ?>"><?php echo the_field('contact_name2'); ?></a> </p>
            </div>

            <?php echo the_field('show_overview_content'); ?>
            
            <h3>Product Categories</h3>
            <?php echo the_field('product_categories_content'); ?>
            
            <h3>Materials Represented</h3>
            <?php echo the_field('materials_represented_content'); ?>

            <h3>Exhibitors</h3>
            <?php echo the_field('exhibitors_content'); ?>

            <div class="mid cf">
                <a href="#"><img src="<?php echo the_field('featured_image'); ?>" alt=""></a>
                <div>
                    <h4><a href="#"><?php echo the_field('featured_title'); ?></a></h4>
                    <?php echo the_field('featured_content'); ?>
                </div>
            </div>
            <div class="col-2">
                <h3>Key Attendees</h3>
                <?php echo the_field('key_attendees_content'); ?>
            </div>
            <div class="col-2">
                <h3>Key Press</h3>
                <?php echo the_field('key_press_content'); ?>
                <h3>Our Partners</h3>
                <?php echo the_field('our_partners_content'); ?>
            </div>
        </article>
    </div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
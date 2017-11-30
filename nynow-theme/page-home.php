<?php 
/** 
 * Template Name: Home Template */ 
?>
<?php get_header(); ?>
    <div id="main" class=" home cf">
        <div id="content" class="cf">
            <div class="tk-head">
                <h2><a href="<?php echo the_field('url_1'); ?>"><?php echo the_field('headline_1'); ?></a></h2>
                <a href="<?php echo the_field('url_1'); ?>"><img src="<?php echo the_field('image_1'); ?>" alt=""></a>                
		<h3><a href="<?php echo the_field('url_1'); ?>" style="color:black"><?php echo the_field('title_1'); ?></a></h3>
                <p><?php echo the_field('copy_1'); ?></p>
            </div>
            <div class="tk-head">
                <h2><a href="<?php echo the_field('url_2'); ?>"><?php echo the_field('headline_2'); ?></a></h2>
                <a href="<?php echo the_field('url_2'); ?>"><img src="<?php echo the_field('image_2'); ?>" alt=""></a>                
		<h3><a href="<?php echo the_field('url_2'); ?>" style="color:black"><?php echo the_field('title_2'); ?></a></h3>
                <p><?php echo the_field('copy_2'); ?></p>
            </div>
	    <div class="tk-head">
                <h2><a href="<?php echo the_field('url_3'); ?>"><?php echo the_field('headline_3'); ?></a></h2>
                <a href="<?php echo the_field('url_3'); ?>"><img src="<?php echo the_field('image_3'); ?>" alt=""></a>                
		<h3><a href="<?php echo the_field('url_3'); ?>" style="color:black"><?php echo the_field('title_3'); ?></a></h3>
                <p><?php echo the_field('copy_3'); ?></p>
            </div>
            <div class="tk-head">
                <h2><a href="<?php echo the_field('url_4'); ?>"><?php echo the_field('headline_4'); ?></a></h2>
                <a href="<?php echo the_field('url_4'); ?>"><img src="<?php echo the_field('image_4'); ?>" alt=""></a>                
		<h3><a href="<?php echo the_field('url_4'); ?>" style="color:black"><?php echo the_field('title_4'); ?></a></h3>
                <p><?php echo the_field('copy_4'); ?></p>
            </div>
           
            <article class="hentry-home" style="clear:both;">
                <h2 class="entry-title">Video</h2>
                <p><?php echo the_field('video_embed_code'); ?></p>
                <h3><?php echo the_field('video_title'); ?></h3>
                <p><?php echo the_field('video_copy'); ?></p>
            </article>
	</div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
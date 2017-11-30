<?php
/*
Template Name Posts: Contact Us
*/
?>
<?php get_header(); ?>
    <div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>   
    <div id="main" class="container">
        <div id="content" class="col-md-8 col-sm-7">       
            <article class="entry">
          	<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
                        <hr />
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div style="max-width:350px;float:left;padding-right:20px;">
					<h3>MAILING ADDRESS</h3>
				    <?php echo the_field('mailing_address'); ?>	
                    <h3>GENERAL INFORMATION</h3>
					<?php echo the_field('general_infomation'); ?>
                    <h3>EXHIBITOR SERVICES</h3>
					<?php echo the_field('exhibitor_services'); ?>
		        </div>
                <div style="max-width:350px;float:left;">
					<h3>TO EXHIBIT AND TO SPONSOR</h3>
				    <?php echo the_field('to_exhibit_and_to_sponsor'); ?>	
                    <h3>CONFERENCE AND EVENT SERVICES</h3>
				    <?php echo the_field('conference_and_event_services'); ?>
		        </div>
				<br clear="all" />
			     <?php endwhile; ?>
   				<?php endif; ?>
	      </article>
	    </div>
	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
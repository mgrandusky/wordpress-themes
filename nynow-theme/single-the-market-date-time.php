<?php
/*
Template Name Posts: The Market Date + Hours
*/
?>
	
<?php get_header(); ?>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="hentry">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <span style="font-size:1.5em; font-weight:400;margin: 15px 0;"><?php echo the_field('event_title'); ?></span>
            <a class="pdf" href="<?php echo the_field('download_file'); ?>"><?php echo the_field('download_link_text'); ?></a>
            <div class="sched-con" style="overflow-x: scroll;">
                <table class="sched" style="width:732px;">
                    <tr>
                        <td><?php echo the_field('months'); ?></td>
                        <td><?php echo the_field('date1'); ?><br><?php echo the_field('day_of_the_week1'); ?></td>
                        <td><?php echo the_field('date2'); ?><br><?php echo the_field('day_of_the_week2'); ?></td>
                        <td><?php echo the_field('date3'); ?><br><?php echo the_field('day_of_the_week3'); ?></td>
                        <td><?php echo the_field('date4'); ?><br><?php echo the_field('day_of_the_week4'); ?></td>
                        <td><?php echo the_field('date5'); ?><br><?php echo the_field('day_of_the_week5'); ?></td>
                    </tr>
		    <?php if(get_field('event') != ""){?>
                    <tr class="hm">
                        <td><?php echo the_field('event'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location'); ?></span></td>
                        <td<?php if(get_field('time1a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time1a'); ?></td>
                        <td<?php if(get_field('time1b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time1b'); ?></td>
                        <td<?php if(get_field('time1c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time1c'); ?></td>
                        <td<?php if(get_field('time1d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time1d'); ?></td>
                        <td<?php if(get_field('time1e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time1e'); ?></td>
                    </tr>
		    <?php } ?>
                    <?php if(get_field('event2') != ""){?>
                    <tr class="new">
                        <td><?php echo the_field('event2'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location2'); ?></span></td>
                        <td<?php if(get_field('time2a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time2a'); ?></td>
                        <td<?php if(get_field('time2b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time2b'); ?></td>
                        <td<?php if(get_field('time2c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time2c'); ?></td>
                        <td<?php if(get_field('time2d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time2d'); ?></td>
                        <td<?php if(get_field('time2e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time2e'); ?></td>
                    </tr>
		    <?php } ?>
                    <?php if(get_field('event3') != ""){?>
                    <tr class="home">
                        <td><?php echo the_field('event3'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location3'); ?></span></td>
                        <td<?php if(get_field('time3a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time3a'); ?></td>
                        <td<?php if(get_field('time3b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time3b'); ?></td>
                        <td<?php if(get_field('time3c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time3c'); ?></td>
                        <td<?php if(get_field('time3d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time3d'); ?></td>
                        <td<?php if(get_field('time3e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time3e'); ?></td>
                    </tr>
		    <?php } ?>
                    <?php if(get_field('event4') != ""){?>
                    <tr class="lifestyle">
                        <td><?php echo the_field('event4'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location4'); ?></span></td>
                        <td<?php if(get_field('time4a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time4a'); ?></td>
                        <td<?php if(get_field('time4b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time4b'); ?></td>
                        <td<?php if(get_field('time4c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time4c'); ?></td>
                        <td<?php if(get_field('time4d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time4d'); ?></td>
                        <td<?php if(get_field('time4e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time4e'); ?></td>
                    </tr>
		    <?php } ?>
                    <?php if(get_field('event5') != ""){?>
                    <tr class="ar">
                        <td><?php echo the_field('event5'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location5'); ?></span></td>
                        <td<?php if(get_field('time5a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time5a'); ?></td>
                        <td<?php if(get_field('time5b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time5b'); ?></td>
                        <td<?php if(get_field('time5c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time5c'); ?></td>
                        <td<?php if(get_field('time5d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time5d'); ?></td>
                        <td<?php if(get_field('time5e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time5e'); ?></td>
                    </tr>
		    <?php } ?>
                    <?php if(get_field('event6') != ""){?>
                    <tr class="ar-even">
                        <td><?php echo the_field('event6'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location6'); ?></span></td>
                        <td<?php if(get_field('time6a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time6a'); ?></td>
                        <td<?php if(get_field('time6b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time6b'); ?></td>
                        <td<?php if(get_field('time6c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time6c'); ?></td>
                        <td<?php if(get_field('time6d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time6d'); ?></td>
                        <td<?php if(get_field('time6e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time6e'); ?></td>
                    </tr>
		    <?php } ?>
                    <?php if(get_field('event7') != ""){?>
                    <tr class="ar">
                        <td><?php echo the_field('event7'); ?><br><span style="font-weight:400;font-size:0.875em;"><?php echo the_field('event_location7'); ?></span></td>
                        <td<?php if(get_field('time7a') == ""){?> class="empty"<?php } ?>><?php echo the_field('time7a'); ?></td>
                        <td<?php if(get_field('time7b') == ""){?> class="empty"<?php } ?>><?php echo the_field('time7b'); ?></td>
                        <td<?php if(get_field('time7c') == ""){?> class="empty"<?php } ?>><?php echo the_field('time7c'); ?></td>
                        <td<?php if(get_field('time7d') == ""){?> class="empty"<?php } ?>><?php echo the_field('time7d'); ?></td>
                        <td<?php if(get_field('time7e') == ""){?> class="empty"<?php } ?>><?php echo the_field('time7e'); ?></td>
                    </tr>
		    <?php } ?>
                </table>
            </div>
            <span style="font-size:0.875em;"><strong><?php echo the_field('note'); ?></strong></span><br>
            <?php echo the_field('custom_content'); ?>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
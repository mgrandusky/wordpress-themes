<?php 

/**  Template Name: Home Template */ 

?>

<?php get_header(); ?>

<?php get_template_part('inc/countdown-clock');  ?>

<script>
jQuery('document').ready(function(){
jQuery('body').addClass('home');
jQuery('#new-royalslider-1').attr("id", "full-width-slider"); 
}); 
</script>

<div id="slider"> 
<?php echo get_new_royalslider(1); ?>
</div>
<div class="main-container">
  <div class="main wrapper clearfix">
    <!-- Start Quick Links -->
    <?php show_links_tablet(); ?>
    <!-- End Quick Links -->
    <div id="contentwrapper">
      <article>
        <section>
          <div class="clearfix pad80">
            <div class="col-half">
              <h1 class="header"><a href="<?php the_field('content_left_link'); ?>"><?php the_field('content_title_left'); ?></a></h1>
              <a href="<?php the_field('content_left_link'); ?>"><img src="<?php the_field('content_image_left'); ?>" border="0"/></a>
              <?php the_field('content_left'); ?>
                <p><a href="<?php the_field('content_left_link'); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
            </div>
            <div class="col-half second">
              <h1 class="header"><a href="<?php the_field('content_right_link'); ?>"><?php the_field('content_title_right'); ?></a></h1>
              <a href="<?php the_field('content_right_link'); ?>"><img src="<?php the_field('content_image_right'); ?>" border="0"/></a>
              <?php the_field('content_right'); ?>
               <p><a href="<?php the_field('content_right_link'); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
            </div>
          </div>
          <div class="clearfix pad80">
            <div class="one-third">
              <h1 class="header"><a href="<?php the_field('flex_spot_1_link'); ?>"><?php the_field('flex_spot_1_title'); ?></a></h1>
              <p><a href="<?php the_field('flex_spot_1_link'); ?>"><img src="<?php the_field('flex_spot_1_image'); ?>" border="0"/></a></p>
              <p><?php the_field('flex_spot_1_content'); ?><br/>
                <a href="<?php the_field('flex_spot_1_link'); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
            </div>
            <div class="one-third">
              <h1 class="header"><a href="<?php the_field('flex_spot_2_link'); ?>"><?php the_field('flex_spot_2_title'); ?></a></h1>
              <p><a href="<?php the_field('flex_spot_2_link'); ?>"><img src="<?php the_field('flex_spot_2_image'); ?>" border="0"/></a></p>
              <p><?php the_field('flex_spot_2_content'); ?><br/>
                <a href="<?php the_field('flex_spot_2_link'); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
            </div>
            <div class="one-third">
              <h1 class="header"><a href="<?php the_field('flex_spot_3_link'); ?>"><?php the_field('flex_spot_3_title'); ?></a></h1>
              <p><a href="<?php the_field('flex_spot_3_link'); ?>"><img src="<?php the_field('flex_spot_3_image'); ?>" border="0"/></a></p>
              <p><?php the_field('flex_spot_3_content'); ?><br/>
                <a href="<?php the_field('flex_spot_3_link'); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
            </div>
          </div>
          <hr class="divider"/>
          <div class="video">
            <div class="two-third"><div class="video-container"><?php the_field('video_frame'); ?></div></div>
            <div class="one-third">
              <h1><?php the_field('video_title'); ?></h1>
              <p><?php the_field('video_content'); ?><br/>
                <a href="http://www.interbike.com/show/photos-and-videos/" class="readmore"><span>All Video</span> &rsaquo;</a></p>
            </div>
          </div>
        </section>
      </article>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.clearfix.pad80 p:eq(1) a').insertAfter('.clearfix.pad80 p:eq(1)');
    });
    </script>


	      <?php get_sidebar(); ?>


  </div>
<!-- <div id="list"></div> //-->
  <!-- #main --> 

</div>

<!-- #main-container -->



<?php get_footer(); ?>
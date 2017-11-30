<?php 

/** 

 * Template Name: Home Template */ 

?>

<?php get_header(); ?>

<div class="home cf container">
 <?php echo get_new_royalslider(1);?>
    <?php $pizzaexpooptions = pods( 'pizzaexpooptions', $params ); ?>
    <div id="sidebar" class="col-md-4 col-sm-5 visible-phone" style="margin-top:160px; margin-bottom:-40px;">
    <div class="buttons visible-phone" style="height:490px;" >
                <a href="<?php echo $pizzaexpooptions->field( 'buy_a_booth_url' ); ?>" class="btn green">Exhibit / Inquire</a>
                <a href="<?php echo $pizzaexpooptions->field( 'register_to_attend_url' ); ?>" class="btn red">Register to attend</a>
                <a href="<?php echo $pizzaexpooptions->field( 'floor_plan_url' ); ?>" class="fp" target="_blank">Floor Plan</a>
                <a href="<?php echo $pizzaexpooptions->field( 'exhibitors_list' ); ?>" class="ex">Exhibitor List</a>
                <br>
                <center><a href="<?php echo $pizzaexpooptions->field( 'school_of_pizza_management_url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/school.png" width="100%" height="auto"></a><div style="position:relative;margin-top:-35px;color:#fff;"><?php echo $pizzaexpooptions->field( 'school_of_pizza_management_dates' ); ?></div></center>
    </div>
    </div>
    
</div>
<div id="main" class="container">
    <div id="content" class="col-md-8 col-sm-7">
        <article class="entry">
            <h3 class="title"><?php the_field('title'); ?></h3>
            <?php the_field('content'); ?>
            <p><a href="<?php the_field('read_more_link'); ?>">Read More</a></p>
        </article>
        <div class="flex-area cf">
            <div class="col-md-6 col-sm-6">
                <a href="<?php the_field('read_more_link-flexspot1'); ?>"><img src="<?php the_field('image-flexspot1'); ?>" alt=""></a>
                <div>
                    <h4 class="title"><?php the_field('title-flexspot1'); ?></h4>
                    <?php the_field('content-flexspot1'); ?>
                    <a href="<?php the_field('read_more_link-flexspot1'); ?>">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <a href="<?php the_field('read_more_link-flexspot2'); ?>"><img src="<?php the_field('image-flexspot2'); ?>" alt=""></a>
                <div>
                    <h4 class="title"><?php the_field('title-flexspot2'); ?></h4>
                    <?php the_field('content-flexspot2'); ?>
                    <a href="<?php the_field('read_more_link-flexspot2'); ?>">Learn More</a>
                </div>
            </div>
        </div>
        <div id="featured" class="cf">
            <h4 class="title">Featured Video</h4>
	    <div class="video-container">
	    <center><?php the_field('youtube_video_url'); ?></center>
            </div>
        </div>
        <div id="news" class="cf">
            <h4 class="title">Pizza Expo News</h4>
            <div class="latest">

<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://www.pizzatoday.com/feed/?post_type=news&news-categories=pizza-expo-news'); // specify feed url

$items = array_slice($feed->items, 0, 3); // specify first and last item

?>

<?php if (!empty($items)) : ?>
<?php foreach ($items as $item) : ?>
<?php $date = $item['pubdate']; ?>
<article class="news col-md-4 col-sm-4">
                   
                    <h5 class="news-title"><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h5>
                    <span class="meta-date"><?php echo $item['pubdate']; ?></span>
                    <p class="desc"><?php echo $item['summary']; ?></p>
             
                </article>
<?php endforeach; ?>
<?php endif; ?>

            </div>
        </div>
    </div>
	<div id="sidebar" class="col-md-4 col-sm-5">		

		<?php get_sidebar(); ?>

	</div>

  </div>

  <!-- #main --> 

</div>

<!-- #main-container -->



<?php get_footer(); ?>
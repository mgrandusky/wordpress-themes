<?php 

/** 

 * Template Name: Home Template */ 

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('home');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article> 

        

        <!-- START banner -->

        <section id="slider" class="slider clearfix">

          <?php echo get_new_royalslider(1); ?>

        </section>

        <section>

          <ul class="about">

            <li>

              <h1><a href="<?php the_field('link'); ?>">About the Show</a></h1>

              <p><?php the_field('content_about_the_show'); ?>

                <a href="<?php the_field('link'); ?>" class="readmore-bold">Read more &raquo;</a></p>

            </li>
		<li class="visible-phone clearfix">
              <? show_links(); ?>
            </li>

            <li class="hp-sponsor">

              <h1><a href="<?php the_field('featured_sponsor_link'); ?>">Diamond Sponsors</a></h1>

              <a href="<?php the_field('featured_sponsor_link1'); ?>" target="_blank"><img src="<?php the_field('featured_sponsor1'); ?>"/></a></a> <a href="<?php the_field('featured_sponsor_link2');?>" target="_blank"><img src="<?php the_field('featured_sponsor2'); ?>"/></a></a>

              <p><a href="<?php the_field('featured_sponsor_link'); ?>" class="readmore-bold">All Sponsors &raquo;</a></p>

            </li>

          </ul>

        </section>

        <section class="feature clearfix">

          <div>

            <h1><a href="<?php the_field('link_flex_spot1'); ?>"><?php the_field('title_flex_spot1'); ?></a></h1>

            <a href="<?php the_field('link_flex_spot1'); ?>"><img src="<?php the_field('image_flex_spot1'); ?>" border="0"/></a>

            <p><?php the_field('content_flex_spot1'); ?>

              <a href="<?php the_field('link_flex_spot1'); ?>" class="readmore-bold">Read more &raquo;</a></p>

          </div>

          <div>

            <h1><a href="<?php the_field('link_flex_spot2'); ?>"><?php the_field('title_flex_spot2'); ?></a></h1>

            <a href="<?php the_field('link_flex_spot2'); ?>"><img src="<?php the_field('image_flex_spot2'); ?>" border="0"/></a>

            <p><?php the_field('content_flex_spot2'); ?>

              <a href="<?php the_field('link_flex_spot2'); ?>" class="readmore-bold">Read more &raquo;</a></p>

          </div>

          <div>

            <h1><a href="<?php the_field('link_flex_spot3'); ?>"><?php the_field('title_flex_spot3'); ?></a></h1>

            <a href="<?php the_field('link_flex_spot3'); ?>"><img src="<?php the_field('image_flex_spot3'); ?>" border="0"/></a>

            <p><?php the_field('content_flex_spot3'); ?>

              <a href="<?php the_field('link_flex_spot3'); ?>" class="readmore-bold">Read more &raquo;</a></p>

          </div>

          <div>

            <h1><a href="<?php the_field('link_flex_spot4'); ?>"><?php the_field('title_flex_spot4'); ?></a></h1>

            <a href="<?php the_field('link_flex_spot4'); ?>"><img src="<?php the_field('image_flex_spot4'); ?>" border="0"/></a>

            <p><?php the_field('content_flex_spot4'); ?>

              <a href="<?php the_field('link_flex_spot4'); ?>" class="readmore-bold">Read more &raquo;</a></p>

          </div>

        </section>

        <section class="news clearfix">

          <h1>News</h1>

          <span class="provided">Provided by <a href="https://www.internetretailer.com/" target="_blank"><strong>Internet Retailer</strong></a></span>



          <div class="clearfix">

<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( 'https://www.internetretailer.com/rss/news/' );


$maxitems = 0;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 3 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;
?>


    <?php if ( $maxitems == 0 ) : ?>

    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) : ?>
      		<h2><a href="<?php echo esc_url( $item->get_permalink() ); ?>"><?php echo esc_html( $item->get_title() ); ?></a></h2>

		<p><?php echo esc_html( $item->get_description() ); ?><br><a href="<?php echo esc_url( $item->get_permalink() ); ?>" class="readmore-bold" target="_blank">Read more &raquo;</a></p>
        <?php endforeach; ?>
    <?php endif; ?>




          </div>

        </section>

      </article>

    </div>



<aside> 

	      <?php get_sidebar(); ?>

	    </aside>

  </div>

  <!-- #main --> 

</div>

<!-- #main-container -->



<?php get_footer(); ?>
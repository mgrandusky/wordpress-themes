<?php
/*
Template Name: Top Rankings
*/
?>

<?php get_header(); ?>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
      <section class="article-head twelve columns row">
        <p><span class="date"><?php echo get_the_date(); ?></span> | <span class="cat"><a href="#">Pizzeria Rankings</a></span></p>
        <h1 class="article-headline"><?php the_title(); ?></h1>
        <p class="author">By <?php the_author(); ?></p>
        
        <hr class="thick"/>
      </section>
      
      <section class="article-block twelve row">
        <article>
          <div class="row">
            <div class="one columns social left-col">
              <div class="share-col">Share</div>
              <!-- Share This -->
              <div class="share clearfix"> <span class='st_facebook_custom' displayText='Facebook'></span> <span class='st_twitter_custom' displayText='Tweet' st_via="KBB"></span> <span class='st_linkedin_custom' displayText='LinkedIn'></span> <span class='st_googleplus_custom' displayText='Google +'></span> <span class='st_email_custom' displayText='Email'></span> <span class="print"><a href="javascript:window.print()">Print</a></span> </div>
            </div>
            <div class="eleven columns right-col">
              <section>
                <?php the_field('content'); ?>
                
                <div class="widetable">
                <table class="top100">
                  <thead>
                    <tr>
                      <th><?php the_field('current_year'); ?></th>
                      <th>Restaurant Name</th>
                      <th><?php the_field('previous_year'); ?></th>
                      <th>Principle Executive</th>
                      <th>City & State</th>                      
                      <th>#Units</th>
                      <th><?php the_field('current_year'); ?> Gross Sales</th>                      
                    </tr>
                  </thead>
                  <tbody>
			<?php $ranking_listings = get_field('ranking'); ?>
			<?php if($ranking_listings): ?>
			<?php foreach ($ranking_listings as $ranking_listing) { ?>
                    <tr>
                      <td><?php echo $ranking_listing['ranking_(current_year)']; ?></td>
			<?php if($ranking_listing['restaurant_url']): ?>
                      <td><a href="<?php echo $ranking_listing['restaurant_url']; ?>" target="_blank"><?php echo $ranking_listing['restaurant_name']; ?></a><?php echo $ranking_listing['key_note']; ?></td>
			<?php else: ?>
			<td><?php echo $ranking_listing['restaurant_name']; ?><?php echo $ranking_listing['key_note']; ?></td>
			<?php endif; ?>
                      <td><?php echo $ranking_listing['ranking_(previous_year)']; ?></td>
                      <td><?php echo $ranking_listing['principle_executive']; ?></td>
                      <td><?php echo $ranking_listing['city_&_state']; ?></td>
                      <td><?php echo $ranking_listing['#units']; ?></td>
                      <td><?php echo $ranking_listing['gross_sales']; ?></td>                      
                    </tr>
			<?php } ?>
			<?php endif; ?> 
                                                                                                                           
                  </tbody>
                </table>
                </div>
                <?php $kn_listings = get_field('subscripts'); ?>
			<?php if($kn_listings): ?>
			<?php foreach ($kn_listings as $kn_listing) { ?>
                   		<p><?php echo $kn_listing['symbol']; ?> <?php echo $kn_listing['description']; ?></p>
			<?php } ?>
			<?php endif; ?> 
                             
	         
                
              </section>

            </div>
          </div>
        </article>
      </section>
    </div>
  </div>
<?php
endwhile;
endif;
?>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?> 
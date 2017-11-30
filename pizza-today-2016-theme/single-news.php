<?php get_header(); ?>
<script>
$(document).ready(function() {
          $('body').addClass('inner');
        }); 
</script>
<style>#menu-item-49412 a { color: #ed3830; }</style>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
     <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="article-head twelve columns row">
          <p><span class="date"><?php the_date(); ?></span> | <span class="cat"><?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?></span></p>
          <h1 class="article-headline"><?php the_title(); ?></h1>

	<?php if(get_the_author() != "Press Release"): ?>
          <p class="author">By <?php the_author(); ?></p>
	<?php endif; ?>
          <hr class="thick"/>
        </section>
        <?php if(get_field('image/gallery') == "Masthead"): ?>
        <section class="twelve columns row">
          <img src="<?php the_field('masthead'); ?>"  style="width:100%; height:auto;"><br>
          <span style="float:right;"><i><?php the_field('caption'); ?></i></span><br>
        <hr></section>
        
        <?php endif; ?>
        <?php if(get_field('image/gallery') == "Slider"): ?>
          <section class="twelve columns row">
            <div id="article-slider">
              <div class="royalSlider rsDefault">
                <div id="new-royalslider-1" class="royalSlider new-royalslider-1 rsUni rs-default-template" style="width:100%;">
                  <?php $slider_listings = get_field('slider'); ?>
                  <?php if($slider_listings): ?>
                    <?php foreach ($slider_listings as $slider_listing) : ?>
                      <div class="rsContent"> <a href="#" ><img class="rsImg" src="<?php echo $slider_listing['image']; ?>" alt="Registration is Open" data-hash-url="#gallery1"/></a>
                        <div class="rsCaption">
                          <p class="caption"><?php echo $slider_listing['caption']; ?></p><div class="rsSlideCount"></div>
                        </div>
                      </div>
                    <?php endforeach;
                  endif; ?>
                </div>
              </div>
            </div>
            <!-- </div> -->
          <hr></section>
<br clear="all">
          
        <?php endif; ?>
        <section class="article-block columns twelve row">             
          <article> 
            <div class="row">
                <div class="one columns social left-col">
                  <div class="share-col">Share</div>
                  <!-- Share This -->
                  <div class="share clearfix"> 
                    <span class='st_facebook_custom' displayText='Facebook'></span>
                    <span class='st_twitter_custom' displayText='Tweet' st_via="KBB"></span>
                    <span class='st_linkedin_custom' displayText='LinkedIn'></span>
                    <span class='st_googleplus_custom' displayText='Google +'></span>
                    <span class='st_email_custom' displayText='Email'></span>
                    <span class="print"><a href="javascript:window.print()">Print</a></span> 
                  </div>     
                </div>              
                <div class="eleven columns right-col">  
                  <section>
                    <?php the_content(); ?>
                  </section>
                  <section class="more-block row">
                    <h2 class="more-title"><a href="<?php bloginfo('siteurl'); ?>/news">More News</a></h2>
                    <div class="flex-parent start alignStart twelve row">
                      <?php
                      $postTitle = get_the_title(); 
                      $category = explode(',',get_the_term_list( $ID, 'news-categories', '', ', ', '' ));
                      if($category[1]): $cat = $category[1]; else: $cat = $category[0]; endif;
                        $args = array(
                              'posts_per_page' =>4,
                              'post_type' => 'news', 
                              
                        );
                        $I = 1;
                        $query = new WP_Query( $args );
                        while ( $query->have_posts() ) : $query->the_post();
                        if(get_the_title() != $postTitle):
                            if($I <= 3): ?>
                            <article class="colums four row half-tab"> 
<p><span class="date"><?php the_date(); ?></span> | <span class="cat"><?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?><?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?></span></p>
 
                              <div class="media-right med">
                                <h2 class="article-headline-more"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                                <p><?php the_excerpt(); ?>
                                <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
                              </div>  
                            </article>
                              <hr>
                          <?php
                              $I++;
                          endif;
                        endif;
                      endwhile; ?> 
                    </div>
                  </section>                   
                </div>
            </div>
          </article>
        </section>              
      <?php endwhile;
    endif; ?>
    </div>
  </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>    
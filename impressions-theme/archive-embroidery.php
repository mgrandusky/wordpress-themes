<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
    	<section> 
  			<h1 class="entry-title">Embroidery<hr></h1>
	             <?php

            $feat_args = array(
              'posts_per_page' => 1,
              'post_type' => 'embroidery', 
              'meta_key' => 'featured_story',
              'meta_value' => true,
            );


            $get_featured_project = new WP_Query( $feat_args );

            if ($get_featured_project->have_posts()) :

               while ($get_featured_project->have_posts()) : $get_featured_project->the_post(); ?>

                <?php 
                  //Remember the post ID of the featured article 
                  global $featuredID;
                  $featuredID = get_the_ID();
                ?>

<article id="featured-article">
          <?php if(get_field('article_image')): ?><div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>"/></a></div>
			<div>
			<?php else: ?>
			<div style="width:1px"></div>
			<div style="width:100%">
<?php endif; ?>
          
            <h3><a href="<?php echo post_permalink( $ID ); ?>"  style="color: inherit; font: inherit; text-decoration: none;"><?php the_title(); ?></a></h3>
            <br>
            <span class="meta"><i><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'embroidery-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'embroidery-categories', '', ', ', '' ) ?><?php endif; ?></i></span>
            <p><?php echo the_field('abstract_text'); ?></p>
            <br>
            <a href="<?php echo post_permalink( $ID ); ?>" class="more">Full Story</a>
          </div>
        </article>
          <?php endwhile;
          wp_reset_query();
            endif; ?> 
<section id="article-list">
            		<div id="articles">
       <?php
			 global $featuredID;
			// echo '<pre>'.$featuredID.'</pre>';
            $args = array(
            	'posts_per_page' => 200,
            	'post_type' => 'embroidery', 
      				'post__not_in' => array($featuredID),
            );
            $query = new WP_Query( $args );
        
            while ( $query->have_posts() ) : $query->the_post();
             ?>
<article>
            <?php if(get_field('abstract_image') || get_field('article_image')): ?>
				<div>
			<?php else: ?>
					<div style="width:100%">
			<?php endif; ?>
              <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
              <span class="meta"><i><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'embroidery-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'embroidery-categories', '', ', ', '' ) ?><?php endif; ?></i></span>
              <p><?php echo the_field('abstract_text'); ?></p>
              <a href="<?php echo post_permalink( $ID ); ?>" class="more">Full Story</a>
            </div>
			<?php if(get_field('abstract_image')){ ?>
			<div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>"/></a></div>
			<?php }elseif(get_field('article_image')){ ?>
			<div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>"/></a></div>
			<?php } ?>
          </article>           
            <?php 
           
          endwhile; wp_reset_query(); ?>
       		</div>
</section>
	      <div class="lm-block row">
       				 <input type="button" class="btn-shade learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>              
  </section>              
  
 	</div>
	<?php get_sidebar(); ?>
  </main>
<script type="text/javascript"> 
$(document).ready(function() {
 
    // Handler for .ready() called.
var currentIndex = 10;
var numMore = 10;
 
var totalItems = $("section#article-list article").length;
var maxCount = 100;
 
$("section#article-list article").hide();
$("section#article-list article").slice(0,12).show();
 
clickButton();
 
function clickButton() {
    var currentLength = $("section#article-list article:visible").length;
 
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();    
            $(".lm-block").hide();      
        } else {
            $("#loadMore").show();
            $(".lm-block").show();  
        }
}
 
$("#loadMore").click(function (e) {
    e.preventDefault();
    $("section#article-list article").slice(currentIndex, currentIndex + 10).show();
    currentIndex += 10;
    clickButton();
});
 
});
</script> 
<?php get_footer(); ?>
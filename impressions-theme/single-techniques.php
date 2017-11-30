<?php 

/**  Template Name: Process + Techniques Template */ 

?>
<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
    	<section> 
<?php
global $wp_query;
$cat_obj = $wp_query->get_queried_object();
//echo $cat_obj->name . " has id ". $cat_obj->term_id;

?>
<h1 class="entry-title">Process + Techniques<hr></h1>  
<section id="article-list"> 
<div id="articles">
<?php

// wp query
            $args = array(
             'post_type' => array('digital-decorating','screen-printing','embroidery'),
              'posts_per_page' => 200,
              'tax_query' => array(
    				'relation' => 'OR',
    				array(
        				'taxonomy' => 'digital-decorating-categories',
        				'field'    => 'name',
        				'terms'    => 'Process + Techniques',
    				),
    				array(
        				'taxonomy' => 'screen-printing-categories',
        				'field'    => 'name',
        				'terms'    => 'Process + Techniques',
    				),
					array(
        				'taxonomy' => 'embroidery-categories',
        				'field'    => 'name',
        				'terms'    => 'Process + Techniques',
    				),
				),
            );
            $get_news = new WP_Query( $args );
if ($get_news->have_posts()) :
 

   while ($get_news->have_posts()) : $get_news->the_post(); ?>

<article>
            <?php if(get_field('abstract_image') || get_field('article_image')): ?>
				<div>
			<?php else: ?>
					<div style="width:100%">
			<?php endif; ?>
              <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
              <span class="meta"><i><?php echo get_the_date(); ?></i></span>
              <p><?php echo the_field('abstract_text'); ?></p>
              <a href="<?php echo post_permalink( $ID ); ?>" class="more">Full Story</a>
            </div>
			<?php if(get_field('abstract_image')){ ?>
            <div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>"/></a></div>
			<?php }elseif(get_field('article_image')){ ?>
			<div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>"/></a></div>
			<?php } ?>
          </article> 

    <?php endwhile;

endif; ?>

</section>
	      <div class="lm-block row">
       				 <input type="button" class="btn-shade learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>              

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
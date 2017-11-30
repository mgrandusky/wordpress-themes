<?php get_header(); ?>
<script>
$(document).ready(function() {
          $('body').addClass('inner');
        }); 
</script>
<div class="container" id="main">

	  <div class="fluid-width">	
		<div class="inner-block row">
<section>
<?php
global $wp_query;
$cat_obj = $wp_query->get_queried_object();
//echo $cat_obj->name . " has id ". $cat_obj->term_id;

?>

 <section class="no-marginList eleven columns row" id="article-list">
<h1 class="header top"><?php echo $cat_obj->name; ?></h1>
<?php
function custom_field_excerpt() {
	global $post;
	$text = content(); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 40; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
// wp query
            $args = array(
              'post_type' => 'products',
              'posts_per_page' => 10,
              'tax_query' => array(
                    array(
                        'taxonomy' => 'product_showcase_custom',
                        'field'    => 'term_id',
                        'terms'    => $cat_obj->term_id
                    ),
                ),
		'paged' => $paged
            );
            $get_news = new WP_Query( $args );
if ($get_news->have_posts()) :
 

   while ($get_news->have_posts()) : $get_news->the_post(); ?>

    <article class="row">
	  
                       <?php if(has_post_thumbnail()): ?>
				          <p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><?php the_post_thumbnail( array(220, 220) ); ?></a></p>
						<?php else: ?>
					<p class="img-fl"><a href="<?= post_permalink( $ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/default_220.png"></a></p>
						<?php endif; ?>	
       <div class="media-right med">
 <p class="date row"><?php echo get_the_date(); ?></p>
       <h2 class="article-headline"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?>
           <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Read More</span> &rsaquo;</a></p>
       </div>    
    </article>   

    <?php endwhile;

endif; ?>

</section>
<?php if(function_exists('wp_paginate')) { wp_paginate(); }   ?> 
</section>
		</div>
	</div>
		<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
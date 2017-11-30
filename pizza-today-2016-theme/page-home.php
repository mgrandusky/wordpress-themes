<?php 
/*  Template Name: Home Template */ 
?>
<?php get_header(); ?>
<script>
jQuery('document').ready(function(){
	jQuery('body').addClass('home');
	jQuery('#new-royalslider-1').attr("id", "full-width-slider"); 
}); 
</script>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
 <div id="slider" class="row">
    <div class="royalSlider rsDefault">
      	<div id="new-royalslider-1" class="royalSlider new-royalslider-1 rsUni rs-default-template" style="width:100%;">
			<?php $slider_listings = get_field('slider'); ?>
			<?php if($slider_listings): ?>
			<?php foreach ($slider_listings as $slider_listing) { ?>
 
            <div class="rsContent">
			<img src="<?php echo get_template_directory_uri(); ?>/images/structural-images/rotatorCaption-bg.png" class="desktop-disp" style="position:absolute;"/>             
  	  		<a href="<?php echo $slider_listing['link']; ?>"><img class="rsImg" src="<?php echo $slider_listing['image']; ?>" alt="Registration is Open"/></a>
	       		<div class="rsCaption">
	    		 <p><a href="<?php echo $slider_listing['link']; ?>"><?php echo $slider_listing['department']; ?></a></p>
                 <h2><a href="<?php echo $slider_listing['link']; ?>"><?php echo $slider_listing['title']; ?></a></h2>
                </div> 
			</div>
            <?php } ?>
			<?php endif; ?>                       
             
	</div>
     </div>    
</div>
<?php
endwhile;
endif;
?>
				<div class="container" id="main">
				  <div class="fluid-width">
				    <div class="inner-block row">

				      <section class="full-width row">
				      <h1 class="header"><a href="news">News</a></h1>

						<div class="flex-parent alignStart">    
	<?php
	
				$args = array(
	'posts_per_page' =>4,
	'post_type' => 'news', 
	'tax_query' => array(
		array(
			'taxonomy' => 'news-categories',
			'field'    => 'slug',
			'terms'    => array('pizza-headlines','pizza-expo-news'),
		),
	),
	
);

$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();

		      		?> 
						<article class="three columns mob-full-width">
					            <h2><a href="<?= post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
				    	        <p><?php echo excerpt(30); ?> <a href="<?= post_permalink( $ID ); ?>" class="readmore">Read More</a></p>
				        </article>

						<?php
	endwhile;
						?>          
				      </div>
				       <hr>
				        <p class="alignRight columns"><a href="news" class="more"><span>More</span><i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a></p>
				      </section>

				      <section class="img-max-tab full-width hr-divider row">
					      <h1 class="header"><a href="departments">Departments</a></h1>
						<?php
				$args = array(
	'posts_per_page' => 4,
	'post_type' => 'departments', 
	
	
);

$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
						?>  
					      <article class="row">
				          	<div class="four columns no-marg">
<?php if(has_post_thumbnail()): ?>
				          <p class="img300-fl"><a href="<?= post_permalink( $ID ); ?>"><?php the_post_thumbnail( array(300, 200) ); ?></a></p>
						<?php else: ?>
					<p class="img300-fl"><a href="<?= post_permalink( $ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/default_300.png"></a></p>
						<?php endif; ?>	
</div>
				            <div class="eight columns no-marg">
					            <span class="cat"><?php echo get_the_term_list( $ID, 'departments-categories', '', ', ', '' ) ?></span>
				                <h2 class="lrg"><a href="<?= post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
				                <p><?php echo excerpt('100'); ?> <a href="<?= post_permalink( $ID ); ?>" class="readmore">Read More</a></p>
				            </div>
				          </article>

						<?php
						endwhile; 
						?>                                
				        <hr>
				        <p class="alignRight columns"><a href="departments" class="more"><span>More</span><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
				      </section>

				      <section class="img-half-tab full-width recipes row">
					    <h1 class="header"><a href="recipes">Recipes</a></h1>
				        <div class="flex-parent alignStart row">
					<?php
							global $post;
 							$myposts = get_posts('numberposts=4&post_type=recipes');
				
 							foreach($myposts as $post) : 
						?>  
					      <article class="row three columns">  
						<?php set_post_thumbnail_size( 220, 220, true ); ?>
						<?php if(has_post_thumbnail()): ?>
				          <a href="<?= post_permalink( $ID ); ?>"><?php the_post_thumbnail(); ?></a><br>
						<?php else: ?>
					<a href="<?= post_permalink( $ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/default_220.png"></a><br>
						<?php endif; ?>
							<span class="cat"><?php echo get_the_term_list( $ID, 'recipes_custom', '', ', ', '' ) ?></span>
				            <h2><a href="<?= post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
				          </article> 

						<?php
						endforeach; 
						?>                                
				         </div> 
				         <hr>
				        <p class="alignRight columns"><a href="recipes" class="more"><span>More</span><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
				      </section>

				      <section class="img-max-tab full-width row">
				      
				        <h1 class="header"><a href="news/videos">Videos</a></h1>
					
					<?php
							global $post;
$args = array(
	'post_type' => 'news',
	'posts_per_page' => 1,
	'tax_query' => array(
		array(
			'taxonomy' => 'news-categories',
			'field'    => 'slug',
			'terms'    => 'videos',
		),
	),
);

	

$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
						?>  
				      	<div class="eight columns">
							<?php echo apply_filters( 'the_content',get_field('video_code')); ?>
				      	</div>
				        <div class="four columns">
				        	<h2 class="lrg"><a href="<?= post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
				            <p><?php echo excerpt(50); ?> <a href="<?= post_permalink( $ID ); ?>" class="readmore">Read More</a></p>
				        </div>
					<?php
						endwhile; 
						?> 
				      
				        <hr>
				        <p class="alignRight columns"><a href="news/videos" class="readmore"><span>MORE</span><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>       
				      </section>

				    </div>
				  </div>

	      <?php get_sidebar(); ?>


  
  <!-- #main --> 

</div>

<!-- #main-container -->



<?php get_footer(); ?>
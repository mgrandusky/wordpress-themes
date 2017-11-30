<?php 

/*
 Template Name: Home Template 
*/ 

?>

<?php get_header(); ?>

<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('home');
        });
</script>
<div id="slider">
  <?php echo get_new_royalslider(1); ?>
  <div class="caption cf clearfix" style="background-color:#000;"></div>
</div>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
        
			<div class="quicklinks clearfix visible-phone"> 
		      <?php show_links(); ?>
	    	 </div>        
         </section>    
        
        <section>	
            <article class="one-third">
              <h1 class="header"><a href="<?php the_field('link1'); ?>"><?php the_field('title1'); ?></a></h1>
              <p><a href="<?php the_field('link1'); ?>"><img src="<?php the_field('image1'); ?>" border="0"/></a></p>
              <?php the_field('description1'); ?>
              
            </article>
            
            <article class="one-third">
              <h1 class="header"><a href="<?php the_field('link2'); ?>"><?php the_field('title2'); ?></a></h1>
              <p><a href="<?php the_field('link2'); ?>"><img src="<?php the_field('image2'); ?>" border="0"/></a></p>
              <?php the_field('description2'); ?>
              
            </article>
            
            
            <article class="one-third">
              <h1 class="header"><a href="<?php the_field('link3'); ?>"><?php the_field('title3'); ?></a></h1>
              <p><a href="<?php the_field('link3'); ?>"><img src="<?php the_field('image3'); ?>" border="0"/></a></p>
              <?php the_field('description3'); ?>
            </article>
	     <hr class="divider"/>
		</section>         
        

		<section class="news">
			<a href="http://www.surfexpo.com/news/show-news/"><h1 class="header">NEWS</h1></a>  
<?php $thumb_id = get_post_thumbnail_id(); ?>
				<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
				<?php $thumb_url = $thumb_url_array[2];  ?>   
			<?php 
			wp_reset_query();
			$args = array( 'post_type' => 'latest-news','posts_per_page' => 3, 'cat' => 4);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="media-right">
				<div class="image-box"><a href="<?php echo post_permalink( $ID ); ?>"><? the_post_thumbnail("full", array('class' => 'alignnone')); ?></a></div>
				<div class="div-left">
				<h2><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title() ?></a></h2>
			    <?php the_excerpt(); ?>
			    <a href="<?php echo post_permalink( $ID ); ?>" class="readmore"><span>Full Story</span> &raquo;</a>
			    <br><br>
				</div>
				</article>
			<?php endwhile; ?>
			<?php wp_reset_query();?>
			 <hr class="divider"/>
	    </section>
                
		<section class="hp-featured">        
			<h1 class="header">FEATURED BRANDS</h1> 
			<?php $fb_images = get_field('brands'); ?>
			<?php if($fb_images): ?>
			<?php foreach ($fb_images as $fb_image) { ?>
            <div class="one-fourth">
              <p><a href="<?php echo $fb_image['brand_url']; ?>" target="_blank"><img src="<?php echo $fb_image['brand_image']; ?>" border="0"/>
              <span class="text-content"><span class="orange-title"><?php echo $fb_image['product_name']; ?></span><span><?php echo $fb_image['company_name']; ?></span></span></a></p>
            </div>  
          	<?php } ?>
			<?php endif; ?>                                        
        <hr class="divider"/>
        </section>
         
        
        <section class="sponsors one-sixth">
	        <h1 class="header"><a href="">INDUSTRY PARTNERS</a></h1> 
			<?php $ip_images = get_field('partners'); ?>
			<?php if($ip_images): ?>
			<?php foreach ($ip_images as $ip_image) { ?>
			<p><a href="<?php echo $ip_image['partner_url']; ?>" target="_blank"><img src="<?php echo $ip_image['partner_image']; ?>" alt="" border="0"></a></p>            
			<?php } ?>
			<?php endif; ?>            
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


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php get_footer(); ?>
<?php get_footer(); ?>
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

<style>

.caption > div {
  min-height: 109px !important;
  padding: 25px 0px 5px !important;
  margin: 0px 10px;
  width: 96.5%;
  max-width: 1260px !important;
}

.caption > div > span:first-of-type {
font: 600 2.725em/1.125em 'GothamBold', sans-serif !important;
    padding: 0 !important;
    text-transform: uppercase;
    margin-top: 23px;
    display: block;
    width: 294px !important;
    border: 3px solid #ffa300;
    color: #ffa300;

}
.caption > div > span:nth-of-type(2) {
        font: normal 1.35em/1.125em 'GothamLite', sans-serif !important;
}
.caption > div > a {
    font: bold 1.25em/1.125em 'GothamBold', sans-serif !important;
}

.caption > div > div:first-of-type > span:first-of-type {
    font: 600 2.5em/1.125em 'GothamBold', sans-serif !important;
    padding: 18px 0px 0px;
    text-transform: uppercase;
    max-width: 600px;
}

@media only screen and (min-width: 768px) {

  .caption > div > div:first-of-type > span:nth-of-type(2) {
      font: normal 1.25em/1.35em 'GothamLite', sans-serif !important;
  }
  .caption > div > div.lmbutton > a {
      font: bold 0.5em/1.125em 'GothamBold', sans-serif !important;
      vertical-align: middle;
  }
  .caption > div > div.lmbutton {
    font: 600 2.35em/1.125em 'GothamBold', sans-serif !important;
    padding: 0px 0px 5px 0px !important;
    text-transform: uppercase;
    margin-top: 23px !important;
    width: 294px !important;
    display: block;
    float: right !important;
  }
}

@media only screen and (max-width: 1280px) {
	.caption > div > div:first-of-type {
		max-width:700px;
	}
}

@media only screen and (max-width: 1060px) {
  .caption > div > div {
      max-width: 400px !important;
  }
 .caption > div > div:first-of-type > span:first-of-type {
    font: 600 2em/1.125em 'GothamBold', sans-serif !important;
    padding: 0px 0px 0px;
  }
}

@media only screen and (max-width: 767px) {
  .caption > div  {
      padding: 15px 0px 7px !important;
      margin: 0px 10px !important;
  }
  .caption > div > div  {
      max-width: none !important;
  }

  .caption > div > div.lmbutton {
    font: 600 2.35em/1.125em 'GothamBold', sans-serif !important;
    padding: 0px 0px 5px 0px !important;
    text-transform: uppercase;
    margin-top: 13px !important;
    display: block;
    float: left !important;
}  
  .caption > div > div.lmbutton > a {
      font: bold 0.5em/1.125em 'GothamBold', sans-serif !important;
      vertical-align: middle;
  }

  .caption > div > div:first-of-type > span:first-of-type  a {
      font: 600 .75em/1.125em 'GothamBold', sans-serif;
      padding: 0px 0px 0px;
  }
  .caption > div > div:first-of-type > span:nth-of-type(2) {
        font: normal 1.4em/1.35em 'GothamLite', sans-serif !important;
  }
  .caption > div > span > a {
      font: bold 0.5em/1.125em 'GothamBold', sans-serif !important;
      vertical-align: middle;
  }

}

</style>

<div id="slider">
  <?php echo get_new_royalslider(1); ?>
  <div class="caption cf clearfix" style="background-color:#003a5c;padding-bottom:10px;"></div>
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
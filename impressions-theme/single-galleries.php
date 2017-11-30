<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
      <section>
		<?php if (have_posts()) : ?>
  					<?php while (have_posts()) : the_post(); ?>
        <h1 class="entry-title">Galleries: <?php echo get_the_term_list( $post->ID, 'galleries-categories', '', ', ', '' ) ?><hr></h1><br>


<section class="gallery-slider row">
<hr>
<br clear="all">
<div id="new-royalslider-1" class="royalSlider new-royalslider-1 rs-image-gallery rsDefault rsUni">
  <?php $gallery_listings = get_field('gallery'); ?>
  <?php if($gallery_listings): ?>
  	<?php foreach ($gallery_listings as $gallery_listing) { ?>
  		<div class="rsContent">
   			<div class="galleryImage-block">
  	  		<a class="rsImg" href="<?php echo $gallery_listing['image']; ?>#prefix-SLIDE_INDEX" data-rsBigImg="<?php echo $gallery_listing['image']; ?>"></a>
  	  		<div class="rsTmb"><img src="<?php echo $gallery_listing['image']; ?>" alt="" /></div>
  			</div>
  			<div class="gallery-rightcol">
  	      <!-- Share This -->
        <div class="share" style="border:none;margin-bottom:0px;">
<div class="quickLinks" style="clear:both;">


            <div class="icons">
		    	<span class='st_facebook_large' displayText='Facebook' style="display: inline-block;"><i class="fa fa-facebook" aria-hidden="true"></i></span>
            	<span class='st_twitter_large' displayText='Tweet' st_via="impressionsmags" style="display: inline-block;"><i class="fa fa-twitter" aria-hidden="true"></i></span>
            	<span class='st_linkedin_large' displayText='LinkedIn' st_via="impressionsmags" style="display: inline-block;"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
            	<span class='st_email_large' displayText='Email' style="display: inline-block;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            	<a class="print-btn" href="javascript:window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
            </div>

            </div>
        </div>
<style>
.stButton .stLarge  {background-image: none !important}

#content section .icons span  {color:#00aeef;}
#content section .icons span:hover {color:#00739e; }
#content section .icons span i span span {color:#00aeef;}
#content section .icons > span {position: relative;}
#content section .icons > span >span {position : absolute; left: 0px; }
#content section .icons span i:hover, 
#content section .icons span:hover i:hover {color:#00739e;cursor:pointer; }
.st_facebook_large .stButton .stLarge {width: 20px}
</style>
          <h3 style="border:none;font-size:36px;"><?php the_title(); ?></h2>
  				<p class="gallery-slider-index"></p> 
    			<p class="rsGCaption"><?php echo $gallery_listing['description']; ?></p>                        
  			</div>
  		</div>
  	<?php } ?>
  <?php endif; ?>  
</div>
	 </section>

      <div class="col-lg-7 content">
   					<?php endwhile; ?>
  				<?php endif; ?>
<?php wp_reset_query(); ?>
        <br>
<div class="more-posts">
          <h2>More <?php echo get_the_term_list( $post->ID, 'galleries-categories', '', ', ', '' ) ?> Galleries</h2>
          <hr>
          <br>
<section class="products">
<?php
 				$postTitle = get_the_title(); 
				$args = array(
	'posts_per_page' => 7,
	'post_type' => 'galleries', 
	'tax_query' => array(
		array(
			'taxonomy' => 'galleries-categories',
			'field'    => 'name',
			'terms'    => get_the_term_list( $post->ID, 'galleries-categories', '', ', ', '' ),
		),
	),
	
);
$I = 1;
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
			if(get_the_title() != $postTitle):
			if($I <= 6): ?>
        <article>
          <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
          <span class="meta" style="margin:5px 0px 5px 0px; font-size: 1.125em;width:100%"><i><?php echo get_the_date(); ?></i></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abstract_text'); ?></p>
        </article>
	    	      <?php 
$I++; 
endif; 
endif;
endwhile; ?>
</section>
</div>
  <style type="text/css">
.gallery-slider-index {
	font-size:24px;
	color:#959595;
	padding-bottom:10px;
	border-bottom: 1px solid #959595;
}
.gallery-slider-index strong { font-size:24px; color: #000; }
img.rsImg {
    max-width: none;
    width: 100%;
}
    .products{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .products article{
      width: calc(100% / 3 - 40px / 3);
      margin-bottom: 15px;
    }
    .products article > a:first-of-type{
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid #000;
      margin-bottom: 10px;
	  width:300px;
      height:200px;

    }
    .products article > a img{
      max-width: 298px;
	  max-height:195px;
    }
    .products article h3{
      font-size: 1.5em;
      font-weight: bold;
      color: #000;
    }
    .products article h3 a{
      color: inherit;
    }
	.products article h3 a:hover{
      color: #00aeef;
	  text-decoration:underline;
    }
    .products article a{
      text-decoration: none;
      font-size: inherit;
    }
    .products article a span{
      font-size: 1.125em;
    }
    .products p{
      margin-top: 0;
    }
    .products > a:last-of-type{
      display: inline-block;
      font-weight: bold;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 1.125em;
      border-bottom: 3px solid #00aeef;
    }
    .post-type-archive #content section h2{
      font-size: 1.25em;
      display: block;
      border-bottom: 3px solid #000;
    }
    .products{}
  .gallery-slider .new-royalslider-1 .rsGCaption {
      text-align: left;
      color: #111;
      padding: 0px;
      position: relative;
      font-size: 1em;
      background: #fff;
  }
  .rsDefault .rsGCaption {
      position: absolute;
      float: none;
      bottom: 6px;
      left: 6px;
      text-align: left;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.75);
      color: #FFF;
      padding: 2px 8px;
      width: auto;
      font-size: 12px;
      border-radius: 2px;
  }
  .rsGCaption {
      width: 100%;
      float: left;
      text-align: center;
  }

  .rsUni.rsWithThumbsHor .rsThumbsContainer {
      position: relative;
      height: 100%;
      width: 100% !important;
  }

  .gallery-slider .new-royalslider-1 .rsThumb.rsNavSelected {
      opacity: 1;
      background: #111;
  	border: 5px solid #02aeef;
  }

  .gallery-slider .new-royalslider-1 .gallery-rightcol {
      width: 30%;
      float: left;
      padding-left: 20px;
  cursor: initial;
  }

  .gallery-slider .new-royalslider-1 .galleryImage-block {
    width: 100%;
    float: left;
    background: black !important;
    text-align: center;
    vertical-align: middle;
    height: 100%;
    max-width: 640px;
    max-height: 640px;
	border:1px solid #000;
    display: flex;
    align-items: center;
    justify-content: center;

  }

  .gallery-slider .new-royalslider-1 .rsThumb.rsNavSelected {
    opacity: 1;
    background: #111;
  }

  .rsUni .rsThumb.rsNavSelected .thumbIco {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border: none !important;
    border: none !important;
    -webkit-backface-visibility: hidden;
  }

  .gallery-slider .new-royalslider-1 .galleryImage-block .rsTmb img{
  	height: auto;
  }
  .gallery-slider .rsDefault, .gallery-slider .rsDefault .rsOverflow, .gallery-slider .rsDefault .rsSlide, .gallery-slider .rsDefault .rsVideoFrameHolder, .gallery-slider .rsDefault .rsThumbs {
    color: #000;
  	background: #fff;
  	height: 600px !important;
  }
  .rsUni.rsHor .rsArrowRight {
      right: 320px !important;
      top: 0;
  }

  .rsUni .rsThumbsArrow {
    height: 87% !important;
    width: 50px !important;
    position: absolute;
    display: block;
    cursor: pointer;
    z-index: 21;
    background: #02aeef;
    margin-top:10px;
  }


  .gallery-slider .new-royalslider-1 .rsThumbs {
      display: block;
      border-top: 1px solid #111;
      border-bottom: 1px solid #111;
      margin: 10px 0px 30px 0px;
      width: 100%;
      clear: both;
  }
  .gallery-slider .new-royalslider-1 .rsThumbsHor {
      height: 145px !important;
  }
  .rsDefault .rsThumbsHor {
      width: 100%;
      height: 108px;
      margin-top: 10px;
      border-top: 1px solid #000;
      border-bottom: 1px solid #000;
  }
  .rsDefault.rsWithThumbsHor .rsThumbsContainer {
      background-color: #fff;
  }
  .rsDefault.rsWithThumbsHor .rsThumbsContainer {
      position: relative;
      height: 100%;
  }
  .gallery-slider .new-royalslider-1 .rsThumb {
      width: 140px;
  height: 140px;
  line-height: 90px;
  text-align: center;
  opacity: 0.7;
  background-color: #111;
  border: 1px solid #111;
  display: flex;
  align-items: center;
  justify-content: center;

  }
  .rsDefault .rsThumb {
      background: #111;
      background: none;
          background-color: rgba(0, 0, 0, 0);
  }
  .rsDefault .rsThumb {
      float: left;
      overflow: hidden;
      width: 130px;
      height: 90px;
  }
  .rsDefault .rsThumb {
      float: left;
      overflow: hidden;
      width: 96px;
      height: 72px;
  }
  .rsNavItem {
      -webkit-tap-highlight-color: rgba(0,0,0,0.25);
  }
  .rsThumb {
      float: left;
      position: relative;
  }
  .gallery-slider .rsDefault .rsTmb {
      display: inline-block;
  display: flex;
  align-items: center;
  justify-content: center;

  }
  .rsDefault .rsTmb {
      display: block;
  }
  .rsDefault .rsThumb img {
      opacity: 0.5;
      filter: alpha(opacity=70);
  }
  .rsDefault .rsThumb img {
      width: 100%;
      height: 100%;
  	
  }
  .gallery-slider .new-royalslider-1 .rsThumb:hover, .gallery-slider .rsDefault .rsTmb:hover {
      opacity: 1;
      background-color: #111;
  }
  .gallery-slider .new-royalslider-1 .rsThumb.rsNavSelected {
      opacity: 1;
      background: #111;
  }
  .rsDefault .rsThumb.rsNavSelected img {
      opacity: 1;
  }
  @media screen and (max-width: 1024px) {
  .gallery-slider .new-royalslider-1 .galleryImage-block {
      width: 100%;
      float: left;
      background: black !important;
      text-align: center;
      vertical-align: middle;
      height: 100%;
  }
  img.rsImg {
      max-width: 100% !important;
  }
  .rsUni .rsArrow {
      width: 60px;
      position: absolute;
      display: block;
      cursor: pointer;
      z-index: 21;
      top: 100px;
  }

  .rsUni.rsHor .rsArrowRight {
      right: 0px !important; 
      top: 0;
  }
  .gallery-slider .new-royalslider-1 .gallery-rightcol {
  	clear: both;
      width: 100%;
      float: left;
      padding-left: 20px;
  }

  .rsUni.rsWithThumbsHor .rsThumbsContainer {
    width: 1000% !important;
  }

  }
  #content .content {
      margin: 25px auto;
      width: 100%;
      max-width: 940px;
  }
  @media screen and (min-width: 0px) and (max-width: 800px) {
  .rsUni.rsWithThumbsHor .rsThumbsArrowRight {
      right: 0;
      top: 0px !important;
  }

  .rsUni.rsWithThumbsHor .rsThumbsArrowLeft {
      left: 0;
      top: 0px !important;
  }
  .rsUni .rsThumbsArrow {
      height: 81%;
      width: 30px;
      position: absolute;
      display: block;
      cursor: pointer;
      z-index: 21;
      background: #00aeef !important;
      /* margin-top: 20px; */
      top: 20px;
  }
  }
  @media screen and (max-width: 460px){
    .products article {
        width: 300px;
        margin-bottom: 15px;
    }
  }
  @media screen and (max-width: 1279px){

    .more-posts article {
    	width: 300px !important;
      margin-bottom: 15px;
      display: inline-grid;
      flex-wrap: nowrap;
    }
    .gallery-slider .new-royalslider-1 .galleryImage-block{
      /*max-width: 100%;*/
    }
    .gallery-rightcol{display: none;}
    }
  @media screen and (min-width: 1280px){
    .mobile-cap{display: none;}
  }
  </style>
      </div>
    </div>
	<?php get_sidebar(); ?>
  </main>
<script id="new-royalslider-init-code" type="text/javascript">


  jQuery(document).ready(function($) {
    $('.new-royalslider-1').royalSlider({
  	  template:'default',
  	  image_generation:{ imageWidth:615, imageHeight:615, thumbImageWidth:140, thumbImageHeight:140 },
  	  thumbs:{ spacing:10, paddingTop:10, paddingBottom:10, marginTop:10, firstMargin:30, thumbWidth:135, thumbHeight:90, appendSpan:!0 },
  	  fullscreen:{ enabled:0, nativeFS:!0, keyboardNav:!1 },
  	  video:{ forceMaxVideoCoverResolution:'standard' },
  	  block:{ moveOffset:20, speed:400, delay:200 },
  	  width:'100%',
  	  height:630,
  	  imageAlignCenter:false,	 
  	  imageScaleMode: 'none',	
      deeplinking: { enabled: true, change: true, prefix: 'slider-' },
      autoHeight: true,	   	      
  	  arrowsNav:true,
      arrowsNavAutoHide: true,
  	  autoScaleSlider:!0,
  	  autoScaleSliderWidth:940,
  	  autoScaleSliderHeight:630,
  	  controlNavigation:'thumbnails',
  	  globalCaptionInside:!0,
  	  transitionType:'move',
  	  loop:!0,
  	  keyboardNavEnabled:!0,
  	  fadeinLoadedSlide:!1
     });
  });
  jQuery(document).ready(function($) {
     $('.new-royalslider-1').data('royalSlider').ev.on('rsAfterSlideChange', function() {
     	 googletag.cmd.push(function () {
	     googletag.pubads().refresh(); 
		 return false;
		 });
    });
  // }); 
  // jQuery('document').ready(function(){

    var sliderJQ = jQuery('.new-royalslider-1').royalSlider();
    var sliderInstance = sliderJQ.data('royalSlider');

    function updCount() {
      $('.gallery-slider-index').html('<strong>'+(sliderInstance.currSlideId+1) + '</strong> of ' + sliderInstance.slides.length + '');
      $('.new-royalslider-1 .mobile-cap').html(sliderInstance.currSlide.content.find('.gallery-rightcol').html())
      // console.log('i see');
    }
    // sliderInstance.currSlide.content.html()
    sliderInstance.ev.on('rsAfterSlideChange', updCount);
    $('<div class="mobile-cap"></div>').insertAfter('.new-royalslider-1 .rsOverflow')
    // updCount();
    setTimeout(function() {
      updCount();
    }, 500);
  });
</script>
<?php get_footer(); ?>
<style>
.menu-item-20529 {background: #02aeef;color: #fff;}
</style>
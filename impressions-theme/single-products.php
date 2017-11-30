<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
      <section>
		<?php if (have_posts()) : ?>
  					<?php while (have_posts()) : the_post(); ?>
        <h1 class="entry-title">Products: <?php echo get_the_term_list( $post->ID, 'products-categories', '', ', ', '' ) ?><hr></h1><br>
        <h2 style="border:none;width:100%;margin-bottom:10px;"><?php the_title(); ?></h2>
        <span style="margin-bottom: 15px;display: block;">From <strong><a href="<?php the_field('company_url'); ?>" target="_blank" style="text-decoration:none;"><?php the_field('company_name'); ?></a></strong></span>
        <?php if(get_field('author')){ ?><p class="meta">By <b><?php echo the_field('author'); ?></b><?php if(get_field('title')){ ?>, <?php echo the_field('title'); ?></p><?php } } ?>
        <div class="share">
<div class="quickLinks" style="clear:both;">


            <div class="icons">

		    	<span class='st_facebook_large' displayText='Facebook' style="display: inline-block;position:relative;"><i class="fa fa-facebook" aria-hidden="true"></i></span>
            	<span class='st_twitter_large' displayText='Tweet' st_via="impressionsmags" style="display: inline-block;position:relative;"><i class="fa fa-twitter" aria-hidden="true"></i></span>
            	<span class='st_linkedin_large' displayText='LinkedIn' st_via="impressionsmags" style="display: inline-block;position:relative;"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
            	<span class='st_email_large' displayText='Email' style="display: inline-block;position:relative;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            	<a class="print-btn" href="javascript:window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
            </div>

            </div>
        </div>
<style>
.stButton .stLarge  {background-image: none !important;float:left;display:block;}

#content section .icons span  {color:#00aeef;}
#content section .icons span:hover {color:#00739e; }
#content section .icons span i span span {color:#00aeef;}
#content section .icons > span {position: relative;}
#content section .icons > span >span {position : absolute; left: 0px; }
#content section .icons span i:hover, 
#content section .icons span:hover i:hover {color:#00739e;cursor:pointer; }
.st_facebook_large .stButton .stLarge {width: 20px}
</style>
      </section>
	  <?php if(get_field('gallery')){ ?>
      <div id="featured">
        <div id="new-royalslider-2" class="royalSlider new-royalslider-2 rsUni rs-default-template" style="width:100%;height:500px;;">
          <div class="rsContent">
            <img class="rsImg" src="http://localhost/wordpress/wp-content/uploads/2017/04/trip_image.jpg" alt="<span class='slide'></span><span>trip_image</p>"/>
          </div>
          <div class="rsContent">
            <img class="rsImg" src="http://localhost/wordpress/wp-content/uploads/2017/04/events_image.jpg" alt="<span class='slide'></span><span>events_image</p>"/>
          </div>
          <div class="rsContent">
            <img class="rsImg" src="http://localhost/wordpress/wp-content/uploads/2017/04/exhibitors_image.jpg" alt="<span class='slide'></span><span>exhibitors_image</p>"/>
          </div>
          <div class="rsContent">
            <img class="rsImg" src="http://localhost/wordpress/wp-content/uploads/2017/04/buyers_image.jpg" alt="<span class='slide'></span><span>buyers_image</p>"/>
          </div>
        </div>
      </div>
	  <?php }else{ ?>
      <div id="featured"><img src="<?php echo the_field('article_image'); ?>" alt=""><br><b><?php echo the_field('image_caption'); ?></b></div>
	  <?php } ?>
      <div class="col-lg-7 content">
        <?php the_content(); ?>
   					<?php endwhile; ?>
  				<?php endif; ?>
<?php wp_reset_query(); ?>
        <br>
        <div class="more-posts">
          <h2>More <?php echo get_the_term_list( $post->ID, 'products-categories', '', ', ', '' ) ?> Products</h2>
          <hr>
          <br>
<section class="products">
<?php
 				$postTitle = get_the_title(); 
				$args = array(
	'posts_per_page' => 7,
	'post_type' => 'products', 
	'tax_query' => array(
		array(
			'taxonomy' => 'products-categories',
			'field'    => 'name',
			'terms'    => get_the_term_list( $ID, 'products-categories', '', ', ', '' ),
		),
	),
	
);
$I = 1;
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
			if(get_the_title() != $postTitle):
			if($I <= 6):
		      		?>
<article>
          <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
          <span><?php the_field('company_name'); ?></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abstract_text'); ?></p>
        </article>
	    	      <?php 
$I++; 
endif; 
endif;
endwhile; ?>
</section>
  <style type="text/css">
	#content .content {
    margin: 25px auto;
    width: 100%;
    max-width: 950px !important;
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
width: 300px;
height: 200px;

    }
    .products article > a img{
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
#content .content p, #content .content span {
    font-size: 18px;
    width: 100%;
}
#content section .share {
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    padding: 18px 0;
    margin-bottom: 35px;
}
#featured {
width: 100%;
border: 1px solid #000;
background: #000;
text-align: center;
display: flex;
align-items: center;
justify-content: center;
max-height: 630px;
}
#featured > img {
	width:100%;
	height:auto;
	border:none !important;
}
#content .content p, #content .content span {
    font-size: 18px;
    width: 80%;
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
}

  </style>
        </div>
      </div>
    </div>
	<?php get_sidebar(); ?>
  </main>
<?php get_footer(); ?>
<style>
.menu-item-20528 {
  background: #02aeef;
  color: #fff;
}
#featured {
    width: 100%;
    border: 1px solid #000;
    background: #000;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    max-height: 630px;
}
#featured > img {
 max-height: 100%; 
max-width: 100%; 
height: auto; 
width: auto;
border: none !important; 
}

  @media screen and (min-width: 0px) and (max-width: 460px) {
#featured > img {
 max-height: 100%; 
max-width: 100%; 
height: auto; 
width: auto;
border: none !important; 
}
  }
</style>
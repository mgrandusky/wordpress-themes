<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
      <section>
		<?php if (have_posts()) : ?>
  					<?php while (have_posts()) : the_post(); ?>
<h1 class="entry-title">Product Spotlight<hr></h1><br>
<div style="color:#9e0b0f;font-size:18px;margin-bottom:10px;">SPONSORED</div>
        <h2 style="border:none;width:100%;margin-bottom:10px;"><?php the_title(); ?></h2>
        <?php if(get_field('subheadline')){ ?><span style="font-size:24px;font-weight:700;margin-bottom:10px;display:block"><?php echo the_field('subheadline'); ?></span><?php } ?>
        <?php if(get_field('author')){ ?><p class="meta">By <b><?php echo the_field('author'); ?></b><?php if(get_field('title')){ ?>, <?php echo the_field('title'); ?></p><?php } } ?>
        <div class="share">
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
      </section>
<?php
if(get_field('show_gallery')):
$post_object = get_field('gallery_link');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
    <div>

<?php if( have_rows('gallery') ): ?>


 <div id="featured">
        <div id="new-royalslider-2" class="royalSlider new-royalslider-2 rsUni rs-default-template" style="width:100%;height:500px;">   <?php while( have_rows('gallery') ): the_row(); ?>

    
<div class="rsContent">
            <img class="rsImg" src="<?php the_sub_field('image'); ?>" alt=""><div class="slide_caption"><span class='slide'></span><span><?php the_sub_field('description'); ?></span></div>
          </div>
    <?php endwhile; ?>

      </div>
      </div>

<?php endif; ?>
    </div>
<?php endif; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php else: ?>
      <div id="featured"><img src="<?php echo the_field('article_image'); ?>" alt=""></div><br>
	  <span style="display:block;font-weight:700;"><?php 
remove_filter('acf_the_content', 'wpautop');
echo the_field('image_caption'); 
add_filter('acf_the_content', 'wpautop');?></span>
<br clear="all">
<hr>
<?php endif; ?>
      <div class="col-lg-7 content">
		<?php if(get_field('pdf_file')): ?><span><a href="<?php echo the_field('pdf_file'); ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo the_field('link_text'); ?></a></span><br><br> <?php endif; ?>
        <?php the_content(); ?>
		<?php if(get_field('sidebar_box')): ?><div style="background:#fef200;padding:15px;width:100%;"><?php echo the_field('sidebar_box'); ?></div><?php endif; ?>
   					<?php endwhile; ?>
  				<?php endif; ?>
<?php wp_reset_query(); ?>
        <br>
        </div>
      </div>
    </div>
	<?php get_sidebar(); ?>
  </main>
<?php get_footer(); ?>
<style>

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

</style>
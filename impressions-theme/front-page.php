<?php get_header(); ?>
<div class="ad-space">
<div id='IMP_sliding_billboard'>
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('IMP_sliding_billboard'); });
</script>
</div>
</div>
<!-- <?= get_template_directory_uri(); ?>/img/structural-images/gradient-bg.png -->
  <div id="slider" style="overflow: hidden;">
    <div id="new-royalslider-1" class="royalSlider new-royalslider-1 rsUni rs-default-template">
	 <!-- style="display: block; z-index:10; position: relative;"  -->
  	  <?php if( have_rows('rotator', 'option') ): ?>
		<?php while( have_rows('rotator', 'option') ): the_row(); ?>
      <div class="rsContent">
        <a style="display: block; z-index:10; position: relative;" href="<?php the_sub_field('link'); ?>"><div style="background-image: url('<?= get_template_directory_uri(); ?>/img/structural-images/gradient-bg.png');     height: 100%; position: absolute; width: 100%; background-size: cover;"></div><img class="rsImg" src="<?php the_sub_field('image'); ?>" alt="<h2><a href='<?php the_sub_field('link'); ?>' style='color: inherit; text-decoration:none;font:inherit;'><?php the_sub_field('title'); ?></a> <hr></h2><p>  <a href='<?php the_sub_field('link'); ?>' style='color: inherit; text-decoration:none; font-weight:700;font-size:24px;'><?php the_sub_field('caption'); ?></a></p>"></a>
        </div>
        	<?php endwhile; ?>
  <?php endif; ?> 
    </div>
  </div>
<br>
<hr style="margin-top:5px;">
  <main class="container">
    <div id="content" class="col-lg-9 ">
      <div class="flex-spot ps">
        <h2><a href="<?php bloginfo('siteurl'); ?>/products">Products</a></h2>
        <?php
            $args = array(
            	'posts_per_page' => 1,
            	'post_type' => 'products', 
            );
            $query = new WP_Query( $args );
            $c = 0; 
            while ( $query->have_posts() ) : $query->the_post();
              if($c == 0){ ?>
        <div>
          <span class="product-company"><?php echo the_field('company_name'); ?></span>
          <h3 class="sub-head"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          
		<?php if(get_field('abstract_image') != ''){ ?>
            <a href="<?php echo post_permalink( $ID ); ?>"  class="flex-image"><img src="<?php echo the_field('article_image'); ?>"/></a>
			<?php }else{ ?>
			<a href="<?php echo post_permalink( $ID ); ?>" class="flex-image"><img src="<?php echo the_field('article_image'); ?>"/></a>
			<?php } ?>
          <p class="company-description" style="margin-top:0px;">
            <?php 
            remove_filter('acf_the_content', 'wpautop');
            echo the_field('abstract_text');
            add_filter('acf_the_content', 'wpautop'); ?>
          </p>
          <a href="<?php bloginfo('siteurl'); ?>/products" class="more">MORE PRODUCTS</a>
        </div>
<?php }
              $c++;
          endwhile; ?>
      </div>
      <div class="flex-spot">
        <h2><a href="<?php bloginfo('siteurl'); ?>/news">News</a></h2>
        <div>
          <ul>
 <?php
       
            $args = array(
            	'posts_per_page' => 5,
            	'post_type' => 'news', 
            );
            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post();
      ?>
            <li>
              <span class="news-date"><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?></span>
              <a href="<?php echo post_permalink( $ID ); ?>" class="news-link"><?php the_title(); ?></a>
            </li>
<?php 
          endwhile; ?>
          </ul>
          <a href="<?php bloginfo('siteurl'); ?>/news" class="more">MORE NEWS</a>
        </div>
      </div>
      <div class="flex-spot">
        <h2><a href="<?php bloginfo('siteurl'); ?>/galleries">Galleries</a></h2>
<div>
        <div id="new-royalslider-3" class="royalSlider new-royalslider-3 rsUni rs-image-gallery" style="width:100%;height:454px;;">
          <?php
       
            $args = array(
				'posts_per_page' => 10,
            	'post_type' => 'galleries', 
				'tax_query' => array(
    				'relation' => 'OR',
    				array(
        				'taxonomy' => 'galleries-categories',
        				'field'    => 'name',
        				'terms'    => 'Screen Printing',
    				),
    				array(
        				'taxonomy' => 'galleries-categories',
        				'field'    => 'name',
        				'terms'    => 'Embroidery',
    				),
					array(
        				'taxonomy' => 'galleries-categories',
        				'field'    => 'name',
        				'terms'    => 'Digital Decorating',
    				),
				),
            );
            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post();
      ?>
          <div class="rsContent">
<?php
$rows = get_field('gallery'); // get all the rows
$first_row = $rows[0]; // get the first row
$first_row_image = $first_row['image']; // get the sub field value 

$image = wp_get_attachment_image_src( $first_row_image, 'full' );
?>

<a class="rsImg" href="<?php echo $first_row_image; ?>" data-rsBigImg="<?php echo $first_row_image; ?>">about</a>
            <div>
              <h3 class="sub-head"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
              <?php echo the_field('abtract_text'); ?>
            </div>
            <div class="rsTmb"><img src="<?php echo the_field('abstract_image'); ?>" alt="" /></div>
            <a class="rsLink" href="<?php echo post_permalink( $ID ); ?>">about</a>
          </div>
          <?php 
          endwhile; ?>
        </div>
<br clear="all">
 <a href="<?php bloginfo('siteurl'); ?>/galleries" class="more">MORE GALLERIES</a>
</div>
      </div>
      <div class="flex-spot">
        <h2><a href="<?php bloginfo('siteurl'); ?>/process-techniques/">Techniques</a></h2>
<?php

// wp query
            $args = array(
             'post_type' => array('digital-decorating','screen-printing','embroidery'),
              'posts_per_page' => 1,
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
        <div>
          <a href="<?php echo post_permalink( $ID ); ?>" class="flex-image2"><img src="<?php echo the_field('article_image'); ?>" alt=""></a>
          <h3 class="sub-head"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p style="margin-top:0px;"><?php the_field('abstract_text'); ?></p>
          <a href="<?php bloginfo('siteurl'); ?>/process-techniques/" class="more">More Techniques</a>
        </div>
<?php
	endwhile;
	endif;
?>
      </div>
      <div class="flex-spot">
        <h2><a href="<?php bloginfo('siteurl'); ?>/build-your-business">Build Your Business</a></h2>
 <?php
       
            $args = array(
            	'posts_per_page' => 1,
            	'post_type' => 'build-your-business', 
            );
            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post();
      ?>
        <div>
          <a href="<?php echo post_permalink( $ID ); ?>" class="flex-image2"><img src="<?php echo the_field('article_image'); ?>" alt=""></a>
          <h3 class="sub-head"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p style="margin-top:0px;"><?php the_field('abstract_text'); ?></p>
          <a href="<?php bloginfo('siteurl'); ?>/build-your-business" class="more">More Business</a>
        </div>
<?php 
          endwhile; ?>
      </div>
      <div class="flex-spot">
        <h2><a href="#">Services and Resources</a></h2>
        <div>
          <div class="services">
            <a href="<?php the_field('link_url_l', 'option'); ?>"><img src="<?php the_field('image_l', 'option'); ?>" alt="" style="border:1px solid #000;"></a>
            <h3 class="sub-head"><a href="<?php the_field('link_url_l', 'option'); ?>"><?php the_field('title_l', 'option'); ?></a></h3>
            <p style="margin-top:0px;"><?php the_field('caption_l', 'option'); ?></p>
            <a href="<?php the_field('link_url_l', 'option'); ?>" class="more"><?php the_field('link_text_l', 'option'); ?></a>
          </div>
		  <div class="services">
            <a href="<?php the_field('link_url_m', 'option'); ?>"><img src="<?php the_field('image_m', 'option'); ?>" alt="" style="border:1px solid #000;"></a>
            <h3 class="sub-head"><a href="<?php the_field('link_url_m', 'option'); ?>"><?php the_field('title_m', 'option'); ?></a></h3>
            <p style="margin-top:0px;"><?php the_field('caption_m', 'option'); ?></p>
            <a href="<?php the_field('link_url_m', 'option'); ?>" class="more"><?php the_field('link_text_m', 'option'); ?></a>
          </div>
          <div class="services">
            <a href="<?php the_field('link_url_r', 'option'); ?>"><img src="<?php the_field('image_r', 'option'); ?>" alt="" style="border:1px solid #000;"></a>
            <h3 class="sub-head"><a href="<?php the_field('link_url_r', 'option'); ?>"><?php the_field('title_r', 'option'); ?></a></h3>
            <p style="margin-top:0px;"><?php the_field('caption_r', 'option'); ?></p>
            <a href="<?php the_field('link_url_r', 'option'); ?>" class="more"><?php the_field('link_text_r', 'option'); ?></a>
          </div>
		</div>
      </div>
    </div>
<?php get_sidebar(); ?>
  </main>



<?php get_footer(); ?>
<style>
#new-royalslider-3 img.rsImg {
    width: 600px !important;
    max-height: 340px;
    background: #000;
    border: 1px solid #000;
    height: auto !important;
}

#new-royalslider-3 .rsUni .rsThumbsHor {
    width: 100%;
    height: 96px !important;
}

#new-royalslider-3 .rsUni .rsThumb {
    float: left;
    overflow: hidden;
    width: 96px;
    height: 96px !important;
}

</style>
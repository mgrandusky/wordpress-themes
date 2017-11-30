<?php get_header(); ?>
<main class="container">
  <div id="content" class="col-lg-9">
  	<section> 
			<h1 class="entry-title">Products<hr></h1>
      <br>
      <h2><a href="<?php bloginfo('siteurl'); ?>/products/apparel-printing">Apparel</a></h2>
      <section class="products">
 <?php
       
            $args = array(
            	'posts_per_page' => 3,
            	'post_type' => 'products', 
				'tax_query' => array(
                    array(
                        'taxonomy' => 'products-categories',
                        'field'    => 'name',
                        'terms'    => 'Apparel'
                    ),
                ),
            );
            $query = new WP_Query( $args );
       
            while ( $query->have_posts() ) : $query->the_post();
              ?>
        <article>
          <?php if(get_field('abstract_image')){ ?>
            <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
			<?php }elseif(get_field('article_image')){ ?>
			<a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>" alt=""></a>
			<?php } ?>
          <span><?php the_field('company_name'); ?></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abstract_text'); ?></p>
        </article>
        <?php endwhile; ?>
        <a href="<?php bloginfo('siteurl'); ?>/products/apparel-printing">More Apparel Products</a>
      </section>
      <br> <br>
      <h2><a href="<?php bloginfo('siteurl'); ?>/products/screen-printing/">Screen Printing</a></h2>
      <section class="products">
 <?php
       
            $args = array(
            	'posts_per_page' => 3,
            	'post_type' => 'products', 
				'tax_query' => array(
                    array(
                        'taxonomy' => 'products-categories',
                        'field'    => 'name',
                        'terms'    => 'Screen Printing'
                    ),
                ),
            );
            $query = new WP_Query( $args );
       
            while ( $query->have_posts() ) : $query->the_post();
              ?>
        <article>
        
			<?php if(get_field('abstract_image')){ ?>
            <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
			<?php }elseif(get_field('article_image')){ ?>
			<a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>" alt=""></a>
			<?php } ?>
          <span><?php the_field('company_name'); ?></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abstract_text'); ?></p>
        </article>
        <?php endwhile; ?>
        <a href="<?php bloginfo('siteurl'); ?>/products/screen-printing/">More Screen Printing Products</a>
      </section>
      <br> <br>
      <h2><a href="<?php bloginfo('siteurl'); ?>/products/embroidery/">Embroidery</a></h2>
      <section class="products">
         <?php
       
            $args = array(
            	'posts_per_page' => 3,
            	'post_type' => 'products', 
				'tax_query' => array(
                    array(
                        'taxonomy' => 'products-categories',
                        'field'    => 'name',
                        'terms'    => 'Embroidery'
                    ),
                ),
            );
            $query = new WP_Query( $args );
       
            while ( $query->have_posts() ) : $query->the_post();
              ?>
        <article>
          <?php if(get_field('abstract_image')){ ?>
            <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
			<?php }elseif(get_field('article_image')){ ?>
			<a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>" alt=""></a>
			<?php } ?>
          <span><?php the_field('company_name'); ?></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abstract_text'); ?></p>
        </article>
        <?php endwhile; ?>
        <a href="<?php bloginfo('siteurl'); ?>/products/embroidery/">More Embroidery Products</a>
      </section>
      <br> <br>
      <h2><a href="<?php bloginfo('siteurl'); ?>/products/digital-decorating/">Digital Decorating</a></h2>
      <section class="products">
         <?php
       
            $args = array(
            	'posts_per_page' => 3,
            	'post_type' => 'products', 
				'tax_query' => array(
                    array(
                        'taxonomy' => 'products-categories',
                        'field'    => 'name',
                        'terms'    => 'Digital Decorating'
                    ),
                ),
            );
            $query = new WP_Query( $args );
       
            while ( $query->have_posts() ) : $query->the_post();
              ?>
        <article>
         <?php if(get_field('abstract_image')){ ?>
            <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
			<?php }elseif(get_field('article_image')){ ?>
			<a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>" alt=""></a>
			<?php } ?>
          <span><?php the_field('company_name'); ?></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abstract_text'); ?></p>
        </article>
        <?php endwhile; ?>
        <a href="<?php bloginfo('siteurl'); ?>/products/digital-decorating/">More Digital Decorating Products</a>
      </section>
 	</div>
  <style type="text/css">
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
    }
    .products article > a img{
      max-width: 100%;
	  max-height: 200px;
    }
    .products article h3{
      font-size: 1.5em;
      font-weight: bold;
      color: #000;
    }
    .products article h3 a{
      color:#000;
    }
	.products article h3 a:hover{
      color:#00aeef;
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
      border-bottom: 3px solid ;
    }
    .post-type-archive #content section h2{
      font-size: 1.25em;
      display: block;
      border-bottom: 3px solid #000;
    }

    .post-type-archive #content section h2 a{
font-size: 1.25em;
display: block;
border-bottom: 2px solid #000;
color: #000;
text-decoration: none;
padding-bottom: 5px;

    }

    .post-type-archive #content section h2 a:hover{
      font-size: 1.25em;
      display: block;
      border-bottom: 2px solid #000;
color:#00aeef;
padding-bottom: 5px;
    }

    .products{}
@media screen and (max-width: 800px){
.products article {
    width: 210px;
    margin-bottom: 15px;
}
}
@media screen and (max-width: 460px){
.products article {
    width: 300px;
    margin-bottom: 15px;
}
}
  </style>
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
    $("section#article-list article").slice(0,10).show();
     
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
       
         jQuery("img.lazy").lazy({
             bind: "event",
             effect: "fadeIn",
             effectTime: 600
        })     
            
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
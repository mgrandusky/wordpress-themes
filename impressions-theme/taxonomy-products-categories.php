<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
    	<section> 
        <?php
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        //echo $cat_obj->name . " has id ". $cat_obj->term_id;

        ?>
        <h1 class="entry-title">Products:&nbsp;<?php echo $cat_obj->name; ?><hr></h1> 
<section id="article-list"> 
        <section class="products">

          <?php
          // wp query
          $args = array(
            'post_type' => 'products',
            'posts_per_page' => 200,
            'tax_query' => array(
                array(
                  'taxonomy' => 'products-categories',
                  'field'    => 'name',
                  'terms'    => $cat_obj->name
                ),
              ),
          );
          $get_news = new WP_Query( $args );
          if ($get_news->have_posts()) :
            while ($get_news->have_posts()) : $get_news->the_post(); ?>
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
            <?php endwhile; 
          endif; ?>
</section>
	      <div class="lm-block row">
       				 <input type="button" class="btn-shade learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>  
        </section>
      </section>
   	</div>
  	<?php get_sidebar(); ?>
  </main>
  <style type="text/css">
    .products{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .products .alm-reveal{
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
      color: inherit;
    }
    .products article h3 a:hover{
      color: #00aeef;
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
    @media screen and (min-width: 768px) and (max-width: 1279px) {
      .products article {
        width: calc(100% / 2 - 10px);
        margin-bottom: 15px;
      }
    }
    @media screen and (max-width: 768px) {
      .products article {
        max-width: 100%;
        width: 100%;
        margin-bottom: 15px;
      }
    }
  </style>
<script type="text/javascript"> 
$(document).ready(function() {
 
    // Handler for .ready() called.
var currentIndex = 15;
var numMore = 15;
 
var totalItems = $("section#article-list article").length;
var maxCount = 100;
 
$("section#article-list article").hide();
$("section#article-list article").slice(0,15).show();
 
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
    $("section#article-list article").slice(currentIndex, currentIndex + 15).show();
    currentIndex += 15;
    clickButton();
});
 
});
</script>  
<?php get_footer(); ?>
<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
    	<section> 
  			<h1 class="entry-title">Galleries<hr></h1>
	<section id="article-list">   
        <section class="products">

 <?php
       
            $args = array(
				'posts_per_page' => 200,
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
        <article>
          <a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>" alt=""></a>
          <span class="meta"><i><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'galleries-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'galleries-categories', '', ', ', '' ) ?><?php endif; ?></i></span>
          <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo the_field('abtract_text'); ?></p>
        </article>
        <?php endwhile; ?>

</section>
	      <div class="lm-block row">
       				 <input type="button" class="btn-shade learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>              
  </section>          
  
 	</div>
	<?php get_sidebar(); ?>
  </main>

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
<style type="text/css">
    .products{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .products article{
      max-width: 300px;
      width: calc(100% / 3 - 5px);
      margin-bottom: 15px;
    }
    .post-type-archive-galleries .products article > a:first-of-type{background-color: #000;}
    .products article > a:first-of-type{
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid #000;
      margin-bottom: 10px;
    }
    .products article > a img{
      max-width: 100%;
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
<?php get_footer(); ?>
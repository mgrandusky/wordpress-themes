<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
    	<section> 
  			<h1 class="entry-title"><a href="#" style="color: inherit; font: inherit; text-decoration: none;">Products</a> <hr></h1>
	   
            <?php
       
            $args = array(
            	'posts_per_page' => 200,
            	'post_type' => 'products', 
            );
            $query = new WP_Query( $args );
            $c = 0; 
            while ( $query->have_posts() ) : $query->the_post();
              if($c == 0){ ?>

<article id="featured-article">
          <div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('article_image'); ?>"/></a></div>
          <div>
            <h3><a href="<?php echo post_permalink( $ID ); ?>"  style="color: inherit; font: inherit; text-decoration: none;"><?php the_title(); ?></a></h3>
            <br>
            <span class="meta"><i><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'products-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'products-categories', '', ', ', '' ) ?><?php endif; ?></i></span>
            <p><?php echo the_excerpt(); ?></p>
            <br>
            <a href="<?php echo post_permalink( $ID ); ?>" class="more">Full Story</a>
          </div>
        </article>
            		<div id="articles">
              <?php } else { ?>
<article>
            <div>
              <h3><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h3>
              <span class="meta"><i><?php echo get_the_date(); ?> <?php if (get_the_term_list( $ID, 'products-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'products-categories', '', ', ', '' ) ?><?php endif; ?></i></span>
              <p><?php echo the_excerpt(); ?></p>
              <a href="<?php echo post_permalink( $ID ); ?>" class="more">Full Story</a>
            </div>
			<?php if(get_field('abstract_image') != ''){ ?>
            <div><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo the_field('abstract_image'); ?>"/></a></div>
			<?php }else{ ?>
			
			<?php } ?>
          </article>           
            <?php }
              $c++;
          endwhile; ?>
       		</div>
	      <div class="lm-block row" style="border-top:5px solid #000;">
       		<center><input type="button" class="btn-shade learnmorebtn" id="loadMore" value="Load More"> </center>
   			</div>              
  
 	</div>
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
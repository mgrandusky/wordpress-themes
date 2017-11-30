<?php #var_dump($_GET); ?>
<?php $pageno = (!isset($_GET['pg']) ? 1 : $_GET['pg']); ?>

<?php get_header(); ?>
<script>
$(document).ready(function() {
          $('body').addClass('inner');
        }); 
</script>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <section class="article-head twelve columns row">
        <h1 class="header top"><?php the_title(); ?></h1>

      </section>
      <section class="article-block columns twelve row">	           
        <article> 
          <div class="row">
            <div class="twelve columns right-col">  
              <section>
                <p class="img-fl2"><img src="<?php the_field('picture'); ?>" width="160" height="160"></p>
                <?php the_content(); ?>
                <br clear="all">
                <hr>
                <?php 
                $username = get_field('author'); // this gives us an array of all user data.. 		
                $userID = $username['ID']; 
                ?>

              </section>
              <?php
              endwhile;
              endif;
              ?>
              <section class="row">
              <div class="flex-parent start alignStart twelve row">
              <?php //echo $pageno; ?>
                <?php
                $postTitle = get_the_title(); 
                $args = array(
                  'posts_per_page' => 10,
                  'author'=> $userID, 
                  'post_type' => array('news', 'departments', 'recipes', 'products'), 
                  'paged' => $pageno,
                  'order' => 'DESC'
                );
                // $I = 1;
                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>
                    <article class="twelve row half-tab"> 
                      <?php if(has_post_thumbnail()): ?>
                        <p class="img-fl"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_post_thumbnail( array(236, 158) ); ?></a></p>
                      <?php endif; ?>
                      <div class="media-right med">
                        <p class="date"><?php echo get_the_date(); ?> |
                          <?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?>
                          <?php echo get_the_term_list( $ID, 'departments-categories', '', ', ', '' ) ?>
                          <?php echo get_the_term_list( $ID, 'recipes_custom', '', ', ', '' ) ?>
                          <?php echo get_the_term_list( $ID, 'product_showcase_custom', '', ', ', '' ) ?> 
                        </p>                    
                       <h2 class="article-headline"><a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?><a href="<?php echo post_permalink( $ID ); ?>" class="readmore">Read More</a></p>                    
                      </div>   
                      <hr>
                    </article>

                <?php endwhile; ?>
                <?php } ?>
              </div>       
              </section>
              <section class="next-prev" style="">
              <!-- pagination -->
              <form action="<?= curPageURL() ?>?<?= ($pageno >= 2 ? $pageno + 1 : $pageno + 1); ?>" method="get">
                <input style="display:none;" type="text" name="pg" value="<?= ($pageno >= 2 ? $pageno + 1 : $pageno + 1); ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <input type="submit" value="Previous">
              </form>
              <?php if($pageno != 1){ ?>
                <form action="<?= curPageURL() ?>?<?= ($pageno == 1 ? $pageno : $pageno - 1); ?>" method="get">
                  <input style="display:none;" type="text" name="pg" value="<?= ($pageno == 1 ? $pageno : $pageno - 1); ?>">
                  <input type="submit" value="Next">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </form>
              <?php } ?>
              </section>           
            </div>
          </div>
        </article>
      </section>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<style type="text/css">
  .next-prev{display: flex; justify-content: space-between;}
  .next-prev form i{color: #ED3830; font-weight: bold;}
  .next-prev form input[type=submit]{border: 0; background-color: transparent; color: #ED3830; font-weight: bold;}
  .next-prev form input[type=submit]:hover{border: 0; background-color: transparent; color: #888;}
  .next-prev form:hover > *{color: #888;}
</style>
<?php get_footer(); ?>
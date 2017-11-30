<?php
        /* Template Name: Custom Search */        
        get_header(); ?>             
        <div class="contentarea">
            <div id="content" class="content_right">  
             <div>   
    <h3>Search Products</h3>
    <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
    <input type="text" name="s" placeholder="Search Recipes"/>
    <input type="hidden" name="post_type" value="recipe_customs" /> <!-- // hidden 'products' value -->
    <input type="submit" alt="Search" value="Search" />
  </form>
 </div>
                     <h3>Search Result for : <?php echo "$s"; ?> </h3>       
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
                <div id="post-<?php the_ID(); ?>" class="posts">        
                     <article>        
                    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><h4>        
                    <p><?php the_exerpt(); ?></p>        
                    <p align="right"><a href="<?php the_permalink(); ?>">Read     More</a></p>    
                    <span class="post-meta"> Post By <?php the_author(); ?>    
                     | Date : <?php echo date('j F Y'); ?></span>    

                    </article><!-- #post -->    
                </div>
        <?php endwhile; ?>
    <?php endif; ?>




           </div><!-- content -->    
        </div><!-- contentarea -->   
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
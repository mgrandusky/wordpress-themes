<?php get_header(); ?>

<div style="background-color: #fff;"><h3 class="container p-title">Search Results</h3></div>
    
    <div id="main" class="container">

        <div id="content" class="col-md-8 col-sm-7">
        
            <article class="entry">

			<h1>Search Results</h1> 

            <p class="num-results"><?php search_results_title(); ?></p>

            <div class="search-pagination cf">

		<div class="search-nav clearfix" style="border-top:1px solid #ddd;border-bottom:1px solid #ddd;padding:10px;">

		<div class="pages" style="float:left;">

            		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

            	<div class="sort-by" style="float: right;">

                	Sort By | 

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=relevanse">relevance</a>'; ?> |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">newest</a>'; ?> |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">oldest</a>'; ?>

            	</div>

		</div>

            </div>

            <?php 

            // the loop

            if (have_posts()) : ?>

             <?php while (have_posts()) : the_post(); ?>

                

                

  

                    <a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a>

                    <?php relevanssi_the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="readmore">Read More &raquo;</a><br /><br />

		    

                    

               

            <?php endwhile;

			else :

				?>

				

					<h2>We're Sorry</h2>

					<p>We couldn't find any results to display for your search term. Please try a differnet keyword.</p>

			

				<?php

        endif;

            ?>

		

            <div class="search-nav clearfix" style="border-top:1px solid #ddd;border-bottom:1px solid #ddd;padding:10px;">

                <div class="pages" style="float:left;">

	            <?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

                <div class="sort-by" style="float: right;">
					Sort By | 
                    
					<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=relevanse">relevance</a>'; ?> |

                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">newest</a>'; ?> |

                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">oldest</a>'; ?>

                </div>

            </div>

	

	</article>
          
        </div>

	<div id="sidebar" class="col-md-4 col-sm-5">		

		<?php get_sidebar();  ?>

	</div>

  </div>

  <!-- #main --> 

</div>

<!-- #main-container -->
<?php get_footer(); ?>
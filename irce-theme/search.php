<?php get_header(); ?>

<script>jQuery('body').addClass('search-pg');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

	<h1>Search Results</h1>

            <p class="num-results"><?php search_results_title(); ?></p>

            <div class="search-pagination cf">

		<div class="search-nav clearfix">

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

	   <ul class="search-items">

            <?php 

            // the loop

            if (have_posts()) : ?>

             <?php while (have_posts()) : the_post(); ?>

                

                

  

                    <li><a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a>

                    <?php relevanssi_the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="readmore">Read More &raquo;</a>

		    </li>

                    

               

            <?php endwhile;

			else :

				?>

				

					<li><h2>We're Sorry</h2>

					<p>We couldn't find any results to display for your search term. Please try a differnet keyword.</p></li>

			

				<?php

        endif;

            ?>

		</ul>

            <div class="search-nav clearfix">

                <div class="pages" style="float:left;">

	            <?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

                <div class="sort-by" style="float: right;">

                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=relevanse">relevance</a>'; ?> |

                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">newest</a>'; ?> |

                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">oldest</a>'; ?>

                </div>

            </div>

	

		</section>

</article>

</div>

<script>jQuery('ol.wp-paginate li:first-child').addClass('sp-first');</script>

<aside>			

<?php get_sidebar(); ?>

</aside>

</div>

<?php get_footer(); ?>
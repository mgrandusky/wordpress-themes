<?php get_header(); ?>

<script>jQuery('body').addClass('search');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

	<h1>Search Results</h1>

            <p class="num-results"><?php search_results_title(); ?></p>

            <div class="search-pagination cf">
<div class="sort-by" style="float: right;margin-bottom:10px;">

                	Sort by Relevancy |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">newest</a>'; ?> |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">oldest</a>'; ?>

            	</div>
		<div class="search-nav clearfix">
<style>
.wp-paginate a {
    margin-right: 4px;
	margin-left: 4px;
    text-align: center;
    text-decoration: none;
   background: none !important; 
border: none !important; 
color: #C8382C;
margin-right: 4px;
padding: 0px !important;
text-align: center;
text-decoration: none;
}

.wp-paginate .current {
    margin-right: 4px;
	margin-left: 4px;

    color: #666;
    background: none !important;
    border: none !important; 
    margin-right: 4px;
   padding: 0px !important;

}

.navigation { margin:0 auto; }
</style>
		<div class="pages">

            		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>

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

                <div class="pages">

	            <?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

            </div>

	

		</section>

</article>

</div>

<script>jQuery('ol.wp-paginate li:first-child').addClass('sp-first');</script>

	

<?php get_sidebar(); ?>



</div>

<?php get_footer(); ?>
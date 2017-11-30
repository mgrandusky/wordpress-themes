<?php get_header(); ?>

<script>jQuery('body').addClass('inner search-result');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article id="contentInfo">

        <section>
	<h1 class="header">Search Results</h1>
	<p class="num-results"><?php search_results_title(); ?></p>
      <p class="sort"> Sort by Relevancy &nbsp;|&nbsp;
	<?php if($_REQUEST['order'] == "desc" || $_REQUEST['order'] == ""){ ?>
	<span class="active"><?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc"> Newest</a>'; ?>
	<?php }else{ ?>
	<span><?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc"> Newest</a>'; ?>
	<?php } ?>
	</span>&nbsp;|&nbsp;
	<?php if($_REQUEST['order'] == "asc" || $_REQUEST['order'] == ""){ ?>
	<span class="active"><?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc"> Oldest</a>'; ?></span>
	<?php }else{ ?>
	<span><?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc"> Oldest</a>'; ?></span>
	<?php } ?>

	</p>

  <div class="search-nav clearfix">
      <?php if(function_exists('wp_paginate')){wp_paginate();} ?>
  </div>

           

	   <ul class="search-items">

            <?php 

            // the loop

            if (have_posts()) : ?>

             <?php while (have_posts()) : the_post(); ?>

                

                

  

                    <li><a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a>

                    <?php relevanssi_the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="readmore"><span>View</span> &raquo;</a>

		    </li>

                    

               

            <?php endwhile;

			else :

				?>

				

					<li><h2>We're Sorry</h2>

					<p>We couldn't find any results to display for your search term. Please try a different keyword.</p></li>

			

				<?php

        endif;

            ?>

		</ul>
		<div class="search-nav clearfix">
			 <?php if(function_exists('wp_paginate')){wp_paginate();} ?>
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
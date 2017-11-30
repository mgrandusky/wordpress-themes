<?php get_header(); ?>

<div id="main" class="cf">
    <div id="content" class="cf">
        <div class="entry cf">
			<h2 class="entry-title">Search Results</h2>
            <p><?php search_results_title(); ?></p>
            <div class="search-pagination cf">
			<div class="pages" style="float:left;">
            <?php
             if(function_exists('wp_paginate')){wp_paginate();} ?>
			</div>
            <div class="sort-by" style="float: right;">
                Sort By | 
                <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=relevanse" style="color:#FF5A34;">relevance</a>'; ?>|
                <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc" style="color:#FF5A34;">newest</a>'; ?>|
                <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc" style="color:#FF5A34;">oldest</a>'; ?>
            </div>
            </div>
            <?php 
            // the loop
            if (have_posts()) : ?>
             <?php while (have_posts()) : the_post(); ?>
                
                
                <div class="result">
                    <h2><a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a></h2>
                    <?php relevanssi_the_excerpt(); ?>
                    
                </div>
            <?php endwhile;
			else :
				?>
				<div class="result">
					<h2>We're Sorry</h2>
					<p>We couldn't find any results to display for your search term. Please try a different keyword.</p>
				</div>
				<?php
        endif;
            ?>
            <div class="search-pagination cf">
                <div class="pages" style="float:left;">
	            <?php
	             if(function_exists('wp_paginate')){wp_paginate();} ?>
				</div>
                <div class="sort-by" style="float: right;">
                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=relevanse" style="color:#FF5A34;">relevance</a>'; ?>|
                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc" style="color:#FF5A34;">newest</a>'; ?>|
                    <?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc" style="color:#FF5A34;">oldest</a>'; ?>
                </div>
            </div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
		<article>
			<section  class="col-lg-9" style="margin:0px auto">

	<h1 class="entry-title">Search Results<hr></h1>
        
            <form action="<?php bloginfo('siteurl')?>/?">
              <input id="s" name="s" type="text" class="in-search" value="<?= ($_GET['s'] != "" ? $_GET['s'] : ""); ?>" placeholder=" Search" onBlur="if(this.value == '') this.value = 'Search'" onFocus="if(this.value == 'Search') this.value = ''" style="float:left;width:100%;font-size:18px;height:55px;padding-left:5px;"/>
              <button type="submit" class="btn btn-success" style="float:right;background:#fff;top:-53px;position:relative;right:20px;border:none;height:50px">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
        <br clear="all">
            <p class="num-results"><?php search_results_title(); ?></p>
<div class="sort-by" style="float: right;margin-bottom:10px;">

                	Sort by Relevancy |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">newest</a>'; ?> |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">oldest</a>'; ?>

            	</div>
            <div class="search-pagination cf">

		<div class="pages">

            		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

        <style>
			.search-pagination {
				clear: both;
				border-top: 2px solid #000;
				border-bottom: 1px solid;
				text-align: center;
				margin-bottom: 20px;

			}
			.wp-paginate .current {
    			color: #fff;
    			background: #fff;
    			border: none;
    			margin-right: 4px;
    			padding: 4px 8px;
				border-right: 1px solid #111;
			}
			.wp-paginate a {
    			background: #fff;
    			border: none;
    			color: #02aeef;
    			margin-right: 4px;
    			padding: 4px 8px;
    			text-align: center;
    			text-decoration: none;
    			border-right: 1px solid #111;
			}
			.wp-paginate a:hover, .wp-paginate a:active {
    			background: #fff;
    			color: #02aeef;
			}
			.wp-paginate .next { border-right:none; }
		</style>


            </div>

	   <ul class="search-items" style="list-style: none;">

            <?php 

            // the loop

            if (have_posts()) : ?>

             <?php while (have_posts()) : the_post(); ?>

                

                

  

                    <li style="margin-bottom: 20px;"><strong><a href="<?php the_permalink(); ?>" style="font-size:24px;color:#000;text-decoration:none;"><?php relevanssi_the_title(); ?></a></strong><br>
					<span class="meta"><i><?php echo get_the_date(); ?> 
					<?php if (get_the_term_list( $ID, 'news-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'news-categories', '', ', ', '' ) ?><?php endif; ?>
					<?php if (get_the_term_list( $ID, 'screen-printing-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'screen-printing-categories', '', ', ', '' ) ?><?php endif; ?>
					<?php if (get_the_term_list( $ID, 'embroidery-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'embroidery-categories', '', ', ', '' ) ?><?php endif; ?>
					<?php if (get_the_term_list( $ID, 'digital-decorating-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'digital-decorating-categories', '', ', ', '' ) ?><?php endif; ?>
					<?php if (get_the_term_list( $ID, 'products-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'products-categories', '', ', ', '' ) ?><?php endif; ?>
					<?php if (get_the_term_list( $ID, 'galleries-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'galleries-categories', '', ', ', '' ) ?><?php endif; ?>
					<?php if (get_the_term_list( $ID, 'build-your-business-categories', '', ', ', '' )): ?>| <?php echo get_the_term_list( $ID, 'build-your-business-categories', '', ', ', '' ) ?><?php endif; ?>
					</i></span>
                    <?php relevanssi_the_excerpt(); ?><br><a href="<?php the_permalink(); ?>" class="readmore">FULL STORY</a><br clear="all">

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

             <div class="search-pagination-bottom cf">
		<div class="pages">

            		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

        <style>
			.search-pagination-bottom {
				clear: both;
				border-bottom: 2px solid #000;
				border-top: 1px solid;
				text-align: center;
				margin-bottom: 20px;

			}
			.wp-paginate .current {
    			color: #fff;
    			background: #fff;
    			border: none;
    			margin-right: 4px;
    			padding: 4px 8px;
				border-right: 1px solid #111;
			}
			.wp-paginate a {
    			background: #fff;
    			border: none;
    			color: #02aeef;
    			margin-right: 4px;
    			padding: 4px 8px;
    			text-align: center;
    			text-decoration: none;
    			border-right: 1px solid #111;
			}
			.wp-paginate a:hover, .wp-paginate a:active {
    			background: #fff;
    			color: #02aeef;
			}
			.wp-paginate .next { border-right:none; }

			ul.search-items li p { margin-top:0px !important; }
		</style>

            </div>

	

			</section>
		</article>
 	</div>
	<?php get_sidebar(); ?>
  </main>
<?php get_footer(); ?>
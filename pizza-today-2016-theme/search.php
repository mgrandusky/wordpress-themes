<?php get_header(); ?>

<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
      <section>
        <h1 class="header top row">Search</h1>
        <section class="search-box twelve">
          <form role="search" method="get" id="searchpage" class="searchform cf" action="<?php bloginfo('siteurl'); ?>/">
            <fieldset>
              <!-- <input class="in-search" id="s" name="s" onblur="if(this.value == '') this.value = 'Search'" onfocus="if(this.value == 'Search') this.value = ''" value="<?php echo $_GET['s']; ?>" type="text"> -->
              <input class="in-search" id="s" name="s" placeholder='Search' value="<?php echo $_GET['s']; ?>" type="text">

              <input class="btn btn-shade" id="searchsubmit" value="Search" type="submit">
<?php if (isset($_GET['post_type'])) { ?>

    <br><br><input id="type" name="post_type[]" value="recipes" type="checkbox" checked> Search Only Recipes
<?php } else { ?>

   <br><br><input id="type" name="post_type" value="recipes" type="checkbox"> Search Only Recipes
<?php } ?>

            </fieldset>
          </form>
        </section>
        <section class="ten columns row">
          <p class="num-results"><?php search_results_title(); ?></p>
          <div class="search-nav clearfix">

        		<div class="pages" style="float:left;">
          		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>
        		</div>
          	<div class="sort-by" style="float: right;margin-top:10px;">
              	Sort By | 
              	 <a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=relevanse" <?php if ($_GET['orderby'] == "relevanse") { ?> style="color:#ED3830;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>relevance</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=desc" <?php if ($_GET['order'] == "desc") { ?> style="color:#ED3830;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>newest</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=asc" <?php if ($_GET['order'] == "asc") { ?> style="color:#ED3830;font-weight:600;" <?php }else{ ?> style="color:#111;font-weight:400;" <?php }  ?>>oldest</a>
          	</div>
      		</div>
<?php

function custom_field_excerpt() {
	global $post;
	$text = get_field('content'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 40; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
function custom_field_excerpt2() {
	global $post;
	$text = get_field('article_content'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 40; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
?>
	<script>$('ol.wp-paginate li:first-child').addClass('sp-first');</script>
  <ul class="search-items">
		<?php 
            // the loop
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a><br>
<?php if (isset($_GET['post_type'])) { ?>

    
<?php } else { ?>

   <?php echo get_the_date(); ?> -
<?php } ?>
		 
                    <?php if(get_field('abstract_text')){ the_field('abstract_text') ; } ?>
		    <?php if(get_field('content')){ echo custom_field_excerpt(); ; } ?>
		    <?php if(get_field('article_content')){ echo custom_field_excerpt2(); ; } ?>
		    <?php if(the_excerpt()){ the_excerpt() ; } ?>	
		    <br><a href="<?php the_permalink(); ?>" class="readmore">Read More &raquo;</a>

		    </li>
        <?php endwhile;
			else : ?>
					<li><h2>We're Sorry</h2>
					<p>We couldn't find any results to display for your search term. Please try a differnet keyword.</p></li>
				<?php endif; ?>
          </ul>
          <div class="search-nav clearfix">
        		<div class="pages" style="float:left;">
          		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>
        		</div>
          	<div class="sort-by" style="float: right;margin-top:10px;">
            	Sort By | 
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=relevance" <?php if (isset($_GET['orderby']) == "relevanse") { ?> style="color:#ED3830;font-weight:600;" <?php }else{ } ?>>relevance</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=desc" <?php if (isset($_GET['order']) == "desc") { ?> style="color:#ED3830;font-weight:600;" <?php }else{ }  ?>>newest</a> |
              	<a href="<?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?><?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>&orderby=post_date&order=asc" <?php if (isset($_GET['order']) == "asc") { ?> style="color:#ED3830;font-weight:600;" <?php }else{ }  ?>>oldest</a>
          	</div>
      		</div>
        	
          <script type="text/javascript">
            $('ol.wp-paginate li:first-child').addClass('sp-first');
            $(document).ready(function(){
              // if($('#type').prop('checked') == true){}
              $('#type').change(function(){
                $('#searchpage').submit();
              })
            });
          </script>
        </section>
      </section>
    </div>
  </div>
<?php get_sidebar(); ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<?php get_footer(); ?>
<p style="display: none;">

  <?php bloginfo('siteurl'); ?>/?s=<?php the_search_query(); ?>
<?php # ( strpos( $_GET['orderby'], 'relevanse' ) == true ? "&orderby=relevanse" ); ?>
<?php # ( strpos( $_GET['orderby'], 'post_date' ) == true ? "&orderby=post_date" ); ?>
<?php # ( strpos( $_GET['orderby'], 'post_date' ) == true ? "&orderby=post_date" ); ?>
<?= ( isset( $_GET['post_type']) == true ? "&post_type=recipes" : "" ); ?>
</p>
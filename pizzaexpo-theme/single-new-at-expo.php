<?php

/*

Template Name Posts: New at Expo

*/

?>
<?php get_header(); ?>

<div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>

<div id="main" class="container">
    <?php if (have_posts()) : ?>
    <div id="content" class="col-md-8 col-sm-7">
        <?php 
        if ( has_post_thumbnail() ) : 
            the_post_thumbnail(); 
        endif;
        ?>
        <article class="entry">
      	
        
            <?php while (have_posts()) : the_post(); 
    			// check if the repeater field has rows of data
				if( have_rows('news_section') ):

 				// loop through the rows of data
$count = 0;
    			while ( have_rows('news_section') ) : the_row();

        		// display a sub field value
        		
if($count % 2 == 0) { 
//even
?>
<div style="width:100%;background:#fff;"><?php the_sub_field('content'); ?></div>
<?php
}else{ 
//odd 
?>
<div style="width:100%;background:#f5f5f5;padding:5px;"><?php the_sub_field('content'); ?></div>
<?php
}
$count++;
    			endwhile;

			

			endif;
    		endwhile; 
		endif; ?>

   

      </article>

    </div>

    <div id="sidebar" class="col-md-4 col-sm-5">		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
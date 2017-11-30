<?php

/*

Template Name Posts: Spon Opp

*/

?>
<?php get_header(); ?>

    <div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
    
    <div id="main" class="container">

        <div id="content" class="col-md-8 col-sm-7">
        
            <article class="entry">

				<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
                
                <?php echo the_field('header'); ?>	
                
				<hr>
				<?php $args = array( 'post_type' => 'spon-opp', 'posts_per_page' => 100);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php if(get_field('image')): ?><img src="<?php echo the_field('image'); ?>" style="float:right;padding-left:20px;" /><?php endif; ?><h2><?php the_title(); ?></h2>

				  <?php echo the_field('content'); ?>

		        <hr>

			     <?php endwhile; ?>
                 
                <h2>To purchase a sponsorship:</h2>

                Companies A – M contact Bobbie MacIntosh at <a href="mailto:bmacintosh@pizzatoday.com">bmacintosh@pizzatoday.com</a> or (502) 736-9515<br>
Companies N – Z contact Stacie Dennison at <a href="mailto:sdennison@pizzatoday.com">sdennison@pizzatoday.com</a> or (502) 736-9508
                
                
				
			     <?php endwhile; ?>
   				<?php endif; ?>
                
	      </article>

	    </div>





	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>

</div>

<?php get_footer(); ?>
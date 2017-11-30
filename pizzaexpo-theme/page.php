<?php get_header(); ?>
<div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
<div id="main" class="container">
    <div id="content" class="col-md-8 col-sm-7">
      <article class="entry">
          	<?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
	      </article>
	    </div>
	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
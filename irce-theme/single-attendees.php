<?php get_header(); ?>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

				

			<?php endwhile; ?>

			<?php endif; ?>

			</section>

	      </article>

	    </div>





	    <aside>			

			<?php get_sidebar(); ?>

		</aside>

</div>

<?php get_footer(); ?>
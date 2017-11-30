<script>jQuery('body').addClass('contact-us');</script>
<?php get_header(); ?>
<script>jQuery('body').addClass('inner');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>



				

						<h1 class="header"><?php the_title(); ?></h1>

						<?php the_content(); ?>

		



					



						<?php endwhile; ?>



						<?php endif; ?>

			</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>

</div>
</div>
</div>
<?php get_footer(); ?>
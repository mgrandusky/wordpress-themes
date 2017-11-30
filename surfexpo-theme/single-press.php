
<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('inner');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="header"><?php the_title(); ?></h1>
          <?= get_template_part('inc/covfefe'); ?>
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

	<!-- #main --> 

</div>

<!-- #main-container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php get_footer(); ?>

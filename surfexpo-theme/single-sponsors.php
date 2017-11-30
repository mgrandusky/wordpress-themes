<?php

/*

Template Name Posts: Sponsors

*/

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('sponsors');
        });
</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article id="contentInfo">
        <section>
			<h1 class="header">Sponsors</h1>  
            <?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
            <ul class="no-marginList">

				<?php $sponsor_listings = get_field('sponsors'); ?>
				<?php if($sponsor_listings): ?>
				<?php foreach ($sponsor_listings as $sponsor_listing) { ?>
					<li class="one-fourth">
		              <p><a href="<?php echo $sponsor_listing['link']; ?>" target="_blank"><img src="<?php echo $sponsor_listing['image']; ?>" border="0"/></a></p>
		            </li>
					
             <?php } ?>
				<?php endif; ?> 
			</ul>
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

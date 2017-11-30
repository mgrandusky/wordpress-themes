<?php

/*

Template Name Posts: Sponsors & Partners

*/

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('contact-us');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
						
								<h1 class="header"><?php the_title(); ?></h1>
								<h2>Show Sponsors</h2>
								<?php $sponsor_images = get_field('show_sponsors'); ?>
								<?php if($sponsor_images): ?>
								<?php foreach ($sponsor_images as $sponsor_image) 
									{ ?>
										<div style="float: left;margin-bottom:10px;margin-right:10px;border: 1px solid #959599;width:223px; height:140px;">
										<a href="<?php echo $sponsor_image['link']; ?>" style="display:block;background:url('<?php echo $sponsor_image['image']; ?>') no-repeat center center;height:140px; width:220px;overflow:hidden;" target="_blank">
											
										</a></div>
										<?php 
									} ?>
								<?php endif; ?>
								
								<div style="padding-top:20px;border-bottom:3px solid #000;clear:both;"></div>
								<h2>Partners</h2>
								<?php $partner_images = get_field('partners'); ?>
								<?php if($partner_images): ?>
								<?php foreach ($partner_images as $partner_image) 
									{ ?>
										<div style="float: left;margin-bottom:10px;margin-right:10px;border: 1px solid #959599;width:223px; height:140px;">
										<a href="<?php echo $partner_image['link']; ?>" style="display:block;background:url('<?php echo $partner_image['image']; ?>') no-repeat center center;height:140px; width:220px;" target="_blank">
											
										</a></div>
										<?php 
									} ?>
								<?php endif; ?>
								
						<?php endwhile; ?>

			<?php endif; ?>

			</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>


</div>

<?php get_footer(); ?>
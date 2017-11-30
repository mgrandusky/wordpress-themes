<?php
/*
Template Name Posts: Sponsors & Partners
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('sponsors-partners');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          <h1>Sponsors & Partners</h1>
		
	       	<h2 class="cs" style="margin-bottom: 10px;">Conference Sponsor</h4>
		
			<?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Conference Sponsor"): ?>
					<script> jQuery(".cs").show();</script>
					<div class="media-section">
				   <?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
		
	       	<h2 class="dd" style="margin-bottom: 10px;">Diamond Sponsors</h4>
		
			<?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Diamond Sponsors"): ?>
					<script> jQuery(".ds").show();</script>
					<div class="media-section">
				   <?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
			<h2 class="ps" style="margin-bottom: 10px;display:none;">Platinum Sponsors</h2>
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Platinum Sponsors"): ?>
					<script> jQuery(".ps").show();</script>
					<div class="media-section">
<?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
			<h2 class="gs" style="display:none;margin-bottom: 10px;">Gold Sponsors</h2>
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Gold Sponsors"): ?>
					<script> jQuery(".gs").show();</script>
					<div class="media-section">
<?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
		
	       	<h2 class="ss" style="display:none;margin-bottom: 10px;">Silver Sponsors</h2>
		
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php if(get_field('group') == "Silver Sponsors"): ?>
<script> jQuery(".ss").show();</script>
					<div class="media-section">
<?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
			<h4 class="opms" style="display:none;margin-bottom: 10px;">Official Publication and Media Sponsors</h4>
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Official Publication and Media Sponsors"): ?>
					<script> jQuery(".opms").show();</script>
					<div class="media-section">

			          <?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
			<h2 class="ms" style="display:none;margin-bottom: 10px;">Media Sponsors</h2>
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Media Sponsors"): ?>
					<script> jQuery(".ms").show();</script>
					<div class="media-section">

			           <?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
			<h2 class="mp" style="display:none;margin-bottom: 10px;">Marketing Partners</h2>
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Marketing Partners"): ?>
					<script> jQuery(".mp").show();</script>
					<div class="media-section">

			           <?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>
<h2 class="ap" style="display:none;margin-bottom: 10px;">Association Partner</h2>
	        <?php $args = array( 'post_type' => 'sponsors-partners', 'posts_per_page' => 100);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php if(get_field('group') == "Association Partner"): ?>
					<script> jQuery(".ap").show();</script>
					<div class="media-section">

			           <?php if(get_field('website')): ?>
			           <a href="<?php echo the_field('website'); ?>" target="_blank"><img src="<?php echo the_field('logo'); ?>"/></a>
				    <? else: ?>
				   <img src="<?php echo the_field('logo'); ?>"/>
				   <?php endif; ?>
			           <p><?php echo the_field('about'); ?></p>

			          <p class="booth-number"><?php if(get_field('booth_id')): ?>Booth #<?php echo the_field('booth_id'); ?><?php endif; ?> <?php if(get_field('url_text')): ?>| <a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('url_text'); ?></a><?php endif; ?></p>
			          </div>
			<?php endif; ?>
			<?php endwhile; ?>



		</section>
	  </article>
    </div>
	<aside>			
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php get_footer(); ?>
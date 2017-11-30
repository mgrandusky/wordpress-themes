<?php
/*
Template Name Posts: Pricing
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('home');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
         	<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
         
          <p class="pricing-doc pdf-icon"><a href="<?php echo the_field('pricing_pdf'); ?>" target="_blank">Download a PDF version of this pricing table</a></p>
          
          <table class="rwd-table clearfix">
            <tr>
              <th><?php echo the_field('title'); ?></th>
              <th class="col2-title" valign="top"><p class="tableheader">Early Bird<br/><span>(<?php echo the_field('early_bird_dates'); ?>)</span></p></th>
              <th class="col3-title" valign="top"><p class="tableheader">Pre-Show<br/><span>(<?php echo the_field('pre-show_dates'); ?>)</span></p></th>
              <th class="col4-title" valign="top"><p class="tableheader">On-Site <br/><span>(<?php echo the_field('on-site_dates'); ?>)</span></p></th>
            </tr>
           <tr>
              <td><p><strong><?php echo the_field('event_title'); ?></strong></p></td>
              <td><span class="sm-col2-title"></span><span class="price"><?php echo the_field('eary_bird_cost'); ?></span></td>
              <td><span class="sm-col3-title"></span><span class="price"><?php echo the_field('pre_show_cost'); ?></span></td>
              <td><span class="sm-col4-title"></span><span class="price"><?php echo the_field('on-site_cost'); ?></span></td>
            </tr>
            <tr class="row-desc">
            <td colspan="4"><?php echo the_field('description'); ?></td>
            </tr>
           	<tr>
	              <td><p><strong><?php echo the_field('event_title2'); ?></strong></p></td>
	              <td><span class="sm-col2-title"></span><span class="price"><?php echo the_field('eary_bird_cost2'); ?></span></td>
	              <td><span class="sm-col3-title"></span><span class="price"><?php echo the_field('pre_show_cost2'); ?></span></td>
	              <td><span class="sm-col4-title"></span><span class="price"><?php echo the_field('on-site_cost2'); ?></span></td>
	            </tr>
	            <tr class="row-desc">
	            <td colspan="4"><?php echo the_field('description2'); ?></td>
	            </tr>           
            
           		<tr>
		              <td><p><strong><?php echo the_field('event_title3'); ?></strong></p></td>
		              <td><span class="sm-col2-title"></span><span class="price"><?php echo the_field('eary_bird_cost3'); ?></span></td>
		              <td><span class="sm-col3-title"></span><span class="price"><?php echo the_field('pre_show_cost3'); ?></span></td>
		              <td><span class="sm-col4-title"></span><span class="price"><?php echo the_field('on-site_cost3'); ?></span></td>
		            </tr>
		            <tr class="row-desc">
		            <td colspan="4"><?php echo the_field('description3'); ?></td>
		            </tr>

					<tr>
			              <td><p><strong><?php echo the_field('event_title4'); ?></strong></p></td>
			              <td><span class="sm-col2-title"></span><span class="price"><?php echo the_field('eary_bird_cost4'); ?></span></td>
			              <td><span class="sm-col3-title"></span><span class="price"><?php echo the_field('pre_show_cost4'); ?></span></td>
			              <td><span class="sm-col4-title"></span><span class="price"><?php echo the_field('on-site_cost4'); ?></span></td>
			            </tr>
			            <tr class="row-desc">
			            <td colspan="4"><?php echo the_field('description4'); ?></td>
			            </tr>

						<tr>
				              <td><p><strong><?php echo the_field('event_title5'); ?></strong></p></td>
				              <td><span class="sm-col2-title"></span><span class="price"><?php echo the_field('eary_bird_cost5'); ?></span></td>
				              <td><span class="sm-col3-title"></span><span class="price"><?php echo the_field('pre_show_cost5'); ?></span></td>
				              <td><span class="sm-col4-title"></span><span class="price"><?php echo the_field('on-site_cost5'); ?></span></td>
				            </tr>
				            <tr class="row-desc">
				            <td colspan="4"><?php echo the_field('description5'); ?></td>
				            </tr> 
            
            
							<tr>
					              <td><p><strong><?php echo the_field('event_title6'); ?></strong></p></td>
					              <td><span class="sm-col2-title"></span><span class="price"><?php echo the_field('eary_bird_cost6'); ?></span></td>
					              <td><span class="sm-col3-title"></span><span class="price"><?php echo the_field('pre_show_cost6'); ?></span></td>
					              <td><span class="sm-col4-title"></span><span class="price"><?php echo the_field('on-site_cost6'); ?></span></td>
					            </tr>
					            <tr class="row-desc">
					            <td colspan="4"><?php echo the_field('description6'); ?></td>
					            </tr>             
                     
          </table>         
		  <?php echo the_field('cancelation_policy'); ?>        


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
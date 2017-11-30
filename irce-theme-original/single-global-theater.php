<?php
/*
Template Name Posts: Global Theater
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('global-theater');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          <h1>Global Theater</h1>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
	          
           <h2><?php echo the_field('title'); ?></h2>
           <p><?php echo the_field('content'); ?></p>
           <div class="sponsor-block clearfix">
           <h2>Sponsors</h2>
           <div class="sponsor-list">
                  <p><a href="<?php echo the_field('sponsor_url1'); ?>">   
                    <img src="<?php echo the_field('sponsor_1'); ?>" border="0">
                  </a></p>
		    </div>
           	<div class="sponsor-list">
	              <p><a href="<?php echo the_field('sponsor_url2'); ?>">   
	              <img src="<?php echo the_field('sponsor_2'); ?>" border="0">
	              </a></p>
			</div>
           	<div class="sponsor-list">
		          <p><a href="<?php echo the_field('sponsor_url3'); ?>">   
		          <img src="<?php echo the_field('sponsor_3'); ?>" border="0">
		          </a></p>
			</div>
           	<div class="sponsor-list">
			      <p><a href="<?php echo the_field('sponsor_url4'); ?>">   
			      <img src="<?php echo the_field('sponsor_4'); ?>" border="0">
			       </a></p>
			</div>
            </div>                
           
		
        <div class="cal-section">
        	<hr class="border-med">
            <table class="gt-table-date">
            <tr><td><p><?php echo the_field('date'); ?></p></td></tr>
		    </table>
            <div class="gt-session"><p><?php echo the_field('morning_session_title'); ?></p></div>
            
          <table class="gt-table">
			
            <tr>
              <th><strong>Time</strong></th>
              <th valign="top"><strong>Description</strong></th>
            </tr>
			<?php if(get_field('time1')): ?>
           <tr>
              <td><?php echo the_field('time1'); ?></td>
              <td><?php echo the_field('desciption1'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time2')): ?>
           <tr>
              <td><?php echo the_field('time2'); ?></td>
              <td><?php echo the_field('desciption2'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time3')): ?>
           <tr>
              <td><?php echo the_field('time3'); ?></td>
              <td><?php echo the_field('desciption3'); ?></td>
           </tr>
           <?php endif; ?>
			<?php if(get_field('time4')): ?>
           <tr>
              <td><?php echo the_field('time4'); ?></td>
              <td><?php echo the_field('desciption4'); ?></td>
           </tr>
           <?php endif; ?>
          </table>
             
		  <div class="gt-session"><p>Afternoon Sessions – <em>Presented by eShow</em></p></div>
            
          <table class="gt-table">
            <tr>
              <th><strong>Time</strong></th>
              <th valign="top"><strong>Description</strong></th>
            </tr>
           	<?php if(get_field('time5')): ?>
           <tr>
              <td><?php echo the_field('time5'); ?></td>
              <td><?php echo the_field('desciption5'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time6')): ?>
           <tr>
              <td><?php echo the_field('time6'); ?></td>
              <td><?php echo the_field('desciption6'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time7')): ?>
           <tr>
              <td><?php echo the_field('time7'); ?></td>
              <td><?php echo the_field('desciption7'); ?></td>
           </tr>
           <?php endif; ?>
			<?php if(get_field('time8')): ?>
           <tr>
              <td><?php echo the_field('time8'); ?></td>
              <td><?php echo the_field('desciption8'); ?></td>
           </tr>
           <?php endif; ?>
          </table>                   

         </div>
         
 <div class="cal-section">
        	<hr style="border-color:#000; margin:0px;height:0px;border-width:2px 0 0;">
            <table>
            <tr><td style="border-top:7px solid #000; "><p style="color:#0073de;font-size:24px;line-height:100%;margin-top:10px;"><?php echo the_field('date2'); ?></p></td></tr>
		    </table>
			<div class="gt-session"><p><?php echo the_field('morning_session_title2'); ?></p></div>
            
          <table class="gt-table">
            <tr>
              <th><strong>Time</strong></th>
              <th valign="top"><strong>Description</strong></th>
            </tr>
           	<?php if(get_field('time9')): ?>
           <tr>
              <td><?php echo the_field('time9'); ?></td>
              <td><?php echo the_field('desciption9'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time10')): ?>
           <tr>
              <td><?php echo the_field('time10'); ?></td>
              <td><?php echo the_field('desciption10'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time11')): ?>
           <tr>
              <td><?php echo the_field('time11'); ?></td>
              <td><?php echo the_field('desciption11'); ?></td>
           </tr>
           <?php endif; ?>
			<?php if(get_field('time8')): ?>
           <tr>
              <td><?php echo the_field('time12'); ?></td>
              <td><?php echo the_field('desciption12'); ?></td>
           </tr>
           <?php endif; ?>
          </table>
             
		  <div class="gt-session"><p><?php echo the_field('afternoon_session_title2'); ?></p></div>
            
          <table class="gt-table">
            <tr>
              <th><strong>Time</strong></th>
              <th valign="top"><strong>Description</strong></th>
            </tr>
           	<?php if(get_field('time13')): ?>
           <tr>
              <td><?php echo the_field('time13'); ?></td>
              <td><?php echo the_field('desciption13'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time14')): ?>
           <tr>
              <td><?php echo the_field('time14'); ?></td>
              <td><?php echo the_field('desciption14'); ?></td>
           </tr>
			<?php endif; ?>
			<?php if(get_field('time15')): ?>
           <tr>
              <td><?php echo the_field('time15'); ?></td>
              <td><?php echo the_field('desciption15'); ?></td>
           </tr>
           <?php endif; ?>
			<?php if(get_field('time16')): ?>
           <tr>
              <td><?php echo the_field('time16'); ?></td>
              <td><?php echo the_field('desciption16'); ?></td>
           </tr>
           <?php endif; ?>
          </table>                   
         </div>         
		

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
<?php get_footer(); ?>
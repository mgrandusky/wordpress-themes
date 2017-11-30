<?php

/*

Template Name Posts: Contact Us

*/

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('contact-us');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

      <article>

        <section>

          <h1>Contact Us</h1>





		  <div class="left-col">

          <?php echo the_field('content_area'); ?>

          </div>

          

          <div class="form-box">

 		 <?php echo do_shortcode( '[gravityform id="1" title="false"]' ); ?><a class="privacy" href="../../privacy-policy">Privacy Policy</a> 

		  </div>

			<div class="contact-row">

            <?php if(get_field('cs_contact1')): ?>

           <?php echo the_field('cs_contact1'); ?>

           <?php endif; ?>

			<?php if(get_field('cs_contact2')): ?>

	        <?php echo the_field('cs_contact2'); ?>

           <?php endif; ?>

		   <?php if(get_field('cs_contact3')): ?>

           <?php echo the_field('cs_contact3'); ?>

           <?php endif; ?>

			</div> 

           <div class="contact-row">

           <h2>Exhibition Sales</h2>  

           <?php if(get_field('contact1')): ?>

           <?php echo the_field('contact1'); ?>

           <?php endif; ?>

           <?php if(get_field('contact2')): ?>

           <?php echo the_field('contact2'); ?>

           <?php endif; ?>

		   <?php if(get_field('contact3')): ?>

           <?php echo the_field('contact3'); ?>

           <?php endif; ?> 

           <?php if(get_field('contact4')): ?>

           <?php echo the_field('contact4'); ?>

           <?php endif; ?>

           <?php if(get_field('contact5')): ?>

           <?php echo the_field('contact5'); ?>

           <?php endif; ?>

           <?php if(get_field('contact6')): ?>

           <?php echo the_field('contact6'); ?>

           <?php endif; ?>

           </div> 





           <div class="contact-row">

           <h2>Marketing & Public Relations</h2>           

		   <?php if(get_field('contact7')): ?>

	       <?php echo the_field('contact7'); ?>

	       <?php endif; ?>



		   <?php if(get_field('contact8')): ?>

	       <?php echo the_field('contact8'); ?>

	       <?php endif; ?>



		   <?php if(get_field('contact9')): ?>

	       <?php echo the_field('contact9'); ?>

	       <?php endif; ?>         

           </div> 

           

           <div class="contact-row">

           <h2>Conference & Agenda</h2>           

	       <?php if(get_field('contact10')): ?>

           <?php echo the_field('contact10'); ?>

           <?php endif; ?>



	       <?php if(get_field('contact11')): ?>

           <?php echo the_field('contact11'); ?>

           <?php endif; ?>



	       <?php if(get_field('contact12')): ?>

           <?php echo the_field('contact12'); ?>

           <?php endif; ?>         

           </div>      

           

           

           <div class="contact-row">

           	   <div class="bottom">

		           <h2>Exhibitor Services</h2>           

    		       <?php if(get_field('contact13')): ?>

		           <?php echo the_field('contact13'); ?>

		           <?php endif; ?>

	           </div>                                      

           

    	       <div class="bottom">           

	        	   <h2>Accounts Payable</h2>           

	    	       <?php if(get_field('contact14')): ?>

		           <?php echo the_field('contact14'); ?>

		           <?php endif; ?>

               </div>

            

	           <div class="bottom">           

		           <h2>Show Management</h2>           

        		   <?php if(get_field('contact15')): ?>

		           <?php echo the_field('contact15'); ?>

		           <?php endif; ?>

        	   </div>

           

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
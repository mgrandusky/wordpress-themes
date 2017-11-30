<?php get_header(); ?>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>



				
						<?php if ( is_single('welcome')) {  ?>
						<h1><?php the_title(); ?></h1>


						<?php }else{ ?>
							<h1>Exhibitor Portal<span style="float:right;font-size:15px;"><a href="http://www.irce.com/exhibitor-portal/welcome"><b>« Back to Portal</b></a></span></h1>
							<h2><?php the_title(); ?></h2>
							<div class="share clearfix">

											                    <span class='st_email_custom' displayText='Email'></span>

											                    <span style="cursor:pointer;" class="print" onclick="javascript:window.print()"></span>

											               </div>
						<?php } ?>
						
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
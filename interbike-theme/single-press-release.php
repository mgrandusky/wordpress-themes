<?php get_header(); ?>

<script>jQuery('body').addClass('press-release-article');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

					<h1 class="header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>media/press-releases">Press Releases</a></h1>

                    <?php 

                    if ( have_posts() ) {

                        while ( have_posts() ) {

                            the_post(); 

                            //

                            ?>

                            <h4><?php the_title(); ?></h4>

							<div class="share clearfix">

				               		<span class='st_facebook_custom' displayText='Facebook'></span>

				                    <span class='st_twitter_custom' displayText='Tweet'></span>

				                    <span class='st_email_custom' displayText='Email'></span>

				                    <span class="print" onclick="javascript:window.print()">Print</span>

				               </div>

				<div class="open-text">
				<?php the_date('m/d/Y'); ?><br><br>
				- <?php the_field('subtitle'); ?> -
                            <?php
				
                            // Post Content here

                            the_content();

				?>

				</div>

                           <?php

                        } // end while

                    } // end if

                    ?>

                			</section>

					      </article>

					    </div>


						      <?php get_sidebar(); ?>


						  </div>

						  <!-- #main --> 

						</div>

						<!-- #main-container -->

					<?php get_footer(); ?>
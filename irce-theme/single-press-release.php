<?php get_header(); ?>

<script>jQuery('body').addClass('press-release-article');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>press/press-releases">Press Releases</a></h1>

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

				                    <span class='st_linkedin_custom' displayText='LinkedIn'></span>

				                    <span class='st_email_custom' displayText='Email'></span>

				                  
						    <span style="cursor:pointer;" class="print" onclick="javascript:window.print()"></span>
				               </div>

				<div class="open-text">

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



						 <aside> 

						      <?php get_sidebar(); ?>

						    </aside>

						  </div>

						  <!-- #main --> 

						</div>

						<!-- #main-container -->

					<?php get_footer(); ?>
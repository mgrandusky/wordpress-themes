<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                <div class="entry press cf">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>press/press-releases" style="color:#c7c8ca;font-weight:bold;font-size:24px;text-decoration:none;">Press Releases</a>
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
							<div class="sharethis">
				               
								<span style="cursor:pointer;" class='fb st_facebook_custom' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
				                <span style="cursor:pointer;" class='tw st_twitter_custom'  st_via="USAntiqueShows" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
			
				                <span style="cursor:pointer;" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='em st_email_custom'></span>
				                <span style="cursor:pointer;" class="pr" onclick="javascript:window.print()"></span>
				            </div>
				            <hr>
                            <?php
                            // Post Content here
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </section>
<?php get_footer(); ?>
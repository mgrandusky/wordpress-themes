<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                 <article class="hentry press-release">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>press/press-releases"><h2 style="font-size: 1.5em;color: #000;line-height: 26px;text-transform: uppercase;margin: 0;
                border-bottom: 3px solid #000;margin-bottom:20px;text-decoration:none;">press Release</h2></a>
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title"><span style="font-weight:400;"><?php the_title(); ?></span><br><span style="font-weight:600;font-size:0.75em;text-transform: none;"><?php the_subtitle(); ?></span></h2>
							<div class="social-share">
				               
						<span class="st_facebook_large"></span>
                   			        <span class="st_twitter_large"></span>
				                <span class="print" onclick="javascript:window.print()" ></span>
				            </div>
				            <hr>
                            <?php
                            // Post Content here
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </section>
<?php get_footer(); ?>
<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                <article class="entry page spotlight">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>show/spotlights" style="color:#c7c8ca;font-weight:bold;font-size:24px;text-decoration:none;">Spotlights</a>
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title"><?php the_title(); ?> - <span style="font-weight:normal;font-size: inherit;"><?php the_subtitle(); ?></span></h2>
				<div class="sharethis">
				               
								<span style="cursor:pointer;" class='fb st_facebook_custom' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
				                <span style="cursor:pointer;" class='tw st_twitter_custom'  st_via="USAntiqueShows" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
				            
				                <span style="cursor:pointer;" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='em st_email_custom'></span>
				                <span style="cursor:pointer;" class="pr" onclick="javascript:window.print()"></span>
				            </div>
							<?php $thumb_id = get_post_thumbnail_id(); ?>
							<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
							<?php $thumb_url = $thumb_url_array[0]; ?>
							<p><img src="<?php echo $thumb_url ?>" alt="" class="featured"></p>
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
<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                <article class="entry page">
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
				<?php $thumb_id = get_post_thumbnail_id(); ?>
				<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
				<?php $thumb_url = $thumb_url_array[0]; ?>
                
				<p><?php if($thumb_url != get_site_url()."/wp-content/uploads/2015/04/default.png"){ ?><img src="<?php echo $thumb_url ?>" alt="" class="featured"><?php } else {}?></p>
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
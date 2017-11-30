<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                <article class="entry page">
FAQ TEST
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
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
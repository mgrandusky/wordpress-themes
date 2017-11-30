<?php
/*
Template Name Posts: Contact Us
*/
?>
<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                <div class="entry page cf">
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title">Contact Us</h2>
							<p>Find who you're looking for here. </p>
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
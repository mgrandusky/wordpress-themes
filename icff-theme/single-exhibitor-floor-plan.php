<?php
/*
Template Name Posts: Floor Plan/Exhibitors List
*/
?>
<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content" class="cf">
				<div class="entry floorplan cf">
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
							
                            the_post(); 
                            //
                            ?>

                            <h2 class="entry-title">Floor Plan.</h2>
						
                            <?php
                            // Post Content here
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
					 <!-- BEGIN: GOEXPO EXHIBITORS -->
                        <script type="text/javascript">
                        geIframeContainer = 'http://' + document.domain + '/GoExpoIframeContainer.html';
                        geIframeContents = 'http%3A%2F%2Fn2a.goexposoftware.com%2Fevents%2Ficff15%2FgoExpo%2Fpublic%2FlistExhibitorsFrame.php';
                        geIframeRoot = 'http://n2a.goexposoftware.com/events/icff15/goExpo/public';
                        geFfRoot = 'http://n2a.goexposoftware.com/events/icff15/FORMfields';
                        geShowDirRoot = 'http://n2a.goexposoftware.com/events/icff15/goExpo/shows/dev';
                        geIframeUrl = geIframeContainer + '?r=' + geIframeRoot + '&amp;c=' + geIframeContents + '&amp;s=' + geShowDirRoot + '&amp;f=' + geFfRoot;
                        </script>
                        <script type="text/javascript" src="http://n2a.goexposoftware.com/events/icff15/goExpo/public/printIframeNew.js">
                        </script>
                    <!-- END: GOEXPO EXHIBITORS -->

                </div>
            </div>
            <?php get_sidebar(); ?>
        </section>
<?php get_footer(); ?>
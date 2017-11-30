<?php
/*
Template Name Posts: Agenda by Day
*/
?>
<?php
$hostname = "localhost";
$user = "irce_admin";
$password = "Exp0@bl0gs";
$database = "irce_prod";
$prefix = "";
//Loadmore configuarion
$resultsPerPage=0;
$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");
mysql_select_db($database, $bd) or die("Database Not Found");
?>

<?php get_header(); ?>

			<div class="main-container">
			  <div class="main wrapper clearfix">
			    <div id="contentwrapper">
				
			      <article>
			        <section>
                	  <h1><?php the_title(); ?></h1>
						<?php 
					    if ( have_posts() ) {
					        while ( have_posts() ) {

					            the_post(); 
					            //
					            ?>
						<div class="open-text" style="">
					            <?php
					            // Post Content here
					            the_content();
					           ?></div><?php
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

		</div>

<?php get_footer(); ?>
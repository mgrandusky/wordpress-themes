<?php

/*

Template Name Posts: Exhibitor Press Kits

*/

?>

<?php



$servername = "localhost";

$db_user = "interbik_admin";

//$password = "Exp0blogs";
$password = "Exp0@bl0gs";

$database = "interbik_wordpress";
?>



<?php get_header(); ?>
<script>jQuery('body').addClass('media inner');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>
          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
							<h1 class="header"><?php the_title(); ?></h1>

							<?php the_content(); ?>
                        
                        <?php endwhile; ?>

			<?php endif; ?>
            
            <?php
			try{
    			$pdo = new PDO('mysql:host='. $servername .';dbname=' . $database . ';charset=utf8;', $db_user, $db_pass);

            	$sql = "select * from goexpo_exhibitor_press_kit";

    			$sql .= " order by company_name asc";  
    			$s = $pdo->prepare($sql);
				$s->execute();
			}catch(PDOException $e){
    			$error = "Unable to connect to database.";
    			exit();
			}
    		?>
            <div class="clearfix">    
              <ul id="myList">
  
                 <li class="first"><span><strong>Exhibitor</strong></span><span><strong>Press Kit</strong></span></li>
                 <?php
				 
				 foreach ($s->fetchAll() as $row ) {
    				$kits[] = array(
        				'company_name' => $row['company_name'], 
        				'press_release_name' => $row['press_release_name'],
        				'press_release_url' => $row['press_release_url']
    				);?>
    
                 <li><span><?= $row['company_name']; ?></span><span><a href="<?= $row['press_release_url']; ?>" target="_blank" style="color:#333;"><?= $row['press_release_name']; ?></a></span></li> 
                 <?php } ?>
              </ul>
              <div class="lm-block clearfix">
       				 <input type="button" class="red-btn learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>
            </div>

			</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>


</div>

<?php get_footer(); ?>
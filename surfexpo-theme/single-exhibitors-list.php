<?php

/*

Template Name Posts: Exhibitors List

*/

?>


<?php

$hostname = "localhost";

$user = "surfexpo_admin";
$password = "Exp0@bl0gs";
$database = "surfexpo_wordpress";

$prefix = "";

//Loadmore configuarion

$resultsPerPage=0;

$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");

mysql_select_db($database, $bd) or die("Database Not Found");

?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function() {
          jQuery('body').addClass('show exhibitors-list');
        });
</script>

<script type="text/javascript">
jQuery('body').addClass('show exhibitors-list');

	$('document').ready(function(){

		setTimeout(function() {
			var l = location.search;
			var curl = "http://" + location.hostname + location.pathname + location.search;
			// check if a query has been made
			if (l != "") {

				// Was there already a booth sort?
				if(l.indexOf("booth") > 0){
					$('#sort-comp').attr('href', curl.replace('sort=booth', '')+'sort=comp');
				$('#sort-booth').addClass('selected');

				} else {
					$('#sort-comp').attr('href', curl.replace('sort=booth', '')+'&sort=comp');

				}

				// Was there already a company sort?
				if(l.indexOf("comp") > 0){
					$('#sort-booth').attr('href', curl.replace('sort=comp', '')+'sort=booth');
				$('#sort-comp').addClass('selected');

				} else {
					$('#sort-booth').attr('href', curl.replace('sort=comp', '')+'&sort=booth');

				}

				// $("#sort-booth").attr("href", "http://" + location.hostname + location.pathname + location.search + "&sort=booth");
				// $("#sort-comp").attr("href", "http://" + location.hostname + location.pathname + location.search + "&sort=comp");
			} else {
				$("#sort-comp").attr("href", "http://" + location.hostname + location.pathname  + "?sort=comp");
				$("#sort-booth").attr("href", "http://" + location.hostname + location.pathname  + "?sort=booth");
			}
		}, 1000);
	});
</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article id="contentInfo">

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
						
						<h1 class="header"><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<?php endwhile; ?>

			<?php endif; ?>

			 <section class="exhibitorsList-block">
			     <h1 class="headline">EXHIBITOR LIST</h1>          

		            <div class="exhibitorList-formblock">
		              <form method="" id="exhibitorList-form" action="">
		                <input type="text" name="exhibitorlist-search" value="" onClick="value=''" class="exhibitorlist-search" placeholder="Name, Keyword"/>
		                <div class="floor">
			                <select class="dd1" name="floor">
		    	              <option value="floor">Floor</option>
		        	          <option value="level1">Level 1</option>
		            	      <option value="level2">Level 2</option>
			                </select>
		                </div>
		                <div class="category">    
		                <select class="dd2" name="category">
		                  <option value="Catergory">Category</option>
		                  <option value="Affiliate Marketing Programs">Affiliate Marketing Programs</option>
		                  <option value="Call Contact Center Solutions">Call/Contact Center Solutions</option>
		                  <option value="Catalog Management Systems">Catalog Management Systems</option>                  
		                  <option value="Comparison Shopping Sites/ Portals/Software">Comparison Shopping Sites/ Portals/Software </option>                  
		                  <option value="Consultants">Consultants</option>                  
		                  <option value="Content Delivery Networks">Content Delivery Networks</option>                  
		                  <option value="Content Management">Content Management</option>                                                                                          
		                </select>
						</div>
		                <div class="el-button">
			                <input type="submit" class="exhibitors-btn shade" name="submit" value="Search" />
		    	            <input type="reset" class="reset-btn shade" name="reset" value="Reset" />
		                </div>

		          <div class="containerOptions cf" style="display:block;">
		            <div class="headerOptions"><span>More Options</span></div>
		            <div class="contentOptions">
		              <ul>
		                <li>
		                  <select class="dd3" name="subcategory">
		                    <option value="Subcategory">Subcategory</option>
		                    <option value="Subcategory2">Subcategory2</option>
		                  </select>
		                </li>
		                <li>
		                  <select class="dd3" name="neighborhood">
		                    <option value="Neighborhood">Neighborhood</option>
		                    <option value="Neighborhood2">Neighborhood2</option>
		                  </select>
		                </li>


		              </ul>
		            </div>
		          </div>


		              </form>
		             </div> 

					<hr/>
		            <ul class="exhibitors" >	
		              <li>
			              <div class="el-midCol">
			                  <a class="el-print" href="javascript:window.print();">Print</a>
		                      <p class="">Sort by <span id="sort-comp">Company</span> | <span id="sort-booth" class="current">Booth#</span></p>                    
		    		      </div>
		              </li>
		              <li class="el-header">
		              <div class="el-company"><strong>Company</strong></div>
		              <div class="el-booth"><strong>Booth #</strong></div>
		           </li>
		         </ul>

		              <ul id="myList" class="demo">
							<?php include('exhibitor-list.php'); ?>
					</ul>
					<div class="lm-block clearfix">
	       				 <input type="button" class="submit-no-color learnmorebtn" id="loadMore" value="Load More">             
	   			 	</div>

	          </section>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script type="text/javascript">

	$(".headerOptions").click(function () {

	    $header = $(this);
	    //getting the next element
	    $content = $header.next();
		if($(this).hasClass('open-options') == true){
			$(this).removeClass('open-options');
		} else{
		    $(this).addClass('open-options');
		}
		
	    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    	$content.slideToggle(500, function () {
        //execute this after slideToggle is done

        });

});

$( window ).load(function() {
    // Handler for .ready() called.
	

	var currentIndex = 21;
	var numMore = 21;
	var totalItems = $("ul#myList li").length;
	var maxCount = 200;
	
	
	$("ul#myList li").hide();
	$("ul#myList li").addClass("firstLoad");
	if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
		$("ul#myList li.firstLoad").slice(0,21).show();
		clickButton();
	}
	
	function clickButton() {
    var currentLength = $("ul#myList li.firstLoad:visible").length;
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();     
            $(".lm-block").hide();       
   	        $("ul#myList li").removeClass("firstLoad");			
        } else {
            $("#loadMore").show();
            $(".lm-block").show();   
        }
        
	}
	$("#loadMore").click(function (e) { 
    	e.preventDefault();


		if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
			    $("ul#myList li.firstLoad").slice(currentIndex, currentIndex + 20).show();	

			    currentIndex += 20;
		    	clickButton();			   
	    } 

	});
});
</script>

<?php get_footer(); ?>

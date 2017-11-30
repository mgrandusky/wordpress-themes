<?php
/*
Template Name Posts: Exhibitors List
*/
?>
<?php
$hostname = "localhost";
$user = "interbik_admin";
//$password = "Exp0blogs";
$password = "Exp0@bl0gs";
$database = "interbik_wordpress";
$prefix = "";
//Loadmore configuarion
$resultsPerPage=0;
$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");
mysql_select_db($database, $bd) or die("Database Not Found");
?>
<?php get_header(); ?>
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

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
						
						<h1 class="header"><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<?php endwhile; ?>

			<?php endif; ?>

			      <div class="exhibitorsList-block">
		            <div class="exhibitorList-formblock">
		              <form method="" id="exhibitorList-form" action="">
		                <input type="text" name="terms" value="<?php echo $_REQUEST['terms']; ?>" onClick="value=''" class="exhibitorlist-search" placeholder="Name, Keyword"/>
		                <div class="floor">
			                <select class="dd1" name="floor">
		    	              <option value="floor">Floor</option>
		        	          <?php 
										$floors = "SELECT * FROM goexpo_exhibitors_floors order by `name` asc";
										$floors_query=mysql_query($floors);
										while($floors_data=mysql_fetch_array($floors_query)){
									?>
									<option <?php if($_GET['floor'] == $floors_data['name']){ echo 'selected'; } ?>><?php echo $floors_data['name'] ?></option>
								    <?php
									}
									?>
			                </select>
		                </div>
		                <div class="category">    
		                <select class="dd2 cat" name="category">

		                  <option>Category</option>
									<?php 
										$categories = "SELECT * FROM goexpo_exhibitors_category order by `category` asc";
										$categories_query=mysql_query($categories);
										while($categories_data=mysql_fetch_array($categories_query)){
									?>
									<option <?php if($_GET['category'] == $categories_data['category']){ echo 'selected'; } ?>><?php echo $categories_data['category'] ?></option>
								    <?php
									}
									?>                                 
		                </select>
						</div>
		                <div class="el-button">
			                <input type="submit" class="red-btn shade" name="submit" value="Search" />
		    	            <input type="reset" class="black-btn reset" name="reset" value="Reset" />
		                </div>

		          <div class="containerOptions cf" style="display:block;">
		            <div class="headerOptions"><span>More Options</span></div>
		            <div class="contentOptions">
		              <ul>
		                <li>
		                  <select class="dd3 subcat" name="subcategory">
		                    <option value="">Subcategory</option>
		                    
		                  </select>
				<div id="load" data-load='{"Accessories":["Bicycle Racks","Books/Videos","Camera Still/Video","Measuring Devices","Inflation Systems","Gear Bags","Novelties","Hydration Packs","Lighting Systems","Other","Navigation/Maps/GPS","Packs/Panniers","Personal Care/Hygiene","Power Meters","Tubes","Tools","Rollers","Training Software","Water Bottles/Cages"],"Appreal":["Accessories","Base Layer","Body Armor","Casual/Urban","Custom Appreal","MTB Specific","Technical Outerwear"],"Auto Rack":["Other","Pickup Bed Systems","Roof Systems","Tow Hitch Systems","Trunk Mount"],"Bicycles":["BMX","Comfort","Cruiser","Cyclo-Cross","Electric/Power Assist","Folding","Juvenile","Mountain","Other","Cumbent","Road","Urban/Utility"],"Cardio":["Boxing","Climbers","Elliptical/X-Trainer","Rowing Machines","Ski Machines","Stationary Bicycles","Treadmills","XC Ski Machines"],"Components":["Breaks","Complete Wheels","Drive Train","Forks","Headsets","Pedals","Saddles","Seat Posts","Stem/Bars","Suspension Systems"],"Energy Supplements":["Bars/Gels","Hydration Drinks","Other","Vitamins/Supplements"],"Eye wear":["Casual","Goggles","Other","Prescription","Technical"],"Fitness":["Accessories","Cardio Products","Instructional Products","Other","Strength Products","Wellness"],"Fitness Accessories":["Accessories","Apparel","Apparel-Swimming","Association","Belts/Gloves","Books/Videos","Childrens Programs/Equipment","Heart Rate Monitors","Kettle Bells","Magazine","Mats","Nutritionals","Personal Hydration Units","Retial Tech/Fixtures","Tanning Beds/Saunas/Spas","Towels","Vibration Machines","Yoga/Pilates"],"Footwear":["BMX/Skateboard Specific","Casual","MTB Specific","Other","Road Specific"],"Helmets":["ATB Specific","BMX","Other","Road Specific"],"Industry Affiliation":["Advertising/PR Agency","Association","Consultant","Industry Advocate/Non-Profit","Other","Tours/Guides/Outfitters"],"Publications":["Consumer Magazine/Publication","Other","Trade Magazine/Publication"],"Sales Aids":["Computer Hardware/Software","Fixtures/Lighting","Other","P.O.P","Promotions"],"Service/Suppliers":["Finiished Fabrics","Frame Building/Repair","General Resource/Machinery","Other","Painting/Refinishing","Raw Materials","Textile Fibers","Wheel Building"],"Shop Equipment":["Fixtures","Forms/Signs","Lubes/Cleaners","Security Systems","Shop Tools","Workstands"],"Skateboards/Scooters":["Complete","Other","Parts/Accessories"],"Strength":["Free Weights","Gyms/Benches","Racks/Holders"],"Women Specfic":["Accessories","Apparel","Bicycles","Components","Footwear","Other"]}'></div>
		                </li>
		                <li>
		                  <select class="dd3" name="neighborhood">
		                    <option value="Neighborhood">Neighborhood</option>
		                    <option value="BMX">BMX</option>
		                    <option value="Electric-Bike">Electric Bike</option>
		                    <option value="EU-@-Interbike">EU @ Interbike</option>
		                    <option value="Mountain-Bike">Mountain Bike</option>
		                    <option value="Textile-Zone">Textile Zone</option>
		                    <option value="TRI">TRI</option>		                    
		                    <option value="Urban/Commuting">Urban/Commuting</option>
		                    <option value="Wellness-(HF+B)">Wellness (HF+B)</option>
		                    <option value="Women's">Women's</option>
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
		                      <p class="">Sort by <a href="" id="sort-comp">Company</a> | <a href="" id="sort-booth" class="current">Booth#</a></p>                    
		    		      </div>
		              </li>
                      <li class="clearfunction ex-header-sub" style="border-bottom:1px solid #AAA;padding-top:5px;padding-bottom:5px;">
								
									<span style="width:100%;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_enhanced.png" style="margin-top:-5px;margin-right:5px;">Enhanced Listing Package</span>
									

						
								</li>
		              <li class="el-header">
		              <div class="el-company"><strong>Company</strong></div>
		              <div class="el-booth"><strong>Booth #</strong></div>
		           </li>
		         </ul>

		              <ul id="myList" class="demo">
							<?php include('exhibitor-list.php'); ?>
					</ul>
					<!-- <div class="lm-block clearfix">
	       				 <input type="button" class="red-btn learnmorebtn" id="loadMore" value="Load More">             
	   			 	</div> -->

	          </div>
				<script>
				$(document).ready(function(){
				  $('.cat').change(function(){
				    var value = $(this).val();
				    var load = $('#load').data('load');
				    var lists = "";
				    for(var cat in load){
				      if(value === cat){
				        load[cat].forEach(function(entry){
				          lists += "<option>"+entry+"</option>";
				        });
				      }
				    }
				    $('.subcat').html(lists);
				  });
				});

				$(document).on('click','.reset',function(){
					window.location.href = "http://www.interbike.com/show/exhibitor-listfloor-plan/";
					return false; 
				});
				</script>
			</section>
	      </article>
	    </div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
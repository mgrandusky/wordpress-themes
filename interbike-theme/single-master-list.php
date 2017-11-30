<?php

/*

Template Name Posts: Master List

*/

?>

<?php

$hostname = "localhost";

$user = "interbik_admin";

$password = "Exp0blogs";

$database = "interbik_wordpress";

$prefix = "";

//Loadmore configuarion

$resultsPerPage=0;

$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");

mysql_select_db($database, $bd) or die("Database Not Found");

?>

<?php get_header(); ?>

<script>
jQuery('body').addClass('master-schedule');
$('document').ready(function(){
	// setTimeout(function() {
		var l = location.search;
		var curl = "http://" + location.hostname + location.pathname + location.search;
		// check if a query has been made
		if (l != "") {

			// Was there already a booth sort?
			if(l.indexOf("title") > 0){
				console.log('date detected');
				$('#sort-comp').attr('href', curl.replace('sort=title', '')+'sort=daydate');
				$('#sort-booth').addClass('selected');
			} else {
				$('#sort-comp').attr('href', curl.replace('sort=title', '')+'&sort=daydate');
			}

			// Was there already a company sort?
			if(l.indexOf("daydate") > 0){
				console.log('title detected');
				$('#sort-booth').attr('href', curl.replace('sort=daydate', '')+'sort=title');
				$('#sort-comp').addClass('selected');
			} else {
				$('#sort-booth').attr('href', curl.replace('sort=daydate', '')+'&sort=title');

			}

		} else {

			$("#sort-comp").attr("href", "http://" + location.hostname + location.pathname  + "?sort=daydate");
			$("#sort-booth").attr("href", "http://" + location.hostname + location.pathname  + "?sort=title");
		}
	// }, 1000);
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
	                <input type="text" name="exhibitorlist-search" value="<?php echo $_REQUEST['exhibitorlist-search']; ?>" onClick="value=''" class="exhibitorlist-search" placeholder="Titles, Keywords and Speakers"/>
	                <div class="date">
		                <select class="dd1" name="date">
	    	              <option value="">Date</option>
	        	          	<option value="2015-09-14">Tue September 14, 2016</option>
							<option value="2015-09-15">Wed September 15, 2016</option>
							<option value="2015-09-16">Thu September 16, 2016</option>
							<option value="2015-09-17">Fri September 17, 2016</option>
							<option value="2015-09-18">Fri September 18, 2016</option>
		                </select>
	                </div>
	                <div class="event">    
	                <select class="dd2" name="event">
	                  <option value="">Event Specific</option>
	                  	<?php
						$event_specific = "SELECT * FROM goexpo_seminars_event_specific ORDER BY event_specific asc"; 
						$event_specific_query = mysql_query($event_specific); 
						while($event_specific_data =mysql_fetch_array($event_specific_query)){
						?>
						<option <?php if($_GET['event_specific'] == $event_specific_data['event_specific']){ echo 'selected'; } ?>><?php echo str_replace("\'", "'", $event_specific_data['event_specific']); ?></option>

						<?
						}

						?>                                                                                        
	                </select>
					</div>
	                <div class="el-button">
		                <input type="submit" class="red-btn shade" name="submit" value="SEARCH" />
	    	            <input type="reset" class="gray-btn reset" name="reset" value="RESET" />
	                </div>

	          <div class="containerOptions cf" style="display:block;">
	            <div class="headerOptions"><span>More Options</span></div>
	            <div class="contentOptions">
	              <ul>
	                <li>
	                  <select class="dd3" name="type">
						<option value="">Type</option>
	                    <?php
						$type = "SELECT * FROM goexpo_seminars_type ORDER BY type asc"; 
						$type_query = mysql_query($type); 
						while($type_data =mysql_fetch_array($type_query)){
						?>
						<option <?php if($_GET['type'] == $type_data['type']){ echo 'selected'; } ?>><?php echo str_replace("\'", "'", $type_data['type']); ?></option>

						<?
						}

						?>
	                  </select>
	                </li>
	                <li>
	                  <select class="dd3" name="location">
						<option value="">Location</option>
	                    <?php
						$location = "SELECT * FROM goexpo_seminars_location ORDER BY location asc"; 
						$location_query = mysql_query($location); 
						while($location_data =mysql_fetch_array($location_query)){
						?>
						<option <?php if($_GET['location'] == $location_data['location']){ echo 'selected'; } ?>><?php echo $location_data['location'] ?></option>

						<?
						}

						?>
	                  </select>
	                </li>
	                <li>
	                  <select class="dd3" name="track">
						<option value="">Track</option>
	                    <?php
						$track = "SELECT * FROM goexpo_seminars_tracks ORDER BY track asc"; 
						$track_query = mysql_query($track); 
						while($track_data =mysql_fetch_array($track_query)){
						?>
						<option <?php if($_GET['track'] == $track_data['track']){ echo 'selected'; } ?>><?php echo $track_data['track'] ?></option>

						<?
						}

						?>
	                  </select>
	                </li>
	                <li>
	                  <select class="dd3" name="focus">
						<option value="">Focus</option>
	                    <?php
						$focus = "SELECT * FROM goexpo_seminars_focus ORDER BY focus asc"; 
						$focus_query = mysql_query($focus); 
						while($focus_data =mysql_fetch_array($focus_query)){
						?>
						<option <?php if($_GET['focus'] == $focus_data['focus']){ echo 'selected'; } ?>><?php echo $focus_data['focus'] ?></option>

						<?
						}

						?>
	                  </select>
	                </li>                                
	                <li>
	                  <select class="dd3" name="speaker">
						<option value="">Speaker</option>
	                    <?php
						$speaker = "SELECT * FROM goexpo_seminars_speakers ORDER BY name asc"; 
						$speaker_query = mysql_query($speaker); 
						while($speaker_data =mysql_fetch_array($speaker_query)){
						?>
						<option <?php if($_GET['type'] == $speaker_data['name']){ echo 'selected'; } ?>><?php echo str_replace("\'", "'", $speaker_data['name']); ?></option>

						<?
						}

						?>
	                  </select>
	                </li>                                                


	              </ul>
	            </div>
	          </div>


	              </form>
	             </div> 

	  <ul class="exhibitors" id="myList">	
	          <li>
	            <div class="el-midCol">
	               <a class="el-print" href="javascript:window.print();">Print</a>
		           <p class="">Sort by <a href="" id="sort-comp">Date</a> | <a href="" id="sort-booth" class="current">Title</a></p>    		    	    </div>
	            <hr style="margin-top:0px;"/>
	          </li>
				<?php
				// var_dump($_REQUEST);
					$section = "SELECT * FROM goexpo_seminars "; 

					if($_REQUEST['exhibitorlist-search'] != ""){
						$section .= "where name like '%" . $_REQUEST['exhibitorlist-search'] . "%' ";
					}

					if($_REQUEST['type'] != ""){
						if(strpos($section, "where")){
						$section .= "and type like '%" . $_REQUEST['type'] . "%' ";
						} else {
							$section .= "where type like '%" . $_REQUEST['type'] . "%' ";
						}
					}

					if($_REQUEST['date'] != ""){
						if(strpos($section, "where")){
						$section .= "and day_date like '%" . $_REQUEST['date'] . "%' ";
						} else {
							$section .= "where day_date like '%" . $_REQUEST['date'] . "%' ";
						}
					}

					if($_REQUEST['track'] != ""){
						if(strpos($section, "where")){
						$section .= "and track like '%" . $_REQUEST['track'] . "%' ";
						} else {
							$section .= "where track like '%" . $_REQUEST['track'] . "%' ";
						}
					}
					
					if($_REQUEST['location'] != ""){
						if(strpos($section, "where")){
						$section .= "and location like '%" . $_REQUEST['location'] . "%' ";
						} else {
							$section .= "where location like '%" . $_REQUEST['location'] . "%' ";
						}
					}
					
					if($_REQUEST['focus'] != ""){
						if(strpos($section, "where")){
						$section .= "and focus like '%" . $_REQUEST['focus'] . "%' ";
						} else {
							$section .= "where focus like '%" . $_REQUEST['focus'] . "%' ";
						}
					}
					
					if($_REQUEST['event'] != ""){
						if(strpos($section, "where")){
						$section .= "and event_specific like '%" . $_REQUEST['event'] . "%' ";
						} else {
							$section .= "where event_specific like '%" . $_REQUEST['event'] . "%' ";
						}
					}
					
					if($_REQUEST['speaker'] != ""){
						$ssql = "select * from goexpo_speakers where name like '%" . stripslashes($_REQUEST['speaker']) . "%'";
						$result = mysql_query($ssql);
						$speaker = mysql_fetch_row($result);
						if(strpos($section, "where")){
						$section .= "and speakers like '%" . $speaker[0] . "%' ";
						} else {
							$section .= "where speakers like '%" . $speaker[0] . "%' ";
						}
					}
					/*if($_REQUEST['sort'] != ""){
						$section .= " order by " . $_REQUEST['sort'] . " asc";
						// if($_REQUEST['sort'] == 'company'){
						// $section .= " order by company_name asc";
							
						// }
						if($_REQUEST['sort'] == 'speaker_id'){
							// $section .= ", start_time asc";
							// JOIN STATEMENT
						}
						if($_REQUEST['sort'] == 'company'){
							// $section .= ", start_time asc";
							// JOIN STATEMENT
						}
					}*/
					$sort = $_REQUEST['sort'];
					
					 // $section .= ' order by day_date, start_time aSC';

					 if($sort == "title"){
        $section .= " order by name asc";
    } else {
        $section .= ' order by day_date, start_time aSC';  
    }
					 // $section .= ' order by day_date, start_time aSC';
					//var_dump($section);
					?>
					<br>
					<?php
					$query=mysql_query($section);

					?>
					<!-- <pre><?php #var_dump(mysql_fetch_array($query)); ?></pre> -->
					<?php while($data=mysql_fetch_array($query)){
						$csql = "select company_name from goexpo_speakers where speaker_id like '%" . $data['speakers'] . "%'";
						$result = mysql_query($csql);
						$company = mysql_fetch_row($result);
						//var_dump($company);

		          $seminarReturn = "<li style=\"display:list-item;\" class=\"cf exhibitor\">
		            <div> 
			            <section>
				            <p><a class=\"add-planner\" href=\"https://n2b.goexposoftware.com/events/ib15/goExpo/user/listSeminars.php?ci=".$data['id']; $seminarReturn .= "\" target=\"_blank\">Add to Planner</a></p>
		        	    </section> 
			            <section class=\"cf\">
			    	         <p class=\"event-date\">";
							if($data['day_date'] == '2015-09-14'){$seminarReturn .= 'Tue, September 14, 2015 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}
							if($data['day_date'] == '2015-09-15'){$seminarReturn .=  'Wed, September 15, 2015 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}
							if($data['day_date'] == '2015-09-16'){$seminarReturn .=  'Thu, September 16, 2015 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}
							if($data['day_date'] == '2015-09-17'){$seminarReturn .=  'Fri, September 17, 2015 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}
							if($data['day_date'] == '2015-09-18'){$seminarReturn .=  'Sat, September 18, 2015 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}
							$seminarReturn .= "</>
		    		         <h1 class=\"event-title\"><a href=\"https://n2b.goexposoftware.com/events/ib15/goExpo/user/listSeminars.php?ci=".$data['id']; $seminarReturn .= "\" target=\"_blank\">".$data['name']."</a></h1>

				        	<p>"; 
							
							$speaker_id = explode(",", $data['speakers']);
							
								$numItems = count($speaker_id);
								$f = 0;
								foreach($speaker_id as $value){

									$speaker = "SELECT name, title, company_name FROM goexpo_speakers WHERE speaker_id = '".$value."'"; 
									$query2=mysql_query($speaker); 
									$speakerdata = mysql_fetch_array($query2); 	
									if($value){										
									$seminarReturn .= $speakerdata['name'].", ".$speakerdata['title']." - ".$speakerdata['company_name']."<br>"; 
									}
								}
								$seminarReturn .= "<strong>Type:</strong> ".$data['type']."<br/>
								<strong>Track:</strong> ".$data['track']."<br/>
								
								<strong>Location:</strong> ".$data['location']."<br/>
								<strong>Focus:</strong> ".$data['focus']."<br/>
								<strong>Event Specific:</strong> ".$data['event_specific']."
								
				            </p>

				            <div class=\"read-more-content\">".$data['description']."</div>
		    		        <p class=\"read-more-toggle\">Read more</p>                

		        	    </section> 

		            </div>
		          </li>"; 
		
					echo $seminarReturn; 
					
				}
if(mysql_num_rows($query) == 0) {
						?><style>.loadbutton {display:none;}</style><?php
						echo '<h2>We’re Sorry</h2>
						We couldn’t find an event that matched your search. Please try a different title, company, speaker or view them all.';
					}
				?>

			</ul>
        	     <div class="lm-block clearfix">
       				 <input type="button" class="red-btn learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>

          </div>
			<script>
$(document).on('click','.reset',function(){
							window.location.href = "http://wpdev.emeraldexpo.com/interbike/conference/master-schedule/";
							return false; 
						})
</script>

<script type="text/javascript">



$(".read-more-toggle").click(function () {
	    $readMore = $(this);
	    //getting the next element
	    $content = $readMore.prev();
		if($(this).hasClass('read-less') == true){
			$(this).removeClass('read-less');
		} else{
		    $(this).addClass('read-less');
		}
		
	    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    	$content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $readMore.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Read less" : "Read more";
        });
    });

});

$( window ).load(function() {
    // Handler for .ready() called.
	

	var currentIndex = 10;
	var numMore = 10;
	var totalItems = $("ul#myList li.exhibitor").length;
	var maxCount = 200;
	
	$("ul#myList li.exhibitor").hide();
	$("ul#myList li.exhibitor").addClass("firstLoad");
	if ($( "ul#myList li.exhibitor" ).hasClass( "firstLoad" )) { 
		$("ul#myList li.firstLoad").slice(0,10).show();
		clickButton();
	}
	
	function clickButton() {
    var currentLength = $("ul#myList li.firstLoad:visible").length;
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();     
            $(".lm-block").hide();       
   	        $("ul#myList li.exhibitor").removeClass("firstLoad");			
        } else {
            $("#loadMore").show();
            $(".lm-block").show();   
        }
        
	}
	$("#loadMore").click(function (e) { 
    	e.preventDefault();


		if ($( "ul#myList li.exhibitor" ).hasClass( "firstLoad" )) { 
			    $("ul#myList li.firstLoad").slice(currentIndex, currentIndex + 10).show();	

			    currentIndex += 10;
		    	clickButton();			   
	    } 

	});
});



</script>
					</section>

			      </article>

			    </div>







					<?php get_sidebar(); ?>


		</div>

		<?php get_footer(); ?>
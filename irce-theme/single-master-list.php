<?php

/*

Template Name Posts: Master List

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

				      <div id="form-container" class="formblock"> 

				        <form id="conference-form" class="cf2" action="">

				        <input type="hidden" name="sort" value="">

				          <input name="title" placeholder="" type="text" value="">

				          

				          <div class="educ-button">

					          <input value="Search" type="submit" class="submit">

				    	      <button class="reset">Reset</button>

				          </div>



				          <div class="containerOptions" style="display:block;">

				            <div class="headerOptions"><span>More Options</span></div>

				            <div class="contentOptions">

				              <ul>

				                <li>

				                  <select class="dd2" name="speaker">

				                    <option value="">Speaker</option>

				                     <?php

									$speaker = "SELECT * FROM goexpo_seminars_speakers order by last_name asc"; 

									$speaker_query = mysql_query($speaker); 

									while($speaker_data =mysql_fetch_array($speaker_query)){

									if($speaker_data['name'] != "To Be Determined"){

									?>

                                   

                                    

									<option <?php if($_GET['speaker'] == $speaker_data['name']){ echo 'selected'; } ?>><?php echo str_replace("ODonnell", "O'Donnell", $speaker_data['name']); ?></option>



									<?

}

								

									}



									?>

									<option <?php if($_GET['speaker'] == "To Be Determined"){ echo 'selected'; } ?>>To Be Determined</option>

				                  </select>

				                </li>

				                <li>

				                  <select class="dd2" name="date">

				                    <option value="">Date</option>

				                    <option value="2016-06-07">Tue June 7, 2016</option>

									<option value="2016-06-08">Wed June 8, 2016</option>

									<option value="2016-06-09">Thu June 9, 2016</option>

									<option value="2016-06-10">Fri June 10, 2016</option>

				                  </select>

				                </li>

				                <li>

				                  <select class="dd2" name="track">

				                    <option value="">Track</option>

				                    <?php

									$track = "SELECT * FROM goexpo_seminars_tracks"; 

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

<select class="dd2" name="type">

							<option value="">Type</option>

							<option <?php if($_GET['type'] == "Pre-Conference Workshops"){ echo 'selected'; } ?>>Pre-Conference Workshops</option>

							<option <?php if($_GET['type'] == "Main Conference Day 1"){ echo 'selected'; } ?>>Main Conference Day 1</option>

							<option <?php if($_GET['type'] == "Main Conference Day 2"){ echo 'selected'; } ?>>Main Conference Day 2</option>

							<option <?php if($_GET['type'] == "Post-Conference Workshops"){ echo 'selected'; } ?>>Post-Conference Workshops</option>

						

				            </select>

</li>

				              </ul>

				            </div>

				          </div>

				        </form>





				     <ul class="exhibitors">

				        <li class="cf2 ex-header">

					        <div>

				            <a class="el-print" href="javascript:window.print();"> <span>Print</span> </a>

							Sort by <a href="#" class="current date-sort"> Date</a> | <a class="title-sort" href="#">Title</a></div>



				          </li>

						

						<?php

						// var_dump($_REQUEST);

							$section = "SELECT * FROM goexpo_seminars "; 


							$clean_title = str_replace("'", "", $_REQUEST['title']);
							$clean_title = str_replace("—", "&mdash;", $_REQUEST['title']);
							$clean_title = stripslashes($clean_title);

							if($_REQUEST['title'] != ""){
								$section .= "where name like '%" . $clean_title . "%' or speakers like '%" . $clean_title . "%' or company like '%" . $clean_title . "%'";
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

							

							if($_REQUEST['speaker'] != ""){

								

								if(strpos($section, "where")){

								$section .= "and speakers like '%" . stripslashes(str_replace("'", "", $_REQUEST['speaker'])) . "%' ";

								} else {

									$section .= "where speakers like '%" . stripslashes(str_replace("'", "", $_REQUEST['speaker'])) . "%' ";

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

							

							 $section .= ' order by day_date, start_time aSC';

							//var_dump($section);

							?>

							<br>

							<?php $query=mysql_query($section); ?>

							<!-- <pre><?php #var_dump(mysql_fetch_array($query)); ?></pre> -->

							<?php while($data=mysql_fetch_array($query)){

								$csql = "select company_name from goexpo_speakers where speaker_id like '%" . $data['speakers'] . "%'";

								$result = mysql_query($csql);

								$company = mysql_fetch_row($result);

								//var_dump($company);



				          $seminarReturn = "<li class=\"cf2 exhibitor\" data-title=\"". substr($data['name'], 0, 4) ."\" data-date=\"". $data['day_date'] ."\" data-speaker=\"" . $data['speakers'] . "\" data-company=\"" . $company[0] . "\">

				            <div> 

					            <section>

						            <p class=\"add-planner\"><a href=\"https://n2b.goexposoftware.com/events/irce16/goExpo/public/redirectUrl.php?t=2\">Add to Planner</a></p>

				        	    </section> 

					            <section class=\"cf2\">

					    	         <p class=\"event-date\">";

									if($data['day_date'] == '2016-06-07'){$seminarReturn .= 'Tue, June 07, 2016 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}

									if($data['day_date'] == '2016-06-08'){$seminarReturn .=  'Wed, June 08, 2016 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}

									if($data['day_date'] == '2016-06-09'){$seminarReturn .=  'Thu, June 09, 2016 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}

									if($data['day_date'] == '2016-06-10'){$seminarReturn .=  'Fri, June 10, 2016 '.date("g:i a", strtotime($data['start_time'])). " to " .date("g:i a", strtotime($data['end_time']));}

									$seminarReturn .= "</>

				    		         <h1 class=\"event-title\">".$data['name']."</h1>



						        	<p>"; 

									

										$speaker_id = explode(",", $data['speakers']);

										$numItems = count($speaker_id);

										$f = 0;



										foreach($speaker_id as $value){

										if($value != ""){

											$speaker = "SELECT name, title, company_name FROM goexpo_speakers WHERE name like '%".$value."%'"; 

//var_dump($speaker);

											$query2=mysql_query($speaker); 

											$speakerdata = mysql_fetch_array($query2); 											

											

											$seminarReturn .= "<a href=\"http://www.irce.com/conference/speakers/?title=".str_replace(" ", "+", $speakerdata['name'])."&date=&sort=\" target=\"_blank\">".stripslashes(str_replace("ODonnell", "O'Donnell", $speakerdata['name'])).", ".$speakerdata['title']." - ".$speakerdata['company_name']."</a><br>"; 

										}

										}

										$seminarReturn .= "<strong>Type:</strong> ".$data['type']."<br/>

										<strong>Track:</strong> ".$data['track']."<br/>

										<!--

										<strong>Location:</strong> Tradewinds C-F<br/>

										<strong>Focus:</strong> Best Practices<br/>

										<strong>Event Specific:</strong> Interbike, OutDoor Demo

										//-->

						            </p>



						            <div class=\"read-more-content\">".$data['description']."</div>

				    		        <p class=\"read-more-toggle\">Read more &#187;</p>                



				        	    </section> 



				            </div>

				          </li>"; 

				

							echo $seminarReturn; 

							

						}

						?>

				        </ul>

				      </div>

						 <div class="lm-block clearfix">

				       		 <input type="button" class="learnmorebtn" id="loadMore" value="Load More">             

				   		 </div>

						<?php

/*

						if(mysql_num_rows($query) == 0) {

							?><style>.loadbutton {display:none;}</style><?php

							echo '<h2>We’re Sorry</h2>

							We couldn’t find an exhibitor that matched your search. Please try a different company name, category or view them all.';

						}

*/

						?>



			       	<div id="script">



					       <script type="text/javascript">

							jQuery(".headerOptions").click(function () {

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



						/*$('.read-more-content').addClass('hide');



						// Set up the toggle.

						jQuery('.read-more-toggle').on('click', function() {

						  $(this).next('.read-more-content').toggleClass('hide');

						});*/



						jQuery(".read-more-toggle").click(function () {

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



						jQuery( window ).load(function() {

						    // Handler for .ready() called.





							var currentIndex = 10;

							var numMore = 10;

							var totalItems = $("ul.exhibitors li.exhibitor").length;

							var maxCount = 200;



							$("ul.exhibitors li.exhibitor").hide();

							$("ul.exhibitors li.exhibitor").addClass("firstLoad");

							if ($( "ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 

								$("ul.exhibitors li.firstLoad").slice(0,10).show();

								clickButton();

							}



							function clickButton() {

						    var currentLength = $("ul.exhibitors li.firstLoad:visible").length;

						        if (currentLength >= totalItems || currentLength >= maxCount) {

						            $("#loadMore").hide();     

						            $(".lm-block").hide();       

						   	        $("ul.exhibitors li.exhibitor").removeClass("firstLoad");			

						        } else {

						            $("#loadMore").show();

						            $(".lm-block").show();   

						        }



							}

							jQuery("#loadMore").click(function (e) { 

						    	e.preventDefault();





								if ($( "ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 

									    $("ul.exhibitors li.firstLoad").slice(currentIndex, currentIndex + 10).show();	



									    currentIndex += 10;

								    	clickButton();			   

							    } 



							});

						});



						</script>



						   <script type="text/javascript">



								jQuery(document).on('click','.reset',function(){

								window.location.href = "http://www.irce.com/conference/agendas";

								return false; 	})

						   </script>

					     



					</div>



				



            		</section>



				  </article>



				</div>



				<aside>



            <?php get_sidebar(); ?>



			</aside>



			



        </div>



		</div>



<?php get_footer(); ?>
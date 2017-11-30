<?php
/*
Template Name Posts: Tracks
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
				<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); 
		
				?>
				
			

			
			        <h1><?php the_title(); ?></h1>
			        <div class="clearfix content-block">
			            <p class="img-content"><img src="<?php the_field('image'); ?>" border="0" /></p><?php the_field('description'); ?><br/>
			            </div>
						
						<?php
						
							// var_dump($_REQUEST);
								$section = "SELECT * FROM goexpo_seminars "; 

								 
							
								



								if($_REQUEST['title'] != ""){
									$section .= "where name like '%" . $_REQUEST['title'] . "%' ";
								}

								if($_REQUEST['type'] != ""){
									if(strpos($section, "where")){
									$section .= "and type like '%" . $_REQUEST['type'] . "%' ";
									} else {
										$section .= "where type like '%" . $_REQUEST['type'] . "%' ";
									}
								}
								
									if(get_field('track_name') == "Social"){
									if(strpos($section, "where")){
									$section .= "and track like '" . get_field('track_name') . "' ";
									} else {
										$section .= "where track like '" . get_field('track_name')  . "' ";
									}
									}else{
										if(strpos($section, "where")){
									$section .= "and track like '%" . get_field('track_name') . "%' ";
									} else {
										$section .= "where track like '%" . get_field('track_name')  . "%' ";
									}
										
									}


								 $section .= ' order by day_date, start_time aSC';
								//var_dump($section);
								?>

								<?php
								$query=mysql_query($section);  
								?>
			      <div id="form-container" class="formblock"> 

			        <form id="conference-form" class="cf2" action="">
			          <input name="title" placeholder="" type="text" value="" style="width:75% !important">

			          
					
			          <div class="educ-button">
				          <input value="Submit" type="submit" class="submit">
			    	      <button class="reset">Reset</button>
			          </div>

			        </form>


			     <ul class="exhibitors">
			        <li class="cf2 ex-header">
				        <div>
			            <a class="el-print" href="javascript:window.print();"> <span>Print</span> </a>
						Sort by <a href="#" class="current"> Date</a> | <a href="#">Title</a></div>

			          </li>


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
			    		        <p class=\"read-more-toggle\">Read more</p>                

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

			      </section>
			    </article>
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

				/*$('.read-more-content').addClass('hide');

				// Set up the toggle.
				$('.read-more-toggle').on('click', function() {
				  $(this).next('.read-more-content').toggleClass('hide');
				});*/

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
					$("#loadMore").click(function (e) { 
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

						$(document).on('click','.reset',function(){
						window.location.href = "";
						return false; 	})
				   </script>
				</div>
				<?php endwhile; ?>

				<?php endif; ?>
				<aside>

            <?php get_sidebar(); ?>

			</aside>

			

        </div>

		</div>

<?php get_footer(); ?>
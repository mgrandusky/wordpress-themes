<?php
// var_dump($_REQUEST);
/*
Template Name Posts: Speakers List
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
            <input name="title" placeholder="" type="text" value="">
            
            <div class="educ-button">
	            <input value="Search" type="submit" class="submit">
    	        <button class="reset">Reset</button>
            </div>
			<input type="hidden" name="sort" value="">

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
            <a class="el-print" href="javascript:window.print();">Print </a>
			Sort by <a href="#" class="name-sort"> Name</a> | <a class="title-sort-p" href="#">Title</a> | <a class="company-sort" href="#">Company</a></div>

          </li>
          <?php
						#var_dump($_REQUEST);
							$section = "SELECT * FROM goexpo_speakers "; 
							if($_REQUEST['title'] != ""){
								$section .= "where name like '%" . stripslashes(str_replace("'", "", $_REQUEST['title'])) . "%' or description like '%" . stripslashes(str_replace("'", "", $_REQUEST['title'])) . "%' or title like '%" . stripslashes(str_replace("'", "", $_REQUEST['title'])) . "%'";
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
								$section .= "and speak_date like '%" . $_REQUEST['date'] . "%' ";
								} else {
									$section .= "where speak_date like '%" . $_REQUEST['date'] . "%' ";
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
								$section .= "and name like '%" . stripslashes(str_replace("'","",$_REQUEST['speaker'])) . "%' ";
								} else {
									$section .= "where name like '%" . stripslashes(str_replace("'","",$_REQUEST['speaker'])) . "%' ";
								}
							}
							
							
							

							if($_REQUEST['sort'] != ""){
								if($_REQUEST['sort'] == 'company'){
								$section .= " order by company_name asc";
									
								}
								if($_REQUEST['sort'] == 'name'){
								$section .= " order by last_name asc";
									
								}
								if($_REQUEST['sort'] == 'title'){
								$section .= " order by title asc";
									
								}
								// $section .= " order by " . $_REQUEST['sort'] . " asc";
								// if($_REQUEST['sort'] == 'day_date'){
								// 	$section .= ", start_time asc";
								// }
								// if($_REQUEST['sort'] == 'speaker_id'){
								// 	// $section .= ", start_time asc";
								// 	// JOIN STATEMENT
								// }
								// if($_REQUEST['sort'] == 'company'){
								// 	// $section .= ", start_time asc";
								// 	// JOIN STATEMENT
								// }
							}else{

							 $section .= ' order by last_name asc';

                                                        }
							 //var_dump($section);
					
							?>
							<br>
							<?php
							$query=mysql_query($section);

							?>
							<pre><?php #var_dump(mysql_fetch_array($query)); ?></pre>
							<?php while($data=mysql_fetch_array($query)){
          
          $speakersReturn = "<li class=\"cf2 exhibitor\" data-name=\"" . $data['name'] . "\" data-title=\"" . $data['title'] . "\" data-company=\"" . $data['company_name'] . "\">
            <div> 
	            <p class=\"speaker-image\">"; 
				if($data['image'] != ""){
					$speakersReturn .= "<img src=\"".$data['image']."\" border=\"0\" width=\"140px\" height=\"auto\"/></p>";
				}else{
					$speakersReturn .= "<img src=\"". get_template_directory_uri() ."/images/speaker1.jpg\" border=\"0\" width=\"140px\" height=\"auto\" /></p>";
				}
    	        $speakersReturn .= "<div class=\"speaker-desc\">
	                <h1 class=\"speaker-name\">".stripslashes(str_replace("ODonnell", "O'Donnell", $data['name']))."</h1>
                    <p class=\"black\"><strong>".$data['title']."<br/>
						".$data['company_name']."</strong></p>
                    <p>".$data['description']."<br/>"; 
			
							$seminarListQueryString = "SELECT * FROM goexpo_seminars";
					$seminarListQuery = mysql_query($seminarListQueryString); 
					//$seminarList = mysql_fetch_array($seminarListQuery); 
					while($seminarList = mysql_fetch_array($seminarListQuery)){
					$speaker_id = explode(",", $seminarList['speakers']);
							if($speaker_id[0] == $data['name']){
if($seminarList['name'] == "Paid Marketing on Google in 2016: What’s New and What Matters"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Paid+Marketing+on+Google+in+2016&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
}elseif($seminarList['name'] == "Overcoming the Analytics Staffing Challenge: How to Find Digital Analysts, Motivate Them, Then Measure What They&#39;re Doing"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Overcoming+the+Analytics+Staffing+Challenge&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}else{
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=".current(explode(':', str_replace(" ", "+", str_replace("<br>", "", $seminarList['name']))))."&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
							}
							if($speaker_id[1] == $data['name']){
							if($seminarList['name'] == "Overcoming the Analytics Staffing Challenge: How to Find Digital Analysts, Motivate Them, Then Measure What They're Doing"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Overcoming+the+Analytics+Staffing+Challenge&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
if($seminarList['name'] == "Paid Marketing on Google in 2016: What&#39;s New and What Matters"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Paid+Marketing+on+Google+in+2016&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}else{
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=".str_replace(" ", "+", str_replace("<br />", "", $seminarList['name']))."&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
							}
							if($speaker_id[2] == $data['name']){
							if($seminarList['name'] == "Overcoming the Analytics Staffing Challenge: How to Find Digital Analysts, Motivate Them, Then Measure What They're Doing"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Overcoming+the+Analytics+Staffing+Challenge&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
if($seminarList['name'] == "Paid Marketing on Google in 2016: What&#39;s New and What Matters"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Paid+Marketing+on+Google+in+2016&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}else{
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=".str_replace(" ", "+", str_replace("<br />", "", $seminarList['name']))."&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
							}
							if($speaker_id[3] == $data['name']){
							if($seminarList['name'] == "Overcoming the Analytics Staffing Challenge: How to Find Digital Analysts, Motivate Them, Then Measure What They're Doing"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Overcoming+the+Analytics+Staffing+Challenge&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
if($seminarList['name'] == "Paid Marketing on Google in 2016: What&#39;s New and What Matters"){
							
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=Paid+Marketing+on+Google+in+2016&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}else{
							$speakersReturn .="<a href=\"http://www.irce.com/conference/agendas/?title=".str_replace(" ", "+", str_replace("<br />", "", $seminarList['name']))."&type=&speaker=&date=&track=\" class=\"readmore-bold\">".$seminarList['name']."</a><br>";
							}
							}
					
                    	
						//}
					}
						$speakersReturn .= "</p>    
                </div>                
                
            </div>
          </li>";
		  
		  echo $speakersReturn;
		}
          
?>

        </ul>
      </div>
				 <div class="lm-block clearfix">
       				 <input type="button" class="learnmorebtn" id="loadMore" value="Load More">             
   			 	</div>
<?php



						if(mysql_num_rows($query) == 0) {

							?><style>.lm-block  {display:none;}</style><?php

							echo '<h2>We’re Sorry</h2>

							We couldn’t find a speaker that matched your search.';

						}

						?>
			       	<div id="script">
			       	<style type="text/css">
			       		.e{}
			       	</style>

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
								window.location.href = "http://www.irce.com/conference/speakers/";
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
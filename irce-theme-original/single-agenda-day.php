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
						<div id="tabs" class="divider clearfix">

				          <h5><a href="javascript:void(0);">Pre-Conference</a></h5>
				          <a href="javascript:void(0);" class="ad-opps-toggle"></a>
				          <hr class="tabs-top-border">
				          <ul class="clearfix addopps">
				            <li><a href="#pre-conference" alt="Pre-Conference">Pre-Conference</a></li>
				            <li><a href="#day1"  alt="Day 1">Day 1</a></li>
				            <li><a href="#day2" alt="Day 2">Day 2</a></li>
				            <li><a href="#post-conference" alt="Post-Conference">Post-Conference</a></li>
				          </ul>
				          <div class="tabcontent">			
						<div id="pre-conference">

			            	<div class="tab-row">
			            		<h4>Tracks for June 7, 2016</h4>
			                    <ul class="list-icons">
			                    	<li class="ws_e-commerce-icon"><a href="http://www.irce.com/tracks/e-commerce-technology-workshop/"><strong>E-Commerce Technology Workshop</strong><br />Declutter: Tools that Take You Further<br />Without a roadmap, investigating technology enablers to support digital selling is intimidating. This workshop covers a wide range of solutions to improve marketing and personalization, questions to ask before considering big initiatives such as replatforming or entering markets abroad. Attendees will come away with an understanding of the foundational components that enable e-commerce, along with advanced innovations.</a>
			                        </li>
			                    	<li class="ws_amazon_and_me-icon"><a href="http://www.irce.com/tracks/amazon-me-workshop/"><strong>Amazon & Me Workshop</strong><br />
2016 Your Best Amazon Year Yet
<br />Retailers and brand manufacturers are eager to learn about the latest Amazon developments and selling opportunities that will catapult the business to the next level. 2016 can be the year to make this happen. This workshop will provide Amazon veterans and newcomers alike with the knowledge, insights and tactics to drive sales, profits and sustainable growth. Sessions are tailored for both first-party vendors and third party sellers ready to develop a robust and comprehensive Amazon strategy. </a>
			                        </li>
			                    	<li class="ws_b2b-icon"><a href="http://www.irce.com/tracks/b2b-workshop/"><strong>B2B Workshop</strong><br />
B2B E-Commerce: The Future is Digital
<br />Just as e-commerce revolutionized consumer shopping and buying, it is transforming B2B commerce. This workshop will prepare manufacturers, distributors and wholesalers to compete in the new world of B2B e-commerce. It will feature real-life stories of challenges and success, guidance on what to offer on a website and what’s best sold by reps, how to make sure websites are performing up to expectations, how to integrate e-commerce into an operation and how to achieve staff buy-in. </a>
			                        </li>                                                
			                     	      <li class=""></li>                                                                                           
			                    </ul>
			                     <hr style="margin:0px">
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

							
								if(strpos($section, "where")){
								$section .= "and day_date like '%2016-06-07%' ";
								} else {
									$section .= "where day_date like '%2016-06-07%' ";
								}
							

							
							 $section .= ' order by day_date, start_time aSC';
							//var_dump($section);
							?>
							
							<?php
							$query=mysql_query($section);  
							?>      
			              <div id="form-container" class="formblock" method="get">
			                <form id="conference-form" class="cf2" action="http://www.irce.com/conference/agenda-by-day/#pre-conference">
					  <input name="#pre" type="hidden" value="">
			                  <input name="title" placeholder="Search" type="text" value="" style="width:75% !important">
			                 
			                  <div class="educ-button">
			                    <input value="Submit" type="submit" class="submit">
			                    <button class="reset">Reset</button>
			                  </div>
			                </form>
			                <ul class="exhibitors">
			                  <li class="cf2 ex-header">
			                    <div> <a class="el-print" href="javascript:window.print();"> <span>Print</span> </a> Sort by <a href="#" class="current"> Date</a> | <a href="#">Title</a> </div>
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
				    		        <p class=\"read-more-toggle\">Read more &#187;</p>                

				        	    </section> 

				            </div>
				          </li>"; 
				
							echo $seminarReturn; 
							
						}
						?>
			                  
			                </ul>
			              </div>
							 <div class="lm-block0 clearfix">
			       				 <input type="button" class="learnmorebtn" id="loadMore0" value="Load More">             
			   			 	</div>
			            </div>
			            <!-- end Pre-conference --> 

			            <!-- start Day1 -->
			            <div id="day1"> 
			<div class="tab-row">
			            		<h4>Tracks for June 8, 2016</h4>
			                    <ul class="list-icons">
			                    	<li class="strategies_top_executives-icon"><a href="http://www.irce.com/tracks/success-strategies-for-top-executives-track/"><strong>Success Strategies for Top E-Retail Executives Track</strong><br />
Managing for Today and Stewardship for Tomorrow<br />
This track will cover the landscape on the strategic thinking retail company leaders must use in assessing opportunities and challenges. It will show how critical decisions made at top management levels pull the key levers that drive e-commerce results and company growth — increasing revenue and containing costs — at the implementation level.</a>
 
			                        </li>
			                    	<li class="retail_chains-icon"><a href="http://www.irce.com/tracks/retail-chains-track/"><strong>Retail Chains Track</strong><br />
Exploit Store Assets to Fuel All Selling Channels<br />
Physical stores represent a significant investment and retailers seek new ways to leverage these assets to support all selling channels. The store pickup option for goods ordered online has grown in popularity and many are taking the service to new levels. Others are focusing on creating interactive experiences in store using beacons and touchscreens. This track will explore initiatives that blur the lines between the physical and digital to keep customers shopping wherever they like.</a>

			                        </li>
			                    	<li class="marketing_must_haves-icon"><a href="http://www.irce.com/tracks/marketing-must-haves-track/"><strong>Marketing Must-Haves Track</strong><br />
Find New Ways with Tried and True Tactics<br />
The long-established vehicles that are the bedrock of online marketing today remain popular on their own merits: affiliate marketing, email, SEO and SEM can cost-effectively acquire traffic and customers and drive sales and loyalty. This track will cover new ways to use the proven workhorses of digital marketing and also remind e-marketers that sometimes, the quickest problem fixes and best opportunities may be found in a new perspective on what they already know. </a>
 
			                        </li>                                                
			                    	<li class="small_but_mighty-icon"><a href="http://www.irce.com/tracks/small-but-mighty-track/"><strong>Small But Mighty Track</strong><br />
Big Wins and Great Saves on a Shoestring<br />
Small and mid-sized e-retailers have a competitive edge: agility. In this track, multichannel and web-only merchants will divulge initiatives that strengthen their market position and do not require huge investments. Learn how startups get off the ground, rebrand when needed, how they turned their first profit—and once humming along at a good clip — how to manage growth while keeping profits and the customer experience top priorities.</a>
 
			                        </li>                                                                        
			                    	<li class="operations-icon"><a href="http://www.irce.com/tracks/fulfillment-customer-service-operations-track/"><strong>Fulfillment, Customer Service & Operations Track</strong><br />
The Backroom: The Hub That Keeps Customers Happy and Loyal<br />
The real test of how good an e-retail organization is comes after the sale. How well do they handle fulfillment and delivery? Post-purchase inquiries? Returns? These sessions will dive into the hidden foundation of e-commerce success that supports everything else. Topics include managing fulfillment and shipping, handling customer service, keeping a lid on fraud and managing returns.</a>
 
			                        </li> 
						<li class=""></li>                                                                                                
			                    </ul>
			                     <hr style="margin:0px">
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

							
								if(strpos($section, "where")){
								$section .= "and day_date like '%2016-06-08%' ";
								} else {
									$section .= "where day_date like '%2016-06-08%' ";
								}
							

							
							 $section .= ' order by day_date, start_time aSC';
							//var_dump($section);
							?>
							
							<?php
							$query=mysql_query($section);  
							?>    
			              <div id="form-container" class="formblock" >
			                <form id="conference-form" class="cf2" action="http://www.irce.com/conference/agenda-by-day/#day1">
					
			                  <input name="title" placeholder="Search" type="text" value="" style="width:75% !important">
			               
			                  <div class="educ-button">
			                    <input value="Submit" type="submit" class="submit">
			                    <button class="reset">Reset</button>
			                  </div>
			                </form>
			                <ul class="exhibitors">
			                  <li class="cf2 ex-header">
			                    <div> <a class="el-print" href="javascript:window.print();"> <span>Print</span> </a> Sort by <a href="#" class="current"> Date</a> | <a href="#">Title</a> </div>
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
			       				 <input type="button" class="learnmorebtn" id="loadMore1" value="Load More">             
			   			 	</div>
			            </div>
			            <!-- end Day1 --> 

			            <!-- start Day2 -->
			            <div id="day2"> 
			            	<div class="tab-row">
					       
			            		<h4>Tracks for June 9, 2016</h4>
			                    <ul class="list-icons">
			                    	<li class="managing_technologies-icon"><a href="http://www.irce.com/tracks/design-merchandising-track/"><strong>Design & Merchandising Track</strong><br />
Clicking the Buy Button: How to Turn Shoppers into Buyers<br />
For today’s shoppers, the website is the richest — and sometimes the only — contact point with a retailer. And so the website must make a strong initial impression and provide a quick way to buy. This track will provide guidance on effective site design, content organization, ways to test a site’s effectiveness, how to make sure a site is ready for the mobile revolution and more. </a>

			                        </li>
			                    	<li class="design_and_merchandising-icon"><a href="http://www.irce.com/tracks/managing-technology-track/"><strong>Managing Technology Track</strong><br />
Creating a Technology Strategy that Leads to E-Retail Success<br />
The sessions in this track will help attendees develop a technology strategy in a fast-changing market. Experienced merchants will discuss whether to take e-commerce technology in-house or to outsource it, how to integrate legacy systems into e-commerce technology or replace it altogether, how to grow faster than your technology investments, how to make sense of data, and more.</a>

			                        </li>
			                    	<li class="commerce_and_marketing-icon"><a href="http://www.irce.com/tracks/social-commerce-marketing-track/"><strong>Social Commerce & Marketing Track</strong><br />
Trading Cautious for Audacious<br />
If 2015 was a year of prudent experimentation in social channels, then 2016 is shaping up to be full of bold initiatives – and an exit strategy when efforts backfire. The best social strategies ensure shoppers know their voice is heard and the content they create is handled with respect. After today’s daylong programming on social strategy, stick around Friday to learn about bold tactics to deploy once you return home.</a>

			                        </li>                                                
			                    	<li class="marketing_new_frontiers-icon"><a href="http://www.irce.com/tracks/marketing-new-frontiers-track/"><strong>Marketing New Frontiers Track</strong><br />
New Tools and Tactics to Connect with Shoppers<br />
Triggered email, content marketing strategy, native advertising and more: A new world of online marketing practices has joined established tactics, offering e-retailers more opportunities to drive sales and traffic. This track will cover the pitfalls and the possibilities, what results these new approaches are delivering to online marketers, and the important lessons they’ve learned that you need to know.</a>
 
			                        </li>                                                                        
			                    	<li class="video_in_eCommerce-icon"><a href="http://www.irce.com/tracks/video-in-e-retail-track/"><strong>Video in E-Retail Track</strong><br />
The Merchandising Tactic That Really Engages Shoppers<br />
Video has become key to online success. Yet many e-retailers have not adopted video merchandising because they don’t understand how easy it actually is. This track will examine the parts that make up a successful video merchandising and marketing program. Experts will discuss what makes great video, video production, how to measure success, how to scale up a video program, best means for distribution and more. </a>

			                        </li>  
						<li class=""></li>                                                                                              
			                    </ul>
			                     <hr style="margin:0px">
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

							
								if(strpos($section, "where")){
								$section .= "and day_date like '%2016-06-09%' ";
								} else {
									$section .= "where day_date like '%2016-06-09%' ";
								}
							

							
							 $section .= ' order by day_date, start_time aSC';
							//var_dump($section);
							?>
							
							<?php
							$query=mysql_query($section);  
							?> 
<div id="form-container" class="formblock">
			                <form id="conference-form" class="cf2" action="http://www.irce.com/conference/agenda-by-day/#day2">
					
			                  <input name="title" placeholder="Search" type="text" value="" style="width:75% !important">
			             
			                  <div class="educ-button">
			                    <input value="Submit" type="submit" class="submit">
			                    <button class="reset">Reset</button>
			                  </div>
			                </form>
			                <ul class="exhibitors">
			                  <li class="cf2 ex-header">
			                    <div> <a class="el-print" href="javascript:window.print();"> <span>Print</span> </a> Sort by <a href="#" class="current"> Date</a> | <a href="#">Title</a> </div>
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
			       				 <input type="button" class="learnmorebtn" id="loadMore1" value="Load More">             
			   			 	</div>
			            </div>
			            <!-- end Day2 -->

			            <div id="post-conference">
			            	<div class="tab-row">
					       
			            		<h4>Tracks for June 10, 2016</h4>
			                    <ul class="list-icons">
			                    	<li class="ws_social-icon"><a href="http://www.irce.com/tracks/social-workshop/"><strong>Social Workshop</strong><br />
Find Your Voice. Craft Your Plan<br />
If your social media efforts have been a mélange of hits and misses, get ready to get buttoned up with a plan that delivers results, accountability and opportunities to learn and refine. This workshop provides a framework to create an integrated social strategy, guidance on finding your authentic voice and exploration of tools and tactics to engage and reward shoppers for content that spreads love for your brand.</a>
 
			                        </li>
			                    	<li class="ws_google_and_you-icon"><a href="http://www.irce.com/tracks/google-you-workshop/"><strong>Google & You Workshop</strong><br />
Staying in Step With an Ever-Changing Platform<br />
Every e-retailer knows Google means search with a capital “S.” What’s less clear – and a topic of endless discussion – is how e-retailers can best utilize the ever-evolving Google to drive sales and maximize profits. This workshop digs into retailers’ latest experience with some of Google’s longstanding opportunities and surfaces how they are taking advantage of some of its newest offerings. </a>

			                        </li>
			                    	<li class="ws_mobile-icon"><a href="http://www.irce.com/tracks/mobile-workshop/"><strong>Mobile Workshop</strong><br />
Making the Right Moves in Mobile<br />
Mobile’s so embedded in how consumers live today that retailers can reach connected customers at almost any time and place. That’s a big universe, but retailers’ budgets are finite – how can e-retailers today know where to focus their energies, attention and resources in mobile to produce the greatest return? This workshop will cover new developments in mobile marketing and technology and the choices retailers are making about both that are winning customers and sales. </a>

			                        </li>                                                
			                    	<li class=""></li>                                                                                             
			                    </ul>
			                     <hr style="margin:0px">
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

							
								if(strpos($section, "where")){
								$section .= "and day_date like '%2016-06-10%' ";
								} else {
									$section .= "where day_date like '%2016-06-10%' ";
								}
							

							
							 $section .= ' order by day_date, start_time aSC';
							//var_dump($section);
							?>
							
							<?php
							$query=mysql_query($section);  
							?> 
			         <div id="form-container" class="formblock">
			                <form id="conference-form" class="cf2" action="http://www.irce.com/conference/agenda-by-day/#post-conference">
					
			                  <input name="title" placeholder="Search" type="text" value="" style="width:75% !important">
			                  
			                  <div class="educ-button">
			                    <input value="Submit" type="submit" class="submit">
			                    <button class="reset">Reset</button>
			                  </div>
			                </form>
			                <ul class="exhibitors">
			                  <li class="cf2 ex-header">
			                    <div> <a class="el-print" href="javascript:window.print();"> <span>Print</span> </a> Sort by <a href="#" class="current"> Date</a> | <a href="#">Title</a> </div>
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
			       				 <input type="button" class="learnmorebtn" id="loadMore1" value="Load More">             
			   			 	</div>
			            </div>
			        </div>
				
			      </section>
			    </article>
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
				
				var $tabs = $('#tabs').tabs();
				var selected = $tabs.tabs('option', 'active');
					
					var tabID = "#pre-conference"	
					if(window.location.hash != ''){ 
						tabID = window.location.hash;
					} 		
					
					var currentIndex = 10;
					var numMore = 10;
					var totalItems = $(tabID +" ul.exhibitors li.exhibitor").length;
					var maxCount = 200;

					$(tabID+" ul.exhibitors li.exhibitor").hide();
					$(tabID+" ul.exhibitors li.exhibitor").addClass("firstLoad");
					if ($( tabID+" ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 
						$(tabID+" ul.exhibitors li.firstLoad").slice(0,10).show();
						clickButton();
					}

					function clickButton() {
				    var currentLength = $(tabID+" ul.exhibitors li.firstLoad:visible").length;
				        if (currentLength >= totalItems || currentLength >= maxCount) {
				            $(tabID+ " #loadMore"+selected).hide();     
				            $(tabID+ " .lm-block"+selected).hide();       
				   	        $(tabID+ " ul.exhibitors li.exhibitor").removeClass("firstLoad");			
				        } else {
				            $(tabID+ " #loadMore"+selected).show();
				            $(tabID+ " .lm-block"+selected).show();   
				        }
					}

					$("#loadMore"+selected).click(function (e) { 
				    	e.preventDefault();
						if ($( tabID+" ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 
							    $(tabID+" ul.exhibitors li.firstLoad").slice(currentIndex, currentIndex + 10).show();	
							    currentIndex += 10;
						    	clickButton();			   
					    } 

					});
				});


				/*** Reset Button **/			
				$(document).on('click','.reset',function(){
					window.location.href = "";
					return false; 	})

						/*** Tab functionality**/
				$(window).load(function() {
				$('#tabs').tabs({

							    beforeActivate: function(event, ui) {
				     				window.location.hash = ui.newPanel.selector;
							    },	
					            activate: function(event, ui){
								var $activeTab = $('#tabs').tabs('option', 'active');
				//				window.location.hash = ui.newPanel.selector;	
								var tabValue = 	ui.newPanel.selector;	
								
						 
								 if ($activeTab == 0) {

									var tabID ="#pre-conference"; 
									var currentIndex = 10;
									var numMore = 10;
									var totalItems = $("#pre-conference ul.exhibitors li.exhibitor").length;
									var maxCount = 200;					 

									$("#pre-conference ul.exhibitors li.exhibitor").hide();
									$("#pre-conference ul.exhibitors li.exhibitor").addClass("firstLoad");
									if ($( "#pre-conference ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 
										$("#pre-conference ul.exhibitors li.firstLoad").slice(0,10).show();
										showButton("#pre-conference", $activeTab);
									}

									$("#loadMore0").click(function (e) { 
								    	e.preventDefault();
										if ($(tabValue+ " ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 
										    $(tabValue+ " ul.exhibitors li.firstLoad").slice(currentIndex, currentIndex + 10).show();	
										    currentIndex += 10;
											showButton("#pre-conference", $activeTab);
									    } 
									});					


								}

								if ($activeTab == 1) {
									var tabID ="#day1"; 
									var currentIndex = 10;
									var numMore = 10;
									var totalItems = $("#day1 ul.exhibitors li.exhibitor").length;
									var maxCount = 200;					 

									$("#day1 ul.exhibitors li.exhibitor").hide();
									$("#day1 ul.exhibitors li.exhibitor").addClass("firstLoad");
									if ($( "#day1 ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 
										$("#day1 ul.exhibitors li.firstLoad").slice(0,10).show();
										showButton("#day1", $activeTab);
									}
									$("#loadMore1").click(function (e) { 
								    	e.preventDefault();
										if ($(tabValue+ " ul.exhibitors li.exhibitor" ).hasClass( "firstLoad" )) { 
										    $(tabValue+ " ul.exhibitors li.firstLoad").slice(currentIndex, currentIndex + 10).show();	
										    currentIndex += 10;
											showButton("#pre-conference", $activeTab);
									    } 
									});										

								 }



								 if ($activeTab == 2) {}
								 if ($activeTab == 3) {}


							        function showButton(id, index) {
									    var currentLength = $(id+" ul.exhibitors li.firstLoad:visible").length;
								        if (currentLength >= totalItems || currentLength >= maxCount) {
								            $(id+" #loadMore"+index).hide();     
				    	    			    $(id+" .lm-block"+index).hide();       
							   		        $(id+" ul.exhibitors li.exhibitor").removeClass("firstLoad");			
					        			} else {
								            $(id+" #loadMore"+index).show();
				        	    			$(id+" .lm-block"+index).show();   
								        }
									 }
							}									
				    });
				});		
				    </script>
				
				</div>

				<aside>

            <?php get_sidebar(); ?>

			</aside>

			

        </div>

		</div>

<?php get_footer(); ?>
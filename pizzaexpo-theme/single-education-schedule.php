<?php

/*

Template Name Posts: Education Schedule

*/

?>
<?php get_header(); ?>

    <div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
    
    <div id="main" class="container">

        <div id="content" class="col-md-8 col-sm-7">
        
            <article class="entry">



			<div id="education-schedule" class="educSched-formblock"> 
		        <script type="text/javascript">

								$(document).on('click','.reset',function(){
									window.location.href = "";
									return false; 
								})
								</script>
		        <form id="education-schedule-form" class="cf" action="">
		          <input name="title" placeholder="Titles, Keywords and Speakers" type="text" value="">
		          <div class="date">
		            <select class="dd1" name="date">
		              <option value="date1">Date 1</option>
		              <option value="date2">Date 2</option>
		            </select>
		          </div>
		          <div class="event">
		            <select class="dd1" name="event">
		              <option value="event1">Event Specific</option>
		              <option value="event2">Event Specific2</option>
		            </select>
		          </div>
		          <div class="educ-button">
			          <input value="Submit" type="submit" class="submit">
		    	      <button class="reset">Reset</button>
		          </div>

		          <div class="containerOptions cf" style="display:block;">
		            <div class="headerOptions"><span>More Options</span></div>
		            <div class="contentOptions">
		              <ul>
		                <li>
		                  <select class="dd2" name="type">
		                    <option value="type1">Type</option>
		                    <option value="type2">Type2</option>
		                  </select>
		                </li>
		                <li>
		                  <select class="dd2" name="location">
		                    <option value="location1">Location</option>
		                    <option value="location2">Location2</option>
		                  </select>
		                </li>
		                <li>
		                  <select class="dd2" name="track">
		                    <option value="track1">Track</option>
		                    <option value="track2">Track2</option>
		                  </select>
		                </li>
		                <li>
		                  <select class="dd2" name="focus">
		                    <option value="focus">Focus</option>
		                    <option value="focus2">Focus2</option>
		                  </select>
		                </li>
		                <li>
		                  <select class="dd2" name="speaker">
		                    <option value="speaker1">Speaker</option>
		                    <option value="speaker2">Speaker2</option>
		                  </select>
		                </li>
		              </ul>
		            </div>
		          </div>
		        </form>


		        <ul class="exhibitors">
		          <li class="cf ex-header">
		            <div><a class="print" href="javascript:window.print();"> <span> <img src="http://www.pizzaexpo.com/wp-content/themes/pizzaexpo-theme/img/print.png">PRINT</span> </a>
		            </div>
		            <div>SORT BY <a href="#" class="current"> TITLE</a> | <a href="#">DATE</a></div>
		          </li>


		          <li class="cf exhibitor $ ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>
		        		    <p>Jim Dion, Founder & President, Dionco, Inc.</p>

				        	<p><strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
				            <p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>

		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>


		          <li class="cf exhibitor 2 ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 11:30 AM to 1:00 PM</h4>
		    		         <h4 class="event-title"><a href="#">Delivering Exceptional Customer Service While "Having a Great Day Everyday"</a></h4>

		        		    <p>Steve Beck, Founder & President, Beck and Associates<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."<br/>
		                    Steve will give you the knowledge that sets the tone for every customer interaction. He provides the insights and methods that will assist you in understanding your ability to deliver exceptional customer service to everyone on a daily basis in every interaction.<br/>
		Steve will discuss:<br/>
							<ul>
		                    	<li>How to create customer loyalty</li>
		                        <li>What it takes to Have a Great Day Everyday'</li>
		                        <li>How much attitude affects everyone in life</li>
		                        <li>Information every manager needs to know to be effective</li>
		                        <li>Improving relationships at work and at home</li>
		                        <li>The impact of body language and the message it sends</li>                                                                        
		                    </ul>
		                    <br/>
		                    Steve will also present the national mystery shopping results from the NBDA's America's Best Bike Shops program. What do bike shops do well as a whole? Where are areas for potential improvement? All will be included in this session.
		                    </div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>

		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>

		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>
		          <li class="cf exhibitor A ">
		            <div> 
			            <section class="cf">
			    	         <h4 class="event-date">Tue, Sep 15, 2015 - 10:00 AM to 11:00 AM</h4>
		    		         <h4 class="event-title"><a href="#">How Technology is Transforming Retail As We Know It</a></h4>

		        		    <p>Jim Dion, Founder & President, Dionco, Inc.<br/>
				        	    <strong>Type:</strong> Seminar<br/>
								<strong>Track:</strong> NBDA Super Seminars Plus<br/>
								<strong>Location:</strong> Tradewinds C-F<br/>
								<strong>Focus:</strong> Best Practices<br/>
								<strong>Event Specific:</strong> Interbike, OutDoor Demo
				            </p>

				            <div class="read-more-content">This seminar is about realizing that if you deliver exceptional customer service, your customers will return and those customers will become loyal customers. Discover your job is not just a job, but in fact a performance on "How to Be Their Best Every Day by Having a Great Day Every Day."</div>
		    		        <p class="read-more-toggle">Read more</p>                

		        	    </section> 
			            <section>
							<p class="add-planner"><a href="#"><img src="images/add-icon.png" border="0" /><span>Add to Planner</span></a></p>
		        	    </section>
		            </div>
		          </li>

		        </ul>
		      </div>
		      <div class="loadbutton lm-block" style="background-color:none;background:#fff">
		        <button class="loadmore" id="loadMore">Load More</button>
		      </div>


		    </article>
		  </div>
		  <div id="script"> 
		    <script type="text/javascript">
					        $('document').ready(function(){
								/*$(".exhibitors .exhibitor").hide(); 

								$(".exhibitors .exhibitor").each(function(index) {
								  $(this).addClass(''+index);
								  $(this).hide(); 
								});


								 $(".exhibitors .exhibitor:lt(10)").show(); 
								var displaycount = 10;
								$(".loadmore").click(function(){
									$(".exhibitors .exhibitor:lt("+displaycount+")").show();
									displaycount = displaycount + 10; 
								})
					            $('.filter-letter').click(function(){
					                $('.sort-letters').fadeToggle();
					            });

								*/
					        /*$('.exhibitors .exhibitor').not('a').on("click", function(){
					        	if($('span', this).hasClass('open-detail') == true){
									$('.exhibitors li span').removeClass('open-detail');
									$('.detail').slideUp();
								} else{
									$('.exhibitors li span').removeClass('open-detail');
					                $('.detail').slideUp();
					                $('.detail', this).slideToggle();
					                $('span', this).addClass('open-detail');
								}
							   	$('.detail', this).not('a').click(function( event ) {
								  event.stopPropagation();
								  // Do something
								});
					            });*/

								$('.letter').click(function(){
									$('.loadmore').hide(); 
									var sletter = $(this).text();
									$('.loadmore').attr("data-letter", sletter);
									console.log(sletter);  
									if ($('.exhibitor').hasClass(sletter)){
										$('.exhibitor').hide();
										$('.' + sletter).show();
									}

								})
					        });
					        </script>
		  
		  </div>












		    <div id="sidebar" class="col-md-4 col-sm-5">		
				<?php get_sidebar(); ?>
			</div>

	</div>

	<?php get_footer(); ?>
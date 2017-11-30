<?php

/*

Template Name Posts: Exhibitors List

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

<style type="text/css">



                #exhibitor-list{

                    width: 100%;

                    background-color: #e3e3e4;

                }

                #exhibitor-list form{

                    padding: 5px;

                }

                #exhibitor-list form > * {

                    float: left;

                }

                #exhibitor-list form input{

                    height: 50px;

                    margin: 3px;

                    padding: 5px;

                }

                #exhibitor-list form div.floor{

                    display: inline-block;

                    overflow: hidden;

                    border: 1px solid #aaa;

                    width: 19%;

                    height: 50px;

                    margin: 3px;

                }

                #exhibitor-list form div.category{

                    overflow: hidden;

                    display: inline-block;

                    border: 1px solid #aaa;

                    width: 19%;

                    height: 50px;

                    margin: 3px;

                }

                #exhibitor-list form input[name="terms"]{

                    width: 70%;

                    border: 1px solid #aaa;



                }

                #exhibitor-list form select[name="floor"]{

                    width: 110%;

                    height: 50px;

                    /*margin: 5px;*/

                }

                #exhibitor-list form select[name="category"]{

                    width: 110%;

                    height: 50px;



                    /*margin: 5px;*/

                }

                #exhibitor-list form select{

                    background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/select-d.png');

                    background-repeat: no-repeat;

                    background-position: 86% 50%;

                    border: none;

                    -webkit-appearance:none;

                    border-radius: 0;

                    padding-left: 5px;

                }

                #exhibitor-list form select option{

                    width: 100%;

                    height: 50px;

                }

                #exhibitor-list form input[type="submit"]{

                    width: 14%;

                    border: 0;

                    background-color: #0073DE;

                    color: #fff;

                }

                #exhibitor-list form .reset{

                    width: 11%;

                    border: 0;

                    color: #FFF;

                    border-radius: 0px;

                    border: none;

                    background: #333333;

                    outline: 0;

      

                    height: 50px;

                    margin-top: 3px;

                }

                #exhibitor-list ul{

                    width: 100%;

                    margin: 0;

                }

                #exhibitor-list > ul > li{

                    background-color: #fff;

                }

                #exhibitor-list > ul > li:nth-of-type(2n){

                    background-color: #fff;

                }

                #exhibitor-list ul li{

                    list-style: none;

                }

                #exhibitor-list > ul > li > div:nth-of-type(1){

                    border-bottom: 1px solid #ccc;

                    padding: 0px;

                    cursor: pointer;

                

                }

                #exhibitor-list > ul > li.ex-header > div{

                    border-bottom: 1px solid #ccc;

                    border-top: 0;

                    padding: 10px;

                    display: inline-block;

                    float: left;

                    font-weight: bold;

		    

                }

		#exhibitor-list > ul > li.ex-header-sub > div{

                    border-bottom: 1px solid #ccc;

                    border-top: 0;

                    padding: 10px;

                    display: inline-block;

                    float: left;

                    font-weight: bold;

		    

                }

            

                #exhibitor-list > ul > li > div > span{

                    height: 100%;

                    padding: 10px;

                    display: inline-block;

                    float: left;

                    cursor: pointer;

                    padding-top: 15px;

                }

                #exhibitor-list > ul > li > div > span:nth-of-type(2){

                    border-left: 0px solid #ccc;

                }

                 #exhibitor-list ul li.ex-header:hover > div{

                        

                        font-weight: bold;

                    }
		#exhibitor-list ul li.ex-header-sub:hover > div{

                        

                        font-weight: bold;

                    }

                #exhibitor-list > ul > li:hover > div:nth-of-type(1) {

                    background-color: #818181;

                    color: #fff;

                }

                #exhibitor-list ul li.ex-header:hover > div{

                       background:#fff;

                        color:#000;

                        font-weight: bold;

                    }

		#exhibitor-list ul li.ex-header-sub:hover > div{

                       background:#fff;

                        color:#000;

                        font-weight: bold;

                    }

                #exhibitor-list > ul > li > span.open-detail{

                    background-color: #000;

                    color: #fff;

                }

                #exhibitor-list ul li.ex-header{

                    /*background-color: #f4f4f4;*/

                    font-weight: bold;

                }

		 #exhibitor-list ul li.ex-header-sub{

                    /*background-color: #f4f4f4;*/

                    font-weight: bold;

                }

                #exhibitor-list ul .ex-header:hover > div{

                    background-color: #f4f4f4;

                    font-weight: bold;

                    color: #000;

                }

		#exhibitor-list ul .ex-header-sub:hover > div{

                    background-color: #f4f4f4;

                    font-weight: bold;

                    color: #000;

                }

                #exhibitor-list > ul > li > div:nth-of-type(1){

                        width: 100%;

                }

                #exhibitor-list > ul > li.ex-header > div:nth-of-type(1){

                    width: 84%;

                }

		#exhibitor-list > ul > li.ex-header-sub > div:nth-of-type(1){

                    width: 84%;

                }

                #exhibitor-list > ul > li.ex-header > div:nth-of-type(2){

                    width: 16%;

                }

                 #exhibitor-list > ul > li.ex-header-sub > div:nth-of-type(2){

                    width: 16%;

                }

                #exhibitor-list > ul > li > div > span:nth-of-type(1){

                    width: 84%;

                    font-weight: bold;



                }

                #exhibitor-list > ul > li > div > span:nth-of-type(2){

                    width: 16%;

                    

                }

                #exhibitor-list .detail{

                    padding: 10px;

                    clear: both;

                    background-color: #fff;

                    border-bottom: 1px solid #ccc;

                    border-top: none;

                    width: 100%!important;

                    /*height: 240px;*/

                    display: none;

                }

                #exhibitor-list .detail .logo{

                    height: 100%;

                    float: left;

                    width: 36%;

                    border-right: solid #f4f4f4 0px;

                    text-align: center;

                    padding: 6% 0;

                }

                #exhibitor-list .detail .logo img{

                    max-width: 288px;

                    width: 96%;

                    max-height: 72px;

                    height: auto;

                    display: inline-block;

                    margin: auto;

                    vertical-align: middle;

                }

                #exhibitor-list .detail .logo span{

                    display: inline-block;

                    vertical-align: middle;

                    height: 100%;

                }



                #exhibitor-list .detail ul{

                    width: 63%;

                    float: left;

                    list-style-type: none;

                }

                #exhibitor-list .detail ul li{

                    display: block;

                    margin: 1%;

                    width: 48%;

                    float: left;

                    font-weight: normal;

                    list-style-position: inside;

                    /*list-type:none;*/

                    list-style:none;

                    list-style-type: none;

                }

                #exhibitor-list .detail ul li span{

                    font-weight: bold;

                }

                .filter-letter{

                    float: right;

                    margin-right: 15px;

                }

                .filter-letter > a{

                    color: #888888;

                }

                .filter-letter > a:hover{

                    color: #333;

                    text-decoration: none;

                }

                .filter-letter a{

                    cursor: pointer;

                    text-decoration: none;

                }

                .sort-letters{

                    width: 300px;

                    position: absolute;

                    background-color: #fff;

                    border: 1px solid #ccc;

                    display: none;

                }

                .sort-letters div{

                    background-color: #fff;

                    padding: 10px;

                }

                .sort-letters a{

                    text-decoration: underline;

                }

                .sort-letters p{

                    background-color: #f5f5f5;

                    color: #333;

                    padding: 10px!important;

                    margin: 0 !important;

       

                }

                #exhibitor-list ul li.ex-header a{}

                #exhibitor-list ul li.ex-header a span{

                    color: #888888;

                    position: relative;

                    padding-left: 18px;

                    float: right;

                }

		#exhibitor-list ul li.ex-header-sub a span{

                    color: #888888;

                    position: relative;

                    padding-left: 18px;

                    float: right;

                }

                #exhibitor-list ul li.ex-header .print img{

                    opacity: 0.6;

                    position: absolute;

                    top: 2px;

                    left: -1px;

                }
		 #exhibitor-list ul li.ex-header-sub .print img{

                    opacity: 0.6;

                    position: absolute;

                    top: 2px;

                    left: -1px;

                }
                #exhibitor-list ul li.ex-header a:nth-of-type(2) img{

                    opacity: 1;

                    position: relative;

                }
		#exhibitor-list ul li.ex-header-sub a:nth-of-type(2) img{

                    opacity: 1;

                    position: relative;

                }
                #exhibitor-list ul li.ex-header a:hover span{

                    color: #333;

                }
		 #exhibitor-list ul li.ex-header-sub a:hover span{

                    color: #333;

                }
                #exhibitor-list ul li.ex-header a:hover img{

                    opacity: 1;

                    

                }
		#exhibitor-list ul li.ex-header-sub a:hover img{

                    opacity: 1;

                    

                }

                .sort-letters .letter{

                    display: inline-block;

                    margin: 10px;

                    width: 5px;

                }



                /*

                @media screen and (min-width: 767px) and (max-width: 959px){

                    #exhibitor-list .detail{

                        height: 200px;

                    }

                    #exhibitor-list .detail .logo img {

                        

                        width: 97%;

                    }

                }

                */

                @media screen and (max-width: 959px){

                    #exhibitor-list ul li.ex-header{

                        height: 60px;

                    }

                    #exhibitor-list > ul > li > div > span:nth-of-type(1){

                        width: 63%;

                    }

                    #exhibitor-list > ul > li > div > span:nth-of-type(2){

                        width: 36%;

                    }

                     #exhibitor-list > ul > li > div:nth-of-type(1){

                                width: 100%;

                        }

                        #exhibitor-list > ul > li.ex-header > div:nth-of-type(1){

                            width: 63%;

                        }

                        #exhibitor-list > ul > li.ex-header > div:nth-of-type(2){

                            width: 36%;

                        }

                    #exhibitor-list form select[name="category"] {

                            height: 50px;

                            width: 113% !important;

                            margin:0px !important;

                            padding:3px !important;

                        }

                   #exhibitor-list form div.category {

                        margin:0px !important;

                    }

                    #exhibitor-list form select[name="floor"] {

                            height: 50px;

                            width: 113% !important;

                            margin:0px !important;

                            padding:3px !important;

                        }

                   #exhibitor-list form div.floor {

                        margin: 0px !important;

                        margin-bottom: 5px !important;

                    }

                    #exhibitor-list form input, #exhibitor-list form select{

                        width: 100%!important;

                        display: block;

                        margin: 5px 0px !important;

                    }

                    #exhibitor-list .reset {

                        width: 100%!important;

                        display: block;

                        margin: 5px 0px !important;

                    }

                    #exhibitor-list form div.floor {

                        display: inline-block;

                        overflow: hidden;

                        border: 1px solid #AAA;

                        width: 100%;

                        height: 50px;

                        margin: 3px;

                    }

                    #exhibitor-list form div.category {

                        display: inline-block;

                        overflow: hidden;

                        border: 1px solid #AAA;

                        width: 100%;

                        height: 50px;

                        margin: 3px;

                    }

                    #exhibitor-list > ul > li > div{

                        height: 100%;

                    }

                    #exhibitor-list .detail .logo img {

                    margin-bottom:15px;

                    }

                    #exhibitor-list .detail {

                        padding: 10px;

                        clear: both;

                        background-color: #fff;

                        border: 1px solid #ccc;

                        border-top: none;

                        width: 100%!important;

                        height: auto;

                    }

                    #exhibitor-list .detail .logo{

                        float: none;

                        width: 100%;

                        border-right: none;

                    }

                    #exhibitor-list .detail ul {

                        width: 100%;

                        float: none;

                        list-style-type: none;

                    }

                    #exhibitor-list .detail ul li {

                        display: block;

                        margin: 1%;

                        width: 98%;

                        float: none;

                        list-style-type: none;

                    }

                    #exhibitor-list .detail .logo img{

                        display: block;

                    }

                    #exhibitor-list .detail .logo span{

                        display: none;

                    }

                }

                @media screen and (max-width: 767px){

                    #exhibitor-list ul li.ex-header {

                        height: 110px;

                    }

		     #exhibitor-list ul li.ex-header-sub span {

                        margin:4px 0px 4px 0px; 

                    }

                    #exhibitor-list .detail .logo img {

                      max-width: 288px;

                    }

                    .ex-header div > span{

                        display: block;

                        float: none !important;

                    }
			.ex-header-sub div > span{

                        display: block;

                        float: none !important;

                    }

                    .filter-letter{

                        width: 185px;

                        float: none;

                        display: block;

                        float:right;

                        text-align:right;

                        margin:10px 0px;

                    }

                    .sort-letters {

                        text-align:left;

                    }

                }

                .loadmore {

                color: #FFF;

                border-radius: 0px;

                border:none;

                width: 50%;

                height: 50px;

                background: #0073DE;

                outline: 0;

           

                }

                 .loadbutton{

                    padding-top:10px;

                    text-align: center;

                }



            </style>

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

						<div class="open-text" style="margin-bottom:40px;border-bottom:2px solid #000;">

					            <?php

					            // Post Content here

					            the_content();

					           ?></div><?php

					        } // end while

					    } // end if

					    ?>

					

					    <h1 style="border:none;margin-top:40px ">Exhibitor List</h1>

					    <div id="exhibitor-list">

							<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

							<script type="text/javascript">



							$(document).on('click','.reset',function(){

								window.location.href = "http://www.irce.com/exhibitions/floor-plan-exhibitor-list/";

								return false; 

							})

							</script>

					        <form id="exhibitor-search" class="clearfunction" action="">

					            <input name="terms" placeholder="Company or Keyword" type="text" value="<?php echo $_GET['terms']; ?>">

					            <!-- <input name="floor" placeholder="Floor" type="text"> -->

					            <!-- <input name="category" placeholder="Category" type="text"> -->

					            <!--
					            <div class="category">

					                <select name="category">

					                    <option>Category</option>

										<?php 

											//$categories = "SELECT * FROM goexpo_exhibitors_category order by `category` asc";

											//$categories_query=mysql_query($categories);

											//while($categories_data=mysql_fetch_array($categories_query)){

										?>

										<option <?php //if($_GET['category'] == $categories_data['category']){ echo 'selected'; } ?>><?php //echo $categories_data['category'] ?></option>

									    <?php

										//}

										?>

					                </select>

					            </div> //-->

					            <input value="Submit" type="submit" class="submit">

								<button class="reset">Reset</button>

					        </form>

					        <ul class="exhibitors">

					            <li class="clearfunction ex-header">

					                <div>Company 

					                    <a class="printel" href="javascript:window.print();">

					                        <span>

					                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/print.png">Print List</span>

					                    </a>

					                    <div class="filter-letter" style="color: #888888; display:inline-block;position: relative;">

					                    <a>Sort by Letter <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sort-d.png"></a> 

					                        <div class="sort-letters">

					                            <p>Sort by Letter <img style="cursor: pointer; width:auto;float: right; border: none; padding: 0; margin-top: 5px;" src="<?php bloginfo('stylesheet_directory'); ?>/images/close.png"></p>



					                            <div>

					                                <a class="letter" href="#">A</a>

													<a class="letter" href="#">B</a>

													<a class="letter" href="#">C</a>

													<a class="letter" href="#">D</a>

													<a class="letter" href="#">E</a>

													<a class="letter" href="#">F</a>

													<a class="letter" href="#">G</a>

													<a class="letter" href="#">H</a>

													<a class="letter" href="#">I</a>

													<a class="letter" href="#">J</a>

													<a class="letter" href="#">K</a>

													<a class="letter" href="#">L</a>

													<a class="letter" href="#">M</a>

													<a class="letter" href="#">N</a>

													<a class="letter" href="#">O</a>

													<a class="letter" href="#">P</a>

													<a class="letter" href="#">Q</a>

													<a class="letter" href="#">R</a>

													<a class="letter" href="#">S</a>

													<a class="letter" href="#">T</a>

													<a class="letter" href="#">U</a>

													<a class="letter" href="#">V</a>

													<a class="letter" href="#">W</a>

													<a class="letter" href="#">X</a>

													<a class="letter" href="#">Y</a>

													<a class="letter" href="#">Z</a>

					                            </div>

					                        </div>

					                    </div> 

					                </div>

					                <div>Booth</div> 

					       
									
								</li>
								<li class="clearfunction ex-header-sub" style="border-bottom:1px solid #AAA;padding-top:5px;padding-bottom:5px;">
								
									<span style="width:190px;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_enhanced.png" style="margin-top:-5px;margin-right:5px;">Enhanced Exhibitor</span>
									<span style="width:190px;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_conference.png" style="margin-right:5px;">Conference Sponsor</span>
									<span style="width:190px;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_platinum.png" style="margin-right:5px;">Platinum Sponsor</span>
									<span style="width:190px;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_gold.png" style="margin-right:5px;">Gold Sponsor</span>
									<span style="width:190px;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_silver.png" style="margin-right:5px;">Silver Sponsor</span>
									<span style="width:190px;float:left;font-weight: 400;"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_diamond.png" style="margin-right:5px;">Diamond Sponsor</span>

						
								</li>
								<?php

								$terms = $_GET["terms"];

								$letter = $_GET["letter"];

								$floor = $_GET["floor"];

								$category = $_GET["category"];



								$section = "SELECT * FROM goexpo_exhibitors";



								if($terms != ""){ $section .= " WHERE company_name LIKE '%".$terms."%'"; }



								if($floor != "Floor" && $floor != ""){ 

									if($terms == ""){ $section .= " WHERE"; }else{ $section .= " AND"; }

									$floorquery="SELECT * FROM goexpo_exhibitors_floors WHERE name = '".$floor."'";

									$fquery=mysql_query($floorquery);

									$fdata=mysql_fetch_array($fquery);

									$section .= " area_id = '".$fdata['area_id']."' "; 

								}



								if($category != "Category" && $category != ""){ 

									if($terms == "" && $floor == 'Floor'){ $section .= " WHERE"; }else{ $section .= " AND"; }

									$section .= " category LIKE '%".$category."%' "; 

								}



								if($letter != ""){ $section .= " WHERE company_name LIKE '".$letter."%'"; }



								if($terms || $category || $letter){

									$resultsPerPage = 0; 

									$section .= " order by `company_name` asc";

								}else{

									$section .= " order by `company_name` asc";	

								}

								//echo $section; 

								$query=mysql_query($section);



								while($data=mysql_fetch_array($query)){





									$company_name = $data['company_name'];

									$booth_number = $data['booth_id'];

									$company_logo = $data['logo'];

									$contact_name = $data['contact_name'];

									$contact_phone = $data['contact_phone'];

									$categories = $data['category'];

									$company_website = $data['contact_website'];

									$company_email = $data['contact_email'];

									$explodeBooth = str_replace(",", "<br>", $booth_number); 

									$exid = $data['exid'];

									$__id = $data['__id'];

									$arr = explode(",", $booth_number); 

									$sortletter = substr($company_name, 0, 1);



					            $exhibitorReturn = "<li class=\"clearfunction exhibitor $sortletter \">

									<div>

					                <span>$company_name</span>";

					                
										if($explodeBooth){
											$exhibitorReturn .= "<span><div style=\"width:60px;float:left;\">$explodeBooth</div>";
										}else{ 
											$exhibitorReturn .= "<span><div style=\"width:60px;float:left;\">&nbsp;</div>";
										} 
										if($data['enhanced']){
											$exhibitorReturn .= "<div style=\"width:17px;float:left;font-weight: 400;\"><img src=\"". get_template_directory_uri() ."/images/ico_enhanced.png\"></div>";
										}else{
											$exhibitorReturn .= "<div style=\"width:17px;float:left;font-weight: 400;\"></div>";
										}
										if($data['sponsorship'] == "Confernece Sponsor"){
										$exhibitorReturn .= "<div style=\"width:17px;float:right;font-weight: 400;\"><img src=\"".  get_template_directory_uri() ."/images/ico_conference.png\"></div>";
										}elseif($data['sponsorship'] == "Platinum Sponsor"){
										$exhibitorReturn .= "<div style=\"width:17px;float:right;font-weight: 400;\"><img src=\"".  get_template_directory_uri() ."/images/ico_platinum.png\"></div>";
										}elseif($data['sponsorship'] == "Gold Sponsor"){
										$exhibitorReturn .= "<div style=\"width:17px;float:right;font-weight: 400;\"><img src=\"".  get_template_directory_uri() ."/images/ico_gold.png\"></div>";
										}elseif($data['sponsorship'] == "Silver Sponsor"){
										$exhibitorReturn .= "<div style=\"width:17px;float:right;font-weight: 400;\"><img src=\"".  get_template_directory_uri() ."/images/ico_silver.png\"></div>";
										}elseif($data['sponsorship'] == "Diamond Sponsor"){
										$exhibitorReturn .= "<div style=\"width:17px;float:right;font-weight: 400;\"><img src=\"".  get_template_directory_uri() ."/images/ico_diamond.png\"></div>";
									        }else{
											$exhibitorReturn .= "<div style=\"width:17px;float:right;font-weight: 400;\"></div>";
										}
									$exhibitorReturn .= "</span>

									<div style=\"clear:both;\"></div>

									</div>

					                <div class=\"detail clearfunction\">";

										if($company_logo){ 

											$exhibitorReturn .= "<div class=\"logo\"><span></span><img src=\"$company_logo\" alt=\"\"></div>";

										}else{

											$exhibitorReturn .= "<div></div>";

										}

					                   $exhibitorReturn .= "<ul class=\"clearfunction\">";

					                        if($contact_name){ 

												//$exhibitorReturn .= "<li>Contact: <span>$contact_name</span></li>";

											}

					                        if($booth_number){ 

												$exhibitorReturn .= "<li>Booth: <span>";  

												$numItems = count($arr);

												$i = 0;

												foreach ($arr as $value) {

												    $exhibitorReturn .=  "<a href=\"https://n2b.goexposoftware.com/events/irce16/goExpo/floorPlan/viewFloorPlan.php?ei=$__id&zb=$value\" target=\"_blank\">".$value."</a>";

													if(++$i != $numItems) {

													    $exhibitorReturn .= ", ";

													  }

												}

												$exhibitorReturn .= "</span></li>";

											}

					                        if($contact_phone){ 

												//$exhibitorReturn .= "<li>Phone: <span>$contact_phone</span></li>";

											}

											if($categories){ 

												$exhibitorReturn .= "<li>Categories: <span>".str_replace(",", ", ", $categories)."</span></li>";

											}

												$exhibitorReturn .= "<li>";

					                        if($company_email){ 

												//$exhibitorReturn .= "<a href=\"mailto:$company_email\"><b>Email</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

											}

					                        if($company_website){ 

												$exhibitorReturn .= "<a href=\"$company_website\" target=\"_blank\"><b>Website</b></a>";

											}

												$exhibitorReturn .= "</li>";

					                        $exhibitorReturn .= "<li><span><a href=\"https://n2b.goexposoftware.com/events/irce16/goExpo/exhibitor/viewExhibitorProfile.php?__id=". $__id . "\" target=\"_blank\">More Information</a></span></li>

					                    </ul>

					                </div>



					            </li>";

								echo $exhibitorReturn; 





							}



							?>



					        </ul>







					    </div>



							<div class="loadbutton" style="background-color:none;background:#fff"><button class="loadmore">Load More</button></div>



						<?php



						if(mysql_num_rows($query) == 0) {

							?><style>.loadbutton {display:none;}</style><?php

							echo '<h2>We’re Sorry</h2>

							We couldn’t find an exhibitor that matched your search. Please try a different company name, category or view them all.';

						}

						?>



			       	<div id="script">

					        <script type="text/javascript">

					        $('document').ready(function(){

								$(".exhibitors .exhibitor").hide(); 







								$(".exhibitors .exhibitor").each(function(index) {

								  $(this).addClass(''+index);

								  $(this).hide(); 

								});





								 $(".exhibitors .exhibitor:lt(100)").show(); 

								var displaycount = 200;

								$(".loadmore").click(function(){

									$(".exhibitors .exhibitor:lt("+displaycount+")").show();

									displaycount = displaycount + 100; 

								})

					            $('.filter-letter').click(function(){

					                $('.sort-letters').fadeToggle();

					            });

					        $('.exhibitors .exhibitor').not('a').on("click", function(){

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

					            });



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

				

            		</section>

				  </article>

				</div>

				<aside>

            <?php get_sidebar(); ?>

			</aside>

			

        </div>

		</div>

<?php get_footer(); ?>
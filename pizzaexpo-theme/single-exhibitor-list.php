<?php
$hostname = "localhost";
$user = "pizzaexp_goexpo";
$password = "g03xp02015";
$database = "pizzaexp_wordpress";

$prefix = "";
//Loadmore configuarion
$resultsPerPage=0;
$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");
mysql_select_db($database, $bd) or die("Database Not Found");
?>
<?php

/*

Template Name Posts: Exhibitor List

*/

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
                    width: 73%;
                    border: 1px solid #aaa;

                }
                #exhibitor-list form select[name="floor"]{
                    width: 112%;
                    height: 50px;
                    /*margin: 5px;*/
                }
                #exhibitor-list form select[name="category"]{
                    width: 112%;
                    height: 50px;

                    /*margin: 5px;*/
                }
                #exhibitor-list form select{
                    background-image: url('<?php bloginfo('stylesheet_directory'); ?>/img/select-d.png');
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
                    background-color: #d71921;
                    color: #fff;
font-family: 'Source Sans Pro', sans-serif;
text-transform:uppercase;
                }
                #exhibitor-list form .reset{
                    width: 11%;
                    border: 0;
                    color: #FFF;
                    border-radius: 0px;
                    border: none;
                    background: #888;
                    outline: 0;
                    font-family: 'Source Sans Pro', sans-serif;
                    height: 50px;
                    margin-top: 3px;
					text-transform:uppercase;
                }
                #exhibitor-list ul{
                    width: 100%;
                    margin: 0;
					padding: 0px;
                }
                #exhibitor-list > ul > li{
                    background-color: #f4f4f4;
                }
                #exhibitor-list > ul > li:nth-of-type(2n){
                    background-color: #fff;
                }
                #exhibitor-list ul li{
                    list-style: none;
                }
                #exhibitor-list > ul > li > div:nth-of-type(1){
                    border-top: 1px solid #ccc;
                    padding: 0px;
                    cursor: pointer;
                
                }
                #exhibitor-list > ul > li.ex-header > div{
                    border: 1px solid #ccc;
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
                    /*border-left: 2px solid #ccc; */
                }
                 #exhibitor-list ul li.ex-header:hover > div{
                        background-color: #f4f4f4;
                        font-weight: bold;
                    }
                #exhibitor-list > ul > li:hover > div:nth-of-type(1) {
                    background-color: #000;
                    color: #fff;
                }
                #exhibitor-list ul li.ex-header:hover > div{
                        background-color: #f4f4f4;
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
                #exhibitor-list ul .ex-header:hover > div{
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
                #exhibitor-list > ul > li.ex-header > div:nth-of-type(2){
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
                    border-right: solid #f4f4f4 2px;
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
                #exhibitor-list ul li.ex-header .print img{
                    opacity: 0.6;
                    position: absolute;
                    top: 2px;
                    left: -1px;
                }
                #exhibitor-list ul li.ex-header a:nth-of-type(2) img{
                    opacity: 1;
                    position: relative;
                }
                #exhibitor-list ul li.ex-header a:hover span{
                    color: #333;
                }
                #exhibitor-list ul li.ex-header a:hover img{
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
                        width: 75%;
                    }
                    #exhibitor-list > ul > li > div > span:nth-of-type(2){
                        width: 25%;
                    }
                     #exhibitor-list > ul > li > div:nth-of-type(1){
                                width: 100%;
                        }
                        #exhibitor-list > ul > li.ex-header > div:nth-of-type(1){
                            width: 75%;
                        }
                        #exhibitor-list > ul > li.ex-header > div:nth-of-type(2){
                            width: 25%;
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
                        height: 80px;
                    }
                    #exhibitor-list .detail .logo img {
                      max-width: 288px;
                    }
                    .ex-header div > span{
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
                background: #d71921;
                outline: 0;
                font-family: 'Source Sans Pro', sans-serif;
		text-transform:uppercase;
                }
                 .loadbutton{
                    padding-top:10px;
                    text-align: center;
                }
            </style>
<div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
        <div id="main" class="container">
    <div id="content" class="col-md-8 col-sm-7">
      <article class="entry">
	<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
         <?php the_content(); ?>
	<? endwhile; endif; ?>
                    <div id="exhibitor-list">
						
						<script type="text/javascript">
					
						$(document).on('click','.reset',function(){
							window.location.href = "http://www.pizzaexpo.com/show/floor-plan-exhibitor-list";
							return false; 
						})
						</script>
                        <form id="searchbox" class="cf" action="">
                            <input name="terms" placeholder="Company or Keyword" type="text" value="<?php echo $_GET['terms']; ?>">
                            <!-- <input name="floor" placeholder="Floor" type="text"> -->
                            <!-- <input name="category" placeholder="Category" type="text"> -->
                            
                            <input value="Submit" type="submit" class="submit">
							<button class="reset">Reset</button>
                        </form>
                        <ul class="exhibitors">
                            <li class="cf ex-header">
                                <div>COMPANY 
                                    <a class="print" href="javascript:window.print();">
                                        <span>
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/print.png">PRINT LIST</span>
                                    </a>
                                    <div class="filter-letter" style="color: #888888; display:inline-block;position: relative;">
                                    <a>SORT BY LETTER <img src="<?php bloginfo('stylesheet_directory'); ?>/img/sort-d.png"></a> 
                                        <div class="sort-letters">
                                            <p>Sort by Letter <img style="cursor: pointer; width:auto;float: right; border: none; padding: 0; margin-top: 5px;" src="<?php bloginfo('stylesheet_directory'); ?>/img/close.png"></p>

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
                                <div>BOOTH</div> 
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
							
                            $exhibitorReturn = "<li class=\"cf exhibitor $sortletter \">
								<div>
                                <span>$company_name</span>
                                <span>$explodeBooth</span>
								<div style=\"clear:both;\"></div>
								</div>
                                <div class=\"detail cf\">";
									if($company_logo){ 
										$exhibitorReturn .= "<div class=\"logo\"><span></span><img src=\"$company_logo\" alt=\"\"></div>";
									}else{
										$exhibitorReturn .= "<div></div>";
									}
                                   $exhibitorReturn .= "<ul class=\"cf\">";
                                        if($contact_name){ 
											$exhibitorReturn .= "<li>Contact: <span>$contact_name</span></li>";
										}
                                        if($booth_number){ 
											$exhibitorReturn .= "<li>Booth: <span>";  
											$numItems = count($arr);
											$i = 0;
											foreach ($arr as $value) {
											    $exhibitorReturn .=  "<a href=\"https://n1b.goexposoftware.com/events/pe16/goExpo/floorPlan/viewFloorPlan.php?ei=$__id&zb=$value\" target=\"_blank\">".$value."</a>";
												if(++$i != $numItems) {
												    $exhibitorReturn .= ", ";
												  }
											}
											$exhibitorReturn .= "</span></li>";
										}
                                        if($contact_phone){ 
											$exhibitorReturn .= "<li>Phone: <span>$contact_phone</span></li>";
										}
										if($categories){ 
										$category_raw = $categories; 
		$category_array = explode(",", $category_raw); 
		$numItems = count($category_array);
		$i = 0;
$exhibitorReturn .= "<li>Categories: <span>";
		foreach($category_array as $value){
											
											
															if($value == "634-6203"){
					$exhibitorReturn .= "ATM Machines";
				}
				if($value == "634-6194"){
					$exhibitorReturn .= "Accounting/Bookkeeping/Payroll Services"; 
				}
				if($value == "634-6195"){
					$exhibitorReturn .= "Advertising/Marketing"; 
				}
				if($value == "634-6196"){
					$exhibitorReturn .= "Alcohol/Beer/Wine"; 
				}
				if($value == "634-6197"){
					$exhibitorReturn .= "Anchovies"; 
				}
				if($value == "634-6198"){
					$exhibitorReturn .= "Apparel/Footwear/Uniforms"; 
				}
				if($value == "634-6199"){
					$exhibitorReturn .= "Appetizers"; 
				}
				if($value == "634-6200"){
					$exhibitorReturn .= "Aprons & Bibs"; 
				}
				if($value == "634-6201"){
					$exhibitorReturn .= "Artichokes"; 
				}
				if($value == "634-6202"){
					$exhibitorReturn .= "Association/Organizations"; 
				}
				if($value == "634-6204"){
					$exhibitorReturn .= "Bacon/Canadian Bacon"; 
				}
				if($value == "634-6205"){
					$exhibitorReturn .= "Bags, Paper/Foil/Plastic/Custom"; 
				}
				if($value == "634-6206"){
					$exhibitorReturn .= "Baking Supplies/Bakeware/Stones"; 
				}
				if($value == "634-6207"){
					$exhibitorReturn .= "Balloons/Inflatables"; 
				}
    			if($value == "634-6208"){
					$exhibitorReturn .= "Banners"; 
				}
    			if($value == "634-6209"){
					$exhibitorReturn .= "Bar Equipment"; 
				}
    			if($value == "634-6210"){
					$exhibitorReturn .= "Beef/Toppings"; 
				}
    			if($value == "634-6211"){
					$exhibitorReturn .= "Beverage Carriers/Totes"; 
				}
    			if($value == "634-6212"){
					$exhibitorReturn .= "Beverage Dispensers/Access"; 
				}
    			if($value == "634-6213"){
					$exhibitorReturn .= "Beverage/Juices/Softdrinks"; 
				}
    			if($value == "634-6214"){
					$exhibitorReturn .= "Blending Equipment"; 
				}
    			if($value == "634-6215"){
					$exhibitorReturn .= "Boxes, Pizza Delivery"; 
				}
    			if($value == "634-6216"){
					$exhibitorReturn .= "Bread/Bread Products"; 
				}
    			if($value == "634-6217"){
					$exhibitorReturn .= "Buffets/Accessories"; 
				}
    			if($value == "634-6218"){
					$exhibitorReturn .= "Buffets/Sneeze Guards"; 
				}
    			if($value == "634-6219"){
					$exhibitorReturn .= "Calzone Equipment"; 
				}
    			if($value == "634-6220"){
					$exhibitorReturn .= "Can Openers"; 
				}
    			if($value == "634-6221"){
					$exhibitorReturn .= "Cannoli, Cream/Shells"; 
				}
    			if($value == "634-6222"){
					$exhibitorReturn .= "Cappuccino/Coffee/Espresso"; 
				}
    			if($value == "634-6223"){
					$exhibitorReturn .= "Carts, Equipment"; 
				}
    			if($value == "634-6224"){
					$exhibitorReturn .= "Carts, Vending"; 
				}
    			if($value == "634-6225"){
					$exhibitorReturn .= "Cash Handling Systems/Registers"; 
				}
    			if($value == "634-6226"){
					$exhibitorReturn .= "Catering Supplies/Equipment"; 
				}
    			if($value == "634-6227"){
					$exhibitorReturn .= "Central Number System"; 
				}
    			if($value == "634-6228"){
					$exhibitorReturn .= "Check Verification/Recovery"; 
				}
    			if($value == "634-6229"){
					$exhibitorReturn .= "Cheese Equipment"; 
				}
    			if($value == "634-6230"){
					$exhibitorReturn .= "Cheese/Cheese Alternatives"; 
				}
    			if($value == "634-6231"){
					$exhibitorReturn .= "Chicken"; 
				}
    			if($value == "634-6232"){
					$exhibitorReturn .= "Chicken Wings"; 
				}
    			if($value == "634-6233"){
					$exhibitorReturn .= "Cleaning Equipment/Products"; 
				}
   			    if($value == " 634-6234"){
					$exhibitorReturn .= "Coffee Equipment"; 
				}
    			if($value == "634-6235"){
					$exhibitorReturn .= "Computer Accessories/Equipment"; 
				}
    			if($value == "634-6236"){
					$exhibitorReturn .= "Computer Systems"; 
				}
    			if($value == "634-6237"){
					$exhibitorReturn .= "Condiments"; 
				}

	
						
if($value == "634-6238"){
					$exhibitorReturn .= "Consulting Services"; 
				}
if($value == "634-6239"){
					$exhibitorReturn .= "Cookies/Dough"; 
				}
if($value == "634-6240"){
					$exhibitorReturn .= "Cookware"; 
				}
if($value == "634-6241"){
					$exhibitorReturn .= "Costumes/Mascots"; 
				}
if($value == "634-6242"){
					$exhibitorReturn .= "Credit Card Equip/Processing"; 
				}
if($value == "634-6243"){
					$exhibitorReturn .= "Crusts"; 
				}
if($value == "634-6244"){
					$exhibitorReturn .= "Crusts, Frozen"; 
				}
if($value == "634-6245"){
					$exhibitorReturn .= "Crusts, Par-baked"; 
				}
if($value == "634-6246"){
					$exhibitorReturn .= "Crusts, Pre-baked"; 
				}
if($value == "634-6247"){
					$exhibitorReturn .= "Cups/Glasses"; 
				}
if($value == "634-6248"){
					$exhibitorReturn .= "Cutlery"; 
				}
if($value == "634-6249"){
					$exhibitorReturn .= "Cutting Boards"; 
				}
if($value == "634-6250"){
					$exhibitorReturn .= "Dairy Marketing"; 
				}
if($value == "634-6251"){
					$exhibitorReturn .= "Delivery Bags"; 
				}
if($value == "634-6252"){
					$exhibitorReturn .= "Delivery Systems/Services"; 
				}
if($value == "634-6253"){
					$exhibitorReturn .= "Delivery Vehicles"; 
				}
if($value == "634-6254"){
					$exhibitorReturn .= "Desserts"; 
				}
if($value == "634-6255"){
					$exhibitorReturn .= "Dinnerware/Drinkware"; 
				}
if($value == "634-6256"){
					$exhibitorReturn .= "Dishwashing Equipment/Washers"; 
				}
if($value == "634-6257"){
					$exhibitorReturn .= "Dispensers: cups, lids, straws"; 
				}
if($value == "634-6258"){
					$exhibitorReturn .= "Dispensing Equipment"; 
				}
if($value == "634-6259"){
					$exhibitorReturn .= "Display/Holding Cabinets"; 
				}
if($value == "634-6260"){
					$exhibitorReturn .= "Disposables"; 
				}
if($value == "634-6261"){
					$exhibitorReturn .= "Distributors, Equipment"; 
				}
if($value == "634-6262"){
					$exhibitorReturn .= "Distributors, Food"; 
				}
if($value == "634-6263"){
					$exhibitorReturn .= "Door Hangers"; 
				}
if($value == "634-6264"){
					$exhibitorReturn .= "Doors"; 
				}
if($value == "634-6265"){
					$exhibitorReturn .= "Dough"; 
				}
if($value == "634-6266"){
					$exhibitorReturn .= "Dough Additives"; 
				}
if($value == "634-6267"){
					$exhibitorReturn .= "Dough Conditioners"; 
				}
if($value == "634-6268"){
					$exhibitorReturn .= "Dough Crisper"; 
				}
if($value == "634-6269"){
					$exhibitorReturn .= "Dough Cutters"; 
				}
if($value == "634-6270"){
					$exhibitorReturn .= "Dough Dividers"; 
				}
if($value == "634-6271"){
					$exhibitorReturn .= "Dough Dockers"; 
				}
if($value == "634-6272"){
					$exhibitorReturn .= "Dough Enhancers"; 
				}
if($value == "634-6273"){
					$exhibitorReturn .= "Dough Frozen"; 
				}
if($value == "634-6274"){
					$exhibitorReturn .= "Dough Processing"; 
				}
if($value == "634-6275"){
					$exhibitorReturn .= "Dough Proofers"; 
				}
if($value == "634-6276"){
					$exhibitorReturn .= "Dough Retarders"; 
				}
if($value == "634-6277"){
					$exhibitorReturn .= "Dough Rollers/Sheeters"; 
				}
if($value == "634-6278"){
					$exhibitorReturn .= "Dough Rounders"; 
				}
if($value == "634-6279"){
					$exhibitorReturn .= "Dough Trays/Boxes"; 
				}
if($value == "634-6280"){
					$exhibitorReturn .= "Drive-Thru Systems"; 
				}
if($value == "634-6281"){
					$exhibitorReturn .= "Dryers"; 
				}
if($value == "634-6282"){
					$exhibitorReturn .= "Eggplant"; 
				}
if($value == "634-6283"){
					$exhibitorReturn .= "Employment Screening"; 
				}
if($value == "634-6284"){
					$exhibitorReturn .= "Entertainment/Games"; 
				}
if($value == "634-6285"){
					$exhibitorReturn .= "Exhaust Fans/Filters/Systems"; 
				}
if($value == "634-6286"){
					$exhibitorReturn .= "Financial Services"; 
				}
if($value == "634-6287"){
					$exhibitorReturn .= "Flooring/Mats"; 
				}
if($value == "634-6288"){
					$exhibitorReturn .= "Flour"; 
				}
if($value == "634-6289"){
					$exhibitorReturn .= "Franchising"; 
				}
if($value == "634-6290"){
					$exhibitorReturn .= "Frozen Pizza"; 
				}
if($value == "634-6291"){
					$exhibitorReturn .= "Frozen Products"; 
				}
if($value == "634-6292"){
					$exhibitorReturn .= "Fruit Toppings"; 
				}
if($value == "634-6293"){
					$exhibitorReturn .= "Fryers"; 
				}
if($value == "634-6294"){
					$exhibitorReturn .= "Furniture/Decor"; 
				}
if($value == "634-6295"){
					$exhibitorReturn .= "Garlic"; 
				}
if($value == "634-6296"){
					$exhibitorReturn .= "Giftcards/Card Programs"; 
				}
if($value == "634-6297"){
					$exhibitorReturn .= "Gluten Free Products"; 
				}
if($value == "634-6298"){
					$exhibitorReturn .= "Graters/Grinders"; 
				}
if($value == "634-6299"){
					$exhibitorReturn .= "Griddles/Grills"; 
				}
if($value == "634-6300"){
					$exhibitorReturn .= "Ham/Ham Toppings"; 
				}
if($value == "634-6301"){
					$exhibitorReturn .= "Health/Safety Equipment"; 
				}
if($value == "634-6302"){
					$exhibitorReturn .= "Heaters/Warmers"; 
				}
if($value == "634-6303"){
					$exhibitorReturn .= "Ice Cream Machines"; 
				}
if($value == "634-6304"){
					$exhibitorReturn .= "Ice Machines"; 
				}
if($value == "634-6305"){
					$exhibitorReturn .= "Insurance"; 
				}
if($value == "634-6306"){
					$exhibitorReturn .= "Interior Design/Decor"; 
				}
if($value == "634-6307"){
					$exhibitorReturn .= "Internet/Web Services"; 
				}
if($value == "634-6308"){
					$exhibitorReturn .= "Italian Ice/Gelato"; 
				}
if($value == "634-6309"){
					$exhibitorReturn .= "Italian Sausages"; 
				}
if($value == "634-6310"){
					$exhibitorReturn .= "Knife, Sharpeners/Racks"; 
				}
if($value == "634-6311"){
					$exhibitorReturn .= "Labels"; 
				}
if($value == "634-6312"){
					$exhibitorReturn .= "Lid Supports"; 
				}
if($value == "634-6313"){
					$exhibitorReturn .= "Linen Supply"; 
				}
if($value == "634-6314"){
					$exhibitorReturn .= "Low Carb Foods"; 
				}
if($value == "634-6315"){
					$exhibitorReturn .= "Magnets"; 
				}
if($value == "634-6316"){
					$exhibitorReturn .= "Management Systems"; 
				}
if($value == "634-6317"){
					$exhibitorReturn .= "Maps, Delivery"; 
				}
if($value == "634-6318"){
					$exhibitorReturn .= "Marinades & Dips"; 
				}
if($value == "634-6319"){
					$exhibitorReturn .= "Massage Chairs"; 
				}
if($value == "634-6320"){
					$exhibitorReturn .= "Meat Alternatives"; 
				}
if($value == "634-6321"){
					$exhibitorReturn .= "Meatballs"; 
				}
if($value == "634-6322"){
					$exhibitorReturn .= "Menu Boards"; 
				}
if($value == "634-6323"){
					$exhibitorReturn .= "Menu/Menu Covers"; 
				}
if($value == "634-6324"){
					$exhibitorReturn .= "Mixers"; 
				}
if($value == "634-6325"){
					$exhibitorReturn .= "Mobile Coupons"; 
				}
if($value == "634-6326"){
					$exhibitorReturn .= "Mushrooms"; 
				}
if($value == "634-6327"){
					$exhibitorReturn .= "Music on Hold"; 
				}
if($value == "634-6328"){
					$exhibitorReturn .= "Name Badges"; 
				}
if($value == "634-6329"){
					$exhibitorReturn .= "Oils"; 
				}
if($value == "634-6330"){
					$exhibitorReturn .= "Olives"; 
				}
if($value == "634-6331"){
					$exhibitorReturn .= "Onions"; 
				}
if($value == "634-6332"){
					$exhibitorReturn .= "Online Employee Scheduing"; 
				}
if($value == "634-6333"){
					$exhibitorReturn .= "Online Ordering"; 
				}
if($value == "634-6334"){
					$exhibitorReturn .= "Order Control Systems"; 
				}
if($value == "634-6335"){
					$exhibitorReturn .= "Oven Accessories"; 
				}
if($value == "634-6336"){
					$exhibitorReturn .= "Ovens, Combination"; 
				}
if($value == "634-6337"){
					$exhibitorReturn .= "Ovens, Convection"; 
				}
if($value == "634-6338"){
					$exhibitorReturn .= "Ovens, Conveyor"; 
				}
if($value == "634-6339"){
					$exhibitorReturn .= "Ovens, Deck"; 
				}
if($value == "634-6340"){
					$exhibitorReturn .= "Ovens, Revolving"; 
				}
if($value == "634-6341"){
					$exhibitorReturn .= "Ovens, Rotisserie"; 
				}
if($value == "634-6342"){
					$exhibitorReturn .= "Ovens, Toasting"; 
				}
if($value == "634-6343"){
					$exhibitorReturn .= "Ovens, Wood/Coal"; 
				}
if($value == "634-6367"){
					$exhibitorReturn .= "POS/POP Systems"; 
				}
if($value == "634-6344"){
					$exhibitorReturn .= "Packaging Machinery"; 
				}
if($value == "634-6345"){
					$exhibitorReturn .= "Packaging Supplies"; 
				}
if($value == "634-6346"){
					$exhibitorReturn .= "Paging Systems"; 
				}
if($value == "634-6347"){
					$exhibitorReturn .= "Pans/Screens/Lids/Trays"; 
				}
if($value == "634-6348"){
					$exhibitorReturn .= "Pans/Tray Racks"; 
				}
if($value == "634-6349"){
					$exhibitorReturn .= "Paper Products"; 
				}
if($value == "634-6350"){
					$exhibitorReturn .= "Party Supplies"; 
				}
if($value == "634-6351"){
					$exhibitorReturn .= "Pasta"; 
				}
if($value == "634-6352"){
					$exhibitorReturn .= "Pasta Equipment"; 
				}
if($value == "634-6353"){
					$exhibitorReturn .= "Payment Systems"; 
				}
if($value == "634-6354"){
					$exhibitorReturn .= "Peels"; 
				}
if($value == "634-6355"){
					$exhibitorReturn .= "Pepperoni"; 
				}
if($value == "634-6356"){
					$exhibitorReturn .= "Peppers"; 
				}
if($value == "634-6357"){
					$exhibitorReturn .= "Philadelphia Steaks"; 
				}
if($value == "634-6358"){
					$exhibitorReturn .= "Pizza Cutters/Knives/Slices"; 
				}
if($value == "634-6359"){
					$exhibitorReturn .= "Pizza Hand Tools"; 
				}
if($value == "634-6360"){
					$exhibitorReturn .= "Pizza Packaging"; 
				}
if($value == "634-6361"){
					$exhibitorReturn .= "Pizza Presses"; 
				}
if($value == "634-6362"){
					$exhibitorReturn .= "Pizza Tables"; 
				}
if($value == "634-6363"){
					$exhibitorReturn .= "Pizza Toppings"; 
				}
if($value == "634-6364"){
					$exhibitorReturn .= "Plastic Packaging"; 
				}
if($value == "634-6365"){
					$exhibitorReturn .= "Pork Products"; 
				}
if($value == "634-6366"){
					$exhibitorReturn .= "Portion Control"; 
				}
if($value == "634-6368"){
					$exhibitorReturn .= "Potato Products"; 
				}
if($value == "634-6369"){
					$exhibitorReturn .= "Prepared Entrees"; 
				}
if($value == "634-6370"){
					$exhibitorReturn .= "Printing"; 
				}
if($value == "634-6371"){
					$exhibitorReturn .= "Promotional Items"; 
				}
if($value == "634-6372"){
					$exhibitorReturn .= "Prosciutto"; 
				}
if($value == "634-6373"){
					$exhibitorReturn .= "Publications"; 
				}
if($value == "634-6374"){
					$exhibitorReturn .= "Racks/Stands"; 
				}
if($value == "634-6375"){
					$exhibitorReturn .= "Receipts/Paper & Ribbon Cash Registers"; 
				}
if($value == "634-6376"){
					$exhibitorReturn .= "Refrigerators/Freezers"; 
				}
if($value == "634-6377"){
					$exhibitorReturn .= "Refurbished Equipment"; 
				}
if($value == "634-6378"){
					$exhibitorReturn .= "Replacement Parts"; 
				}
if($value == "634-6379"){
					$exhibitorReturn .= "Safety Equipment"; 
				}
if($value == "634-6380"){
					$exhibitorReturn .= "Salad"; 
				}
if($value == "634-6381"){
					$exhibitorReturn .= "Salad Bars/Accessories"; 
				}
if($value == "634-6382"){
					$exhibitorReturn .= "Salad Dressing/Vinegar"; 
				}
if($value == "634-6383"){
					$exhibitorReturn .= "Salad Equipment"; 
				}
if($value == "634-6384"){
					$exhibitorReturn .= "Salami"; 
				}
if($value == "634-6385"){
					$exhibitorReturn .= "Sandwich Items"; 
				}
if($value == "634-6386"){
					$exhibitorReturn .= "Sanitary Equipment"; 
				}
if($value == "634-6387"){
					$exhibitorReturn .= "Sauce, Barbecue"; 
				}
if($value == "634-6388"){
					$exhibitorReturn .= "Sauce, Custom Pack"; 
				}
if($value == "634-6389"){
					$exhibitorReturn .= "Sauce, Hot"; 
				}
if($value == "634-6390"){
					$exhibitorReturn .= "Sauce, Pasta"; 
				}
if($value == "634-6391"){
					$exhibitorReturn .= "Sauce, Pesto"; 
				}
if($value == "634-6392"){
					$exhibitorReturn .= "Sauce, Pizza"; 
				}
if($value == "634-6393"){
					$exhibitorReturn .= "Sauce, Tomato"; 
				}
if($value == "634-6394"){
					$exhibitorReturn .= "Sausage"; 
				}
if($value == "634-6395"){
					$exhibitorReturn .= "Scales"; 
				}
if($value == "634-6396"){
					$exhibitorReturn .= "Seafood"; 
				}
if($value == "634-6397"){
					$exhibitorReturn .= "Seating/High Chairs"; 
				}
if($value == "634-6398"){
					$exhibitorReturn .= "Security Equipment"; 
				}
if($value == "634-6399"){
					$exhibitorReturn .= "Signs, Auto/Delivery"; 
				}
if($value == "634-6400"){
					$exhibitorReturn .= "Signs, Indoor/Outdoor"; 
				}
if($value == "634-6401"){
					$exhibitorReturn .= "Silk Screening"; 
				}
if($value == "634-6402"){
					$exhibitorReturn .= "Slicers/Dicers"; 
				}
if($value == "634-6403"){
					$exhibitorReturn .= "Small Wares"; 
				}
if($value == "634-6404"){
					$exhibitorReturn .= "Software"; 
				}
if($value == "634-6405"){
					$exhibitorReturn .= "Soups/Stews"; 
				}
if($value == "634-6406"){
					$exhibitorReturn .= "Spices/Seasonings"; 
				}
if($value == "634-6407"){
					$exhibitorReturn .= "Table Tents/Covers"; 
				}
if($value == "634-6408"){
					$exhibitorReturn .= "Tables/Prep Tables"; 
				}
if($value == "634-6409"){
					$exhibitorReturn .= "Take/Bake Products"; 
				}
if($value == "634-6410"){
					$exhibitorReturn .= "Telephone Equipment"; 
				}
if($value == "634-6411"){
					$exhibitorReturn .= "Text Message Marketing"; 
				}
if($value == "634-6412"){
					$exhibitorReturn .= "Thermometers"; 
				}
if($value == "634-6413"){
					$exhibitorReturn .= "Tomatoes"; 
				}
if($value == "634-6414"){
					$exhibitorReturn .= "Topping Equipment"; 
				}
if($value == "634-6415"){
					$exhibitorReturn .= "Training"; 
				}
if($value == "634-6416"){
					$exhibitorReturn .= "Vegetables, Toppings"; 
				}
if($value == "634-6417"){
					$exhibitorReturn .= "Vending Machines/Games"; 
				}
if($value == "634-6418"){
					$exhibitorReturn .= "Ventilation Systems"; 
				}
if($value == "634-6419"){
					$exhibitorReturn .= "Vertical Cutter/Mixers"; 
				}
if($value == "634-6420"){
					$exhibitorReturn .= "Video Services"; 
				}
if($value == "634-6421"){
					$exhibitorReturn .= "Voice Mail Systems"; 
				}
if($value == "634-6422"){
					$exhibitorReturn .= "Web Development"; 
				}
if($value == "634-6423"){
					$exhibitorReturn .= "Yeast"; 
				}
				if(++$i != $numItems) {
												    $exhibitorReturn .= ", ";
												  }
		}
		$exhibitorReturn .= "</span></li>";
										}
											$exhibitorReturn .= "<li>";
                                        if($company_email){ 
											$exhibitorReturn .= "<a href=\"mailto:$company_email\"><b>Email</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
										}
                                        if($company_website){ 
											$exhibitorReturn .= "<a href=\"$company_website\" target=\"_blank\"><b>Website</b></a>";
										}
											$exhibitorReturn .= "</li>";
                                        $exhibitorReturn .= "<li><span><a href=\"https://n1b.goexposoftware.com/events/pe16/goExpo/exhibitor/viewExhibitorProfile.php?__id=". $__id . "\" target=\"_blank\">More Information</a></span></li>
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
                </article>
            </div>
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
			</article>
	    </div>
	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
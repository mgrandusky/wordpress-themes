
<?php

$hostname = "localhost";
$user = "emeralde_admin";
$password = "Exp0@bl0gs";
$database = "emeralde_icff";
$prefix = "";
//Loadmore configuarion
$resultsPerPage=50;
$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");
mysql_select_db($database, $bd) or die("Database Not Found");


	if(isset($_POST['page'])):
 	$paged=$_POST['page'];
	$letter=$_POST['letter'];
	if($letter == ""){
		$sql="SELECT * FROM goexpo_exhibitors order by `company_name` asc";
	}else{
		$sql="SELECT * FROM goexpo_exhibitors  WHERE company_name LIKE '".$letter."%' order by `company_name` asc";
	}
	if($paged>0){
	       $page_limit=$resultsPerPage*($paged-1);
	       $pagination_sql=" LIMIT  $page_limit, $resultsPerPage";
	       }
	else{
	$pagination_sql=" LIMIT 0 , $resultsPerPage";
	}

	$result=mysql_query($sql.$pagination_sql);

	$num_rows = mysql_num_rows($result);
	if($num_rows>0){
		while($data=mysql_fetch_array($result)){
			if($data['booth_id'] != ""){
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
        $exhibitorReturn = "<li class=\"cf exhibitor\">
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
						    $exhibitorReturn .=  "<a href=\"https://n2a.goexposoftware.com/events/icff15/goExpo/floorPlan/viewFloorPlan.php?ei=$__id&zb=$value\" target=\"_blank\">".$value."</a>";
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
						$exhibitorReturn .= "<li>Categories: <span>".str_replace(",", ", ", $categories)."</span></li>";
					}
					
                    if($company_email){ 
						$exhibitorReturn .= "<li>Email: <span><a href=\"mailto:$company_email\">$company_email</a></span></li>";
					}
                    if($company_website){ 
						$exhibitorReturn .= "<li>Web: <span><a href=\"$company_website\" target=\"_blank\">$company_website</a></span></li>";
					}
                    $exhibitorReturn .= "<li><span><a href=\"https://n2a.goexposoftware.com/events/icff15/goExpo/exhibitor/viewExhibitorProfile.php?__id=". $__id . "\" target=\"_blank\">More Information</a></span></li>
                </ul>
            </div>
			
        </li>";
		echo $exhibitorReturn;
    }

	}
	}
	?>
	<div id="script">
		<script type="text/javascript">
        $('document').ready(function(){
        $('.exhibitors li').not('a').on("click", function(){
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
	<?php
	if($num_rows == $resultsPerPage){?>
 	<li class="loadbutton" style="background-color:none;background:#fff"><button class="loadmore" data-page="<?php echo  $paged+1 ;?>">Load More</button></li>
 <?php 
  }else{
  	echo "<li class='loadbutton'><h3>No More Feeds</h3></li>";
 }
  endif;
   ?>
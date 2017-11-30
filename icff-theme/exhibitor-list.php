<?php

require_once("/home/icff/public_html/wp-load.php");

include("database-details.php");

$terms = (isset($_POST["terms"])) ? $_POST["terms"] : "";
$floor = (isset($_POST["floor"])) ? $_POST["floor"] : "";
$category = (isset($_POST["category"])) ? $_POST["category"] : "";

try{
    $pdo = new PDO('mysql:host='. $hostname .';dbname=' . $database . ';charset=utf8;', $user, $password);
	$sql = "SELECT * FROM goexpo_exhibitors";

	if($terms != ""){ $sql .= " WHERE company_name LIKE :terms"; }

	if($floor != "" && $floor != "All Floors"){ 
		if($terms == ""){ $sql .= " WHERE"; }else{ $sql .= " AND"; }
		$floorquery="SELECT * FROM goexpo_exhibitors_floors WHERE name = '".$floor."'";
		$statement = $pdo->prepare($floorquery);
		$statement->execute();
		$fdata = $statement->fetch();
		$area_id = $fdata["area_id"];
		//echo "area_id: <br/>".$area_id."<br/>";
		$sql .= " area_id = :area_id "; 
	}

	if($category != "" && $category != "All Categories"){ 
		if($terms == "" && $floor == 'All Floors'){ $sql .= " WHERE"; }else{ $sql .= " AND"; }
		$sql .= " category LIKE :category"; 
	}

	$sql .= " order by company_name asc";

	//echo $sql; 

    $s = $pdo->prepare($sql);

    if($terms != ""){$s->bindValue(':terms', '%' . $terms . '%');}
    if(isset($area_id) && $area_id != ""){$s->bindValue(':area_id', $area_id);}
	if($category != "" && $category != "All Categories"){$s->bindValue(':category', '%' . $category . '%');}

    $s->execute();

}catch(PDOException $e){
    $error = "Unable to connect to database.";
    exit();
}
?>
<li class="loading"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/loading.gif"/></li>
<?php

$records = $s->rowCount();

if($records > 0) {

?>
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
    
    foreach ($s->fetchAll() as $data) {

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
					    $exhibitorReturn .=  "<a href=\"https://n1a.goexposoftware.com/events/icff16/goExpo/floorPlan/viewFloorPlan.php?ei=$__id&zb=$value\" target=\"_blank\">".$value."</a>";
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
					$exhibitorReturn .= "<li>";
	            if($company_email){ 
					$exhibitorReturn .= "<a href=\"mailto:$company_email\"><b>Email</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}
	            if($company_website){ 
					$exhibitorReturn .= "<a href=\"$company_website\" target=\"_blank\"><b>Website</b></a>";
				}
					$exhibitorReturn .= "</li>";
	            $exhibitorReturn .= "<li><span><a href=\"https://n1a.goexposoftware.com/events/icff16/goExpo/exhibitor/viewExhibitorProfile.php?__id=". $__id . "\" target=\"_blank\">More Information</a></span></li>
	        </ul>
	    </div>
		
	</li>";
	echo $exhibitorReturn; 
	}
} else {
?>
    <li style="background-color: #fff; cursor: none; padding-top: 20px;"><span>No results were found matching your search criteria.</span></li>
<?php
}
?>
<script type="text/javascript">
$('document').ready(function(){

	$(".exhibitors .exhibitor").each(function(index) {
	  $(this).addClass(''+index);
	});
	$('.ex-header,.ex-header-sub').hide();

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

	$('.letter').click(function(e){
	    e.preventDefault();
		$('.loadmore').hide(); 
		var sletter = $(this).text();
		$('.loadmore').attr("data-letter", sletter);
		console.log(sletter);  
		if ($('.exhibitor').hasClass(sletter)){
			$('.exhibitor').hide();
			$('.' + sletter).show();
		}	
	});

	items_per_page = 100;
	records = <?php echo $records; ?>;
	displaycount = (records <= items_per_page) ? records : items_per_page;
	$('li.loading').remove();
	$(".exhibitors .exhibitor:lt("+(items_per_page+1)+")").fadeIn('fast');
	if($('.exhibitors .exhibitor').length > items_per_page+1){
	    $('.loadmore').show();
		$('.ex-header,.ex-header-sub').show();
	}
	if(records==0) {
	    $('.loadmore').hide();
		$('.ex-header,.ex-header-sub').hide();
	} else {
		$('.ex-header,.ex-header-sub').show();
	}
});
</script>
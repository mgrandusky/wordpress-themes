<?php
$servername = "localhost";
$db_user = "surfexpo_admin";
$db_pass = "Exp0@bl0gs";
$database = "surfexpo_wordpress";
// $prefix = "";

// Exhibitor Search form
/*
terms=
&floor=floor
&category=Strength
&submit=Search
&subcategory=Subcategory
&neighborhood=Neighborhood*/
$terms = $_GET["terms"];
$floor = $_GET["floor"];
$category = $_GET["category"];
$subcategory = $_GET["subcategory"];
$neighborhood = $_GET["neighborhood"];
$sort = $_GET['sort'];

// var_dump($_GET);
try{
    $pdo = new PDO('mysql:host='. $servername .';dbname=' . $database . ';charset=utf8;', $db_user, $db_pass);

    $sql = "select * from goexpo_exhibitors";

    if($terms != ""){
        $sql .= " where company_name like '%$terms%'"; 
    }
    if($category == "Category" || $category == ""){}else{
        if(strpos($sql, 'where')){
            $sql .= " and"; 
        } else {
            $sql .= " where";
        }
        $sql .= " category like '%$category-$subcategory%'"; 
    }
    if($floor == "floor" || $floor == ""){}else{
        if(strpos($sql, 'where')){
            $sql .= " and"; 
        } else {
            $sql .= " where";
        }
	if($floor == "Interbike"){
        	$sql .= " area_id like 1"; 
	}
	if($floor == "OutDoor Demo"){
		$sql .= " area_id like 3"; 
	}
    }

     if($neighborhood == "Neighborhood" || $neighborhood == ""){}else{
         if(strpos($sql, 'where')){
             $sql .= " and"; 
         } else {
             $sql .= " where";
         }
         $sql .= " neighborhood like '%$neighborhood%'"; 
     }

    // $sql .= " order by company_name asc";  
    // $sql .= " order by booth_id asc";  
    if($sort == "booth"){
        $sql .= " order by booth_id asc";
    } else {
        $sql .= " order by company_name asc";  
    }
    $s = $pdo->prepare($sql);
 //var_dump($sql);
    if($category != "Category"){$s->bindvalue(':category', '%' . $category . '%');}
    // if($subcategory != "Subcategory"){$s->bindvalue(':subcategory', '%' . $subcategory . '%');}
    // if($neighborhood != "Neighborhood"){$s->bindvalue(':neighborhood', '%' . $neighborhood . '%');}
    // if($sort != "sort"){$s->bindvalue(':sort', '%' . $sort . '%');}
    if($terms    != ""){$s->bindvalue(':terms', '%' . $terms . '%');}
    $s->execute();
}catch(PDOException $e){
    $error = "Unable to connect to database.";
    exit();
}
if($s->rowCount() == 0){
						?><style>.loadbutton {display:none;}</style><?php
						echo '<h2>We’re Sorry</h2>
						We couldn’t find an exhibitor that matched your search. Please try a different company name, category or view them all.';
} else{
foreach ($s->fetchAll() as $row ) {
    $exhibitor[] = array(
        'company_name' => $row['company_name'], 
        'contact' => $row['contact_name'],
        'phone' => $row['contact_phone'],
        'email' => $row['contact_email'],
        'booth' => $row['booth_id'], 
        'category' => $row['category'],
        'website' => $row['contact_website'],
        'id' => $row['id'],
        'logo' => $row['logo']
    );?>
    <li>   
      <div class="el-firstrow clearfix">
            <a name="javascript:void(0)">
                <span class="el-compName"><?= $row['company_name']; ?></span> 
                <span class="el-boothNum"><?= $row['booth_id']; ?></span>
            </a>
      </div>
        <div class="el-detail clearfix">
          <?php if($row['logo'] != ""){ ?><div class="logo one-fourth"><img src="<?= $row['logo']; ?>" alt=""></div><? } ?>
          
          <div class="el-rightCol three-fourth">
            <p>Contact: <?= $row['contact_name']; ?><br/>
              Phone: <?= $row['contact_phone']; ?><br/>
              <span class="el-link"><a href="mailto:<?= $row['contact_email']; ?>" target="_blank"><strong>Email</strong></a>&nbsp;&nbsp;<a href="<?= $row['contact_website']; ?>" target="_blank"><strong>Website</strong></a></span>
              </p>
              <p>Booth: <?= $row['booth_id']; ?><br/>
              Categories: <?= $row['category']; ?></p>
              <p><span class="el-link"><a href="https://n2b.goexposoftware.com/events/ib15/goExpo/exhibitor/viewExhibitorProfile.php?__id=<?= $row['__id']; ?>" target="_blank">More Information &raquo;</a></span></p>
           </div>   
          
        </div>                    
    </li>
<?php } 
}
					
?>

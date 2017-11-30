<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/json; charset=utf-8');
?>
<div id="exhibitors-home" class="cf">
       <div class="cf" style="border-top:5px solid #000;padding-top:15px;margin-top:10px">
			
            <h2 style=font-size:30px;"><a href="https://n1b.goexposoftware.com/events/ib16/goExpo/public/index.php" target="_blank" style="color:#000;">New Product Showcase</a></h2>
            <?php 
	    //$url = 'https://n2a.goexposoftware.com/events/orw2012/goExpo/webServices/GeRest1.php?p=bf263180ef29a493d9862116b84d39c3&r=1&';
            $url = 'https://n1b.goexposoftware.com/events/ib16/goExpo/webServices/GeRest1.php?p=4ef9e47644cdbb87bc80e096c0b591db&r=1&';
            $json = file_get_contents($url);
            $contents = file_get_contents($url); 
            $contents = utf8_encode($contents); 
            $results = json_decode($contents); 
	    echo $results; 
            $i = 0;
            while ( $i <= 11) {
		$rand_key = array_rand($results);
            ?>        
            <div>
                <a href="<?= $results[$rand_key]->product_url; ?>" target="_blank"><img src="<?php echo $results[$rand_key]->image1; ?>" alt=""></a>
              
                <p><a href="<?= $results[$rand_key]->product_url; ?>" target="_blank"><strong><?php echo $results[$rand_key]->name; ?></strong></a><br><a href="<?= $results[$rand_key]->exhibitor_url; ?>" target="_blank"><?php echo $results[$rand_key]->company_name; ?></a></p>
            </div>
            <?php $i++; unset($results[$rand_key]);} ?>
            </div> 
</div>
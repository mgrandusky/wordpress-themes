<div id="exhibitors-home" class="cf">
       <div class="cf">
            <h2>Exhibitors</h2>
            <?php 
	    //$url = 'https://n2a.goexposoftware.com/events/orw2012/goExpo/webServices/GeRest1.php?p=bf263180ef29a493d9862116b84d39c3&r=1&';
            $url = 'https://n1a.goexposoftware.com/events/icff16/goExpo/webServices/GeRest1.php?p=d85bd24ce49774c8e702f006431c7c9f&r=1';
            $json = file_get_contents($url);
            $contents = file_get_contents($url); 
            $contents = utf8_encode($contents); 
            $results = json_decode($contents); 
            $i = 0;
            while ( $i <= 11) {
		$rand_key = array_rand($results);
            ?>        
            <div>
                <a href="<?= $results[$rand_key]->product_url; ?>" target="_blank"><img src="<?php echo $results[$rand_key]->image1; ?>" alt=""></a>
                <hr>
                <a href="<?= $results[$rand_key]->product_url; ?>" target="_blank"><p><?php echo $results[$rand_key]->company_name; ?></p></a>
            </div>
            <?php $i++; unset($results[$rand_key]);} ?>
            </div> 
</div>
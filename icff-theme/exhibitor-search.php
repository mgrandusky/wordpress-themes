<?php
if(isset($_POST['query'])){
    try
    {
        $pdo = new PDO('mysql:host=internal-db.s196185.gridserver.com;dbname=db196185_exhibitor_list;', 'db196185', "#Emeraldh0st!");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        $pdo->exec('set names "utf8"');
    }
    catch (PDOException $e)
    {
        $error = "unable to connect to database";
        exit();
    }
    try {
        $query = $_POST['query'];
        // if (($query == "") || ($query == " ")) {
        //     $query = "   ";
        // }

        $sql  = 'select distinct exhibitors_mnas.assignmentname, exhibitors_mnas.booth, exhibitors_mnas.accountcode ';
        $sql .= 'from exhibitors_mnas ';
        $sql .= 'left join categories_mnas ';
        $sql .= 'on categories_mnas.accountcode = exhibitors_mnas.accountcode ';
        $sql .= 'where exhibitors_mnas.assignmentname like :cat ';
        $sql .= 'or categories_mnas.productdesc like :cat ';
        $sql .= 'or exhibitors_mnas.booth like :cat ';
        $sql .= 'order by exhibitors_mnas.assignmentname';
        
        $s = $pdo->prepare($sql);
        $s->bindValue(':cat', '%' . $query . '%');
        $s->execute();
        
        while ($row = $s->fetch()) {
            $vendors[] = array('name' => $row['assignmentname'], 'booth' => $row['booth'], 'id' => $row['accountcode']);
        }
?>

<div class="exhibitor-list">

<ul class="cf">

    <li class="cf"><span>Company</span><span>Booth</span></li>

</ul>

<ul class="cf">

    <?php if (isset($vendors)) : ?>

        <?php foreach ($vendors as $vendor) : ?>

            <?php 

            if (($vendor == 'vendor name') || ($vendor == '')) {

                continue;

            } else { ?>

                <li class="cf company" data-vendor-id="<?= $vendor['id']; ?>" data-booth-no="<?= $vendor['booth']; ?>">

                    <span><?= $vendor['name']; ?></span>

                    <span class="booth-no"><?= $vendor['booth']; ?></span>

                </li>

            <?php } ?>

        <?php endforeach; ?>

    <?php else : ?>



            <li><span>

            <b>We’re Sorry</b> <br>

            We couldn’t find an exhibitor that matched your search. Please try a different company name, category or view them all.</span></li>



    <?php endif; ?>

</ul>

</div>



<?php

    } catch (PDOException $e) {

        $error = "unable to search";

        echo $e;

        exit();

    } 

} elseif (isset($_POST['single'])) {

        try

    {

        $pdo = new PDO('mysql:host=internal-db.s196185.gridserver.com;dbname=db196185_exhibitor_list;', 'db196185', "#Emeraldh0st!");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

        $pdo->exec('set names "utf8"');

    }

    catch (PDOException $e)

    {

        $error = "unable to connect to database";

        exit();

    }

    try {

        $query = $_POST['single'];

        if (($query == "") || ($query == " ")) {

            $query = "   ";

        }



        $sql  = 'select distinct exhibitors_mnas.assignmentname, exhibitors_mnas.accountcode, exhibitors_mnas.contactfirstname, exhibitors_mnas.contactlastname, exhibitors_mnas.phone, exhibitors_mnas.fax, exhibitors_mnas.web, exhibitors_mnas.booth, categories_mnas.productdesc ';

        $sql .= 'from exhibitors_mnas ';

        $sql .= 'left join categories_mnas ';

        $sql .= 'on categories_mnas.accountcode = exhibitors_mnas.accountcode ';

        $sql .= 'where exhibitors_mnas.accountcode like :cat ';

        $sql .= 'order by exhibitors_mnas.assignmentname ';

        $sql .= 'limit 1';



        $s = $pdo->prepare($sql);

        $s->bindValue(':cat', '%' . $query . '%');

        $s->execute();

        while ($row = $s->fetch()) {

            $vendors[] = array(

                'fname' => $row['contactfirstname'],

                'lname' => $row['contactlastname'],

                'phone' => $row['phone'],

                'fax' => $row['fax'],

                'web' => $row['web'],

                'booth' => $row['booth'],

                /*'categories' => $row['productdesc']*/);

        }



        $sql = 'select productdesc from categories_mnas where AccountCode = :accountcode ;';



        $s = $pdo->prepare($sql);

        $s->bindValue(':accountcode', $query);

        $s->execute();

        while ($row = $s->fetch()) {  

            $categories[] = array('category' => $row['productdesc']);

        }

    ?>

        <?php if (isset($vendors)) : ?>

            <?php foreach ($vendors as $vendor) : ?>

                <?php 

                if (($vendor == 'vendor name') || ($vendor == '')) {

                    continue;

                } else { ?>

                    <div class="detail">

                        <p><b>Contact:</b> <?= $vendor['fname'] . " " . $vendor['lname']; ?></p>

                        <p><b>Phone:</b> <?= $vendor['phone']; ?></p>

                        <p><b>Fax:</b> <?= $vendor['fax']; ?></p>

                        <p><b>Web:</b> <a target="_blank" href="//<?= $vendor['web']; ?>"><?= $vendor['web']; ?></a></p>

                        <p><b>Booth #:</b> <?= $vendor['booth']; ?></p>

                        <p><b>Categories:</b> <?php 

                        $i = 1; 
if(isset($categories)){
                        foreach ($categories as $category) {

                            echo $category['category'];

                            if(count($categories) > $i){

                                echo ", ";

                            } 

                            $i++;

                        }
} ?></p>

                    </div>

                <?php } ?>

            <?php endforeach; ?>

        <?php endif; ?> 

    <?php        

    } catch (PDOException $e) {

        $error = "unable to search";

        echo $e;

        exit();

    } 

}



?>
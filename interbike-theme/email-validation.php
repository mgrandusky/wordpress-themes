<?php include( '/home/emeraldexpo/public_html/wpdev/irce/wp-load.php' ); ?>
<?php

$irceoptions = pods( 'irceoptions', $params ); 
if($_POST['action'] == "follow") {
  /**
   * we can pass any action like block, follow, unfollow, send PM....
   * if we get a 'follow' action then we could take the user ID and create a SQL command
   * but with no database, we can simply assume the follow action has been completed and return 'ok'
  **/
$email = $_POST['email'];
$filename = $irceoptions->display( 'exhibitors_email_domain_list' );
$lines = file($filename);
$line_number = false;
$ar=split("@",$email);
$search = $ar[1];
while (list($key, $line) = each($lines) and !$line_number) {

   $line_number = (strpos($line, $search) !== FALSE);

}

if($line_number){

  
   echo "ok";

}else{

   echo "error";
}

}
?>
<?php
include 'class.php';

$ob=new DB();
$ocname=$_POST['ocname'];
$dcname=$_POST['dcname'];
$mobno=$_POST['mobno'];
$badd=$_POST['badd'];
$bstate=$_POST['bstate'];
$bcode=$_POST['bcode'];
$sadd=$_POST['sadd'];
$sstate=$_POST['sstate'];
$scode=$_POST['scode'];
$arr=array('oc_name'=>"'$ocname'",'dc_name'=>"'$dcname'",'Mobile'=>"'$mobno'",'bill_add'=>"'$badd'",'bstate'=>"'$bstate'",'bcode'=>"'$bcode'",'ship_add'=>"'$sadd'",'sstate'=>"'$sstate'",'scode'=>"'$scode'");
$ob->insertQuery("customer_details",$arr);

?>
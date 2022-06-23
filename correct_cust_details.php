<?php

include 'class.php';

$ob=new DB();
$custid=$_POST['custid'];
$ocname=$_POST['ocname'];
// $dcname=$_POST['dcname'];
$mobno=$_POST['mobno'];
$badd=$_POST['badd'];
$bstate=$_POST['bstate'];
$bcode=$_POST['bcode'];
$sadd=$_POST['sadd'];
$sstate=$_POST['sstate'];
$scode=$_POST['scode'];
$arr=array('oc_name'=>"'$ocname'",'Mobile'=>"'$mobno'",'bill_add'=>"'$badd'",'bstate'=>"'$bstate'",'bcode'=>"'$bcode'",'ship_add'=>"'$sadd'",'sstate'=>"'$sstate'",'scode'=>"'$scode'");
$arr1 = array('customer_id'=>"'$custid'");
$ob->updatequery("customer_details",$arr,$arr1);


?>
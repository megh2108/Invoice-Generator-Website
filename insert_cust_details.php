<?php
include 'class.php';

$ob=new DB();
$ocname=$_POST['ocname'];
$gstin=$_POST['gstin'];
$mobno=$_POST['mobno'];
$badd=$_POST['badd'];
$bstate=$_POST['bstate'];
$bcode=$_POST['bcode'];
$sadd=$_POST['sadd'];
$sstate=$_POST['sstate'];
$scode=$_POST['scode'];

$arr1=array('Mobile'=>$mobno);

$res=$ob->selectquery("customer_details",$arr1);
$row=mysqli_num_rows($res);
if($row)
{
    echo "mobile number already exists";
}
else{

    $arr=array('oc_name'=>"'$ocname'",'GSTIN'=>"'$gstin'",'Mobile'=>"'$mobno'",'bill_add'=>"'$badd'",'bstate'=>"'$bstate'",'bcode'=>"'$bcode'",'ship_add'=>"'$sadd'",'sstate'=>"'$sstate'",'scode'=>"'$scode'");
    $ob->insertQuery("customer_details",$arr);
    echo "Data inserted successfully";
}

// 'dc_name'=>"'$dcname'",

?>
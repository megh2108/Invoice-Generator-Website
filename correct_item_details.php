<?php

include 'class.php';

$ob=new DB();
$item=$_POST['item'];
$itname=$_POST['itname'];
$hsn=$_POST['hsn'];
$bprice=$_POST['bprice'];
$gst=$_POST['gst'];

$price = $bprice * $gst * 0.01;
$tprice = $bprice + $price;

$arr=array('item_name'=>"'$itname'",'HSN_Code'=>"'$hsn'",'base_price'=>"'$bprice'",'GST'=>"'$gst'",'total_price'=>"'$tprice'");
$arr1 = array('item_name'=>"'$item'");
$ob->updatequery("item",$arr,$arr1);


?>
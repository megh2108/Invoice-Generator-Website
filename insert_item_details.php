<?php
include 'class.php';

$itname = $_POST['itname'];
$bprice = $_POST['bprice'];
$gst = $_POST['gst'];
$price = $bprice * $gst * 0.01;
$tprice = $bprice + $price;

$ob=new DB();
$arr = array('item_name'=>"'$itname'",'base_price'=>"'$bprice'",'GST'=>"'$gst'",'total_price'=>"'$tprice'");
$ob->insertQuery('item',$arr);




?>
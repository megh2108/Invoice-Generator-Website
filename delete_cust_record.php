<?php

include 'class.php';

$obj = new DB();

$val = $_POST['value'];
// $val1 = $_POST['value'];

$arr = array('customer_id'=>$val);

$res = $obj->selectQuery('record_details',$arr);//deletequery
$row = mysqli_fetch_assoc($res);
$val1 = $row['invoice_no'];
$arr1 = array('invoice_no'=>$val1);

$obj->deletequery("record_details",$arr);
$obj->deletequery("order_item_detail",$arr1);
$obj->deletequery("customer_details",$arr);

?>
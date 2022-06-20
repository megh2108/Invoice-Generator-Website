<?php
include 'class.php';
$ob=new DB();
$mob=$_POST['mobile'];
$arr=array('Mobile'=>$mob);
$it=$_POST['items'];
$qua=$_POST['quantity'];
$ret=$ob->selectquery("customer_details",$arr);
$row=mysqli_fetch_assoc($ret);
$id=$row['customer_id'];
$date= date("Y-m-d");


$arr1 = array('customer_id'=>"'$id'",'order_date'=>"'$date'");
$arr2 = array('customer_id'=>$id,'order_date'=>$date);
$ob->insertQuery('record_details',$arr1);
$ret1 = $ob->selectquery("record_details",$arr2);
$row2 =mysqli_fetch_assoc($ret1);
$invoice = $row2['invoice_no'];

// echo "<pre>";
// print_r($_POST);
// die;

// $arr1=array('item'=>$it,'quantity'=>$qua);
// $ob->insert("order_item_detail",$arr1);
 for($i=0;$i<count($it);$i++){
     $arr2=array('item_name'=>$it[$i]);
     $res3=$ob->selectquery("item",$arr2);
     $row3=mysqli_fetch_assoc($res3);
     $total_price=$row3['total_price'];
     $final_price=($total_price*$qua[$i]);
     $arr1=array('invoice_no'=>"'$invoice'",'item'=>"'$it[$i]'",'quantity'=>"'$qua[$i]'",'final_price'=>"'$final_price'");
     $ob->insertQuery("order_item_detail",$arr1);

 }

?>
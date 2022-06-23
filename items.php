<?php
include 'class.php';
$ob=new DB();

$mob=$_POST['mobile'];
$arr=array('Mobile'=>$mob);

$mob1=$_POST['mobile1'];
$arr3=array('Mobile'=>$mob1);

$it=$_POST['items'];
$qua=$_POST['quantity'];

$ret=$ob->selectquery("customer_details",$arr);
$row=mysqli_fetch_assoc($ret);

$ret10=$ob->selectquery("customer_details",$arr3);
$row10=mysqli_fetch_assoc($ret10);

$id=$row['customer_id'];

$id10=$row10['customer_id'];

$date= date("Y-m-d");


$arr1 = array('customer_id'=>"'$id'",'dc_id'=>"'$id10'",'order_date'=>"'$date'");
$arr2 = array('customer_id'=>$id,'dc_id'=>$id10,'order_date'=>$date);
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
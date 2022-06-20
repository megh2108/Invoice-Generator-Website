<?php

include 'class.php';

$obj = new DB();

$val = $_POST['value'];

$arr = array('item_name'=>$val);

$obj->deletequery("item",$arr);

?>
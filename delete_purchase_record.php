<!-- This is the page of delete button of purchase_record page -->

<?php

    include 'class.php';

    $obj = new DB();

    $val = $_POST['value'];

    $arr = array('invoice_no'=>$val);

    $obj->deletequery("order_item_detail",$arr);
    $obj->deletequery("record_details",$arr);

?>
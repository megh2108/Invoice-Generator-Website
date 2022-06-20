<?php

include "class.php";

$val = $_POST['value'];
$code = $_POST['code'];
$arr = array('invoice_no'=>$val);


$obj = new DB();

$res =$obj->selectquery("order_item_detail",$arr);
$html = '';
$i = 1;

    while($row=mysqli_fetch_assoc($res)) {
        $html .= '<tr>';
    
            
        
            $html .= '<td>'.$i.'</td>';
            $html .= '<td>'.$code.$row['invoice_no'].'</td>';
            $html .= '<td>'.$row['item'].'</td>';
            $html .= '<td>'.$row['quantity'].'</td>';
            $html .= '<td>'.$row['final_price'].'</td>';
            $html .= '</tr>';

            $i++;
    }
    echo $html;



?>
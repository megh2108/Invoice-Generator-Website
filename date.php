<!-- echo date('d-m-Y')
<Y-m-d>

</Y-m-d>

date(d)
date(m)
date(y)

date(l)

date('y-m-d H:i:s')

- 7 days before

date('d-m-Y', strtotime('-7 days'))

date('d-m-Y', strtotime('+1 month'))

date_diff()
SELECT * FROM order_item_detail WHERE order_date BETWEEN $cdate and $wdate;
SELECT * FROM order_item_detail WHERE order_date BETWEEN $cdate and $mdate;
SELECT * FROM order_item_detail WHERE order_date BETWEEN $cdate and $ydate; -->

<?php

// echo date_diff(date("d-m-Y"),'09-06-2022');
// include 'class.php';

// $obj = new DB();

// $date = date('Y-m-d', strtotime('-1 month'));

// $shr = $obj->sel_bet_query("record_details",$date);

// echo "<br>";
echo "Hi";
// echo mysqli_num_rows($shr);
?>

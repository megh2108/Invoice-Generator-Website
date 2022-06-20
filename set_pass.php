<?php

require 'session.php';

include 'class.php';

$username = $_SESSION['uname'];
// $old_password = $_POST['opassw'];
$new_password = $_POST['npassw'];

$obj = new DB();

$arr = array('password'=>"'$new_password'");
$arr1 = array('username'=>"'$username'");

$obj->updatequery("c_details",$arr,$arr1);


?>
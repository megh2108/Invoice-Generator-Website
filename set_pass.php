<?php

require 'session.php';

include 'class.php';

$oldpass = $_POST['opassw'];
$username = $_SESSION['uname'];
// $old_password = $_POST['opassw'];
$new_password = $_POST['npassw'];

$obj = new DB();

$arr = array('password'=>"'$new_password'");
$arr1 = array('username'=>"'$username'");
$arr2 = array('username'=>$username);

$res = $obj->selectquery("c_details",$arr2);
// print_r($res);
// die;

$row= mysqli_fetch_assoc($res);
if($oldpass == $row['password']){

    $obj->updatequery("c_details",$arr,$arr1);
    echo "Data Updated Succesfully.";

}
else{
    echo "Password Incorrect";
}



?>
<?php
// ini_set('session.gc_maxlifetime',5);
session_start();
include 'class.php';

$name=$_POST['name'];
$pwd=$_POST['password'];

$ob=new DB();

// $result = $ob->dbConnect();
// $arr=array('username' => $name,'password'=>$pwd);
$arr=array('username'=>$name,'password'=>$pwd);
// $_SESSION['uname'] = $name; 


$res=$ob->selectQuery("c_details",$arr);
 $check_user=mysqli_num_rows($res);


if($check_user)
{
    $_SESSION['LAST_ACTIVITY'] = time();

    $_SESSION['uname'] = $name; 
    echo "true";
  
}
else{
   echo "false";
}
?>
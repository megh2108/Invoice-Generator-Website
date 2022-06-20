<?php
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
    $_SESSION['uname'] = $name; 
    echo "true";
  
}
else{
   echo "false";
}
?>
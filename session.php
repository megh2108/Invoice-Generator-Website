<?php

    session_start();

    // require(!isset($_SESSION['uname']));
    if(!isset($_SESSION['uname']))
    {
       header("location:http://localhost/Invoice/login.php");
    //    header("location:http://localhost/invoice/index.php");
    }
    

?>
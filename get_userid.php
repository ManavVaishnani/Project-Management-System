<?php 
    require 'databaseconnect.php';
    session_start();
    if($_SERVER['REQUEST_METHOD']=="GET")
    {
        $user =$_SESSION['email'] ;
        echo "$user";
    }
?>
<?php
    require 'databaseconnect.php';
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST")
    {   $user = $_SESSION['email'];
        $title=$_POST['title'];
        $desc=$_POST['description'];
        $index=$_POST['index'];

        $sql = "INSERT INTO `daily`(`Index`,`User_name`,`Title`,`Description`) VALUES('$index','$user','$title','$desc')";
        $res=mysqli_query($conn,$sql);
    }
    mysqli_close($conn);
?>
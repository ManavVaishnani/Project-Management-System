<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "daily_report";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        // echo "Connection was successfull";
        die("Cant connect to the database");
        // echo "bye";
    }

?>
<?php
    session_start();
    session_unset();
    session_destroy();
    echo header("location:homepage.php");
    exit;
    // echo "You have been logged out";
?>

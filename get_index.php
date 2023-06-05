<?php 
    require 'databaseconnect.php';
    
    if($_SERVER['REQUEST_METHOD']=="GET")
    {   
        $sql = "SELECT MAX(`Index`) AS `Index` FROM `daiLy`";
        $rel = mysqli_query($conn,$sql);

        if($rel){
            $obj = mysqli_fetch_assoc($rel);
            $maxIndex = $obj['Index'];
            echo $maxIndex;
        }else {
            echo "Error: " . mysqli_error($conn);
        }
        
    }
    mysqli_close($conn);
?>
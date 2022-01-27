<?php

include("database_connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $capacity = mysqli_real_escape_string($db,$_POST['capacity']);
      
      if(isset($_SESSION['admin_type'])) {

        $sql = "INSERT INTO `trains`(train_name,capacity)
        VALUES ('$name',$capacity)";
        mysqli_query($db,$sql);
        header("location: http://localhost/metroRailway/admin/metroAdmin/trainList.php");
       
    }else {
       echo "Only admin can add new train.";
    }
   }

?>
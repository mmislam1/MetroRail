<?php

include("database_connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $latitude = mysqli_real_escape_string($db,$_POST['latitude']);
      $longitude = mysqli_real_escape_string($db,$_POST['longitude']); 
      
		
      if(isset($_SESSION['admin_type'])) {
        $sql = "INSERT INTO `stations`(station_name,latitude,longitude)
        VALUES ('$name',$latitude,$longitude)";
        mysqli_query($db,$sql);
        header("location: http://localhost/metroRailway/admin/metroAdmin/stationList.php");
       
    }else {
       echo "Only admin can add new stations.";
    }
   }

?>
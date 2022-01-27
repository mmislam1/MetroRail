<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   
   $id = mysqli_real_escape_string($db,$_POST['delete']); 
   
  
  $ad=$_SESSION['admin_type'];

   
     
   if(isset($_SESSION['admin_type'])) {

     
       $sql = "delete from trains where `train-id`=$id";
       mysqli_query($db,$sql);

       

      header("location: http://localhost/metroRailway/admin/metroadmin/trainList.php");
      
   }else {
     echo "Only admin can Delete Trains.";
   }
}
   ?>
<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = mysqli_real_escape_string($db,$_POST['delete']); 
    $ad=$_SESSION['admin_type'];

    
   if($ad=='masteradmin') {

       $sql = "delete from admin where email='$email'";
       mysqli_query($db,$sql);


      header("location: http://localhost/metroRailway/admin/metroadmin/adminList.php");
      
   }else {
     echo "Only Master admin can fire admins.";
   }
}
   ?>
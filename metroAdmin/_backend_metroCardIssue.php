<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   $id = mysqli_real_escape_string($db,$_POST['user_id']);
   $email=$_SESSION['email_issue_card'];
  

   
   
     
   if(isset($_SESSION['admin_type'])) {

      
      $sql = "update metrocard set card_status=1 where email='$email'";
      mysqli_query($db,$sql);
      $sql = "update metrocard set card_number='$id' where email='$email'";
      mysqli_query($db,$sql);
      

     header("location: http://localhost/metroRailway/admin/metroAdmin/metroCardGrid.php");
   
      
   }else {
      echo "Could not add complaints.";
   }
}
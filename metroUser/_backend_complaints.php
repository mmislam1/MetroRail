<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
          $name = mysqli_real_escape_string($db,$_POST['name']);
          $age = mysqli_real_escape_string($db,$_POST['age']);
          $email = mysqli_real_escape_string($db,$_POST['email']); 
          $number = mysqli_real_escape_string($db,$_POST['number']);
          $address = mysqli_real_escape_string($db,$_POST['address']);
          $message = mysqli_real_escape_string($db,$_POST['message']); 
           

   if(isset($_SESSION['metro_user'])) {

      
       $sql = "INSERT INTO `complaints`(`user_name`,`user_address`,`phone_number`,`complaint_message`,`email`,`age`,`status`) 
       VALUES ('$name','$address',$number,'$message','$email',$age,1)";
       mysqli_query($db,$sql);

       

      header("location: http://localhost/metroRailway/admin/metroUser/complaints.php");
      
   }else {
      echo "Could not add complaints.";
   }
}

?>
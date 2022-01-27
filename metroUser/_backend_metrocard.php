<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   $name = mysqli_real_escape_string($db,$_POST['name']);
   $age = mysqli_real_escape_string($db,$_POST['age']);
   $email = mysqli_real_escape_string($db,$_POST['email']); 
   $number = mysqli_real_escape_string($db,$_POST['number']);
   $address = mysqli_real_escape_string($db,$_POST['address']);
   $password = mysqli_real_escape_string($db,$_POST['password']); 
   //$gender = mysqli_real_escape_string($db,$_POST['gender']); 
  


   
     
  

    	$x=rand();
       $sql = "INSERT INTO `metrocard`(`card_number`,`user_name`,`user_address`,`phone_number`,`password`,`email`,`age`) 
       VALUES ('$x','$name','$address',$number,'$password','$email',$age)";
       mysqli_query($db,$sql);

       

      header("location: http://localhost/metroRailway/admin/metroUser/applicationForMetroCard.php");
      
 
} ?>
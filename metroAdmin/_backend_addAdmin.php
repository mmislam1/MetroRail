<?php

    include("database_connect.php");
    session_start();


    if($_SERVER["REQUEST_METHOD"] == "POST") {

      $name = mysqli_real_escape_string($db,$_POST['name']);
      $age = mysqli_real_escape_string($db,$_POST['age']);
      $password = mysqli_real_escape_string($db,$_POST['pwd']); 
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $phoneNumber = mysqli_real_escape_string($db,$_POST['phoneNumber']);
      $designation = mysqli_real_escape_string($db,$_POST['designation']); 
      $address = mysqli_real_escape_string($db,$_POST['address']);
     

     
   if($_SESSION['admin_type'] == 'masteradmin') {
         $sql = "INSERT INTO `admin`(admin_name,admin_address,phone_number,email,_password,age,designation)
         VALUES ('$name','$address',$phoneNumber,'$email','$password',$age,'$designation')";
         mysqli_query($db,$sql);
         header("location: http://localhost/metroRailway/admin/metroAdmin/adminList.php");
            
         }else {
            echo "Only Master admin can add new admin.";
         }
      }

 ?>
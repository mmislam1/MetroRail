<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   
   $email = mysqli_real_escape_string($db,$_POST['email']); 
   $password = mysqli_real_escape_string($db,$_POST['password']);
   
  
   $sql = "SELECT * from metrocard where email='$email' and `password`='$password' and `card_status`= 1";
       $result=mysqli_query($db,$sql);
   $rows=mysqli_num_rows($result);
   
     
   if($rows==1) {
   $values=mysqli_fetch_assoc($result);
      $_SESSION['metro_user']=$values['card_number'];
      echo $_SESSION['metro_user'];
       


       

      header("location: http://localhost/metroRailway/admin/metroUser/index.php");
      
   }else {
      echo "Email or password didn't match.Please Create a new Metro Card Application. ";
   }
}


?>





















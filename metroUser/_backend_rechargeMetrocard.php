<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   
   $amount = mysqli_real_escape_string($db,$_POST['amount']); 
   $pay=mysqli_real_escape_string($db,$_POST['pay']);
 
  

   
   
     
   if(isset($_SESSION['metro_user'])) {

      $user=$_SESSION['metro_user'];
      $sql="SELECT email from metrocard where `card_number`='$user'";
      $result=mysqli_query($db,$sql);
      $values=mysqli_fetch_assoc($result);
      $email=$values['email'];
         
       
       $sql = "INSERT INTO `recharge`(`card_number`,`amount`,`date`,`payment_details`,`email`) VALUES ('$user','$amount',now(),'$pay','$email')";
       mysqli_query($db,$sql);

       $sql = "UPDATE metrocard set balance=balance+$amount where card_number='$user'";
       mysqli_query($db,$sql);

       

      header("location: http://localhost/metroRailway/admin/metroUser/balanceEnquire.php");
      
   }else {
      echo "Could not recharge metrocard.";
   }
}

?>
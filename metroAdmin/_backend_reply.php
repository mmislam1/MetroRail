<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   $email = mysqli_real_escape_string($db,$_POST['subject']);
   $reply = mysqli_real_escape_string($db,$_POST['reply']);
   

   
   
     
   if(isset($_SESSION['admin_type'])) {
       $sql="SELECT card_number FROM metrocard WHERE email='$email'";
       $result=mysqli_query($db,$sql);
       $row = mysqli_fetch_assoc($result);
       $customer_id=$row['card_number'];
       $admin_id=$_SESSION['user_logged_in'];
       $sql = "INSERT INTO `reply`(`customer_id`,`reply_message`,`admin_id`)
       VALUES ('$customer_id','$reply',$admin_id)";
       mysqli_query($db,$sql);

       

      header("location: http://localhost/metroRailway/admin/metroAdmin/complaintsgrid.php");
      
   }else {
      echo "Could not reply to complaints.";
   }
}



?>
<?php
   include("database_connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    
      $myusertype = mysqli_real_escape_string($db,$_POST['userType']);
      $myusername = mysqli_real_escape_string($db,$_POST['userName']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT admin_name FROM admin WHERE admin_name = '$myusername' and _password = '$mypassword'";
      $result = mysqli_query($db,$sql);
  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['admin_type'] = $myusertype;
         $_SESSION['admin_at_work'] = $myusername;

         $sql = "SELECT admin_id FROM admin WHERE admin_name = '$myusername' and _password = '$mypassword'";
      $result = mysqli_query($db,$sql);
  
      $row = mysqli_fetch_assoc($result);
         $_SESSION['user_logged_in'] = $row['admin_id'] ;
         
         header("location: http://localhost/metroRailway/admin/metroAdmin/index.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
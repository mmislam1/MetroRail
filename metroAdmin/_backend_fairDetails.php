<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   $fair = mysqli_real_escape_string($db,$_POST['fair1']);
   $charge = mysqli_real_escape_string($db,$_POST['charge']);
   $minimumCharge = mysqli_real_escape_string($db,$_POST['minimumCharge']); 
   $minimumUnit = mysqli_real_escape_string($db,$_POST['minimumUnit']);
   
   
   
     
   if(isset($_SESSION['admin_type'])) {

       $sql = "select * from fair where `fair_unit`=$fair";
       $x=mysqli_query($db,$sql);
       //$r = mysqli_fetch_assoc($x);

       //$xx=$r['exists(select * from fair where `fair_id`=$fair)'];


      if(mysqli_num_rows($x)>0){
         
          $sql = "UPDATE `fair` SET `amount_per_unit`=$charge, `minimum_charge` =$minimumCharge, `minimum_distance` =$minimumUnit WHERE `fair_unit` = $fair";
       mysqli_query($db,$sql);
      }
      
       else{
          $sql = "INSERT INTO `fair`(fair_unit,amount_per_unit,minimum_charge	,minimum_distance)
       VALUES ($fair,$charge,$minimumCharge,$minimumUnit)";
       mysqli_query($db,$sql);
      }

     header("location: http://localhost/metroRailway/admin/metroAdmin/fairDetails.php");
      
   }else {
      echo "Only admin can update fair.";
   }
}

<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {


   //$name = mysqli_real_escape_string($db,$_POST['']);
  // $name = mysqli_real_escape_string($db,$_POST['name']);
  // $name = mysqli_real_escape_string($db,$_POST['name']);

   
    $routeId=$_SESSION['route'];
    $trip=$_SESSION['trip'];
    $count=$_SESSION['countStations'];

  
    if(isset($_SESSION['admin_type'])) {
        
      $sql="SELECT station_id from `routedetails`where route_id = $routeId ";
      $result5=mysqli_query($db,$sql);
      //$row5 = mysqli_fetch_assoc($result5);

      $y=0;
       
       while($row5 = mysqli_fetch_assoc($result5)){
          $y=$y+1;
          $x= "trip".$y;
          $xd= "trip".$y."d";
          $trip1 = mysqli_real_escape_string($db,$_POST["$x"]);
          $trip1d = mysqli_real_escape_string($db,$_POST["$xd"]);
   
          $st=$row5['station_id'];
          
          $sql = "INSERT INTO `tripdetails`(trip_number,station_id,	arrival_time,	departure_time)
          VALUES ($trip,$st,'$trip1','$trip1d')";
          mysqli_query($db,$sql);
          
        }

           header("location: http://localhost/metroRailway/admin/metroAdmin/addTrip.php");
          
       }else {
          echo "Only admin can add new trip.";
       }
    }

?>
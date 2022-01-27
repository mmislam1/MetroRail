<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   
   $source = mysqli_real_escape_string($db,$_POST['source']); 
   $destination=mysqli_real_escape_string($db,$_POST['destination']);
 
    
      
       $sql = "SELECT trip_number,station_id,arrival_time,departure_time from tripdetails where station_id=$source or station_id=$destination order by trip_number";
       global $result;
       $result=mysqli_query($db,$sql);
       
      //header("location: http://localhost/metroRailway/admin/metroUser/balanceEnquire.php");
      
   
}

?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Metro Template">
        <meta name="keywords" content="Dreams, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Metro railway | Template</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body> 
        <?php include "include/header.php" ?> <!--header file-->   
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
   <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
        <!-- Complaint Form Section Begin -->
        <section class="application-form courses--page spad">
            <div class="container">
                <div class="application__form__content"style="background-color:#0a2438;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-title">
                                <h2>Time table for journey</h2>       
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-title">
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-dark">
                        <tr>
                           <th rowspan="2">Train name</th>
                           <th colspan="2">source</th>
                           <th colspan="2" >Destination</th>    
                        </tr>
                        <tr> 
                            <td >Arraival Time</td>
                            <td>Departure Time </td>
                            <td>Arraival Time</td>
                            <td>Departure Time</td>
                        </tr> 
                                
                               <?php 
                                $check=0;
                                $result=$GLOBALS['result'];
                               
                           while($row = mysqli_fetch_assoc($result)) {
                              
                           if($check==0){
                                $s=$row['station_id'];
                                $tr=$row['trip_number'];
                                $ar=$row['arrival_time'];
                                $dp=$row['departure_time'];

                            if($s==$source){
                                $check=1;
                            }
                        }
                        else{

                            $d=$row['station_id'];
                            $tr1=$row['trip_number'];
                            $ar1=$row['arrival_time'];
                            $dp1=$row['departure_time'];

                            if($d==$destination && $tr==$tr1){
                                $check=2;
                            }

                        }
                                
                           if($check==2) 
                           {
                            $sql="select train_id from trip where trip_code=$tr";
                            $result6=mysqli_query($db,$sql);
                            $row6 = mysqli_fetch_assoc($result6);
                            $t=$row6['train_id'];

                            
                            $sql="select train_name from trains where `train-id`=$t";
                            $result6=mysqli_query($db,$sql);
                            $row6 = mysqli_fetch_assoc($result6);
                            $tr=$row6['train_name'];

                                   echo "<tr>
                                <td >".$tr."</td>
                                <td>".$ar."</td>
                                <td>".$dp."</td>
                                <td>".$ar1."</td>
                                 <td>".$dp1."</td>
                            </tr>";

                            $check=0;
                        }
                     }
                              

                    ?>                       
                            </table>
                        </div>
                    </div>
                </section>    
             <!-- Application Form Section End -->
             </div>
        </section>
                
  <?php include "include/footer.php"?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>



























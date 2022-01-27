<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
   
   $source = mysqli_real_escape_string($db,$_POST['source']); 
   $destination=mysqli_real_escape_string($db,$_POST['destination']);
 
      
       $sql = "SELECT length_from_start,station_id,route_id from routedetails where station_id=$source or station_id=$destination order by route_id";
       $result=mysqli_query($db,$sql);
       
      //header("location: http://localhost/metroRailway/admin/metroUser/balanceEnquire.php");
  
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
                                  <h2>Find fair and route between two stations</h2>
                              </div>
                          </div>
                      </div>
                          <table class="table table-bordered table-dark">
                              <tr> 
                                <td>Route </td>
                                <td>Distance</td>
                                <td>Fair</td>
                            </tr> 
                            <?php
                           
                            $check=0;
                     
                 while($row = mysqli_fetch_assoc($result)){
                    
                 if($check==0){
                    $st=$row['station_id'];
                    $r=$row['route_id'];
                    $dis=$row['length_from_start'];

                  if($st==$source){
                      $check=1;
                  }
              }
              else{

                  $st1=$row['station_id'];
                  $r1=$row['route_id'];
                  $dis1=$row['length_from_start'];
                  

                  if($st1==$destination && $r==$r1){
                      $check=2;
                  }

              }
                      
                 if($check==2) 
                 {
                    $sql="select route_name from routes where route_id=$r";
                    $result7=mysqli_query($db,$sql);
                    $row7 = mysqli_fetch_assoc($result7);
                    $rout=$row7['route_name'];

                    $sql="select station_name from stations where stations_id=$st";
                    $result8=mysqli_query($db,$sql);
                    $row8 = mysqli_fetch_assoc($result8);
                    $stat=$row8['station_name'];

                    $sql="select station_name from stations where stations_id=$st1";
                    $result9=mysqli_query($db,$sql);
                    $row9 = mysqli_fetch_assoc($result9);
                    $stat1=$row9['station_name'];

                    $dist=$dis1-$dis;

                    if($dist<0){
                            $dist= (-1)*$dist;
                     }

                    $sql="select amount_per_unit,minimum_charge from fair";
                    $result10=mysqli_query($db,$sql);
                    $row10 = mysqli_fetch_assoc($result10);
                    $fair=$row10['amount_per_unit'];
                    $min=$row10['minimum_charge'];

                    $total=$dist*$fair;
                    
                    if($total<$min){
                        
                        $total=$min;
                    }

                         echo "<tr>
                      <td >".$rout."</td>
                      <td>".$dist."</td>
                      <td>".$total."</td>
                        
                    </tr>";

                    $check=0;
                }

                       }
                    }
                      
            ?>
              </table>           
          <!-- Map Section Begin -->
          <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467645.8008415308!2d90.36978468972737!3d23.6944463353763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c3ec748054e3%3A0x57c5c536170f4e52!2sDhaka%20Metro%20Rail%20Depot!5e0!3m2!1sen!2sbd!4v1606148117694!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div> <!-- Map Section End -->
              </div>
            </div>
          </section>
        <!-- Application Form Section End -->
      </div>        
  </section> 
</section> 
<!-- Contact Section End -->
     
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


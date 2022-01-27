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
         <style> 
            .back-img {
                    background-image: url("img/metrorail-dhaka.png");
                    background-repeat : no-repeat;
                    background-size: 100% 100%;
              }

        h2{
            text-align: center;
            color: #FFFFFFFF;
            background-color: #796BAA;
            font-weignt: bold;
            text-transform: uppercase;
            display: inline-block;
        }
              
        </style>
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
            <section class="contact spad back-img">
                <div class="container">
                    <!-- Complaint Form Section Begin -->
                    <section class="application-form courses--page spad">
                        <div class="container">
                            <div >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title center-title">
                                            <h2 style="color: #FFFFFF;">Find fair and route between two stations</h2>
                                        </div>
                                    </div>
                                </div>
                                    <form class="offset-3" action="_backend_fairAndRoute.php" method="POST"> 
                                     <div class="form-group">
                                        <label style="color: #E88CE6;; font-weight: bold;" class="control-label col-sm-2" for="source">Source :</label>
                                        <div class="col-sm-8">  
                                            <select class="form-control" id="source" name="source">
                                            <?php 
                                        include ("database_connect.php");
                                        $sql="select station_id,route_id,length_from_start from routedetails";
                                        $result=mysqli_query($db,$sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $stat=$row["station_id"];
                                                $sql="select station_name from stations where stations_id=$stat";
                                                $result1=mysqli_query($db,$sql);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                $station=$row1["station_name"];
                                              echo "<option value='$stat'>".$station."</option><br>";
                                            }
                                          }

                                        ?>
                                        </select>
                                    </div>
                                </div>
                         <div class="form-group">
                            <label style="color: #E88CE6;; font-weight: bold;" class="control-label col-sm-2" for="destination">Destination :</label>
                            <div class="col-sm-8">  
                                <select class="form-control" id="destination" name="destination">
                                <?php 
                            include ("database_connect.php");
                            $sql="select station_id,route_id,length_from_start from routedetails";
                            $result=mysqli_query($db,$sql);
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    $stat=$row["station_id"];
                                    $sql="select station_name from stations where stations_id=$stat";
                                    $result1=mysqli_query($db,$sql);
                                    $row1 = mysqli_fetch_assoc($result1);

                                    $station=$row1["station_name"];
                                  echo "<option value='$stat'>".$station."</option><br>";
                                }
                              }

                            ?>
                        </select>
                    </div>
                </div>
                 <div class="col-lg-12 ">
                    <button type="submit" class="btn btn-warning col-md-3">Find</button>
                        </div>
                    </form>
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
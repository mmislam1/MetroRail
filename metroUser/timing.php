
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
                    background-size: cover;
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
                                            <h2 style="color:#FFFFFF;">Time table for journey</h2>
                                            
                                        </div>
                                    </div>
                                </div>
                            <form class="offset-3" action="_backend_timing.php" method="POST">
                                <div class="form-group">
                                    <label style="color: #E88CE6;; font-weight: bold;" class="control-label" for="station1">Source :</label>
                                    <div class="col-sm-8"> 
                                        <select class="form-control" id="station1" name="source" >  
                                        <?php 
                                        include ("database_connect.php");
                                        $sql="select station_name,stations_id from stations";
                                        $result=mysqli_query($db,$sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $station=$row["station_name"];
                                                $stat=$row["stations_id"];
                                              echo "<option value='$stat'>".$station."</option><br>";
                                            }
                                          }

                                        ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #F147FF; font-weight: bold;"class="control-label" for="station2"> Destination :</label>
                                        <div class="col-sm-8"> 
                                            <select class="form-control" 
                                            id="station2" name="destination" >  
                                    <?php 
                                        include ("database_connect.php");
                                        $sql="select station_name,stations_id from stations";
                                        $result=mysqli_query($db,$sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $station=$row["station_name"];
                                                $stat=$row["stations_id"];
                                              echo "<option value='$stat'>".$station."</option><br>";
                                            }
                                          }

                                        ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <button type="submit" class="btn btn-warning col-md-3">Add</button>
                                     </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title center-title">
                                            </div>
                                        </div>
                                    </div>
                              <!--  <table class="table table-bordered table-dark">
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
                                    <tr>
                                        <td >Train1</td>
                                        <td>10:00:00</td>
                                        <td>10:12:00</td>
                                        <td>10:30:00</td>
                                         <td>10:32:00</td>
                                    </tr>
                                    <tr>
                                        <td>Train2</td>
                                        <td>11:00:00</td>
                                        <td>11:02:00</td>
                                        <td>11:18:00</td>
                                        <td>11:20:00</td>
                                    </tr>
                                </table>-->
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



























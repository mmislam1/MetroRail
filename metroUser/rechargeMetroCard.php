<?php
session_start();

if (!isset($_SESSION['metro_user'])){
  header("Location: http://localhost/metroRailway/admin/metroUser/login.php");
  exit();
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
        <style>
            .back-img {
                    background-image: url("img/metrorail-dhaka.png");
                    background-repeat : no-repeat;
                    background-size: cover;
              }
              .application-form form input {
                width: 100%;
                height: 50px;
                border: 1px solid #d59fd4;
                background: #dbd4df;
                font-size: 14px;
                color: #444444;
                padding-left: 20px;
                margin-bottom: 30px;
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
                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title center-title">
                                            <h2 style="color: #FFFFFF">Recharge Mtero Card</h2>  
                                        </div>
                                    </div>
                                </div>
                                <form class="offset-3" action="_backend_rechargeMetrocard.php" method="POST">
                                     <div class="form-group">
                                    <label class="control-label " style="color: #bf14fd;"for="source">Enter recharge amount :</label>
                                    <div class="col-sm-8">  
                                        <input type="text" placeholder="Enter recharge amount" name="amount">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="destination" style=" color: #bf14fd;font-weight: bold;">Payment method :</label>
                                    <div class="col-sm-8">  
                                        <label for="age1" ><h4 style="color: #bf14fd;"><b>Bkash</b></h4></label>
                                       <input class="col-md-6" type="radio" id="Bkash" name="pay" value="Bkash">
                                      </div>
                                    <div class="col-sm-8"> 
                                        <label for="age2"> <h4 style="color: #bf14fd;"><b>Rocket</b></h4></label>  
                                        <input class="col-md-6" type="radio" id="Rocket" name="pay" value="Rocket">
                                    </div>
                                </div>
                                 <div class="col-lg-12 ">
                                    <button type="submit" class="btn btn-warning col-md-3">Submit</button>
                                    </div>
                                </form>
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
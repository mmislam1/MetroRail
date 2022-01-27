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
              .application-form form input {
            width: 100%;
            height: 50px;
            border: 1px solid #864ace;
            background: #e6e1e8;
            font-size: 14px;
            color: #444444;
            padding-left: 20px;
            margin-bottom: 30px;
            }
        textarea.form-control {
            height: auto;
             width: 100%;    
            border: 1px solid #864ace;
            background: #e6e1e8;
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
        <section class="application-form courses--page spad" >
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-title">
                            <h2 style="color: #FFFFFFFF;">Application For Metro Card</h2>
                        </div>
                    </div>
                </div>
                <form class="offset-1" action="_backend_metrocard.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input type="text" placeholder="Enter Your Name" name="name" >
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" placeholder="Enter Your Age" name="age">
                            </div> 
                         </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="email" placeholder="Enter Your Email" name="email" >
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="password" placeholder="Enter Your Password" name="password" >
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" placeholder="Enter Your Phone Number" name="number" >
                        </div>
                     </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea  type="text" class="form-control" rows="5" placeholder="Enter Your Address"id="comment" name="address"></textarea>  
                            </div>
                         </div>  
                        <div class="col-lg-12 text-center mt-4">
                            <button type="submit" class="btn btn-warning col-md-2">Submit</button>
                        </div>
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
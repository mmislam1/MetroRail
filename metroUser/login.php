<?php
session_start();

if (isset($_SESSION['metro_user'])){
  header("Location: http://localhost/metroRailway/admin/metroUser/index.php");
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
            .application-form form input {
                    width: 100%;
                    height: 50px;
                    border: 3px solid #D95BDD;
                    background: #e9f1f9;
                    font-size: 14px;
                    color: #6a1414;
                    padding-left: 20px;
                    margin-bottom: 30px;
                }
            .back-img {
                    background-image: url("img/metrorail-dhaka.png");
                    background-repeat : no-repeat;
                    background-size: cover;
              }
             a {
                color: black;
                text-decoration: none;
                background-color: transparent;
                }
        h2{
            text-align: center;
            color: #FFFFFFFF;
            background-color: #796BAA;
            font-weignt: bold;
            text-transform: uppercase;
            display: inline-block;
        }
        .btn{
            border: 2px solid #E0A800;
        }
            .btn:hover{
            border: 2px solid #E0A800;
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
        <section class="contact spad back-img ">
            <div class="container">
             <!-- Complaint Form Section Begin -->
                <section class="application-form courses--page spad" >
                    <div class="container">
                         <h2 class="offset-4">Login  Your Account</h2>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-5 offset-3 ">
                                    <div class="section-title center-title">
                                        
                                    </div>
                                </div>
                            </div>
                            <form action="_backend_user_login.php" method="POST"> 
                                <div class="form-group offset-2">
                                 <!--<label class="control-label text-white" for="email">Email :</label>-->
                                    <div class="col-sm-9">  
                                     <input type="email"  placeholder="Enter Your Email" name="email" required/>
                                </div>
                            </div>
                             <div class="form-group offset-2">
                              <!--<label class="control-label text-white" for="password"> Password :</label>-->
                                <div class="col-sm-9">  
                                   <input type="password" placeholder="Enter Your password" name="password" required/>
                                </div>
                           <div class="row">
                             <div class="col-lg-5">
                                <button type="submit" class="btn btn-warning col-md-4">Submit</button>
                            </div>
                                <div class="mr-2">
                                        <span style="color:#ffc107;">or </br></br> </span>
                                    </div>
                                        <button  type="submit" style=
                                    "bakground-color: #2CB7CE;"class="btn btn-warning col-md-3 btn"> <a  href="applicationForMetroCard.php">Create A New Application</a>
                                    </div>
                                </div>
                            </form> 
                            <div style="margin-bottom:200px;">
                                        
                          </div>   
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
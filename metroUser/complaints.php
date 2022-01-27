<?php
session_start();

if (!isset($_SESSION['metro_user'])){
  header("Location: http://localhost/metroRailway/admin/metroUser/login.php");
  exit();
}
?>
<?php

include ("database_connect.php");
        $uid=$_SESSION['metro_user'];
        $sql="SELECT `reply_message` from reply where `customer_id`='$uid' order by reply_id desc";
        $result=mysqli_query($db,$sql);
        $row = mysqli_fetch_assoc($result);
        $balance=$row['reply_message'];

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
            h1, h2, h3, h4, h5, h6 {
                                margin: 0;
                                color: green;
                                font-weight: 400;
                                font-family: "Open Sans", sans-serif;
                            }
                             h5 {
                                margin: 0;
                                color:#fff;
                                font-weight: 400;
                                font-family: "Open Sans", sans-serif;
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
        <section class="contact spad">
            <div class="container">
            <!-- Complaint Form Section Begin -->
                <section class="application-form courses--page spad" >
                    <div class="container">
                        <div class="application__form__content">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="section-title center-title">
                                        <span style="color:green">Submit a Complaint</span>
                                        <h2>Complaint Form</h2>
                                    </div>
                                </div>
                            </div>
               <?php if($balance) {echo "<div >
                <h4 ><b>You Have A Reply From Admin:</b></h4><br>
                <h5>  ".$balance."<h5><br>

                </div>"; } ?>

                <form action="_backend_complaints.php" method="POST">
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
                            <input type="text" placeholder="Enter Your Phone Number" name="number" >
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea  type="text" class="form-control" rows="5" placeholder="Enter Your Address"id="comment" style="background-color:#0C2B4B;" name="address"></textarea>  
                            </div>
                         </div>
                            <div class="row mt-4">
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea  type="text" class="form-control" rows="5" placeholder="Enter Your Message"id="comment"style="background-color:#0C2B4B; " name="message"></textarea>  
                                    </textarea>  
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
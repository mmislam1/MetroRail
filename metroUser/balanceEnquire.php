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
                                            <h2>Balance Enquire</h2>   
                                        </div>
                                    </div>
                                </div>
                                <?php
                                include ("database_connect.php");
                                        $uid=$_SESSION['metro_user'];
                                        $sql="SELECT `balance` from metrocard where `card_number`='$uid'";
                                        $result=mysqli_query($db,$sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $balance=$row['balance'];
                                        //echo $balance.$uid;

                                    ?>

                                        <h4 style="color:#fff;">Your current Metrocard balance is :  <?php 
                                        echo $balance;

                                        ?></h4>
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
<?php
session_start();

if (!isset($_SESSION['user_logged_in'])){
  header("Location: http://localhost/metroRailway/admin/metroAdmin/login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../images/11.png" type="image/gif" sizes="16x16">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Metro | Complaints Grid</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         <!--style css-->
        <link rel="stylesheet" href="../css/style.css">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        <?php include 'menu.php'; ?>
        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                <h1>Complaints<small>Grid</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Complaints Grid</li>
                </ol>
            </section>
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <section class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="row">
                        <div class="register-box-body">
                            <h3 class="login-box-msg">Complaints Grid</h3>                      
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <tr>           
                            <?php
                    include ("database_connect.php");
                     $count=1;
                    $sql="SELECT `user_name`,`email`,`complaint_message`,`status` from complaints where `status`=1";
                    $result=mysqli_query($db,$sql);
                
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                  
                                    $name=$row["user_name"];
                                    $email=$row["email"];
                                    $message=$row["complaint_message"];
                                    $status=$row["status"];
                                    $sql="SELECT `card_number` from metrocard where `email`='$email'";
                                    $result1=mysqli_query($db,$sql);
                                    $row1 = mysqli_fetch_assoc($result1);
                                    $uid=$row1["card_number"];

                                  echo "<tr><th scope='row'>".$uid."</th><td>".$name."</td>";
                                  echo "<td>".$email."</td>";
                                  echo "<td>".$message."</td>";
                                  if($status==1)
                                  {
                                    echo "<td><form action='_backend_complaintsGrid.php' method='POST'>
                                    
                                   <button class='btn btn-success' name='subject' type='submit' value=".$email.">Reply Now</button>
                                  </td></tr>";
                                }
                                  //$count=$count+1;
                                }
                              }

                              ?>
                          </tbody>
                        </table>
                         <!--End form-->
                    </div>
                </div>
            </section>
             <!-- /.content -->
        </div>
     <!-- /.content-wrapper -->
        <footer class="main-footer text-right">
             <strong> &copy; 2020 SoftCare IT. All rights resereved.</strong><a href="http://www.softcareit.com/"  target="_blank"> SoftCare IT </a>
        </footer>
     </div>
        <!-- ./wrapper -->
        <!-- jQuery 3 -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="../bower_components/raphael/raphael.min.js"></script>
        <script src="../bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="../bower_components/moment/min/moment.min.js"></script>
        <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->

        <!-- Slimscroll -->
        <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
    </body>
</html>
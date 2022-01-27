<?php

include("database_connect.php");
session_start();



   if (!isset($_SESSION['user_logged_in'])){
    header("Location: http://localhost/metroRailway/admin/metroAdmin/login.php");
    exit;
   }

  $sql = "select * from trains";
  $result=mysqli_query($db,$sql);
  //$row = mysqli_fetch_assoc($result);
  

  ?>
  <!DOCTYPE html>
  <html>
      <head>
          <link rel="icon" href="../images/11.png" type="image/gif" sizes="16x16">
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Metro | addRoute</title>
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
                  <h1>Metro<small>Train List</small></h1>
                  <ol class="breadcrumb">
                      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li class="active">Train List</li>
                  </ol>
              </section>
              <!-- Content Header (Page header) -->
              <!-- Main content -->
            <section class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="row">
                    <div class="register-box-body">
                        <h3 class="login-box-msg">Train List</h3>
                        
                        <form action="_backend_trainList.php" method="POST">
                        <table class="table table-bordered">
                            <tr>
                              <th>Train ID</th>
                              <th>Train Name</th>
                              <th>Action</th>
                            </tr>
                            <?php 
                            while($row = mysqli_fetch_assoc($result)){

                          $id=$row['train-id'];
                          $name=$row['train_name'];


                            echo 
                            "<tr>
                              <td>".$id."</td>
                              <td>".$name."</td>
                              <td><button class='btn btn-danger' type ='submit' name='delete' value=".$id.">Delete Train</button></td>
                            </tr>";
                            }

                            ?>
                          </table>  
                        </form> 
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
   
 <?php   
 

?>
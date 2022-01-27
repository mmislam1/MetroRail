<?php
session_start();

if (isset($_SESSION['user_logged_in'])){
  header("Location: http://localhost/metroRailway/admin/metroAdmin/index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
   <head>
        <link rel="icon" href="../images/11.png" type="image/gif" sizes="16x16">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Metro | Login</title>
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
  <body class="hold-transition login-page container">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>M</b>etro</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="text-center">Login</p>
        <form action="_backend_login.php" method="POST">
          <div class="form-group">
            <label>Select User Type</label>
          <select class="form-control" name="userType" required>
            <option value="masteradmin" selected>Master Admin</option>
          </select>
        </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="User Name" name="userName" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Log In</button>
            </div>
          </div>
          <div class="row">
            <div class="form-group has-feedback">
              <span class="text-danger"></span>
            </div>
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
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
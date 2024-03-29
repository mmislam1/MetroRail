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
    <title>Metro | Admin List</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--style css-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        <body class="hold-transition skin-blue sidebar-mini">
            <div class="wrapper">
              <?php include 'menu.php'; ?>
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title"> Sub Admin List </h1>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="overflow-x: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               		
                                    <tr>
                                      
                                    <td><?php echo $serialNo;?></td>
                                    <td><?php echo $info['name'];?></td>
                                    <td><?php echo $info['email'];?></td>
                                    <td><?php echo $info['userName'];?></td>
                                    <td><?php echo "<img src='$img' height='50' width='50'>"; ?></td>
                                    <td>
                                      <a href="adminDelete.php?&adminId=<?php echo $info['id'];?>" class="btn btn-danger btn" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" style="font-size:30px;color:white;"></i></a>
                                    </td>
                                </tr>
                                <?php $serialNo++;}?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    <!-- /.box-body -->
                    </div>
                    <!-- /.row -->
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
        <!-- Bootstrap 3.3.7 -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $('#example1').DataTable()
            })
        </script>
    </body>
</html>

<?php

session_start();

include('database_connect.php');

//mysqli_close($db);

unset($_SESSION['user_logged_in']);

//session_destroy();

header("location: http://localhost/metroRailway/admin/metroAdmin/login.php");

?>
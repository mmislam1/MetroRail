<?php

session_start();

include('database_connect.php');

//mysqli_close($db);

unset($_SESSION['metro_user']);

//session_destroy();

header("location: http://localhost/metroRailway/admin/metroUser/login.php");

?>
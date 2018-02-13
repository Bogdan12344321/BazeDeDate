<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "scoala";

$con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("Could not connect MySQL");
mysqli_select_db($con,"$db_name") or die ("No database");
?>

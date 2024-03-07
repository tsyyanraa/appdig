<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "sistem_informasi_rpl";

$connection = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($connection));
?>
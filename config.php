<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "sawit";

$hari_ini = date("Y-m-d");

$koneksi   = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno($koneksi)) {

   echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>

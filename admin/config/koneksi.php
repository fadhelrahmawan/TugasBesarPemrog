<?php
$server = "localhost";
$username = "root";
    $password = "";
    $database = "museum_pos";

// Koneksi dan memilih database di server
$config =  mysqli_connect($server, $username, $password,$database);
if(mysqli_connect_errno())
{
echo'Koneksi Gagal:'.mysqli_connect_error();
}
else {
}
error_reporting(0);
?>

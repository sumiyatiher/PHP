<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "sekolah";

$connection = mysqli_connect($server, $user, $password, $database);

if (!$connection){
    echo "koneksi gagal" . mysqli_connect_error();
}


?>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "bukusakudigital";

$koneksi = mysqli_connect($host, $username, $password, $database);

if($koneksi ->connect_error){
    echo "koneksi database gagal: ". mysqli_connect_error();
    die;
}else {
    //echo "koneksi database berhasil";
}

?>

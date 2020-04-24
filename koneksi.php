<?php
//membuat koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "covid";
$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if (!$koneksi) {
    die("GAGAL TERHUBUNG" . mysqli_connect_error());
}

?>
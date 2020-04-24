<?php
include("koneksi.php");


//mengecek apakah tombol daftar sudah diklik atau belum
if (isset($_POST['kirim'])) {
    //mengambil data dari formulir

    $jumlahp = $_POST['jmlhp'];
    $jumlahr = $_POST['jmlhr'];
    $jumlahs = $_POST['jmlhs'];
    $jmlahm = $_POST['jmlhm'];




    //membuat query
    $sql = "INSERT INTO covid (jumlah_positif,jumlah_dirawat,jumlah_sembuh,jumlah_meninggal)values
    ('$jumlahp','$jumlahr','$jumlahs','$jmlahm')";
    $query = mysqli_query($koneksi, $sql);

    //cek apakah query sudah berhasil
    if ($query) {
        header('location:index.php?status=sukses');
    } else {
        //kalau gagal akan dialihkan kehalaman index.php dengan status gagal
        header('location:index.php?status=gagal');
    }
} else {
    die("akses dilarang");
}

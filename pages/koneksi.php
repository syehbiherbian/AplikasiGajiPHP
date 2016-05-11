<?php
$host        ="localhost";
$user        ="root";
$pass        ="";
$database   ="gaji_karyawan";
$koneksi    = new mysqli($host,$user,$pass,$database);
if (mysqli_connect_errno()) {
    mysqli_connect_error('Koneksi ke database gagal');
}
?>
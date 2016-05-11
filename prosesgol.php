<?php
include "koneksi.php";

$kodegol	        = $_POST['kodegol'];
$gol    	        = $_POST['gol'];

$query = mysql_query("INSERT INTO golongan (kode_gol, golongan) VALUES ('$kodegol', '$gol')");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Golongan Baru Dengan Kode $kodegol");
} else {
	header("location:index.php?pesan=2&isi=Gagal Menambahkan Data Golongan Baru Dengan Kode $kodegol karena " . mysql_error());
}
?>
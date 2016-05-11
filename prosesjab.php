<?php
include "koneksi.php";

$kodejab	        = $_POST['kodejab'];
$jab    	        = $_POST['jab'];

$query = mysql_query("INSERT INTO jabatan (kode_jab, jabatan) VALUES ('$kodejab', '$jab')");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Jabatan Baru Dengan Kode $kodejab");
} else {
	header("location:index.php?pesan=2&isi=Gagal Menambahkan Data Jabatan Baru Dengan Kode $kodejab karena " . mysql_error());
}
?>
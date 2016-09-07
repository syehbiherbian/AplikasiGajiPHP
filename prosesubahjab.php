<?php
include "koneksi.php";

$kodejab	        = $_POST['kodejab'];
$jab    	        = $_POST['jab'];

$query = mysql_query("update jabatan set jabatan='$jab' where kode_jab='$kodejab'");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Mengedit data Dengan Kode $kodejab");
} else {
	header("location:index.php?pesan=2&isi=Gagal Mengedit data Dengan Kode $kodejab karena " . mysql_error());
}

?>
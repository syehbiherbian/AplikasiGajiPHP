<?php
include "koneksi.php";

$kodegol	        = $_POST['kodegol'];
$gol    	        = $_POST['gol'];

$query = mysql_query("update golongan set golongan='$gol' where kode_gol='$kodegol'");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Mengedit data Dengan Kode $kodegol");
} else {
	header("location:index.php?pesan=2&isi=Gagal Mengedit data Dengan Kode $kodegol karena " . mysql_error());
}

?>
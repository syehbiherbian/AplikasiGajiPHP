<?php
include "koneksi.php";

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jns_kel =$_POST['jns_kel'];
$tgl_lhr =$_POST['tanggal']. "-" . $_POST['bulan'] . "-" . $_POST['tahun'];
$stat = $_POST['stat'];
$alamat = $_POST['alamat'];
$pendidikan =$_POST['pendidikan'];
$kodegol = $_POST['kodegol'];
$kodejab =$_POST['kodejab'];
$query = mysql_query("INSERT INTO pegawai VALUES ('$nip', '$nama', '$jns_kel','$tgl_lhr', '$stat', '$alamat', '$pendidikan', '$kodejab', '$kodegol') ");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Pegawai Baru Dengan NIP $nip");
} else {
	header("location:index.php?pesan=2&isi=Gagal Menambahkan Data Pegawai Baru Dengan NIP $nip karena " . mysql_error());
}
?>

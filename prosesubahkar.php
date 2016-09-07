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

$query = mysql_query("update pegawai set nama_karyawan='$nama', jenis_kelamin='$jns_kel', tgl_lahir='$tgl_lhr', status='$stat', alamat='$alamat', pendidikan='$pendidikan', kode_jab='$kodejab', kode_gol='$kodegol' where NIP='$nip'");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Mengedit data Dengan NIP $nip");
} else {
	header("location:index.php?pesan=2&isi=Gagal Mengedit data Dengan NIP $nip karena " . mysql_error());
}

?>
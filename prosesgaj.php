<?php
include "koneksi.php";

$no_slip	        = $_POST['no_slip'];
$nip    	        = $_POST['nip'];
$tanggal_gaji		= $_POST['tanggal_gaji'];
$tj_anak			= $_POST['tj_anak'];
$tj_pang			= $_POST['tj_pang'];
$tj_jab				= $_POST['tj_jab'];
$gaji_pokok			= $_POST['gapok'];
$gaji_kotor			= $_POST['gator'];
$gaji_bersih		= $_POST['gasih'];
$taspen				= $_POST['taspen'];
$pph 				= $_POST['pph'];
$total_pot			= $_POST['topot'];

$query = mysql_query("INSERT INTO gaji (no_slip, nip, tanggal_gaji, tunjangan_anak, tunjangan_pasangan, tunjangan_jabatan, gapok, gaji_kotor, gaji_bersih, taspen, pph, total_pot) VALUES ('$no_slip', '$nip', '$tanggal_gaji', '$tj_anak', '$tj_pang', '$tj_jab', '$gaji_pokok', '$gaji_kotor', '$gaji_bersih', '$taspen', '$pph', '$total_pot')");
if ($query) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Gaji Dengan No slip $no_slip");
} else {
	header("location:index.php?pesan=2&isi=Gagal Menambahkan Data Gaji Baru Dengan No Slip $no_slip karena " . mysql_error());
}
?>
<?PHP
include("koneksi.php");
$kodegol = $_GET['id'];
$sql = mysql_query("delete from golongan where kode_gol='$kodegol'");
$sql = mysql_query("delete from pegawai where kode_gol='$kodegol'");
if ($sql){
header("location:index.php?pesan=1&isi=Berhasil Menghapus Data Dengan kode $kodegol");
}else{
header("location:index.php?pesan=2&isi=Gagal Menghapus Data Dengan kode $kodegol karena ".mysql_error());
}
?>
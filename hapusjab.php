<?PHP
include("koneksi.php");
$kodegol = $_GET['id'];
$sql = mysql_query("delete from jabatan where kode_jab='$kodejab'");
$sql1 = mysql_query("delete from pegawai where kode_jab='$kodejab'");
if ($sql){
header("location:index.php?pesan=1&isi=Berhasil Menghapus Data Dengan kode $kodegol");
}else{
header("location:index.php?pesan=2&isi=Gagal Menghapus Data Dengan kode $kodegol karena ".mysql_error());
}
?>
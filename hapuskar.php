<?PHP
include("koneksi.php");
$nip = $_GET['id'];
$sql1 = mysql_query("delete from pegawai where NIP='$nip'");
if ($sql){
header("location:index.php?pesan=1&isi=Berhasil Menghapus Data Dengan kode $nip");
}else{
header("location:index.php?pesan=2&isi=Gagal Menghapus Data Dengan kode $nip karena ".mysql_error());
}
?>
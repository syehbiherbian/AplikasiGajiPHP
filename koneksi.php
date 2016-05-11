<?php
@mysql_connect("localhost","root","");
mysql_select_db("db_gajikaryawan");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$nip = $_GET['q'];
if($nip){
$query = mysql_query("select nama_karyawan from pegawai where nip=$nip");
while($d = mysql_fetch_array($query)){
echo $d['nama_karyawan'];
}
}

$cari_kd=mysql_query("select max(no_slip) from gaji");
$tm_cari = mysql_fetch_array($cari_kd);
$no_slip=substr($tm_cari['no_slip'],1,4);
$tambah=$no_slip+1;
if($tambah<10){
  $no_slip="P000".$tambah;
}else{
  $no_slip="P00".$tambah;
}

//fungsi format rupiah 
?>

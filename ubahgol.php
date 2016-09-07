<?php
include("koneksi.php"); #memanggil file koneksi.php
$kode_gol = $_GET['id']; #mendapatkan data id  dari method get
if (empty($kode_gol)){ #jika id mahasiswany kosong maka alihkan ke halaman semua_mahasiswa.php
header("location:index.php?p=tampilgol"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$sql = mysql_query("select * from golongan where kode_gol='$kode_gol'");
$hasil = mysql_num_rows($sql);
if ($hasil == 0){ #jik $hasil 0 (tidak ada rows) maka alihkan ke page semua_mahasiswa.php
header("location:index.php?p=tampilgol"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$data = mysql_fetch_array($sql); #memecahkan data row yang di pilih menjadi data dalam bentuk array
$kode_gol = $data['kode_gol'];
$golongan = $data['golongan']; #dapatkan id mahasiswa dari data array (row) 'id'
?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Ubah Data <?php echo kode_gol; ?> </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="prosesubahgol.php" method="post">
                    <table class="table table-condensed">
                        <tr>
                            <td><label for="kodegol">Kode Golongan</label></td>
                            <td><input name="kodegol" type="text" class="form-control" id="kodegol" value="<?php echo $kode_gol; ?>" placeholder="Kode Golongan" readonly/></td>
                        </tr>
                        <tr>
                            <td><label for="gol">Golongan</label></td>
                            <td><input name="gol" type="text" class="form-control" id="gol" placeholder="Golongan" required value="<?php echo $golongan; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php?p=home" class="btn btn-sm btn-primary">Kembali</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
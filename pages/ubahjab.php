<?php
include("koneksi.php"); #memanggil file koneksi.php
$kode_jab = $_GET['id']; #mendapatkan data id  dari method get
if (empty($kode_jab)){ #jika id mahasiswany kosong maka alihkan ke halaman semua_mahasiswa.php
header("location:index.php?p=tampiljab"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$sql = mysql_query("select * from jabatan where kode_jab='$kode_jab'");
$hasil = mysql_num_rows($sql);
if ($hasil == 0){ #jik $hasil 0 (tidak ada rows) maka alihkan ke page semua_mahasiswa.php
header("location:index.php?p=tampiljab"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$data = mysql_fetch_array($sql); #memecahkan data row yang di pilih menjadi data dalam bentuk array
$kode_jab = $data['kode_jab'];
$jabatan = $data['jabatan']; #dapatkan id mahasiswa dari data array (row) 'id'
?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Edit Data Jabatan <?php echo $kode_jab; ?> </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="prosesubahjab.php" method="post">
                    <table class="table table-condensed">
                        <tr>
                            <td><label for="kodejab">Kode Jabatan</label></td>
                            <td><input name="kodejab" type="text" value="<?php echo $kode_jab ?>" class="form-control" id="kodejab" placeholder="Kode Jabatan" readonly /></td>
                        </tr>
                        <tr>
                            <td><label for="jab">Jabatan</label></td>
                            <td><input name="jab" type="text" class="form-control" value="<?php echo $jabatan ?>" id="jab" placeholder="Jabatan" required/></td>
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
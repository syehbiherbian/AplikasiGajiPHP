<?php
include("koneksi.php"); #memanggil file koneksi.php
$nip = $_GET['id']; #mendapatkan data id  dari method get
if (empty($nip)){ #jika id mahasiswany kosong maka alihkan ke halaman semua_mahasiswa.php
header("location:index.php?p=tampilkar"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$sql = mysql_query("select * from pegawai where NIP='$nip'");
$hasil = mysql_num_rows($sql);
if ($hasil == 0){ #jik $hasil 0 (tidak ada rows) maka alihkan ke page semua_mahasiswa.php
header("location:index.php?p=tampilkar"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$data = mysql_fetch_array($sql); #memecahkan data row yang di pilih menjadi data dalam bentuk array
$nip = $data['NIP'];
$nama = $data['nama_karyawan'];
$jns_kel =$data['jenis_kelamin'];
$tgl_lhr =$data['tgl_lahir'];
$stat = $data['status'];
$alamat = $data['alamat'];
$pendidikan =$data['pendidikan'];
$kodegol = $data['kode_gol'];
$kodejab =$data['kode_jab']; #dapatkan id mahasiswa dari data array (row) 'id'
?>
<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Edit Data Pegawai <?php echo $nama; ?> </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="prosesubahkar.php" method="post">
                    <table class="table table-condensed">
                        <tr>
                            <td><label for="nip">Nomor Induk Pegawai</label></td>
                            <td><input name="nip" value="<?php echo $nip ?>"  type="text" class="form-control col-md-4" id="nip"  readonly/></td>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td><input name="nama" value="<?php echo $nama ?>" type="text" class="form-control" id="nama" placeholder="Nama" required/></td>
                        </tr>
                        <tr>
                            <td><label for="jns_kel">Jenis Kelamin</label></td>
                            <td><select name="jns_kel" id="jns_kel" value="<?php echo $jns_kel ?>">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label for="tgl_lhr">Tanggal Lahir</label></td>
                            <td>
                                <select name="tanggal"  >
                                                <?php
for ($i = 1; $i <= 31; $i++) {
    echo "<option  value=" . $i . ">" . $i . "</option>";
}
?>
                                            </select>
                                             <select name="bulan" >
                                            <?php
$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
for ($i = 1; $i <= 12; $i++) {
    echo "<option  value=" . $i . ">" . $bulan[$i] . "</option>";
}
?>
                                            </select>
                                            <select name="tahun" >
                                            <?php
for ($i = 2015; $i >= 1985; $i--) {
    echo "<option  value=" . $i . ">" . $i . "</option>";
}
?>
                                            </select>
                            </td>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <td><label for="status">Status</label></td>
                            <td><select name="stat" id="stat" value="<?php echo $stat ?>">
                                <option value="menikah">Menikah</option>
                                <option value="jomblo">Jomblo</option>
                            </select></td>
                        </div>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td>
                                <textarea name="alamat" value="<?php echo $alamat ?>" id="alamat" placeholder="Alamat" cols="100" rows="4"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jenjang">Pendidikan</label></td>
                            <td><select name="pendidikan" id="pendidikan" value="<?php echo $pendidikan ?>">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMK/SMA</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label for="kodegol">Golongan</label></td>
                            <td><select name="kodegol" class="form-control">
                                                <?PHP
$sql_j = mysql_query("select kode_gol from golongan order by kode_gol ASC");
while ($data_j = mysql_fetch_array($sql_j)) {
    $gol = $data_j['kode_gol'];
    echo "<option>$gol</option>";
}
?>
                                            </select></td>
                        </tr>
                        <tr>
                            <td><label for="kodejab">Jabatan</label></td>
                            <td><select name="kodejab" class="form-control">
                                                <?PHP
$sql_j = mysql_query("select kode_jab from jabatan order by kode_jab ASC");
while ($data_j = mysql_fetch_array($sql_j)) {
    $jab = $data_j['kode_jab'];
    echo "<option>$jab</option>";
}
?>
                                            </select></td>
                        </tr>
                        <tr>
                        <div class="text-right">
                            <td><input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php?p=home" class="btn btn-sm btn-primary">Kembali</a></td>
                        </div>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
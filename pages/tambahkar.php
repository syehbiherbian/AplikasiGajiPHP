<?php include("koneksi.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Tambah Data Pegawai </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="proseskar.php" method="post">
                    <table class="table table-condensed">
                        <tr>
                            <td><label for="nip">Nomor Induk Pegawai</label></td>
                            <td><input name="nip" type="text" class="form-control col-md-4" id="nip" placeholder="Nomor Induk Pegawai"/></td>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td><input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required/></td>
                        </tr>
                        <tr>
                            <td><label for="jns_kel">Jenis Kelamin</label></td>
                            <td><select name="jns_kel" id="jns_kel">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label for="tgl_lhr">Tanggal Lahir</label></td>
                            <td>
                                <select name="tanggal" >
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
                            <td><select name="stat" id="stat">
                                <option value="menikah">Menikah</option>
                                <option value="jomblo">Jomblo</option>
                            </select></td>
                        </div>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td>
                                <textarea name="alamat" id="alamat" placeholder="Alamat" cols="100" rows="4"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jenjang">Pendidikan</label></td>
                            <td><select name="pendidikan" id="pendidikan">
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
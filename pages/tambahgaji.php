<?php include("koneksi.php"); 

?>
<script type="text/javascript">
function startCalculate(){
interval=setInterval("Calculate()",10);
}

function Calculate(){
var a=document.form1.gaji_pokok.value;
var b=document.form1.tunjangan_anak.value;
var c=document.form1.tunjangan_pas.value;
var d=document.form1.tunjangan_jab.value;
var e=document.form1.pph.value;
var f=document.form1.taspen.value;
var g=document.form1.gaji_kotor.value;
var h=document.form1.total_pot.value;
document.form1.gaji_kotor.value=parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d);
document.form1.total_pot.value=parseInt(e)+parseInt(f);
document.form1.gaji_bersih.value=parseInt(g)-parseInt(h);
}

function stopCalc(){
clearInterval(interval);
}
</script>
<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Tambah Data Gaji </h3>
        </div>
        <div class="panel-body">
        <form action="prosesgaj.php" id="form1" method="post" name="form1">
<div class="row">
            <div class="col-md-6">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Data Karyawan</h3>
                </div>
                <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                      <label for="no_slip">No Slip</label>
                      <input type="text" name="no_slip" class="form-control" id="no_slip" value="<?php echo $no_slip;?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="nip">NIP</label>
                      <select name="nip" class="form-control" id="nip" onchange=ambildata(this.value)>
                                                <?PHP
$sql_j = mysql_query("select nip from pegawai order by nip ASC");
while ($data_j = mysql_fetch_array($sql_j)) {
    $nip = $data_j['nip'];
    echo "<option>$nip</option>";
}
?>
                                            </select>
                    </div>

                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" readonly>
                    </div>
                    <div class="form-group">
                      <label for="tgl_gaji">Tanggal Gaji</label>
                      <input type="text" class="form-control" name="tanggal_gaji" id="tanggal_gaji" value="<?php echo "".date("d/m/Y").""; ?>" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="gapok">Gaji Pokok</label>
                      <input type="text" class="form-control" id="gaji_pokok" name="gapok" placeholder="Gaji Pokok" onfocus="startCalculate()" onblur="stopCalc()">
                    </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (left) -->
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tunjangan</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <div class="form-group">
                      <label for="tj_anak">Tunjangan Anak</label>
                      <input type="text" class="form-control" name="tj_anak" placeholder="Tunjangan Anak" id="tunjangan_anak" onfocus="startCalculate()" onblur="stopCalc()" required>
                    </div>
                    <div class="form-group">
                      <label for="tj_pang">Tunjangan Pasangan</label>
                      <input type="text" class="form-control" name="tj_pang" placeholder="Tunjangan Pasangan" id="tunjangan_pas" onfocus="startCalculate()" onblur="stopCalc()" required>
                    </div>
                    <div class="form-group">
                      <label for="tj_jab">Tunjangan Jabatan</label>
                      <input type="text" class="form-control" name="tj_jab" placeholder="Tunjangan Jabatan" id="tunjangan_jab" onfocus="startCalculate()" onblur="stopCalc()" required>
                    </div>
                    <div class="form-group">
                      <label for="gator">Gaji Kotor</label>
                      <input type="text" class="form-control" name="gator" placeholder="Gaji Kotor" id="gaji_kotor">
                    </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- iCheck -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Potongan</h3>
                </div>
                <div class="box-body">
                  <!-- Minimal style -->

                  <!-- checkbox -->
                    <div class="form-group">
                      <label for="pph">PPH</label>
                      <input type="text" class="form-control" name="pph" placeholder="PPH" id="pph" onfocus="startCalculate()" onblur="stopCalc()">
                    </div>
                    <div class="form-group">
                      <label for="taspen">Taspen</label>
                      <input type="text" class="form-control" name="taspen" placeholder="Taspen" id="taspen" onfocus="startCalculate()" onblur="stopCalc()">
                    </div>
                    <div class="form-group">
                      <label for="topot">Total Potongan</label>
                      <input type="text" class="form-control" name="topot" placeholder="Total Potongan" id="total_pot" readonly>
                    </div>
                    <div class="form-group">
                      <label for="gasih">Gaji Bersih</label>
                      <input type="text" class="form-control" name="gasih" placeholder="Gaji Bersih" id="gaji_bersih" readonly>
                    </div>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
              <div class="text-right">
                  <input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php?p=home" class="btn btn-sm btn-primary">Kembali</a>
              
                </div>
            </div><!-- /.col (right) -->
          </div><!-- /.row -->
          </form>
                          </div>
    </div>
</div>
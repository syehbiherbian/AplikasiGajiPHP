<?php include("koneksi.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Tambah Data Jabatan </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="prosesjab.php" method="post">
                    <table class="table table-condensed">
                        <tr>
                            <td><label for="kodejab">Kode Jabatan</label></td>
                            <td><input name="kodejab" type="text" class="form-control" id="kodejab" placeholder="Kode Jabatan"/></td>
                        </tr>
                        <tr>
                            <td><label for="jab">Jabatan</label></td>
                            <td><input name="jab" type="text" class="form-control" id="jab" placeholder="Jabatan" required/></td>
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
<?php include("koneksi.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> Tambah Data Golongan </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="prosesgol.php" method="post">
                    <table class="table table-condensed">
                        <tr>
                            <td><label for="kodegol">Kode Golongan</label></td>
                            <td><input name="kodegol" type="text" class="form-control" id="kodegol" placeholder="Kode Golongan" /></td>
                        </tr>
                        <tr>
                            <td><label for="gol">Golongan</label></td>
                            <td><input name="gol" type="text" class="form-control" id="gol" placeholder="Golongan" required/></td>
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
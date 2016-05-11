<?php include "koneksi.php" ?>
<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i>Data Jabatan</h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from jabatan order by kode_jab ASC");
                    ?>
                  <table class="table table-hover table-striped tablesorter table-bordered">
                  
                      <tr>
                        <th>Kode Jabatan<i class="fa fa-sort"></i></th>
                        <th>Jabatan<i class="fa fa-sort"></i></th>
                        <th>Aksi <i class="fa fa-sort"></i></th>
                      </tr>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tr>
                    <td><?php echo $data['kode_jab']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>
                    <td><a class="btn btn-sm btn-success" href="index.php?p=ubahjab&hal=edit&id=<?php echo $data['kode_jab'];?>"><i class="fa fa-edit"></i> Edit</a>
                        <a class="btn btn-sm btn-danger" href="hapusjab.php?hal=hapus&id=<?php echo $data['kode_jab'];?>" onclick="javascript: return confirm('Yakin Mau Di Hapus?')"><i class="fa fa-wrench"></i> Hapus</a></td></tr>
                 <?php   
              }
              ?>
                   </tbody>
                   </table>
                   </div>
                <div class="text-right">
                  <a href="index.php?p=tambahjabatan" class="btn btn-sm btn-primary">Tambah Data Jabatan <i class="fa fa-arrow-circle-right"></i></a>
              
                </div>
              </div> 
            </div>
          </div>
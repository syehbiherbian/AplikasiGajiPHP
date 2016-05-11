<?php include "koneksi.php"; ?>
<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Data Golongan</h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from golongan order by kode_gol ASC");
                    ?>
                  <table class="table table-bordered table-hover table-striped tablesorter">
                  
                      <tr>
                        <th>Kode Golongan<i class="fa fa-sort"></i></th>
                        <th>Golongan<i class="fa fa-sort"></i></th>
                        <th>Aksi <i class="fa fa-sort"></i></th>
                      </tr>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tr>
                    <td><?php echo $data['kode_gol']; ?></td>
                    <td><?php echo $data['golongan']; ?></td>
                    <td><a class="btn btn-sm btn-success" href="index.php?p=ubahgol&hal=edit&id=<?php echo $data['kode_gol'];?>"><i class="fa fa-edit"></i> Edit</a>
                        <a class="btn btn-sm btn-danger" href="hapusgol.php?hal=hapus&id=<?php echo $data['kode_gol'];?>" onclick="javascript: return confirm('Yakin Mau Di Hapus?')"><i class="fa fa-wrench"></i> Hapus</a></td></tr>
                 <?php   
              }
              ?>
                   </tbody>
                   </table>
                   </div>
              </div> 
            </div>
          </div>
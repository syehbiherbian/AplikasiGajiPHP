<?php include "koneksi.php" ?>
<div class="col-lg-12">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i>Data Pegawai</h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from gaji order by nip ASC");
                    ?>
                  <table class="table table-hover table-striped tablesorter table-bordered">
                  
                      <tr>
                        <th>No Slip<i class="fa fa-sort"></i></th>
                        <th>NIP<i class="fa fa-sort"></i></th>
                        <th>Tanggal Gaji <i class="fa fa-sort"></i></th>
                        <th>Tunjangan Anak <i class="fa fa-sort"></i></th>
                        <th>Tunjangan Pasangan <i class="fa fa-sort"></i></th>
                        <th>Tunjangan Jabatan <i class="fa fa-sort"></i></th>
                        <th>Gaji POkok <i class="fa fa-sort"></i></th>
                        <th>Gaji Kotor <i class="fa fa-sort"></i></th>
                        <th>Gaji Bersih<i class="fa fa-sort"></i></th>
                        <th>Taspen<i class="fa fa-sort"></i></th>
                        <th>PPH<i class="fa fa-sort"></i></th>
                        <th>Total Potongan<i class="fa fa-sort"></i></th>
                        <th>Aksi <i class="fa fa-sort"></i></th>
                      </tr>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tr>
                    <td><?php echo $data['No_slip']; ?></td>
                    <td><?php echo $data['NIP']; ?></td>
                    <td><?php echo $data['Tanggal_gaji']; ?></td>
                    <td><?php echo $data['tunjangan_anak']; ?></td>
                    <td><?php echo $data['tunjangan_pasangan']; ?></td>
                    <td><?php echo $data['tunjangan_jabatan']; ?></td>
                    <td><?php echo $data['gaji_pokok']; ?></td>
                    <td><?php echo $data['gaji_kotor']; ?></td>
                    <td><?php echo $data['gaji_bersih']; ?></td>
                    <td><?php echo $data['taspen']; ?></td>
                    <td><?php echo $data['pph']; ?></td>
                    <td><?php echo $data['total_potongan']; ?></td>
                    <td><a class="btn btn-sm btn-success" href="index.php?p=ubahkar&hal=edit&id=<?php echo $data['NIP'];?>"><i class="fa fa-edit"></i> Edit</a>
                        <a class="btn btn-sm btn-danger" href="hapuskar.php?hal=hapus&id=<?php echo $data['NIP'];?>" onclick="javascript: return confirm('Yakin Mau Di Hapus?')"><i class="fa fa-wrench"></i> Hapus</a></td></tr>
                 <?php   
              }
              ?>
                   </tbody>
                   </table>
                   </div>
              </div> 
            </div>
          </div>
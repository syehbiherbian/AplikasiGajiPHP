<?php include "koneksi.php" ?>
<div class="col-lg-12">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i>Data Pegawai</h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from pegawai order by nip ASC");
                    ?>
                  <table class="table table-hover table-striped tablesorter table-bordered">
                  
                      <tr>
                        <th>NIP<i class="fa fa-sort"></i></th>
                        <th>Nama<i class="fa fa-sort"></i></th>
                        <th>Jenis Kelamin <i class="fa fa-sort"></i></th>
                        <th>Tanggal Lahir <i class="fa fa-sort"></i></th>
                        <th>Status <i class="fa fa-sort"></i></th>
                        <th>Alamat <i class="fa fa-sort"></i></th>
                        <th>Pendidikan <i class="fa fa-sort"></i></th>
                        <th>Kode Golongan <i class="fa fa-sort"></i></th>
                        <th>Kode Jabatan<i class="fa fa-sort"></i></th>
                        <th>Aksi <i class="fa fa-sort"></i></th>
                      </tr>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tr>
                    <td><?php echo $data['NIP']; ?></td>
                    <td><?php echo $data['nama_karyawan']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['pendidikan']; ?></td>
                    <td><?php echo $data['kode_gol']; ?></td>
                    <td><?php echo $data['kode_jab']; ?></td>
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
<?php
  $username = $_SESSION['username'];
  $query_user_login = mysql_query("select * from user where username='$username'");
  
  $user_login = mysql_fetch_array($query_user_login);
  ?>
<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Selamat Datang <?php echo $user_login['username']; ?> Di Halaman Aplikasi Gaji Karyawan PT Gulung Tikar
          </div>
<div class="row-fluid">
<ul class="thumbnails">
<div class="col-md-4">
                  <div class="box box-primary" >
                    <div class="box-header">
                       <h3 class="box-title"><center>Entry Data Jabatan</center></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <p>Menambahkan Data Jabatan</p>
                    <p><a href="index.php?p=tambahjabatan" class="btn btn-primary">Masuk</a> </p>
                  </div>
                </div>
</div>
<div class="col-md-4">
                  <div class="box box-primary" >
                    <div class="box-header">
                       <h3 class="box-title"><center>Entry Golongan</center></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <p>Menambahkan Data Golongan</p>
                    <p><a href="index.php?p=tambahgolongan" class="btn btn-primary">Masuk</a> </p>
                  </div>
                </div>
</div>
<div class="col-md-4">
                  <div class="box box-primary" >
                    <div class="box-header">
                       <h3 class="box-title"><center>Entry Gaji</center></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <p>Menambahkan Data Gaji</p>
                    <p><a href="index.php?p=tambahgaji" class="btn btn-primary">Masuk</a> </p>
                  </div>
                </div>
</div>


<div class="col-md-4">
                  <div class="box box-primary" >
                    <div class="box-header">
                       <h3 class="box-title"><center>Entry Karyawan</center></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <p>Menambahkan Data Karyawan</p>
                    <p><a href="index.php?p=tambahkar" class="btn btn-primary">Masuk</a> </p>
                  </div>
                </div>
</div>
</ul>
</div>





</ul>
</div>
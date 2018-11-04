<!-- array hari dan bulan -->
  <SCRIPT LANGUAGE="Javascript">

    // Array of day names
    var dayNames = new Array("Minggu","Senin","Selasa","Rabu",
            "Kamis","Jumat","Sabtu");

    // Array of month Names
    var monthNames = new Array(
    "Januari","Februari","Maret","April","Mei","Juni","Juli",
    "Agustus","September","Oktober","November","Desember");
  </SCRIPT>
<!-- END array hari dan bulan -->
   

    <div class="content-header">
      <h1>
        Input Data
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Input Data</li>
      </ol>
    </section>

 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              </h3></b>
              <h3 class="pull-right" style="text-transform: uppercase; font-size: 17px;">
                <i class="fa fa-calendar">  </i>
                <script language="javascript">
                  var now = new Date();
                  document.write(dayNames[now.getDay()]);
                </script>,  
                <b><script language="javascript">
                  var now = new Date();
                  document.write(now.getDate());
                </script></b>
                <script language="javascript">
                  var now = new Date();
                  document.write(monthNames[now.getMonth()]);
                </script>
                <script language="javascript">
                  var now = new Date();
                  document.write(now.getFullYear());
                </script>
              </h3>
            </div>
            <!-- /.box-header -->
          </div>
          <!-- /.box -->


<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_inputmagang" data-toggle="tab"><i class=""></i> Peserta Magang/PKL</a></li>
              <li><a href="#tab_inputpenelitian" data-toggle="tab"><i class=""></i> Peserta Penelitian</a></li>
            </ul>

<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="tab_inputmagang">

<!-- tambah unit -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahpenempatan" style="margin-top: 20px;margin-bottom: 8px ; margin-right: 220px; height: 60px;width: 190px; background:#cd5c5c ; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Unit</center>
                            </button>
<!--masukin tabel-->
<div class="modal fade" id="tambahpenempatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH PENEMPATAN / UNIT
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Unit</label>
                                            <input class="form-control" name="kode_penempatan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Unit</label>
                                        <input class="form-control" name="nama_penempatan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kuota Unit</label>
                                        <input class="form-control" name="kuota_penempatan" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanpenempatan" value="simpanpenempatan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_penempatan = $_POST ['kode_penempatan'];
    $nama_penempatan = $_POST ['nama_penempatan'];
    $kuota_penempatan = $_POST ['kuota_penempatan'];

    $simpanpenempatan = $_POST ['simpanpenempatan'];
    $reset = $_POST ['reset'];

    if($simpanpenempatan) {
        $sql = $koneksi->query("insert into tb_penempatan(kode_penempatan,nama_penempatan,kuota_penempatan) values('$kode_penempatan','$nama_penempatan','$kuota_penempatan')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=input data";
                </script>
            <?php
        }
    }
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
<!--end tambah unit -->

<!-- tambah instansi -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahinstansi" style="margin-top: 20px;margin-bottom: 8px ; margin-right: -400px; height: 60px;width: 190px; background:#2f4f4f; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Instansi</center>
                            </button>
<!--masukin tabel-->
<div class="modal fade" id="tambahinstansi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH INSTANSI
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Instansi</label>
                                            <input class="form-control" name="kode_instansi" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                        <input class="form-control" name="nama_instansi" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Instansi</label>
                                        <input class="form-control" name="alamat_instansi" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpaninstansi" value="simpaninstansi" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_instansi = $_POST ['kode_instansi'];
    $nama_instansi = $_POST ['nama_instansi'];
    $alamat_instansi = $_POST ['alamat_instansi'];

    $simpaninstansi = $_POST ['simpaninstansi'];
    $reset = $_POST ['reset'];

    if($simpaninstansi) {
        $sql = $koneksi->query("insert into tb_instansi(kode_instansi,nama_instansi,alamat_instansi) values('$kode_instansi','$nama_instansi','$alamat_instansi')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=input data";
                </script>
            <?php
        }
    }
?>
                                        </div>
                                    </div>
                                </div>
                            </div>

<!--end tambah instansi -->

<!-- tambah fakultas -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahfakultas" style="margin-top: 120px;margin-bottom: 8px ; margin-right: -190px; height: 60px;width: 190px; background:#2e8b57; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Fakultas</center>
                            </button>

<!--masukin tabel-->
<div class="modal fade" id="tambahfakultas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH FAKULTAS
</div>
<div class="panel-body">
                             <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Fakultas</label>
                                            <input class="form-control" name="kode_fakultas" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Fakultas</label>
                                        <input class="form-control" name="nama_fakultas" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanfakultas" value="simpanfakultas" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>
             </div>
                                    </div>
                                </div>
                            </div>
<!--end tambah fakultas -->

<!-- tambah jurusan -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahjurusan" style="margin-top: 120px;margin-bottom: 8px ; margin-right: -400px; height: 60px;width: 190px; background:#5f9ea0; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Jurusan</center>
                            </button>

<!--masukin tabel-->
<div class="modal fade" id="tambahjurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH JURUSAN
</div>
<div class="panel-body">
                             <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Jurusan</label>
                                            <input class="form-control" name="kode_jurusan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Jurusan</label>
                                        <input class="form-control" name="nama_jurusan" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanjurusan" value="simpanjurusan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_jurusan = $_POST ['kode_jurusan'];
    $nama_jurusan = $_POST ['nama_jurusan'];

    $simpanjurusan = $_POST ['simpanjurusan'];
    $reset = $_POST ['reset'];

    if($simpanjurusan) {
        $sql = $koneksi->query("insert into tb_jurusan(kode_jurusan,nama_jurusan) values('$kode_jurusan','$nama_jurusan')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=input data";
                </script>
            <?php
        }
    }
?>                 </div>
                                    </div>
                                </div>
                            </div>

<!--end tambah jurusan -->

       <div class="row">
                <div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Peserta Aktif</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-magangaktif">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>                                            
                                            <th>Instansi</th>                                            
                                            <th>Unit</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_input");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID'];?></td>
                                            <td><?php echo $data['Nama'];?></td>                                            
                                            <td><?php echo $data['Instansi'];?></td>                                        
                                            <td><?php echo $data['Unit'];?></td>                                            
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                
                                </table>
                            </div>
                            <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahmagang1" style="margin-top: 8px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                              Tambah Peserta
                            </button>
 <div class="modal fade" id="tambahmagang1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                         <h4> MASUKKAN DATA</h4>
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">
                                        <div class = "form-group">
                                            <label>Tanggal Masuk : </label>
                                            <input class="form-control" name="TanggalMasuk" type="date" />
                                        </div>

                                        <div class = "form-group">
                                            <label>Tanggal Keluar : </label>
                                            <input class="form-control" name="TanggalKeluar" type="date" />
                                        </div>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat, Tanggal Lahir</label>
                                        <input class="form-control" name="TTL" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                        <input class="form-control" name="Alamat" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                        <input class="form-control" name="Email" />
                                        </div>

                                        <div class="form-group">
                                            <label>No Hp</label>
                                        <input class="form-control" name="No_HP" type="" />
                                        </div>

                                        <div class="form-group">
                                            <label>Instansi</label>
                                            <select class ="form-control" name="Instansi">
                                                <option value="">- Pilih Instansi-</option>
                                                <?php
                                                $sql_instansi = mysqli_query ($koneksi, "select * from tb_instansi");
                                                while ($data_instansi = mysqli_fetch_array($sql_instansi)) {
                                                    echo '<option value="'.$data_instansi['nama_instansi'].'">'.$data_instansi['nama_instansi'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Fakultas</label>
                                            <select class ="form-control" name="Jurusan">
                                                <option value="">- Pilih Fakultas / Kelas-</option>
                                                <?php
                                                $sql_fakultas = mysqli_query ($koneksi, "select * from tb_fakultas");
                                                while ($data_fakultas = mysqli_fetch_array($sql_fakultas)) {
                                                    echo '<option value="'.$data_fakultas['nama_fakultas'].'">'.$data_fakultas['nama_fakultas'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class ="form-control" name="Jurusan">
                                                <option value="">- Pilih Jurusan-</option>
                                                <?php
                                                $sql_jurusan = mysqli_query ($koneksi, "select * from tb_jurusan");
                                                while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                                                    echo '<option value="'.$data_jurusan['nama_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Unit</label>
                                            <select class ="form-control" name="Unit">
                                                <option value="">- Pilih Unit-</option>
                                                <?php
                                                $sql_penempatan = mysqli_query ($koneksi, "select * from tb_penempatan");
                                                while ($data_penempatan = mysqli_fetch_array($sql_penempatan)) {
                                                    echo '<option value="'.$data_penempatan['nama_penempatan'].'">'.$data_penempatan['nama_penempatan'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanmagang" value="simpanmagang" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $TanggalMasuk = $_POST ['TanggalMasuk'];
    $TanggalKeluar = $_POST ['TanggalKeluar'];
    $ID = $_POST ['ID'];
    $Nama = $_POST ['Nama'];
    $TTL = $_POST ['TTL'];
    $Alamat = $_POST ['Alamat'];
    $Email = $_POST ['Email'];
    $No_HP = $_POST ['No_HP'];
    $Instansi = $_POST ['Instansi'];
    $Jurusan = $_POST ['Jurusan'];
    $Unit = $_POST ['Unit'];

    $simpanmagang = $_POST ['simpanmagang'];
    $reset = $_POST ['reset'];

    if($simpanmagang) {
        $sql = $koneksi->query("insert into tb_input(TanggalMasuk, TanggalKeluar, ID, Nama, TTL, Alamat, Email, No_HP, Instansi, Jurusan, Unit) values('$TanggalMasuk','$TanggalKeluar','$ID','$Nama','$TTL','$Alamat','$Email','$No_HP','$Instansi','$Jurusan','$Unit')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=input data";
                </script>
            <?php
        }
    }
?>

</div>
</div>
</div>
</div>
                        </div>

                </div>
</div>

</div>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Daftar Peserta Magang</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-magang">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Instansi</th>
                                            <th>Jurusan</th>
                                            <th>Unit</th>
                                            <th>Keterangan</th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_input");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID'];?></td>
                                            <td><?php echo $data['Nama'];?></td>
                                            <td><?php echo $data['Email'];?></td>
                                            <td><?php echo $data['No_HP'];?></td>
                                            <td><?php echo $data['Instansi'];?></td>
                                            <td><?php echo $data['Jurusan'];?></td>
                                            <td><?php echo $data['Unit'];?></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm">Ter-verifikasi</a>
                                                                                        
                                                <a href="" class="btn btn-warning btn-sm">Menunggu</a>
                                            
                                                <a href="" class="btn btn-danger btn-sm">Belum Fix</a>
                                            </td>
                                            <td>

                                                <a href="?page=input data&aksi=ubahmagang&ID=<?php echo $data['ID']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=input data&aksi=hapusmagang&ID=<?php echo $data['ID']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
</div>

      </div>



<div class="tab-pane fade" id="tab_inputpenelitian">

<!-- tambah instansi -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahinstansi1" style="margin-top: 20px;margin-bottom: 8px ; margin-right: 130px; height: 60px;width: 190px; background:#2f4f4f; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Instansi</center>
                            </button>
<div class="modal fade" id="tambahinstansi1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH INSTANSI
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Instansi</label>
                                            <input class="form-control" name="kode_instansi" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                        <input class="form-control" name="nama_instansi" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Instansi</label>
                                        <input class="form-control" name="alamat_instansi" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpaninstansi" value="simpaninstansi" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

                                        </div>
                                    </div>
                                </div>
                            </div>

<!--tambah fakultas -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahfakultas1" style="margin-top: 120px;margin-bottom: 8px ; margin-right: -90px; height: 60px;width: 190px; background:#2e8b57; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Fakultas</center>
                            </button>
<!--masukin tabel-->
<div class="modal fade" id="tambahfakultas1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH FAKULTAS
</div>
<div class="panel-body">
                             <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Fakultas</label>
                                            <input class="form-control" name="kode_fakultas" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Fakultas</label>
                                        <input class="form-control" name="nama_fakultas" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanfakultas" value="simpanfakultas" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_fakultas = $_POST ['kode_fakultas'];
    $nama_fakultas = $_POST ['nama_fakultas'];

    $simpanfakultas = $_POST ['simpanfakultas'];
    $reset = $_POST ['reset'];

    if($simpanfakultas) {
        $sql = $koneksi->query("insert into tb_fakultas(kode_fakultas,nama_fakultas) values('$kode_fakultas','$nama_fakultas')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=input data";
                </script>
            <?php
        }
    }
?>                 </div>
                                    </div>
                                </div>
                            </div>
<!--end tambah fakultas -->
 <!--tambah jurusan-->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahjurusan1" style="margin-top: 120px;margin-bottom: 8px ; margin-right: -400px; height: 60px;width: 190px; background:#5f9ea0; border: 0"><i. class="fa fa-plus" style= "font-size: 20px;"><center>
                              Tambahkan Jurusan</center>
                            </button>
<!--masukin tabel-->
<div class="modal fade" id="tambahjurusan1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH JURUSAN
</div>
<div class="panel-body">
                             <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Kode Jurusan</label>
                                            <input class="form-control" name="kode_jurusan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Jurusan</label>
                                        <input class="form-control" name="nama_jurusan" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanjurusan" value="simpanjurusan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>
               </div>
                                    </div>
                                </div>
                            </div>

<!--end tambah jurusan -->

                 <div class="row">
                <div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Peserta Aktif</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-penelitianaktif">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>                                            
                                            <th>Instansi</th>                                            
                                            <th>Judul Penelitian</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_inputpenelitian");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID1'];?></td>
                                            <td><?php echo $data['Nama1'];?></td>                                            
                                            <td><?php echo $data['Instansi'];?></td>                                        
                                            <td><?php echo $data['JudulPenelitian'];?></td>                                            
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                
                                </table>
                            </div>
                            <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahpenelitian1" style="margin-top: 8px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                              Tambah Peserta
                            </button>
                            <div class="modal fade" id="tambahpenelitian1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH PESERTA
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">
                                        <div class = "form-group">
                                            <label>Tanggal Masuk : </label>
                                            <input class="form-control" name="TanggalMasuk1" type="date" />
                                        </div>

                                        <div class = "form-group">
                                            <label>Tanggal Keluar : </label>
                                            <input class="form-control" name="TanggalKeluar1" type="date" />
                                        </div>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID1" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama1" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat, Tanggal Lahir</label>
                                        <input class="form-control" name="TTL1" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                        <input class="form-control" name="Alamat1" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                        <input class="form-control" name="Email1" />
                                        </div>

                                        <div class="form-group">
                                            <label>No Hp</label>
                                        <input class="form-control" name="No_HP1" />
                                        </div>

                                        <div class="form-group">
                                            <label>Instansi</label>
                                            <select class ="form-control" name="Instansi">
                                                <option value="">- Pilih Instansi-</option>
                                                <?php
                                                $sql_instansi = mysqli_query ($koneksi, "select * from tb_instansi");
                                                while ($data_instansi = mysqli_fetch_array($sql_instansi)) {
                                                    echo '<option value="'.$data_instansi['nama_instansi'].'">'.$data_instansi['nama_instansi'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Fakultas</label>
                                            <select class ="form-control" name="Jurusan">
                                                <option value="">- Pilih Fakultas / Kelas-</option>
                                                <?php
                                                $sql_fakultas = mysqli_query ($koneksi, "select * from tb_fakultas");
                                                while ($data_fakultas = mysqli_fetch_array($sql_fakultas)) {
                                                    echo '<option value="'.$data_fakultas['nama_fakultas'].'">'.$data_fakultas['nama_fakultas'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class ="form-control" name="Jurusan">
                                                <option value="">- Pilih Jurusan-</option>
                                                <?php
                                                $sql_jurusan = mysqli_query ($koneksi, "select * from tb_jurusan");
                                                while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                                                    echo '<option value="'.$data_jurusan['nama_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Judul Penelitian</label>
                                        <input class="form-control" name="JudulPenelitian" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanpenelitian" value="simpanpenelitian" class="btn btn-primary">Simpan</button>
                                        <button type="resetpenelitian" class="btn btn-basic">Reset</button>
                        </div>
                </div>
</div>
</div>
</div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $TanggalMasuk1 = $_POST ['TanggalMasuk1'];
    $TanggalKeluar1 = $_POST ['TanggalKeluar1'];
    $ID1 = $_POST ['ID1'];
    $Nama1 = $_POST ['Nama1'];
    $TTL1 = $_POST ['TTL1'];
    $Alamat1 = $_POST ['Alamat1'];
    $Email1 = $_POST ['Email1'];
    $No_HP1 = $_POST ['No_HP1'];
    $Instansi = $_POST ['Instansi'];
    $Jurusan = $_POST ['Jurusan'];
    $JudulPenelitian = $_POST ['JudulPenelitian'];

    $simpanpenelitian = $_POST ['simpanpenelitian'];
    $reset = $_POST ['reset'];

    if($simpanpenelitian) {
        $sql = $koneksi->query("insert into tb_inputpenelitian(TanggalMasuk1, TanggalKeluar1, ID1, Nama1, TTL1, Alamat1, Email1, No_HP1, Instansi, Jurusan, JudulPenelitian) values('$TanggalMasuk1','$TanggalKeluar1','$ID1','$Nama1','$TTL1','$Alamat1','$Email1','$No_HP1','$Instansi','$Jurusan','$JudulPenelitian')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=input data";
                </script>
            <?php
        }
    }
?>

</div>
</div>
</div>

               
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Daftar Peserta</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-penelitian1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Instansi</th>
                                            <th>Jurusan</th>
                                            <th>Judul Penelitian</th>
                                            <th>Keterangan</th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_inputpenelitian");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID1'];?></td>
                                            <td><?php echo $data['Nama1'];?></td>
                                            <td><?php echo $data['Email1'];?></td>
                                            <td><?php echo $data['No_HP1'];?></td>
                                            <td><?php echo $data['Instansi'];?></td>
                                            <td><?php echo $data['Jurusan'];?></td>
                                            <td><?php echo $data['JudulPenelitian'];?></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm">Ter-verifikasi</a>
                                                                                        
                                                <a href="" class="btn btn-warning btn-sm">Menunggu</a>
                                            
                                                <a href="" class="btn btn-danger btn-sm">Belum Fix</a>
                                            </td>
                                            <td>
                                                <a href="?page=input data&aksi=ubahpenelitian&ID1=<?php echo $data['ID1']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=input data&aksi=hapuspenelitian&ID1=<?php echo $data['ID1']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
</div>

          </div>
</div>
</div>
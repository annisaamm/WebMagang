<?php

  if(isset ($_POST['simpanmagang'])){
  $TanggalMasuk = $_POST ['TanggalMasuk'];
  $TanggalKeluar = $_POST ['TanggalKeluar'];
  $ID = $_POST ['ID'];
  $Nama = $_POST ['Nama'];
  $TTL = $_POST ['TTL'];
  $Alamat = $_POST ['Alamat'];
  $Email = $_POST ['Email'];
  $No_HP = $_POST ['No_HP'];
  $Instansi = $_POST ['Instansi'];
  $Fakultas = $_POST ['Fakultas'];
  $Jurusan = $_POST ['Jurusan'];
  $Unit = $_POST ['Unit'];
  $Berkas = implode(', ' , $_POST ['Berkas']);


/*Aksi boleh atau enggaknya magang*/

  $ambil_data_penempatan = mysqli_query($koneksi,"SELECT * from tb_penempatan");
    $jumlah_penempatan = mysqli_num_rows($ambil_data_penempatan);
    for ($i=0; $i < $jumlah_penempatan ; $i++) { 
       $ambil_quota = mysqli_fetch_array($ambil_data_penempatan);
       $quota_penempatan[$i] = $ambil_quota["kuota_penempatan"];
    }
    $quota = 0;
    for ($i=0; $i < $jumlah_penempatan ; $i++) { 
        $quota += $quota_penempatan[$i];
    }

    /*echo $quota.'<br>';*/

    /*Ini data yang udah ada*/
    $query = mysqli_query($koneksi,"SELECT * from tb_input where TanggalKeluar >= '$TanggalMasuk' ");
    $jumlah_magang_aktif = mysqli_num_rows($query);


    /*Aksi jatah Unit*/
    $cari_unit = mysqli_query($koneksi,"SELECT * from tb_penempatan where nama_penempatan='$Unit' ");
    $quota_unit = mysqli_fetch_array($cari_unit);
    $jumlah_quota_unit = $quota_unit["kuota_penempatan"];

    /*Cari peserta magang dengan unit yang sama*/
    $query2 = mysqli_query($koneksi,"SELECT * from tb_input where Unit='$Unit' ");
    $jumlah_magang_aktif_unit = mysqli_num_rows($query2);


    if ($jumlah_quota_unit <= $jumlah_magang_aktif_unit) {
      echo "Kuota unit ini sudah penuh, silahkan memilih unit lain atau menambah kuota ini";
    }

  elseif ($jumlah_magang_aktif < $quota) {
      $folder = './images_peserta/';
      $Foto = $_FILES ['Foto']['name'];
      $rename = date('Hs').$Foto;
      $lokasi = $_FILES ['Foto']['tmp_name'];
      $upload = move_uploaded_file($lokasi,$folder.$Foto);

      $Keterangan = $_POST ['Keterangan'];
     
      if($upload) {
    
      $sql = $koneksi->query("insert into tb_input(TanggalMasuk, TanggalKeluar, ID, Nama, TTL, Alamat, Email, No_HP, Instansi, Fakultas, Jurusan, Unit, Berkas, Foto, Keterangan) values ('$TanggalMasuk','$TanggalKeluar','$ID','$Nama','$TTL','$Alamat','$Email','$No_HP','$Instansi','$Fakultas','$Jurusan','$Unit', '$Berkas', '$Foto', '$Keterangan')");
          
      if ($sql) {
        ?>
          <script type="text/javascript">
            alert ("Data Berhasil Disimpan");
            window.location.href="?page=magang";
          </script>
        <?php
      }   
    }
      /*echo $Nama.' boleh magang karena quotanya ada '.$quota.' sedangkan yang magang aktif ada '.$jumlah_magang_aktif;*/
    }

    else {
      echo "Kuota magang periode ini sudah full, silahkan memilih waktu lain";
    }


  
    
    
    }
   

?>
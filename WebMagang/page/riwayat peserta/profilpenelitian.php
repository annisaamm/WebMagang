<?php

  $ID1 = $_GET['ID1'];

  $sql = $koneksi->query("select * from tb_inputpenelitian where ID1='$ID1'");

  $tampil = $sql->fetch_assoc();    

  $Instansi = $tampil['Instansi'];

  $Fakultas = $tampil['Fakultas'];

  $Jurusan = $tampil['Jurusan'];

  $JudulPenelitian = $tampil['JudulPenelitian'];

  $Berkas1 = $tampil['Berkas1'];    
    
  $Foto1 = $tampil['Foto1'];

?>

<div class="row">
                    <div class="col-md-12">
                     <h2>&nbsp;Data Profil</h2>                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-3">
                        
                    <div class="panel panel-danger" style="margin-left: 11px; margin-right: -25px;">
                    <div class="panel-heading" style="font-size: 16px;">

                                      
                                    <div class="panel-body">
                                      
            <br/>                                      
            <center><img class="img-circle" src="images_peserta/<?php echo $tampil['Foto1']?>" width="150" height="150" alt="" name="Foto1"></center>

            <h4 class="text-center text-primary"><?php echo $tampil['ID1'];?></h4>

            <h3 class="profile-username text-center" style="margin-bottom: 25px"><strong><?php echo $tampil['Nama1'];?></strong></h3>

            <div class="text-muted text-center" style= "font-size: 16px; margin-top: 15px"><?php echo $tampil['Instansi'];?></div>            
            <div class="text-success text-center" style= "font-size: 16px; margin-top: 11px"><strong><?php echo $tampil['JudulPenelitian'];?></strong></div>                                
                   

                   </div>
                 </div>
           
            </div>
          </div>
                     <div class="col-md-9">
                      <div class="panel panel-default" style="margin-left: 20px">
                        <div class="panel-heading" style="font-size: 16px;">
                           <strong>Profil Peserta</strong>
                        </div>

                                      
                                    <div class="panel-body"> 
                                          <div class="col-md-13">

                                            <form method="POST" enctype="multipart/form-data">
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tanggal Masuk :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TanggalMasuk1'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tanggal Keluar :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TanggalKeluar1'];?></pre>
                                            </div>
                                            </div>                                 
                                    
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>ID :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['ID1'];?></pre>
                                            </div>
                                            </div> 
                                            
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Nama :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Nama1'];?></pre>
                                            </div>
                                            </div> 
                   
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tempat dan Tanggal Lahir :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TTL1'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Alamat :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Alamat1'];?></pre>
                                            </div>
                                            </div>  

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Email :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Email1'];?></pre>
                                            </div>
                                            </div> 
                                      
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>No Hp :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['No_HP1'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Instansi :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Instansi'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Fakultas/Kelas :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Fakultas'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Jurusan :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TTL1'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Judul Penelitian</label>
                                            </div>                                            
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['JudulPenelitian'];?></pre></pre>
                                            </div>
                                            </div>
   
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Berkas-Berkas :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Berkas1'];?></pre>
                                            </div>
                                            </div>                     
                                           
                                  </form>
                                </div>


                    
                              
                  

                        </div>
                  </div>
            </div>
                 
                 
                
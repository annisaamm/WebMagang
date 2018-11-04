<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<?php
        
        session_start();        
        $koneksi = new mysqli("localhost","root","","db_websdm");
        $tbmagang = "SELECT * FROM orders ORDER BY order_number desc";
        $riwayatmagang = mysqli_query($conn, $query);

if (isset ($_SESSION['admin']) || isset ($_SESSION['user'])) {

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- <head>
    <meta charset="UTF-8">
    <title>Date Range Search with jQuery DatePicker using Ajax, PHP & MySQL | softAOX Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head> -->

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Magang</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom : 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/img/Telkom_Indonesia_logo_logotype.png"  class="user-image img-responsive"  width="190" style="margin-top : -10px"/></a> 
            </div>
  <div style="color: white; /*warna tulisan admin*/
padding: 15px 50px 10px 50px;
float: right;
font-size: 16px;"> Bantuan &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                                    <li class="text-center">
                    <?php

                        if($_SESSION['admin']){
                            $user = $_SESSION['admin'];
                        }elseif ($_SESSION['user']) {
                            $user = $_SESSION['user'];
                        }

                        $sql = $koneksi->query("select * from tb_admin where id='$user'");

                        $data = $sql->fetch_assoc();

                    ?>
                    <br/>
                    <br/>
                    <img class="img-circle" src="images_admin/<?php echo $data['Foto'];?>" width="150" height="150" alt="user"/>
                    <br/>
                    <br/>
                    <br/>
                    </li>
				
					 <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit fa-2x"></i> Input Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=magang">Peserta Magang/PKL</a>
                            </li>
                            <li>
                                <a href="?page=penelitian">Peserta Penelitian</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit fa-2x"></i> Riwayat Peserta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=riwayatmagang">Peserta Magang/PKL</a>
                            </li>
                            <li>
                                <a href="?page=riwayatpenelitian">Peserta Penelitian</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a  href="?page=daftar unit"><i class="fa fa-th-list fa-2x"></i> Daftar Unit</a>
                    </li>

                    <li>
                        <a  href="?page=daftar admin"><i class="fa fa-user fa-2x"></i> Daftar Admin</a>
                    </li>   
  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
          <div class="content-wrapper">

    </section>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                     <?php

                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if ($page == "dashboard") {
                                if ($aksi == "") {
                                    include "page/dashboard/index.php";
                                }
                            }

                            if ($page == "input data") {
                                if ($aksi == "") {
                                    include "page/input data/input data.php";
                                }
                                elseif ($aksi=="upload") {
                                    include "page/input data/upload.php";
                                }
                                elseif ($aksi=="uploadpenelitian") {
                                    include "page/input data/uploadpenelitian.php";
                                }
                                elseif ($aksi=="tambahmagang") {
                                    include "page/input data/tambahmagang.php";
                                }
                                elseif ($aksi=="ubahmagang") {
                                    include "page/input data/ubahmagang.php";
                                }
                                elseif ($aksi=="hapusmagang") {
                                    include "page/input data/hapusmagang.php";
                                }
                                elseif ($aksi=="tambahpenelitian") {
                                    include "page/input data/tambahpenelitian.php";
                                }
                                elseif ($aksi=="ubahpenelitian") {
                                    include "page/input data/ubahpenelitian.php";
                                }
                                elseif ($aksi=="hapuspenelitian") {
                                    include "page/input data/hapuspenelitian.php";
                                }
                                elseif ($aksi=="tambahunitpenempatan") {
                                    include "page/input data/tambahunitpenempatan.php";
                                }
                                elseif ($aksi=="tambahunitinstansi") {
                                    include "page/input data/tambahunitinstansi.php";
                                }
                                elseif ($aksi=="tambahunitfakultas") {
                                    include "page/input data/tambahunitfakultas.php";
                                }
                                elseif ($aksi=="tambahunitjurusan") {
                                    include "page/input data/tambahunitjurusan.php";
                                }
                                elseif ($aksi=="tambahunitinstansi1") {
                                    include "page/input data/tambahunitinstansi1.php";
                                }
                                elseif ($aksi=="tambahunitfakultas1") {
                                    include "page/input data/tambahunitfakultas1.php";
                                }
                                elseif ($aksi=="tambahunitjurusan1") {
                                    include "page/input data/tambahunitjurusan1.php";
                                }
                            }
                            elseif ($page == "riwayat peserta") {
                                if ($aksi == "") {
                                    include "page/riwayat peserta/riwayat peserta.php";
                                }
                                elseif ($aksi == "profilmagang") {
                                    include "page/riwayat peserta/profilmagang.php";
                                }
                                elseif ($aksi == "profilpenelitian") {
                                    include "page/riwayat peserta/profilpenelitian.php";
                                }
                                elseif ($aksi == "filter") {
                                    include "page/riwayat peserta/riwayatfilter.php";
                                }
                            }
                            elseif ($page == "daftar unit") {
                                if ($aksi == "") {
                                    include "page/daftar unit/daftar unit.php";
                                }
                                elseif ($aksi == "tambahpenempatan") {
                                   include "page/daftar unit/tambahpenempatan.php";
                                }
                                elseif ($aksi == "ubahpenempatan") {
                                   include "page/daftar unit/ubahpenempatan.php";
                                }
                                elseif ($aksi == "hapuspenempatan") {
                                   include "page/daftar unit/hapuspenempatan.php";
                                }
                                elseif ($aksi == "tambahinstansi") {
                                   include "page/daftar unit/tambahinstansi.php";
                                }
                                elseif ($aksi == "ubahinstansi") {
                                   include "page/daftar unit/ubahinstansi.php";
                                }
                                elseif ($aksi == "hapusinstansi") {
                                   include "page/daftar unit/hapusinstansi.php";
                                }
                                elseif ($aksi == "tambahfakultas") {
                                   include "page/daftar unit/tambahfakultas.php";
                                }
                                elseif ($aksi == "ubahfakultas") {
                                   include "page/daftar unit/ubahfakultas.php";
                                }
                                elseif ($aksi == "hapusfakultas") {
                                   include "page/daftar unit/hapusfakultas.php";
                                }
                                elseif ($aksi == "tambahjurusan") {
                                   include "page/daftar unit/tambahjurusan.php";
                                }
                                elseif ($aksi == "ubahjurusan") {
                                   include "page/daftar unit/ubahjurusan.php";
                                }
                                elseif ($aksi == "hapusjurusan") {
                                   include "page/daftar unit/hapusjurusan.php";
                                }
                            }
                            elseif ($page == "daftar admin") {
                                if ($aksi == "") {
                                    include "page/daftar admin/daftar admin.php";
                                }
                                elseif ($aksi == "tambahadmin") {
                                   include "page/daftar admin/tambahadmin.php";
                                }
                                elseif ($aksi == "ubahadmin") {
                                   include "page/daftar admin/ubahadmin.php";
                                }
                                elseif ($aksi == "hapusadmin") {
                                   include "page/daftar admin/hapusadmin.php";
                                }
                            }
                            elseif ($page == "magang") {
                                if ($saksi == "") {
                                    include "page/input data/tambahmagang.php";
                                }
                            }
                            elseif ($page == "penelitian") {
                                if ($saksi == "") {
                                    include "page/input data/tambahpenelitian.php";
                                }
                            }
                            elseif ($page == "riwayatmagang") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatmagang.php";
                                }
                            } 
                            elseif ($page == "riwayatmagangfilter") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatmagangfilter.php";
                                }
                            } 
                            elseif ($page == "riwayatpenelitian") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatpenelitian.php";
                                }
                            } 
                            elseif ($page == "riwayatpenelitianfilter") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatpenelitianfilter.php";
                                }
                            }        
                     ?>


                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-magang').dataTable();
                $('#dataTables-penelitian').dataTable();
                $('#dataTables-penempatan').dataTable();
                $('#dataTables-instansi').dataTable();
                $('#dataTables-fakultas').dataTable();
                $('#dataTables-jurusan').dataTable();
                $('#dataTables-magang1').dataTable();
                $('#dataTables-penelitian1').dataTable();
                $('#dataTables-riwayatmagang').dataTable();
                $('#dataTables-riwayatpenelitian').dataTable();
                $('#dataTables-magangaktif').dataTable();
                $('#dataTables-penelitianaktif').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->      
</body>
</html>
<?php

    }else{
        header("location:login.php");
    }
?>



<?php
		ob_start();
		session_start();

        $koneksi = new mysqli("localhost","root","","db_websdm");
        if (isset ($_SESSION['admin']) || isset ($_SESSION['user'])) {

            header("location:index.php");
        }else{        
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Database SDM</title>
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
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <img src="assets/img/Telkom_Indonesia_logo_logotype.png" class="user-image img-responsive" height="150" width="150" style ="margin-top: -10px"></a>
                                              
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-danger">
                            <div class="panel-heading" style="font-size: 18px">
                            	<font color="black"><strong><center>LOGIN</center></strong></font>                          
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon" ><i class="fa fa-tag btn-xs"  ></i></span>
                                            <input type="text" name ="Username" class="form-control" placeholder="Your Username " />
                                      </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock btn-xs"  ></i></span>
                                            <input type="password" name ="Password" class="form-control"  placeholder="Your Password" />
                                      </div>
                                                                         
                                    <div class="panel-body">
                                    <input type = "submit" name="Login" value="Login" class="btn btn-primary btn-md pull-right" style="margin-top:-10px; margin-right: -15px">
                                                                     	
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>


<?php

	if (isset($_POST['Login'])) {

		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		$sql = $koneksi->query("select * from tb_admin where Username = '$Username' and Password = '$Password'");

		$data = $sql->fetch_assoc();

		$ketemu = $sql->num_rows;

		if($ketemu >=1) {

			session_start();

				if($data['Level']=="admin") {

					$_SESSION['admin'] = $data["ID"];

					header("location:index.php");

				}elseif($data['Level']=="user") {

					$_SESSION['user']== $data["ID"];

					header("location:index.php");

				}
		}else{

					?>
						<script type="text/javascript">
							alert ("Username dan Password tidak cocok. Silahkan coba lagi!")
						</script>
					
					<?php
		}
		
	}
}

?>
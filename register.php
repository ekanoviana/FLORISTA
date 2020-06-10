<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/utilwin.css">
	<link rel="stylesheet" type="text/css" href="dist/css/regiswin.css">
<!--===============================================================================================-->

</head>
<body>
	<!-- PHP START -->
	<?php
            include "conn.php";
            	if(isset($_POST['input'])){
				 $nama       = $_POST['nama'];
		         $alamat     = $_POST['alamat'];
                 $no_telp    = $_POST['no_telp'];
                 $username   = $_POST['username'];
                 $password1  = $_POST['password'];
                 $password  = sha1($password1);
                 $kd_cus     = date("YmdHis");
				
                
				$cek = mysqli_query($koneksi, "SELECT * FROM customer WHERE nama='$nama'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO customer (kd_cus, nama, alamat, no_telp, username, password) VALUES ('$kd_cus', '$nama', '$alamat', '$no_telp', '$username', '$password')") or die(mysqli_error($con));
						if($insert){
							echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan !</div>';
						}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Member Sudah Ada..!</div>';
				}
			} ?>

	<!-- PHP END -->
	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <!-- FORM START -->
				<form class="login100-form validate-form" role="formku" id="formku" method="post" action="">
					<span class="login100-form-title p-b-34">
						Account SIGN UP
                    </span>
					<!-- nama -->
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-12" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="nama" placeholder="Full Name">
						<span class="focus-input100"></span>
                    </div>
					<!-- alamat -->
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-12" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="alamat" placeholder="Address">
						<span class="focus-input100"></span>
                    </div>
					<!-- no telp-->
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-12" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="no_telp" placeholder="Telp/HP">
						<span class="focus-input100"></span>
                    </div>
					<!-- username -->
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-12" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
                    </div>
                    <!-- password -->
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-12" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>  
					
					<!-- <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"value="submit" name="input" id="input">
							Sign Up
						</button>
					</div> -->

					<!-- <input type="submit" value="Submit" name="input" id="input" class="btn btn-sm btn-success"/>&nbsp;<a href="index.php" class="btn btn-sm btn-warning">Back</a> -->

					<input type="submit" value="Submit" name="input" id="input" class="container-login100-form-btn login100-form-btn"/>&nbsp;
					<div class="w-full text-center m-t-50" >
                        <a class="txt1" >Already have an account? </a>
						<a href="index.html" class="txt3" >
							Sign In
						</a>
					</div>
				</form>
                <!-- FORM END -->
				<div class="login100-more" style="background-image: url('img/imgwin/log-02.jpg');"></div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!--===============================================================================================-->
	<script src="dist/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->

</body>
</html>
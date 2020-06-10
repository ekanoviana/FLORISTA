<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php";?>

<link rel="stylesheet" href="WINAR_login/css/submain.css">
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="index.php"><img src="img/floristalogo.png" alt="Logo" width="80%" height="30%"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li><a href="index.php">Home</a></li>
                                    <li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar Bunga <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
											  <li><a href="produk.php">Hand Bouquet (Wedding)</a></li>
											  <li><a href="produk_funeral.php">Funeral Flower</a></li>
											  <li><a href="produk_graduate.php">Graduation Flower</a></li>
											  <li><a href="produk_tangkai.php">Single Flower</a></li>
			                			</ul>
			              			</li>           
									<li><a href="testimoni.php">Testimonial</a></li>
                                    <!-- <li><a href="detail.php">Cart</a></li>-->
                                    <li class="active"><a href="profil.php">About Us</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="login.html">Admin</a></li>
			                  				<li><a href="index.html">Customer</a></li>
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div id="page-title">
        <div id="page-title-inner">
            <!-- start: Container -->
            <div class="container">
                <h2><i class="ico-stats ico-white"></i>Profil</h2>
            </div>
            <!-- end: Container  -->
        </div>
    </div>
    <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid" margin="10px"> 
            <div class="container">
                <center><img src="img/imgwin/wall-02.jpg" alt="" style="object-fit: cover"></center>
                
            </div>
        </div>
    <!-- End Jumbotron -->

        <div id="wrapper">
		<!--start: Container -->
    	<div class="container blockquote">
      		<!-- start: Hero Unit - Main herounit for a primary marketing message or call to action -->
            <blockquote style="font-size: medium;">
                <b></b>
                <br />
                <b>Toko Bunga FLORISTA </b> adalah Toko Bunga yang berlokasi di perum Graha Asri Jl.Graha Sapta Asri, Tembalang.
                <br/><br /> <b>Toko Bunga FLORISTA</b> menerima pesanan bouquet untuk berbagai acara seperti pernikahan, kelulusan, belasungkawa, dan buket untuk orang tersayang.
                <br /> Pesan sekarang melalui website. 
                Sebarkan kebahagiaan, tanpa halangan :) 
            </blockquote>

			
			<start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Pengiriman Cepat</h3>
								<p>Toko Bunga FLORISTA siap mengirim bouquet Anda secara gratis dengan radius maksimal 5 KM.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Harga Terjangkau</h3>
								<p>Toko Bunga FLORISTA menggunakan bunga dari kebun tetangga sehingga aman dan murah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<!-- <div id="footer-menu-logo">
						<a href="#"><img src="img/logo3.png" alt="logo" /></a>
					</div> -->
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="#">Free Delivery Max 5 KM</a></li>

							<li><a href="#">Cash On Delivery (COD)</a></li>

							<li><a href="#">Pelayanan Cepat</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				</div>
				<!-- end: Footer Menu Back To Top -->
			</div>
			<!-- end: Row -->
		</div>
		<!-- end: Container  -->	
	</div>	
	<!-- end: Footer Menu -->
<?php include "footer.php"; ?>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Lovable White</h2>
				<p>Bouquet bernuansa putih yang tampak lembut dan manis. </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/wed7.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" width="60%"   /></div>
			</div>
			<div class="da-slide">
				<h2>Woeful Rose</h2>
				<p>Karangan bunga yang disusun dari mawar merah dan mawar putih tampak memberi kesan kesedihan.</p>
				<a href="produk_funeral.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/funeral 8.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image03" width="55%"   />
			</div>
				
			</div>
			<div class="da-slide">
				<h2>Cheerfull Salm</h2>
				<p>Sekumpulan bunga mawar berwarna soft dan dihiasi dengan nuansa warna salm yang tampak kalem.</p>
				<a href="produk_graduate.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/grad1.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image02" width="55%" /></div>
			</div>
			<div class="da-slide">
				<h2>Rose</h2>
				<p>Bunga mawar merah yang tampak mempesona dan memberikan kesan romantis.</p>
				<a href="produk_tangkai.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/tangkai3rose.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image02" width="55%"   /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
            	Toko Bunga Florista Merupakan toko bunga online yang menyediakan aneka macam bunga yang dapat di pesan secara online dengan metode pembayaran cash on delivery.
				</p>
        		<p><a class="btn btn-success btn-large" href="profil.php">Tentang Kami &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            <!-- hand bouquet -->
      		<div class="row">
			  <hr>
			  	<h2>Hand Bouquet(Wedding)</h2>
				  <hr>
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 3");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;"  />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              ?>

      		</div>
			
			<!-- funeral flower -->
			<div class="row">
			<br><br>
			<hr>
				<h2>Funeral Flower</h2><hr>
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk_funeral ORDER BY kode DESC limit 3");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;"  />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              ?>
      		</div>
			
			<!-- Graduation Bouquet -->
			<div class="row">
			<br><br>
			<hr>
				<h2>Graduation Bouquet</h2><hr>
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk_graduate ORDER BY kode DESC limit 3");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;"  />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              ?>
      		</div>
			<!-- single flower -->
			<div class="row">
			<br><br>
			<hr>
				<h2>Single Flower</h2><hr>
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM produk_tangkai ORDER BY kode DESC limit 3");
				while($data = mysqli_fetch_array($sql)){
				?>
			<div class="span4">
				<div class="icons-box">
					<div class="title"><h3><?php echo $data['nama']; ?></h3></div>
					<img src="admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;"  />
					<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
				<!--	<p>
					
					</p> -->
					<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Beli &raquo;</a></div>
				
				</div>
			</div>
			<?php   
			}
			?>

      		</div>
			<hr>
			
			<!-- start: Row -->
				<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Pengiriman Cepat</h3>
								<p>Toko Bunga Florista siap mengirim pesanan anda secara gratis dengan radius maksimal 5 KM.</p>
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
								<p>Toko Bunga Florista memiliki harga yang terjangkau berbeda dari toko bunga lainnya tetapi tetap berkualitas.</p>
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
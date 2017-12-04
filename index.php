<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hayu Ulin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Hayu Ulin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="index.php?page=profile">Profile
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=destination">Destination</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="index.php?page=kuliner">Kuliner</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="index.php?page=hotel">Hotel</a>
            </li>
			<form action="index.php" method="get" >
				<label ></label>
				
				<input  type="text" name="cari" >
				<input type="submit" value="Cari">
			</form>
          </ul>
        </div>
      </div>
    </nav>
	<?php 
	if(isset($_GET['page'])){
		if($_GET['page']=="about" || $_GET['page']=="profile" || $_GET['page']=="contact"){
			if($_GET['page']=="about")
				include "about.html";
			else if($_GET['page']=="profile")
				include "profile.html";
			else if($_GET['page']=="contact")
				include "contact.html";
		}else if($_GET['page']=="kuliner" || $_GET['page']=="destination" || $_GET['page']=="hotel"){
			?>
			
			<div class="container">

      <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-md-12">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="asset/img/img1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="asset/img/img1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="asset/img/img1.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		</div>
	</div>
	</div>
		
	<?php	
		}else{
			
		}
			
	}else{
	?>
    <!-- Page Content -------------------------------------------------------------------------------------->
    <div class="container">

      <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-md-12">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="asset/img/img1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="asset/img/img1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="asset/img/img1.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		</div>
	</div>
	</div>
		
		<section class="bg-dark" style="height:620px; margin:auto">
		<div style="font-size:30px; color:white; text-align:center; padding-top:8px">Destination</div>
			<div class="container">
			<div class="row">
			
			<?php
				include "koneksi.php";
				$sql = mysqli_query($con, "select * from destinasi order by id desc");
				$jml = mysqli_num_rows($sql);
				if($jml>3){
					$jml=3;
				}
				$i=0;
				while($i<$jml){
					$data=mysqli_fetch_array($sql);
			?>
			
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" style="margin: 20px auto">
                <a href="#"><img class="card-img-top" src="asset/img/img2.jpg" alt="" height="250px" width="100%"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $data['judul'];?></a>
                  </h4>
                  <p class="card-text">
					<?php
						$des = $data['deskripsi'];
						echo substr($des,0,150)." [...]";
						
					?>
				  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<?php 
			
					$i++;
				}
			?>
			
			</div>
		</div>
		</section>
		<!-- Row 1 -->
			
			<section style="height:620px; margin:auto">
		<div style="font-size:30px; color:black; text-align:center; padding-top:8px">Kuliner Khas Bandung</div>
			<div class="container">
			<div class="row">
			
			<?php
				include "koneksi.php";
				$sql = mysqli_query($con, "select * from kuliner order by id desc");
				$jml = mysqli_num_rows($sql);
				
				if($jml>3){
					$jml=3;
				}
				$i=0;
				while($i<$jml){
					$data=mysqli_fetch_array($sql);
				}	
			?>
			
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" style="margin: 20px auto">
                <a href="#"><img class="card-img-top" src="asset/img/img2.jpg" alt="" height="250px" width="100%"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $data['nm_kuliner'];?></a>
                  </h4>
                  <p class="card-text">
					<?php
						$des = $data['deskripsi'];
						echo substr($des,0,150)." [...]";
					?>
				  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<?php 
					$i++;
				}
			?>
			
			</div>
		</div>
		</section>
		<!-- Row 2 -->
		
        <section class="bg-dark" style="height:620px; margin:auto">
		<div style="font-size:30px; color:white; text-align:center; padding-top:8px">Hotel</div>
			<div class="container">
			<div class="row">
			
			<?php
				include "koneksi.php";
				$sql = mysqli_query($con, "select * from hotel order by id desc");
				$jml = mysqli_num_rows($sql);
				
				if($jml>3){
					$jml=3;
				}
				$i=0;
				while($i<$jml){
					$data=mysqli_fetch_array($sql);
			?>
			
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" style="margin: 20px auto">
                <a href="#"><img class="card-img-top" src="asset/img/img2.jpg" alt="" height="250px" width="100%"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $data['nm_hotel'];?></a>
                  </h4>
                  <p class="card-text">
					<?php
						$des = $data['deskripsi'];
						echo substr($des,0,150)." [...]";
					?>
				  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<?php 
					$i++;
				}
			?>
			
			</div>
		</div>
		</section>
		<!-- Row 3 -->

	
    <!-- Footer -->
    <footer class="py-5 bg-secondary">
      <div class="container">
        <p class="m-0 text-center text-white">&copy;Copyright Aditya Nugraha Adha & Muhamad Fauzi Rachman 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

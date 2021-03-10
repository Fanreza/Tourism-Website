<?php 
include_once "fungsi.php";

$isi = query("SELECT * FROM tb_opsi ");

?>





<!DOCTYPE html>
<html>
<head>
	<title>GeoTourism Sentul</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
  <meta name="description" content="we are a platform for tourists who want to define their journey with a variety of experiences">
  <meta name="keywords" content="GeoTourism Sentul,Wisata Sentul,Wisata Bogor,Tourism,Wisata Alam,GeoTourism">
  <meta name="author" content="GeoTourism">
  <meta property="og:title" content="GeoTourism Sentul"/>
  <meta property="og:image" content="aset/image/logo-web.png">
  <meta property="og:url" content="https://geotourism.rf.gd/" />
  <meta property="og:description" content="We are a platform for tourists who want to define their journey with a variety of experiences">
  
  <link rel="shortcut icon" type="image/png" href="aset/image/logo-web.png" sizes="200x200">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<!--  <link href="aset/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="aset/fontawesome/css/brands.css" rel="stylesheet">
    <link href="aset/fontawesome/css/solid.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
	<!-- Navigation Bar -->
<nav class="navbar fixed-top navbar-expand-lg  bg-transparant">
  <div class="container-fluid">  
    <a class="navbar-brand" href="#" style="color: white; padding-left: 50px; font-size: 15px;"><img src="aset/image/logo-web.png" width="70px">Geo Tourism</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <img src="aset/image/menu-bar.png" style="width: 30px;">
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html#service">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="options.php">Travel Selection</a></li>
            <li><a class="dropdown-item" href="galery.html">Galery</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section class="jumbotron text-center">
	    <div id="container-provinsi" class="container" >
	      <h1>Sentul City</h1>
	      <p class="lead">Sentul City adalah sebuah kawasan "kota pegunungan" seluas kira-kira 3000 hektare yang berada di Kecamatan Babakan Madang, Kabupaten Bogor, di sebelah timur Kota Bogor yang dikembangkan oleh PT Sentul City Tbk</p>
	    </div>
  	</section>



  <div  class="album py-5 ">
    <div  class="container">
      <div class="row">

        <?php foreach ($isi as $isian) :?>
        	<div class="col-md-6">
            <div class="card mb-4 shadow-sm card-travel">
              <img src="aset/travel-img/<?= $isian["image"]; ?>">
              <div class="card-body">
                <h4 class="card-title"><?= $isian["head"]; ?></h4>
                <p class="card-text"><?= $isian["description"]; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="travel.php?code=<?= $isian['code'] ?>">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <?php endforeach; ?>

      </div>	
    </div>
  </div>



<!-- Footer -->
<div class="footer" id="contact">
  <div class="image-brand">
    <img src="aset/image/logo-web.png">
    <p>We provide the best service, work quickly, accurately, and professionally. <span>what you want is what you get</span></p>
  </div>

  <div class="support">
    <h3>Customer Support </h3>
    <i class="bi bi-geo-alt-fill"> Sentul Nirwana</i>
    <i class="bi bi-telephone-fill"> 08111036811</i>
    <a href=""><i class="bi bi-whatsapp"> 08111036811</i></a>
    <i class="bi bi-envelope-fill"> hikingsentul@gmail.com</i>
    <a href=""><i class="bi bi-question-circle-fill"> FAQ</i></a>
  </div>

  <div class="social">
    <h3>Social Media</h3>
    <div class="image">
      <i class="bi bi-instagram"></i>
    </div>  
  </div>
</div>

<!-- COPYRIGHT -->
<div class="copyright">
  <p>&copy; 2020 - All Right Reserved. Designed and Developed by <span><a href="">Geo Tourism Sentul</a></span></p>
</div>


<script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	 $(window).scroll(function(){
       $('nav').toggleClass('scroll', $(this).scrollTop() > 10);
       });

	 $(window).scroll(function(){
       $('ul').toggleClass('scroll', $(this).scrollTop() > 10);
       });

</script>

</body>
</html>
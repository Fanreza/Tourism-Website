<?php 
require_once "aset/php/fungsi.php";

$code = $_GET['code'];

$isi = query("SELECT * FROM tb_wisata WHERE code = '$code' ");



?>




<!DOCTYPE html>
<html>
<head>
	<title>GeoTourism Sentul</title>
	<?php include "aset/php/header.php";?>
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
          <a class="nav-link" aria-current="page" href="index.php#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#service">Service</a>
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
            <li><a class="dropdown-item" href="galery.php">Galery</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="4000">

<?php foreach ($isi as $isian) :?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aset/travel-img/<?= $isian["bg1"]; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="aset/travel-img/<?= $isian["bg2"]; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="aset/travel-img/<?= $isian["bg3"]; ?>" class="d-block w-100" alt="...">
    </div>
  </div>
<?php endforeach; ?>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

  <?php foreach ($isi as $isian) :?>
<div class="desc-section">
	<div class="head-desc">
		<h1> <?= $isian["head"] ?> </h1>
	</div>


	<div class="desc">
		 <p><?= $isian["description"] ?></p>
	</div>

</div>

<div class="maps"><?= $isian["maps"] ?></div>
<?php endforeach; ?>


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

<!-- Javasript -->
<?php include "aset/php/footer.php"; ?>

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
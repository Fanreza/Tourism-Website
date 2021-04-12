<?php 
include_once "aset/php/fungsi.php";

$isi = query("SELECT * FROM tb_opsi ");

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
          <a class="nav-link" aria-current="page" href="index.php#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#service">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="select.php">Pilihan Wisata</a></li>
            <li><a class="dropdown-item" href="galery.php">Galeri</a></li>
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
<?php include "aset/php/footer.php"; ?>


</body>
</html>
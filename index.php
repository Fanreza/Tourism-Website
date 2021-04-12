<!DOCTYPE html>
<html lang="id-ID">
<head>
	<title>GeoTourism Sentul</title>
	<?php include "aset/php/header.php"; ?>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar fixed-top navbar-expand-lg  bg-transparant">
  <div class="container-fluid">  
  	<a class="navbar-brand" href="#" style="color: white; padding-left: 50px; font-size: 15px;"><img src="aset/image/logo-web.png" width="70px" height="70px">Geo Tourism</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <img src="aset/image/menu-bar.png" style="width: 30px; height: 30px;">
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Layanan</a>
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

<!-- Carousel -->
<div id="home" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="4000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aset/image/bg1.webp"  alt="...">
      <div class="caption">
      	<h2>Akomodasi</h2>
      	<p>Beragam akomodasi mulai dari hotel, restoran, resort, dan hoemstay yang dekat dengan lokasi wisata pilihan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="aset/image/bg2.webp"  alt="...">
      <div class="caption">
      	<h2>Atraksi Lokal</h2>
      	<p>Ragam atraksi lokal yang memberikan kesan wisata alami</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="aset/image/bg3.webp" alt="...">
      <div class="caption">
      	<h2>Professional Guide</h2>
      	<p>Ditemani dengan para guide profesional yang menambah keseruan wisata</p>
      </div>
    </div>
  </div>
</div>


<!-- ABOUT -->
<div id="about">
	<h2 class="head">About GeoTourism Sentul</h2>
	<section class="about">	
		<div class="images">
			<div class="image">
				<img src="aset/image/image-galery.webp">
				<p style="">Develop Conversation</p>
			</div>

			<div class="image">
				<img src="aset/image/image-galery2.webp">
				<p style="">Bring Benefit for Local People</p>
			</div>

			<div class="image">
				<img src="aset/image/image-galery5.webp">
				<p style="">Save Culture</p>
			</div>

			<div class="image">
				<img src="aset/image/image-galery4.webp">
				<p style="">Save Nature</p>
			</div>
			
		</div>

		<article class="nav-article">
			<p>" GeoTourism Sentul adalah platform bagi para wisatawan yang ingin mendapatkan pengalaman wisata alam yang aman dan menyenangkan, kami juga memiliki banyak pilihan akomodasi yang dekat dengan wisata pilihan. "</p>
		</article>
	</section>
</div>

<!-- Service -->
<div class="service" id="service">
	<div class="left-service">
		<div class="image">
			<img src="aset/image/image-service1.webp">
			<p>Your</p>
		</div>

		<div class="image">
			<img src="aset/image/image-service2.webp">
			<p>wish is</p>
		</div>

		<div class="image">
			<img src="aset/image/image-service3.webp">
			<p>our</p>
		</div>

		<div class="image">
			<img src="aset/image/image-service4.webp">
			<p style="color: #82A822">priority</p>
		</div>
	</div>

	<div class="right-service">
		<h1 class="head-service">yang kamu dapatkan</h1>
		<div class="collapse-box">
			<p>
			  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
			    akomodasi lokal
			  </button>
			</p>
			<div class="text-collapse">
				<div class="collapse text-center" id="collapseExample1">
			  <div class="card card-body" style="margin-bottom: 15px;">
			  	Beragam akomodasi dengan berbagai pilihan hotel,resort,homestay,dan restoran yang dekat dengan wisata alam pilihan.
			  </div>
			</div>
			</div>

			<p>
			  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
			    pengalaman budaya lokal
			  </button>
			</p>
			<div class="collapse" id="collapseExample2">
			  <div class="card card-body" style="margin-bottom: 15px;">
			  	Pengalaman budaya lokal dengan terlibat langsung dalam kegiatan masyarakat lokal seperti kunjungan ke situs sejarah,menonton pertunjukan lokal, bahkan merasakan bagaimana menanam padi secara langsung.
			  </div>
			</div>

			<p>
			  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
			    pengalaman hidangan lokal
			  </button>
			</p>
			<div class="collapse" id="collapseExample3">
			  <div class="card card-body" style="margin-bottom: 15px;">
			  	Rasakan pengalaman menyantap hidangan lokal di restoran restoran pilihan yang dekat dengan lokasi wisata.
			  </div>
			</div>

			<p>
			  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
			   	pengalaman olahraga
			  </button>
			</p>
			<div class="collapse" id="collapseExample4">
			  <div class="card card-body" style="margin-bottom: 15px;">
			  	Pengalaman melakukan wisata olahraga seperti arung jeram,hiking, dan panjat tebing.
			  </div>
			</div>
		</div>
	</div>
</div>

<!-- Strategic Section -->
<div class="strat">
	<h1>Strategic Partners</h1>
	<div class="cards">
		<div class="card">
			<div class="circle"><h1>100</h1></div>
			<div class="text">Akomodasi</div>
		</div>

		<div class="card">
			<div class="circle"><h1>80</h1></div>
			<div class="text">Transportasi</div>
		</div>

		<div class="card">
			<div class="circle"><h1>60</h1></div>
			<div class="text">Tempat Wisata</div>
		</div>

		<div class="card">
			<div class="circle"><h1>30</h1></div>
			<div class="text">Mitra Akomodasi Lokal</div>
		</div>
	</div>
</div>

<!-- PARTNERSHIP -->
<div class="partner">
	<div class="head"><h1>Partnership With</h1></div>


	<div class="image-partner">
		<div class="image">
			<img src="aset/image/sentultrekking.png">
		</div>
	</div>
</div>




<?php include "aset/php/footer.php"; ?>


</body>
</html>
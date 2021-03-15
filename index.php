<!DOCTYPE html>
<html>
<head>
	<title>GeoTourism Sentul</title>
	<?php include "aset/php/header.php"; ?>
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
          <a class="nav-link" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Service</a>
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
<div id="home" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="4000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aset/image/bg1.jpg"  alt="...">
      <div class="caption">
      	<h2>Accommodation</h2>
      	<p>A wide selection of hotels, restaurants, resorts and homestays close to selected attractions</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="aset/image/bg2.webp"  alt="...">
      <div class="caption">
      	<h2>Tourist Attractions</h2>
      	<p>Local attractions that give a tourist impression</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="aset/image/bg3.webp" alt="...">
      <div class="caption">
      	<h2>Professional Guide</h2>
      	<p>travel experience assisted by the direction of a professional guide</p>
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
			<p>" we are a platform for tourists who want to define their journey with a variety of experiences, we allow travelers to determine their own accommodation needed. "</p>
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
		<div class="head-service">what you got</div>
		<p>
		  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
		    local accommodation
		  </button>
		</p>
		<div class="collapse" id="collapseExample1">
		  <div class="card card-body" style="margin-bottom: 15px;">
		  	Places to stay for tourists that are closest to the tour of choice. with a variety of hotels, resorts, homestays and traditional residents' homes
		  </div>
		</div>

		<p>
		  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
		    experience local culture
		  </button>
		</p>
		<div class="collapse" id="collapseExample2">
		  <div class="card card-body" style="margin-bottom: 15px;">
		  	Cultural experience by being directly involved with local community activities such as culture and arts. visits to temples, watching dance arts, visits to museums / historical sites or traditional sites, and other art and cultural performances.
		  </div>
		</div>

		<p>
		  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
		    experience local cuisine
		  </button>
		</p>
		<div class="collapse" id="collapseExample3">
		  <div class="card card-body" style="margin-bottom: 15px;">
		  	Experience local flavors with a wide selection of local restaurants close to selected tourist attractions
		  </div>
		</div>

		<p>
		  <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
		    sports experience
		  </button>
		</p>
		<div class="collapse" id="collapseExample4">
		  <div class="card card-body" style="margin-bottom: 15px;">
		  	Experience sports such as rafting, hiking and climbing. of course we also provide traditional sports that are interesting to follow
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
			<div class="text">Accommodation</div>
		</div>

		<div class="card">
			<div class="circle"><h1>80</h1></div>
			<div class="text">Transportation</div>
		</div>

		<div class="card">
			<div class="circle"><h1>60</h1></div>
			<div class="text">Travel</div>
		</div>

		<div class="card">
			<div class="circle"><h1>30</h1></div>
			<div class="text">Local Accommodation Partners</div>
		</div>
	</div>
</div>

<!-- PARTNERSHIP -->
<div class="partner">
	<div class="head"><h1>Partnership With</h1></div>
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

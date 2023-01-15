<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Menu</title>
</head>

<body>

<!-- ini navbar -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../gambar/logo1.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Pesona Indonesia
    </a> 
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#servis.php">Servis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#destination.php">destination</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#recomendation.php">Rekomendasi</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</nav>

<!-- bagian carousel pada konten -->

<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../gambar/pantaingurtafurw1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>SELAMAT DATANG DIWEBSITE KAMI!!!</h1>
        <p>Nikmati perjalan seru dan mengasikan</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../gambar/rajaampatw2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>TOUR MENARIK </h1>
        <p>Nikmati puluhan tour wista menarik</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../gambar/borobudurw3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>WELCOME TO INDONESIA  </h1>
        <p>puluhan pulau dan tempat wisata turis</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 <!--  heading/bagian atas pada menu servis -->
  
  <!-- <div class=" heading" id="servis.php">
        <h1>servis</h1>
    </div> -->

  <!-- bagian servis  -->
  <section class="servis" id="servis.php">
    <h1 class="heading-title">Our servis</h1>

    <div class="box-container">

    <div class="box">
      <img src="../gambar/icon-1.png" alt="">
      <h3>Adventure</h3>
    </div>

    <div class="box">
      <img src="../gambar/icon-2.png" alt="">
      <h3>Tour guide</h3>
    </div>

    
    <div class="box">
      <img src="../gambar/icon-6.png" alt="">
      <h3>Camping</h3>
    </div>

    <div class="box">
      <img src="../gambar/icon-4.png" alt="">
      <h3>Camp fire</h3>
    </div>

    
    <div class="box">
      <img src="../gambar/icon-5.png" alt="">
      <h3>Off road</h3>
    </div>

    </div>

  </section>

  <section id="servis">
  <div class="keterangan">
      <div class="img1">
      <img src="../gambar/orang1.jpg" class="img-thumbnail" alt="...">
      </div>
      <div class="deskripsi">
        <h4>Why choose us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non est iusto numquam dolorem, voluptates deserunt ratione illo ipsa facere exercitationem?</p>
          <br>
           <a href="" class="btn">Read more</a>
      </div>
      <!-- <a href="servis.php" class="btn">Read more</a> -->
    </div>
  </section>

  <!-- bagian destinasi -->
 <section id="destination.php">
 <h1 class="heading-title">Destination</h1>
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad.borobudur9.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CANDI BOROBUDUR</h5>
        <p class="card-text">Candi Budha bersejarah & ikonis</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/cp2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CANDI PRAMBANAN</h5>
        <p class="card-text">Candi kuno hindu dipenuhi ornamen</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad.rajaampat8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KABUPATEN RAJA AMPAT</h5>
        <p class="card-text">Pantai & lukisan batu pantai Misool</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad8.p.komodo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PULAU KOMODO</h5>
        <p class="card-text">Komodo & menyelam di batu bolong</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad7.G.IJEN.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GUNGUNG IJEN</h5>
        <p class="card-text">Pengunungan berapi dengan danau biru</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/gilitrawangancrad8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GILI TRAWANGAN</h5>
        <p class="card-text">Pulau kecil,hotel & terowongan PD II</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Cradtanahlot10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TANAH LOT</h5>
        <p class="card-text">Pulau pura dengan pemandangan laut</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad.goagongpacitan10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GOA GONG PACITAN </h5>
        <p class="card-text">Gua dengan formasi warna-warni</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/crad.bali2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BALI</h5>
        <p class="card-text">Pantai,arung jeram,bulan madu,selancar,dan kuil</p>
      </div>
    </div>
  </div>
  <!-- <a href="https://www.google.com/travel/things-to-do/see-all?g2lb=2502548,2503771,2503781,4258168,4284970,4306835,4308226,4718358,4723331,4731329,4757164,4814050,4861688,4864715,4865467,4867855,4874190,4886082,4886480,4887607,4893075,4902277,4903082,4906050,4906852,4920622,4926165&hl=id-ID&gl=id&cs=1&ssta=1&dest_mid=/m/03ryn&dest_state_type=sattd&dest_src=ts&q=rekomendasi+tempat+wisata+indonesia" class="btn2" >Read more</a>  -->
  <div class="pencarian">
  <a href="https://www.google.com/travel/things-to-do/see-all?g2lb=2502548,2503771,2503781,4258168,4284970,4306835,4308226,4718358,4723331,4731329,4757164,4814050,4861688,4864715,4865467,4867855,4874190,4886082,4886480,4887607,4893075,4902277,4903082,4906050,4906852,4920622,4926165&hl=id-ID&gl=id&cs=1&ssta=1&dest_mid=/m/03ryn&dest_state_type=sattd&dest_src=ts&q=rekomendasi+tempat+wisata+indonesia" class="btn2" >Read more</a> 
  </div>
</div>

 </section>

  <!-- rekomendasi -->
  <section id="recomendation.php">
  <h1 class="heading-title">Destination</h1>
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad.borobudur9.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CANDI BOROBUDUR</h5>
        <p class="card-text">Candi Budha bersejarah & ikonis</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/cp2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CANDI PRAMBANAN</h5>
        <p class="card-text">Candi kuno hindu dipenuhi ornamen</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../gambar/Crad.rajaampat8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KABUPATEN RAJA AMPAT</h5>
        <p class="card-text">Pantai & lukisan batu pantai Misool</p>
      </div>
    </div>
  </div>
  <div class="pencarian">
  <a href="../tabel/index2.php" class="btn2" >Read more</a> 
  </div>
  </section>














  



































<!-- footer bagian bawah start -->
<section class="footer">
  <div class="box-container">
    <!--menu utama -->
  <div class="box">
  <h3>Quick Link</h3>
  <a href="#menu.php"><i class="fas fa-angle-right"></i>Menu</a>
  <a href="#servis.php"><i class="fas fa-angle-right"></i>Servis</a>
  <a href="#destination.php"><i class="fas fa-angle-right"></i>Destination</a>
  <a href="#book.php"><i class="fas fa-angle-right"></i>Book</a>
  </div>
  <!-- pertanyaan -->
  <div class="box">
  <h3>Extra Link</h3>
  <a href="#"><i class="fas fa-angle-right"></i>Ask quetion</a>
  <a href="#"><i class="fas fa-angle-right"></i>about us</a>
  <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
  <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
  </div>
<!-- hubungi kontak -->
  <div class="box">
  <h3>Contact Info</h3>
  <a href="#"><i class="fas fa-phone"></i>+62870-3164-2260</a>
  <a href="#"><i class="fas fa-phone"></i>+62877-2357-2263</a>
  <a href="#"><i class="fas fa-envelope"></i>indonesia@gmail.com</a>
  <a href="#"><i class="fas fa-map"></i>indonesia </a>
 </div>
<!-- sosial media -->
 <div class="box">
  <h3>Follow Us</h3>
  <a href="#"><i class="fab fa-facebook"></i>facebook</a>
  <a href="#"><i class="fab fa-twitter"></i>twitter</a>
  <a href="#"><i class="fab fa-instagram"></i>instagram</a>
  <a href="#"><i class="fab fa-linkedin"></i>linkedin </a>
 </div>

  </div>



  


</section>

<!-- footer bagian bawah end -->







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

   
</body>
</html>
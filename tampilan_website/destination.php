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
    <title>servis</title>
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
          <a class="nav-link" href="#book.php">Book</a>
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
        <h1>First slide</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../gambar/rajaampatw2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Second slide </h1>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../gambar/borobudurw3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Third slide </h1>
        <p>Some representative placeholder content for the third slide.</p>
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

 <!-- heading/bagian atas pada menu servis -->
    <div class=" heading" id="destination.php" >
        <h1>destination</h1>
    </div>













































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
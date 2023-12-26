<?php

session_start();
include 'connection.php';

    if(!isset($_SESSION['username'])){
        header("location:login.php");
        exit();
    }
    if(isset($_SESSION['username'])){
        $username  = $_SESSION['username'];
    }

?>



<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>SosmedKita.</title>

    <!--link icon-->
    <link rel="icon" type="image/x-icon" href="images/newspaper-folded.png">

    <!--link css sendiri-->
    <link rel="stylesheet" href="style-pol.css">

    <!--link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
</head>



<body>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <span id="real-time-date" style="font-family: 'Inter'; font-weight: 900; display: inline;"></span>
        <span class="container-fluid text-end" style="font-family: 'Inter'; font-weight: 900;">Medan, Sumatera Utara</span>
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-none my-0 pb-0">
      <div class="container-fluid">
          <!--separator-->
          <p id="garis" style="background-color: black; font-size: 7px; text-align: center; margin-bottom: 8px;">-</p>
      </div>
    </nav>
   
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-none my-0 pt-0">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"> 
              <img src="images/logofix.png" alt="Logo" width="130"  class="d-inline-block align-text-center me-5">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Politics.html">Politics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Tech.html">Tech</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="socmed.html">Social Media</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="movies.html">Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sports.html">Sports</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" style="color: black;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Reviews</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="books.html">Books</a></li>
                    <li><a class="dropdown-item" href="gadget.html">Gadget</a></li>
                  </ul>
                </li>
              </li>
              </ul>
          </div>
          
        </div>     
      </nav>


    <!--content-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner px-sm-3">
        <div class="carousel-item active">
          <a href="https://www.detik.com/jatim/berita/d-6731264/prabowo-singgah-ke-kamar-kh-hasyim-asyari-di-ponpes-tebuireng-jombang">
              <img src="images/prabaru.jpg" style="width: 1247px; height: 620px;" class="d-block w-100" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-family: 'Playfair'; font-weight: 900;">Prabowo Singgah ke Kamar KH Hasyim Asy'ari di Ponpes Tebuireng Jombang</h3>
            <p style="font-family: 'Inter'; font-size: small; opacity: 75%;">Prabowo Subianto, capres dari Partai Gerindra berkunjung ke Pondok Pesantren Tebuireng, Jombang.</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="https://inet.detik.com/games-news/d-6730941/update-pubg-mobile-26-rilis-hadirkan-dinosaurus-dalam-pertempuran">
              <img src="images/pubg-car1.png" style="width: 1247px; height: 620px;" class="d-block w-100" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-family: 'Playfair'; font-weight: 700;">Update PUBG Mobile 2.6 Rilis, Hadirkan Dinosaurus Dalam Pertempuran</h3>
            <p style="font-family: 'Inter'; font-size: small; opacity: 75%;">Tencent baru saja merilis update untuk game battle royale besutannya, PUBG Mobile. Dalam versi 2.6 ini, gamer bisa menikmati mode terbaru dengan tema dinosaurus.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/jokowi-car.png" style="width: 1247px; height: 620px;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-family: 'Playfair'; font-weight: 700;">Jokowi dan Iriana Bertolak ke Tanah Air Usai KTT G7 Jepang</h3>
            <p style="font-family: 'Inter'; font-size: small; opacity: 75%;">Presiden Joko Widodo (Jokowi) dan Ibu Iriana Joko Widodo serta delegasi terbatas bertolak kembali ke Tanah Air. Jokowi dan Iriana telah selesai menghadiri Konferensi Tingkat Tinggi (KTT) G7 dengan negara-negara mitra atau G7 Outreach Summit tahun 2023 di Hiroshima, Jepang.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <!--card1-->
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/ds.png" style="width: 400px; height: 228px;" class="card-img-top rounded-start rounded-end " alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title ps-4">Epic Games Bagikan Death Stranding Gratis, Diskon Game Hingga 75%</h3>
              <p class="card-text ps-4">Ada kabar menggembirakan bagi gamer PC nih. Epic Games tengah mengadakan event bertajuk The Epic Games MEGA Sale 2023, dengan memberikan diskon besar hingga 75%.Banyak game dengan kualitas grafik dan jalan cerita yang luar biasa, yang dapat diperoleh gamer dengan harga murah. Salah satu judul yang dimaksud ada Fry Cry 6, yang saat ini dibanderol Rp 154.750, turun dari harga normalnya Rp 619 ribu.</p>
              <p class="card-text ps-4" style="margin-top: 15px;">Panji Saputro</p>
              <p class="card-text ps-4" style="margin-top: -20px;"><small class="text-muted">Minggu, 21 Mei 2023 14:00 WIB</small></p>
              <a href="https://inet.detik.com/games-news/d-6730652/epic-games-bagikan-death-stranding-gratis-diskon-game-hingga-75" class="btn btn-primary ms-4">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!--card2-->
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/ganjar.jpeg" style="width: 400px; height: 228px;" class="card-img-top rounded-start rounded-end alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title ps-4">Pildun U-20 Batal di RI, Instagram Ganjar-Wayan Koster Digeruduk Netizen</h3>
              <p class="card-text ps-4">Media sosial Gubernur Jawa Tengah, Ganjar Pranowo dan Gubernur Bali I Wayan Koster diserbu warganet usai FIFA cabut status tuan rumah Piala Dunia U-20 di Indonesia. Ganjar dan Wayan Koster merupakan kepala daerah yang menolak kehadiran Timnas Israel.</p>
              <p class="card-text ps-4" style="margin-top: 23px;">detikUpdate</p>
              <p class="card-text ps-4" style="margin-top: -20px;"><small class="text-muted">Kamis, 30 Mar 2023 01:56 WIB</small></p>
              <a href="https://20.detik.com/detikupdate/20230330-230330052/pildun-u-20-batal-di-ri-instagram-ganjar-wayan-koster-digeruduk-netizen" style="margin-top: -1px;" class="btn btn-primary ms-4">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!--card3-->
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/plate.jpeg" style="width: 400px; height: 228px;" class="card-img-top rounded-start rounded-end alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title ps-4">Fakta Menkominfo Johnny Tersangka Korupsi BTS Rp 8 Triliun</h3>
              <p class="card-text ps-4">Menteri Komunikasi dan Informatika (Menkominfo), menjadi tersangka dan ditahan dalam kasus korupsi BTS 4G, yang merugikan negara dalam jumlah triliunan. Berikut ini beberapa fakta mengenai dijeratnya Menkominfo Johnny G Plate:
                Ditahan setelah 3 kali diperiksa
                Menteri Komunikasi dan Informatika (Menkominfo) Johnny G. Plate dipanggil kembali oleh Kejaksaan Agung (Kejagung) pada hari Rabu (17/5/2023) kemarin dan ditetapkan sebagai tersangka dalam kasus korupsi BTS 4G.</p>
              <p class="card-text ps-4" style="margin-top: 3px;">Tim</p>
              <p class="card-text ps-4" style="margin-top: -20px;"><small class="text-muted">Kamis, 18 Mei 2023 06:16 WIB</small></p>
              <a href="https://inet.detik.com/law-and-policy/d-6726125/fakta-menkominfo-johnny-tersangka-korupsi-bts-rp-8-triliun" style="margin-top: -2px;" class="btn btn-primary ms-4">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      

<!--end content-->
  
<p id="garis" style="background-color: black; font-size: 7px; text-align: center; margin-top: 28px;">-</p>
    
    

    <!--js bootstrap dan jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!--script date time-->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var realTimeDate = document.getElementById('real-time-date');
        setInterval(function() {
          var currentDate = new Date();
          var options = { year: 'numeric', month: 'long', day: 'numeric' };
          realTimeDate.textContent = currentDate.toLocaleDateString('en-US', options);
        }, 1000);
      });
    </script>
</body>
</html>


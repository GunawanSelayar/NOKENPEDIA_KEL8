<?php
error_reporting(0);

session_start();
 $ok =$_GET['kenda'];
if ($_SESSION['username']) {

?>
<?php
error_reporting(0);
  $haha =$_GET['kenda'];
  if($haha=='bus'){ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>BUS</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&family=Righteous&family=Rubik&display=swap');
      .navbar {
        background-color: #27ae60;
        font-family: 'Nunito', sans-serif;
      }
      .carousel-item {
        height: 670px;
      }
      .carousel-item card-title {
        margin-top: -30px;
      }
     
      .row {
        padding-top: 20px;
      }
      .card {
        background-color: #fff;
        text-align: center;
        margin-top: 30px;
        border-color: black;
      }
      .card img {
        height: 200px;
      }
      .card-title {
        font-family: 'Righteous', cursive;
        font-size: 20px;
      }
      #bus {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
      .icon img {
        width: 40px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
      <div class="container">
        <img src="./img/logo 2.png" alt="" width="130" height="ms-auto" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="bus">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/Bus-Damri.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">BUS DAMRI</h5>
                <p class="card-text">Memiliki fasilitas AC, toilet, dan koneksi wifi, ada pula fasilitas kursi pijat refleksi, smoking room, dan coffee maker,kapasitas tempat duduk 28 penumpang.</p>
                <a href="https://wa.me/6281344703884" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/bus-parawisata.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">BUS PARAWISATA</h5>
                <p class="card-text">Memiliki fasilitas AC, toilet, dan koneksi wifi, ada pula fasilitas kursi pijat refleksi, smoking room, dan coffee maker,kapasitas tempat duduk 59 penumpang.</p>
                <a href="https://wa.me/6281344703884" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/bus.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">BUS PARAWISATA</h5>
                <p class="card-text">Memiliki fasilitas AC, toilet, dan koneksi wifi, ada pula fasilitas kursi pijat refleksi, smoking room, dan coffee maker,kapasitas tempat duduk 31 penumpang.</p>
                <a href="https://wa.me/6281344703884" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#27ae60"
        fill-opacity="1"
        d="M0,160L48,181.3C96,203,192,245,288,245.3C384,245,480,203,576,202.7C672,203,768,245,864,256C960,267,1056,245,1152,240C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
} elseif($haha=='mobil'){
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>MOBIL</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&family=Righteous&family=Rubik&display=swap');
      .navbar {
        background-color: #27ae60;
        font-family: 'Nunito', sans-serif;
      }
      .carousel-item {
        height: 670px;
      }
      .carousel-item card-title {
        margin-top: -30px;
      }
    
      .row {
        padding-top: 20px;
      }
      .card {
        background-color: #fff;
        text-align: center;
        margin-top: 30px;
        border-color: black;
      }
      .card img {
        height: 200px;
      }
      .card-title {
        font-family: 'Righteous', cursive;
        font-size: 20px;
      }
      #mobil {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
      .icon img {
        width: 40px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
      <div class="container">
        <img src="./img/logo 2.png" alt="" width="130" height="ms-auto" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="mobil">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/fortuner.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">TOYOTA FORTUNER</h5>
                <p class="card-text">Jarak antara penumpang baris pertama dan kedua di fortuner adalah 900 mm. Sementara jarak antara penumpang baris kedua dan ketiga adalah 700 mm. Gerak maju mundur 190 mm pada kursi baris kedua dipadu dengan lebar mobil yang ditambah 80 mm memastikan 8 penumpang dapat duduk dan berinteraksi dengan nyaman.</p>
                <a href="https://api.whatsapp.com/send?phone=6285244129181&text=Mau%20tanya%20harga%20rental%20Avanza%20gan" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/avanza.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">TOYOTA AVANZA</h5>
                <p class="card-text">Jarak antara penumpang baris pertama dan kedua di All New Avanza adalah 980 mm. Sementara jarak antara penumpang baris kedua dan ketiga adalah 700 mm. Gerak maju mundur 240 mm pada kursi baris kedua dipadu dengan lebar mobil yang ditambah 70 mm memastikan 7 penumpang dapat duduk dan berinteraksi dengan nyaman.</p>
                <a href="https://api.whatsapp.com/send?phone=6285244129181&text=Mau%20tanya%20harga%20rental%20Avanza%20gan" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/new-innova.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">NEW-INNOVA</h5>
                <p class="card-text">Ruang kepala pada baris pertama hingga atap mencapai 955 mm. Pada baris kedua jaraknya tercatat 950 mm. Sedangkan bagi baris belakang yang memang dibuat cukup tinggi memiliki catatan yang tak begitu buruk, yaitu 887 mm,memiliki ruang yang cukup untuk membawa hingga 8 orang penumpang.</p>
                <a href="https://api.whatsapp.com/send?phone=6285244129181&text=Mau%20tanya%20harga%20rental%20Avanza%20gan" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#27ae60"
        fill-opacity="1"
        d="M0,160L48,181.3C96,203,192,245,288,245.3C384,245,480,203,576,202.7C672,203,768,245,864,256C960,267,1056,245,1152,240C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php  }

elseif($haha=='kapal') {
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>KAPAL</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&family=Righteous&family=Rubik&display=swap');
      .navbar {
        background-color: #27ae60;
        font-family: 'Nunito', sans-serif;
      }
      .carousel-item {
        height: 670px;
      }
      .carousel-item card-title {
        margin-top: -30px;
      }

      .row {
        padding-top: 20px;
      }
      .card {
        background-color: #fff;
        text-align: center;
        margin-top: 30px;
        border-color: black;
      }
      .card img {
        height: 200px;
      }
      .card-title {
        font-family: 'Righteous', cursive;
        font-size: 20px;
      }
      #kapal {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
      .icon img {
        width: 40px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
      <div class="container">
        <img src="./img/logo 2.png" alt="" width="130" height="ms-auto" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="kapal">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/speedboat.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">SPEED BOAT</h5>
                <p class="card-text">Asuransi jiwa dan kapten kapal yang berpengalaman yang membuat perjalanan Anda menjadi cepat, nyaman dan aman dibandingkan kapal lainnya. Kapasitas speedboat tersedia mulai dari kapasitas 14 orang hingga 190 orang yang bisa Anda sewa untuk keperluan Wisata Tour, Bisnis, Dinas, Survey, dan mancing.</p>
                <a href="https://api.whatsapp.com/send/?phone=6281236001024&text&app_absent=0" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/Oracle_16.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">ORACEL</h5>
                <p class="card-text">Oracle sangat ideal untuk pasangan atau keluarga kecil dengan tata letaknya yang akrab dan ruang dek yang luas, yang ditujukan untuk kehidupan luar ruangan yang terbaik. Awaknya termasuk direktur pelayaran, kapten, chief officer, dua insinyur, dua pelayan, koki pribadi, dan seorang tukang pijat.</p>
                <a href="https://api.whatsapp.com/send/?phone=6281236001024&text&app_absent=0" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/Prana_01.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">PRANA</h5>
                <p class="card-text">Prana Main Deck memiliki ruang tamu di dalam, ruang tamu di luar ruangan, spa, dek olahraga air, dan Ambon Suite.Bersantai di salah satu sofa daybed yang luas, melakukan perawatan wajah di Oasis Spa, menikmati matahari terbenam yang sejuk di lounge ber-AC,  menonton film di bawah bintang-bintang,dan Dek Bawah dengan 6 suite. </p>
                <a href="https://api.whatsapp.com/send/?phone=6281236001024&text&app_absent=0" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#27ae60"
        fill-opacity="1"
        d="M0,160L48,181.3C96,203,192,245,288,245.3C384,245,480,203,576,202.7C672,203,768,245,864,256C960,267,1056,245,1152,240C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

 <?php
}
else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>TRAVEL</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&family=Righteous&family=Rubik&display=swap');
      .navbar {
        background-color: #27ae60;
        font-family: 'Nunito', sans-serif;
      }
      .carousel-item {
        height: 670px;
      }
      .carousel-item card-title {
        margin-top: -30px;
      }
     
      .row {
        padding-top: 20px;
      }
      .card {
        background-color: #fff;
        text-align: center;
        margin-top: 40px;
        border-color: black;
      }
      .card img {
        height: 200px;
      }
      .card-title {
        font-family: 'Righteous', cursive;
        font-size: 20px;
      }
      #travel {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
      <div class="container">
        <img src="./img/logo 2.png" alt="" width="130" height="ms-auto" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="travel">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/bus.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">BUS</h5>
                <p class="card-text">Bus dapat memiliki kapasitas hingga 300 penumpang. </p>
                <a href="travel.php?kenda=bus" class="btn btn-success">Pilih</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/mobil.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">MOBIL</h5>
                <p class="card-text">Mobil dapat memiliki kapasitas hingga 8 penumpang. </p>
                <a href="travel.php?kenda=mobil" class="btn btn-success">Pilih</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/kapal01.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">KAPAL</h5> 
                <p class="card-text">Kapal dapat memiliki kapasitas hingga 18 penumpang. </p>
                <a href="travel.php?kenda=kapal" class="btn btn-success">Pilih</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#27ae60"
        fill-opacity="1"
        d="M0,160L48,181.3C96,203,192,245,288,245.3C384,245,480,203,576,202.7C672,203,768,245,864,256C960,267,1056,245,1152,240C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php } ?>

<?php 
  }
else {
  header("Location: login.php");}

 ?>
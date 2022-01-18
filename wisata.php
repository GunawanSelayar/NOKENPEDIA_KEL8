<!-- wisata Raja Ampat -->
<?php
session_start();

if ($_SESSION['username']) {

?>
<?php
error_reporting(0);
  $haha =$_GET['kota'];
  if($haha=='raja4'){ ?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Raja Ampat</title>
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
      #wisata {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
      .btn {
        margin-top: 30px;
        color: black;
      }
      .btn :hover {
        color: blue;
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
              <a class="nav-link active" href="./wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="wisata">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/Pianemo.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Piaynemo</h5>
                <p class="card-text">Terletak di Desa Pam, Kecamatan Waigeo Barat Kepulauan, Kabupaten Raja Ampat, Papua Barat. Dari Sorong, perjalanan sekitar enam jam perjalanan via laut.</p>
                <a href="https://goo.gl/maps/cB9nex2bporffdNm7" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/telaga.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Telaga Bintang</h5>
                <p class="card-text">Telaga Bintang berlokasi di Distrik Waigeo Barat Kepulauan, Kabupaten Raja Ampat. Jarak dari Piaynemo hanya sekitar 5-10 menit menggunakan kapal.</p>
                <a href="https://goo.gl/maps/FEokacbCAWXwThjL8" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/wayag.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Wayag</h5>
                <p class="card-text">Wayag adalah salah satu gugusan pulau karst di Raja Ampat.Terletak di Desa Pam, Kecamatan Waigeo Barat Kepulauan, Kabupaten Raja Ampat, Papua Barat. </p>
                <a href="https://goo.gl/maps/hTi1spLnVDMj11Ng9" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#27ae60" fill-opacity="1" d="M0,128L40,160C80,192,160,256,240,277.3C320,299,400,277,480,245.3C560,213,640,171,720,181.3C800,192,880,256,960,282.7C1040,309,1120,299,1200,245.3C1280,192,1360,96,1400,48L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Tourgiude -->
<?php 
} elseif($haha=='tour'){
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
        margin-top: 30px;
        border-color: black;
      }
      .card img {
        height: 300px;
      }
      .card-title {
        font-family: 'Righteous', cursive;
        font-size: 20px;
      }
      #tour {
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
              <a class="nav-link active" href="./wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="tour">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/wa ria.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">WA RIA FAUZIA</h5>
                <p class="card-text">Halo! Saya Ria, Tourguide asal Fakfak. Umur saya 19 tahun. Keahlian saya dapat menggunakan bahasa Inggris dengan baik.</p>
                <a href="https://wa.me/6282261977054" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/ubai.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">UBAIDILLAH FADHIL</h5>
                <p class="card-text">Halo! Saya Ubai, Tourguide asal Sorong. Umur saya 19 tahun. Keahlian saya dapat menggunakan bahasa Inggris dengan baik.</p>
                <a href="https://wa.me/6281248776827" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/atisya.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">ATISYA RAHMA</h5>
                <p class="card-text">Halo! Saya Atisya, Tourguide asal Raja Ampat. Umur saya 19 tahun. Keahlian saya dapat menggunakan bahasa Inggris dengan baik.</p>
                <a href="https://wa.me/6281340990805" class="icon"><img src="./img/whatsapp-48.jpg" alt="" /></a>
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


<!-- Wisata Fakfak -->
<?php  }
  elseif($haha=='fakfak'){ 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Fakfak</title>
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
      #wisata {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
      .btn {
        margin-top: 30px;
        color: black;
      }
      .btn :hover {
        color: blue;
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
              <a class="nav-link active" href="./wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="wisata">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/ubadari.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Ubadari</h5>
                <p class="card-text">Salah satu air terjun di Kabupaten Fakfak, Papua Barat Indonesia yang secara administratif terletak di Kampung Ubadari, Distrik Kramomongga Kabupaten Fakfak Papua Barat.</p>
                <a href="https://goo.gl/maps/knkAcMkixvNTV1eD6" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/toran.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Toran Beach</h5>
                <p class="card-text">Sebuah objek wisata yang terletak di Distrik Karas Kabupaten Fakfak, Provinsi Papua barat Indonesia dan secara administratif wilayah masuk ke dalam wilayah Kampung Maas dan Antalisa di Distrik Karas Kabupaten Fakfak.</p>
                <a href="https://goo.gl/maps/fKr3jDEMhCqRvCY16" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg ">
              <img src="./img/kayuni.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Air Terjun Kayuni</h5>
                <p class="card-text">Salah satu air terjun di Kabupaten Fakfak, Papua Barat Indonesia yang secara administratif terletak di Kampung Kayuni, Distrik Kramomongga Kabupaten Fakfak Papua Barat </p>
                <a href="https://goo.gl/maps/pEmRKJd1ZQEbxFpj6" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#27ae60" fill-opacity="1" d="M0,128L40,160C80,192,160,256,240,277.3C320,299,400,277,480,245.3C560,213,640,171,720,181.3C800,192,880,256,960,282.7C1040,309,1120,299,1200,245.3C1280,192,1360,96,1400,48L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


<!-- Wisata Sorong -->
<?php }

elseif($haha=='sorong') {
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Sorong</title>
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
      #wisata {
        background-color: #fff;
        height: 80vh;
        background-position: right;
        background-size: cover;
        padding-top: 3rem;
      }
      .btn {
        margin-top: 30px;
        color: black;
      }
      .btn :hover {
        color: blue;
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
              <a class="nav-link active" href="./wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="wisata">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/tamanmanggruf.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Taman Mangrove</h5>
                <p class="card-text">Kawasan Taman Wisata Mangrove Klawalu yang berada di Kota Sorong, Papua Barat, merupakan taman wisata mangrove pertama di tanah Papua, yang memiliki daya tarik tersendiri untuk dikunjungi.</p>
                <a href="https://goo.gl/maps/AokNc8mnhVqZUYHt6" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/pulauum.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Pulau UM</h5>
                <p class="card-text">Pulau Um adalah salah satu pulau kecil yang berada di Desa Malaumkarta, Distrik Makbon, kabupaten Sorong, Provinsi Papua Barat, Pulau Um dikenal sebagai habitat kelelawar dan burung camar.</p>
                <a href="https://goo.gl/maps/7VsE2N6imgdNfqe49" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg">
              <img src="./img/kasawari.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Kasuari Valley Beach</h5>
                <p class="card-text">Kasuari Valley Beach berada di Kota Sorong, Papua Barat, merupakan tempat wisata pantai yang bagus dan indah di tanah Papua, yang memiliki daya tarik tersendiri untuk dikunjungi.</p>
                <a href="https://goo.gl/maps/bWC4zskyNUpicPd58" class="btn btn-success">Lihat Lokasi</a>
                <a href="./wisata.php?kota=tour" class="btn">Butuh Tour Guide?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#27ae60" fill-opacity="1" d="M0,128L40,160C80,192,160,256,240,277.3C320,299,400,277,480,245.3C560,213,640,171,720,181.3C800,192,880,256,960,282.7C1040,309,1120,299,1200,245.3C1280,192,1360,96,1400,48L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


<!-- Wisata -->
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

    <title>WISATA</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&family=Nunito:wght@600;800&family=Righteous&family=Rubik&display=swap');

       /* Navbar */
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
      /* Akhir Navbar */

      /* Corsel */
        /* corsel  */
        .carousel-item {
        height: 600px;
      }
      .btn {
        border-radius: 20px;
      }
      .carousel-item .display-4 {
        margin-top: -30px;
      }
      .display-4 {
        font-family: 'Lora', serif;
        color: #ff9d1e;
      }
      .lead{
        font-style: italic;
      }
      /* Akhir Corsel */
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
              <a class="nav-link active" href="wisata.php">WISATA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="travel.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- corsel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/Fakfak.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">FakFak</h1>
            <p class="lead">Salah satu kabupaten yang berada di Provinsi Papua Barat, Indonesia. Ibukota kabupaten ini terletak di kecamatan Fakfak. </p>
            <a class="btn btn-success btn-lg font-weight-bold" href="./wisata.php?kota=fakfak" role="button">Kunjungi</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/Sorong.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Sorong</h1>
            <p class="lead">Sebuah kota di Provinsi Papua Barat, Indonesia. Kota ini dikenal dengan sebutan Kota Minyak, dan juga sebagai kota terbesar di Provinsi Papua Barat serta kota terbesar kedua di Papua Indonesia, setelah Kota Jayapura.</p>
            <a class="btn btn-success btn-lg font-weight-bold" href="./wisata.php?kota=sorong" role="button">Kunjungi</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/raja4.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Raja Ampat</h1>
            <p class="lead">Salah satu kabupaten di provinsi Papua Barat, Indonesia. Ibukota kabupaten ini terletak di Waisai. Kabupaten ini memiliki 610 pulau, termasuk kepulauan Raja Ampat.</p>
            <a class="btn btn-success btn-lg font-weight-bold" href="./wisata.php?kota=raja4" role="button">Kunjungi</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- akhir corsel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}}
else {
  header("Location: login.php");
}

?>
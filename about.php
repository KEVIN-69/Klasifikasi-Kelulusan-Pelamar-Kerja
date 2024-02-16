<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="img/Udinus.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- font awsome -->
  <link rel="stylesheet" href="css/fontawesome.css" />
  <link rel="stylesheet" href="css/brands.css" />
  <link rel="stylesheet" href="css/solid.css" />

  <link rel="stylesheet" href="css/gaya.css">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

  <title>Informasi</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
            <img src="img/Udinus.png" alt="" width=50 height=50>
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Prediksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">Informasi<span class="sr-only">(current)</span> </a>
          </li>
        </ul>
      </div>
    </div>
</nav>

    <div class="container" style='margin-top:90px'>
      <div class="row">
        <div class="col-12 mt-5">
          <h2 class="tebal">Anggota Kelompok</h2><br>
          <p class="desc">
              <h4>Disusun oleh:</h4>
              1. DANIEL KEVIN SUHENDRO (A12.2022.06835)<br>
              2. YOHANES ADI PURWAKA (A12.2022.06839)<br>
              3. NAUFAL DZAKI SYAPUTRA (A12.2022.06850)<br>
              4. MUHAMMAD RENDI FADHILAH RAMDANI (A12.2022.06806)<br>

        </div>
        <div class="col-12 mt-5">
          <h2 class="tebal">Informasi Sistem</h2><br>
            <p class="desc">
              <h3>~ METODE & ALGORITMA</h3>
Kelompok kami menggunakan algoritma Naive Bayes untuk melakukan klasifikasi data bertujuan untuk memprediksi kelulusan pelamar kerja. Naive Bayes merupakan sebuah metoda klasifikasi menggunakan metode probabilitas dan statistik yg dikemukakan oleh ilmuwan Inggris Thomas Bayes.<br/><br/>Algoritma Naive Bayes memprediksi peluang di masa depan berdasarkan pengalaman di masa sebelumnya sehingga dikenal sebagai Teorema Bayes. Ciri utama dr Naïve Bayes Classifier ini adalah asumsi yg sangat kuat (naïf) akan independensi dari masing-masing kondisi / kejadian.<br/><br/>

<h3>~ STUDI KASUS</h3>
Dalam rangka menyelesaikan tugas mata kuliah Data Mining ini kami mengangkat sebuah kasus dan studi kasus yang kami gunakan disini adalah untuk memprediksi seberapa besar peluang diterimanya calon pegawai berdasarkan data - data sebelumnya yang mana data tersebut berasal dari pegawai yang sudah diterima dan pegawai yang ditolak, sehingga data tersebut dijadikan acuan untuk menjadi data latih untuk metode naive bayes ini.<br/><br/>

<h3>~ TOOLS</h3>
1. Bootstrap 4.0<br/>
2. Font-awesome<br/>
3. Data latih dalam bentuk json<br/>
4. Jquery<br/><br/>

            </p><br>
        </div><!-- end col -->
      </div><!-- end row -->

    </div><!-- end container -->

<!-- Footer -->
<footer class="page-footer font-small abu1 mt-5">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 abu2">©<?php echo date('Y'); ?> <a href="">Klasifikasi Keluluas Pelamar Kerja</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="js/jquery.js"></script>

<!-- validasi -->
<script>
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('ul').toggleClass('active');
    });
  });
</script>
</body>
</html>

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

  <title>Klasifikasi Kelulusan Pelamar Kerja dengan Naive Bayes</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Prediksi<span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Informasi</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

    <div class="container" style='margin-top:90px'>
      
    <div class="row">
      <div class="col-12 mt-5">
        <h2 class="tebal">Prediksi Kelulusan Pelamar Kerja dengan Metode Naive Bayes</h2>
        <p class="desc mt-4">Masukkan data anda disini, untuk dilakukan perhitungan menggunakan metode Naive Bayes. Lalu anda dapat langsung melihat hasilnya berapa persen diterima dan berapa persen tidak diterima.</p>
      </div>

      <div class="col-6">
          <form method="POST" class="mt-3">

          <div class="form-group">
            <label for="umur">Umur :</label>
            <select name="umur" id="umur" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih umur anda--</option>
                      <?php
                      for($i=20 ; $i <= 25 ; $i++){
                        echo"<option value='$i'>$i</option>";
                      }
                      ?>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Tinggi Badan :</label>
            <select name="tinggi" id="tinggi" class="form-control selBox" required="required">
                <option value="" disabled selected>-- pilih tinggi--</option>
                <option value="kt">Kurang Tinggi ( < 150 cm - 159 cm )</option>
                <option value="ideal">Ideal ( 160 cm - 167 cm )</option>
                <option value="st">Sangat Tinggi ( >167 cm )</option>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Berat Badan :</label>
            <select name="beratB" id="beratB" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih berat badan--</option>
                      <option value="kurus">Kurus ( < 50 kg - 55 kg )</option>
                      <option value="ideal">Ideal ( 56 kg - 60 kg )</option>
                      <option value="tambun">Tambun ( >61 kg )</option>
                  </select>
          </div>

          <div class="form-group">
            <label for="umur">Status Kesehatan :</label>
            <select name="kesehatan" id="kesehatan" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih status kesehatan--</option>
                      <option value="sehat">Sehat</option>
                      <option value="tidak_sehat">Tidak Sehat</option>
                  </select>
          </div>

          <div class="form-group">
            <label for="umur">Pendidikan :</label>
            <select name="pendidikan" id="pendidikan" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih pendidikan--</option>
                      <option value="sma">SMA</option>
                      <option value="smk">SMK</option>
                      <option value="s1">S1</option>
                  </select>
          </div>

          <div class="form-group">
            <input type="submit" value="Hitung" class="btn btn-primary mt-3" id="dor" onclick="return simulasi()"/>
          </div>

          </form>
      </div>
    </div>
        
    <div class="row">
      <div class="col-12 mt-5 mb-5">
          <div id="hasilSIM" style="margin-bottom:30px;">

          </div>
      </div>
    </div>

    </div>

<!-- Footer -->
<footer class="page-footer font-small abu1 mt-5">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 abu2">©<?php echo date('Y'); ?> <a href="">Klasifikasi Keluluas Pelamar Kerja</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="jspopper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- validasi -->
<script>
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('ul').toggleClass('active');
    });
  });
</script>

<script>
  function simulasi()
  {
    var umur = $("#umur").val();
    var tinggi_badan = $("#tinggi").val();
    var berat_badan = $("#beratB").val();
    var status_kesehatan = $("#kesehatan").val();
    var pendidikan = $("#pendidikan").val();

    //validasi
    var um = document.getElementById("umur");
    var tb = document.getElementById("tinggi");
    var bb = document.getElementById("beratB");
    var sk = document.getElementById("kesehatan");
    var pp = document.getElementById("pendidikan");

    if(um.selectedIndex == 0){
      alert("Umur Tidak Boleh Kosong");
      return false;
    }

    if(tb.selectedIndex == 0){
      alert("Tinggi Badan Tidak Boleh Kosong");
      return false;
    }

    if(bb.selectedIndex == 0){
      alert("Berat Badan Tidak Boleh Kosong");
      return false;
    }

    if(sk.selectedIndex == 0){
      alert("Status Kesehatan Tidak Boleh Kosong");
      return false;
    }

    if(pp.selectedIndex == 0){
      alert("Pendidikan Tidak Boleh Kosong");
      return false;
    }

    //batas validasi

      $.ajax({
        url :'simulasi.php',
        type : 'POST',
        dataType : 'html',
        data : {umur : umur , tinggi_badan : tinggi_badan , berat_badan : berat_badan , status_kesehatan : status_kesehatan , pendidikan : pendidikan},
        success : function(data){
          document.getElementById("hasilSIM").innerHTML = data;
        },
      });

      return false;

  }
</script>

<script>
$(document).ready(function(){
  $('#dor').click(function(){
    $('html, body').animate({
        scrollTop: $("#hasilSIM").offset().top
    }, 500);
  });
});
</script>
</body>
</html>

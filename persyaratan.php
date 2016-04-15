<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div id  = "header">
          <?php require_once 'navigation_bar.php' ?>
  </div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br><br><br><br>
      <div class="row center">
        <h2 class="header col s12 light">Informasi & Syarat Pendaftaran Penyiar K-Lite FM</h2>
      </div>
      <div class="container">
        <div class = "row">
          <h5 class="header col s12 light" >Informasi Pendaftaran</h5>
          <div class="container" align = "justify">
            <div>Pendaftaran penyiar baru terbuka untuk umum. Calon penyiar dapat melakukan pendaftaran kapan saja. Tim K-Lite akan menghubungi calon penyiar yang telah mendaftarkan diri dan sesuai dengan kualifikasi dan kebutuhan penyiar. Informasi pendaftar yang diterima dapat dilihat melalui fitur pengumuman pada website ini dan juga akan dikirin ke alamat email penyiar yang bersangkutan. Pengumuman pada website ini akan diperbaharui setiap awal bulan sepanjang tahun. </div>
          </div>
          <br>
          <h5 class="header col s12 light" >Persyaratan</h5>
          <div class="container" align = "justify" style="clear:both">
            <ol>
              <li>Mengisi formulir pendaftaran yang tersedia pada website resmi K-Lite FM</li>
              <li>Usia minimal 15 tahun</li>
              <li>Berjiwa entertainer</li>
              <li>Selalu berupaya menyenangkan pendengar</li>
              <li>Mampu berekspresi secara fleksibel</li>
              <li>Mengikuti segala trend lifestyle dan information</li>
              <li>Memiliki kualitas vokal yang memadai</li>
              <li>Dapat bekerja sama dengan tim</li>
              <li>Mampu melaksanakan "adlibbing" dan "script reading" dengan baik</li>
              <li>Mampu menghasilkan gagasan-gagasan segar dan kreatif dalam siarannya</li>
            </ol>
          </div>
      </div>

      <br><br>

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h3 class="white-text">K-Lite FM</h3>
          <h4 class="grey-text text-lighten-4">Bandung's Inspiring Sound</h3>

        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/datepicker.js"></script>
  <script src="js/script.js"></script>
  <script>
    $(document).ready(function() {
        $('select').material_select();
    });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
  </script>
  </body>
</html>

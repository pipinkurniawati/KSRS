<!DOCTYPE html>
<?php
require("mysql.php");
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>K-Lite Star Recruitment System</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">KSRS</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <h5 class="header col s12 light">Form Pendaftaran Calon Penyiar K-Lite</h5>
      </div>
      <div class="container">
          <form method="post" action="">
              <div class="input-field col s12">
                  <input type="text" name="nama" class="validate">
                  <label for="nama">Nama</label>
              </div>
              <div class="input-field col s12">
                  <input type="date" name="tgl_lahir" class="datepicker">
                  <label for="tgl_lahir">Tanggal Lahir</label>
              </div>
              <div class="input-field col s12">
                   <select name="jenis_kelamin">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                  </select>
                  <label>Jenis Kelamin</label>
              </div>
              <div class="input-field col s12">
                   <select name="agama">
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                  </select>
                  <label>Agama</label>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="alamat" class="validate">
                  <label for="alamat">Alamat</label>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="pendidikan" class="validate">
                  <label for="pendidikan">Pendidikan</label>
              </div>
              <div class="input-field col s12">
                  <select name="status">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Pernah Menikah">Pernah Menikah</option>
                  </select>
                  <label>Status</label>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="no_hp" class="validate">
                  <label for="no_hp">Nomor HP</label>
              </div>
              <div class="input-field col s12">
                  <input type="email" name="email" class="validate">
                  <label for="email">Email</label>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="akun_fb" class="validate">
                  <label for="akun_fb">Akun Facebook</label>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="shift_mulai" class="validate">
                  <label for="shift_mulai">Shift Mulai</label>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="shift_selesai" class="validate">
                  <label for="shift_selesai">Shift Selesai</label>
              </div>
              <div class="input-field col s12">
                  <textarea name="alasan" class="materialize-textarea"></textarea>
                  <label for="alasan">Alasan</label>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
              </button>
          </form>
          
      </div>

      <br><br>

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <script type="text/javascript" src="js/datepicker.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
    
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
  </script>
  </body>
</html>


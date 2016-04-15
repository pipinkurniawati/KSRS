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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
  <link rel="stylesheet" type="text/css" href="css/github.min.css">
  
</head>
<body>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div id  = "header">
            <?php require_once 'navigation_bar.php' ?>
      </div>
      <br><br><br><br><br>
      <div class="row center">
        <h1 class="header col s12 light">Form Pendaftaran Calon Penyiar K-Lite</h1>
      </div>
      <div class="container">
          <form method="post" action="">
              <div class="input-field col s12">
                  <input type="text" name="nama" class="validate">
                  <label for="nama">Nama</label>
                  <span class="error"><?php echo $nameErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <input type="date" name="tgl_lahir" class="datepicker">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <span class="error"><?php echo $dateErr; ?></span>
              </div>
              <div class="input-field col s12">
                   <select name="jenis_kelamin">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                  </select>
                  <label>Jenis Kelamin</label>
                  <span class="error"><?php echo $genderErr; ?></span>
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
                  <span class="error"><?php echo $religionErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="alamat" class="validate">
                  <label for="alamat">Alamat</label>
                  <span class="error"><?php echo $addressErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="pendidikan" class="validate">
                  <label for="pendidikan">Pendidikan</label>
                  <span class="error"><?php echo $educationErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <select name="status">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Pernah Menikah">Pernah Menikah</option>
                  </select>
                  <label>Status</label>
                  <span class="error"><?php echo $statusErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="no_hp" class="validate">
                  <label for="no_hp">Nomor HP</label>
                  <span class="error"><?php echo $contactErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <input type="email" name="email" class="validate">
                  <label for="email">Email</label>
                  <span class="error"><?php echo $emailErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <input type="text" name="akun_fb" class="validate">
                  <label for="akun_fb">Akun Facebook</label>
                  <span class="error"><?php echo $facebookErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <select name="hari">
                        <option value="" disabled selected>Pilih Hari Shift</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                  </select>
                  <label>Hari Shift</label>
                  <span class="error"><?php echo $dayErr; ?></span>
              </div>
              <div class="input-field clockpicker">
                    <input type="text" class="validate" name="shift_mulai" value="00:00">
                    <label for="shift_mulai">Shift Mulai</label>
                    <span class="error"><?php echo $startErr; ?></span>
              </div>
              <div class="input-field clockpicker">
                  <input type="text" class="validate" name="shift_selesai" value="00:00">
                  <label for="shift_selesai">Shift Selesai</label>
                  <span class="error"><?php echo $finishErr; ?></span>
              </div>
              <div class="input-field col s12">
                  <textarea name="alasan" class="materialize-textarea"></textarea>
                  <label for="alasan">Alasan</label>
                  <span class="error"><?php echo $reasonErr; ?></span>
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <script type="text/javascript" src="js/datepicker.js"></script>
  <script type="text/javascript" src="js/clockpicker.js"></script>
  <script type="text/javascript" src="js/highlight.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
    
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
  </script>
  <script type="text/javascript">
    $('.clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done'
    });
  </script>
  </body>
</html>



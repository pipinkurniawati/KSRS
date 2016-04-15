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
        <?php
          if (isset($_GET["hari"])){
            echo'
              <h5 class="header col s12 light">Daftar Penyiar Baru K-Lite FM Hari '.$_GET["hari"].'</h5>
            ';
          }else{
            echo'
              <h5 class="header col s12 light">Jadwal Siaran K-Lite FM</h5>
            ';
          }
        ?>
      </div>
      <div class="wrapper-lg">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="table-responsive">
                  <?php
                    if (isset($_GET["token"])){
                      $token = $_GET["token"];
                    }
                  ?>
                  <form>
                    Hari: 
                    <input type="text" name="hari" placeholder="Masukkan Hari">
                    <input type="hidden" name="token" value = "<?php echo $token ?>">
                    <button>Go</button>
                  </form>
                <?php
                  $hari_masukan = "";
                  if (isset($_GET["hari"])){
                    if ($_GET["hari"] != ""){
                      $hari_masukan = $_GET["hari"];
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "k-lite";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 

                      $sql = "SELECT penyiar.nama as Nama_Penyiar, jadwal_siar.nama as Acara, jadwal_siar.hari as Hari, jadwal_siar.waktu_mulai_tayang as Waktu_Mulai, jadwal_siar.waktu_selesai_tayang as Waktu_Selesai, penyiar.id_penyiar as ID_Penyiar,jadwal_siar.id_acara as ID_Acara from penyiar inner join acara_penyiar on penyiar.id_penyiar = acara_penyiar.id_penyiar inner join jadwal_siar on acara_penyiar.id_acara = jadwal_siar.id_acara WHERE Hari = '$hari_masukan' order by Waktu_Mulai";
                      $result = $conn->query($sql);                      
                      echo'
                        <table ui-jq="dataTable" class="table table-striped b-t b-b">
                          <thead>
                            <tr>
                              <th  style="width:18%">Nama Penyiar</th>
                              <th  style="width:18%">Acara</th>
                              <th  style="width:18%">Hari</th>
                              <th  style="width:18%">Waktu Mulai</th>
                              <th  style="width:18%">Waktu Selesai</th>
                            </tr>
                          </thead>
                      ';
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          if ($row["Nama_Penyiar"] == "kosong"){
                            echo'
                              <tbody>
                                <tr>
                                  <th>'.$row["Nama_Penyiar"].'</th>
                                  <th>'.$row["Acara"].'</th>
                                  <th>'.$row["Hari"].'</th>
                                  <th>'.$row["Waktu_Mulai"].'</th>
                                  <th>'.$row["Waktu_Selesai"].'</th>
                                  <th><a href="http://localhost/KSRS/Penyiar.php?id_acara='.$row["ID_Acara"].'">Alokasi</a></th>
                                </tr>
                              </tbody>
                            ';
                          }else{
                            echo'
                              <tbody>
                                <tr>
                                  <th>'.$row["Nama_Penyiar"].'</th>
                                  <th>'.$row["Acara"].'</th>
                                  <th>'.$row["Hari"].'</th>
                                  <th>'.$row["Waktu_Mulai"].'</th>
                                  <th>'.$row["Waktu_Selesai"].'</th>
                                </tr>
                              </tbody>
                            ';
                          }
                          
                        }
                        echo'
                          </table>
                        ';
                      } 
                      $conn->close();
                    }
                  }
              ?>
              </div>
              </div>
            </div>
          </div>
        </div>
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

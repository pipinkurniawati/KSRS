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

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div id  = "header">
            <?php require_once 'navigation_bar.php' ?>
      </div>
      <br><br><br><br><br>
      <div class="row center">
        <h2 class="header col s12 light">Daftar Penyiar Baru K-Lite FM</h2>
      </div>
      <div class="wrapper-lg">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="table-responsive">
                <?php
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
                  $sql = "SELECT * FROM calon_penyiar";
                  $result = $conn->query($sql);                      
                  echo'
                    <table ui-jq="dataTable" class="table table-striped b-t b-b">
                      <thead>
                        <tr>
                          <th  style="width:18%">Nama Lengkap</th>
                          <th  style="width:18%">Tempat/Tanggal Lahir</th>
                          <th  style="width:25%">Alamat</th>
                          <th  style="width:18%">Agama</th>
                          <th  style="width:18%">Status</th>
                        </tr>
                      </thead>
                  ';
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo'
                        <tbody>
                          <tr>
                            <th>'.$row["nama"].'</th>
                            <th>'.$row["tempat_tanggal_lahir"].'</th>
                            <th>'.$row["alamat"].'</th>
                            <th>'.$row["agama"].'</th>
                            <th>'.$row["status_aplikasi"].'</th>
                          </tr>
                        </tbody>
                      ';
                    }
                    echo'
                      </table>
                    ';
                  } 
                  $conn->close();
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

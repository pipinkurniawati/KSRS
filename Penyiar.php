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
        <?php
          if (isset($_GET["hari"])){
            echo'
              <h5 class="header col s12 light">Daftar Penyiar Baru K-Lite FM Hari '.$_GET["hari"].'</h5>
            ';
          }else{
            echo'
              <h5 class="header col s12 light">Daftar Penyiar Baru K-Lite FM</h5>
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
                  $hari_masukan = "";       
                  $id_acara = $_GET["id_acara"];
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

                  $sql = "Select * From penyiar";
                  $result = $conn->query($sql);                      
                  echo'
                    <table ui-jq="dataTable" class="table table-striped b-t b-b">
                      <thead>
                        <tr>
                          <th  style="width:18%">Nama Penyiar</th>
                          <th  style="width:18%">Nomor HP</th>
                          <th  style="width:18%">Email</th>
                        </tr>
                      </thead>
                  ';

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $id_penyiar = $row["id_penyiar"];
                      echo'
                        <tbody>
                          <tr>
                            <th>'.$row["nama"].'</th>
                            <th>'.$row["no_hp"].'</th>
                            <th>'.$row["email"].'</th>
                            <th><a href="http://localhost/KSRS/Alokasi.php?id_penyiar='.$id_penyiar.'&id_acara='.$id_acara.'">Pilih</a></th>
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

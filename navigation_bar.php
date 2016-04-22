<!DOCTYPE html>
<html>
    <nav class="navbar navbar-default navbar-fixed-top light-blue lighten-1">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
        <div class="container-fluid">
            <div class="navbar-header">
              <?php
              if (isset($_GET["token"])){
                $token = $_GET["token"];
                echo'
                  <a style="color:white;" class="navbar-brand" href="../KSRS/homepage.php?token='.$token.'"><h4><strong>KSRS</strong></h4></a>
                ';
              }
              else{
               echo'
                  <a style="color:white;" class="navbar-brand" href="../KSRS/homepage.php"><h4><strong>KSRS</strong></h4></a>
                '; 
              }
              ?>

            </div>
            <?php
              if (isset($_GET["token"])){
                
                echo'
                  <ul class="light-blue lighten-1 nav navbar-nav">
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'daftar_calon.php'); echo'"><a style="color:white;" href="daftar_calon.php?token='.$token.'"><h6><strong>Calon Penyiar</strong></h6></a></li>
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'persyaratan.php'); echo'"><a style="color:white;" href="persyaratan.php?token='.$token.'"><h6><strong>Persyaratan</strong></h6></a></li>
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'jadwal_siar_admin.php'); echo'"><a style="color:white;" href="jadwal_siar_admin.php?token='.$token.'"><h6><strong>Jadwal Siar</strong></h6></a></li>            
                  </ul>';
                }else{
                  echo'
                  <ul class="light-blue lighten-1 nav navbar-nav">
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'form_daftar.php'); echo'"><a style="color:white;" href="form_daftar.php"><h6><strong>Pendaftaran</strong></h6></a></li>
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'pengumuman.php'); echo'"><a style="color:white;" href="pengumuman.php"><h6><strong>Pengumuman</strong></h6></a></li>
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'persyaratan.php'); echo'"><a style="color:white;" href="persyaratan.php"><h6><strong>Persyaratan</strong></h6></a></li>
                    <li class="'; if(basename($_SERVER['SCRIPT_NAME']) == 'jadwal_siar.php'); echo'"><a style="color:white;" href="jadwal_siar.php"><h6><strong>Jadwal Siar</strong></h6></a></li>            
                  </ul>';
                
                  echo'
                    <ul class="light-blue lighten-1 nav navbar-nav" style="float:right;">
                        <li class="';if(basename($_SERVER['SCRIPT_NAME']) == 'login.php'); echo'"><a style="color:white;" href="login.php"><h6><strong>Login</strong></h6></a></li>
                    </ul>';
                }
            ?>
          
        </div>
      </div>
    </nav>
</html>

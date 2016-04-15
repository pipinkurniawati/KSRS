<!DOCTYPE html>
<html>
    <nav class="navbar navbar-default navbar-fixed-top light-blue lighten-1">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
        <div class="container-fluid">
            <div class="navbar-header">
                <a style="color:white;" class="navbar-brand" href="../KSRS"><h4><strong>KSRS</strong></h4></a>
            </div>
            <ul class="light-blue lighten-1 nav navbar-nav">
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'form_daftar.php')?>"><a style="color:white;" href="form_daftar.php"><h6><strong>Pendaftaran</strong></h6></a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'pengumuman.php')?>"><a style="color:white;" href="pengumuman.php"><h6><strong>Pengumuman</strong></h6></a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'persyaratan.php')?>"><a style="color:white;" href="persyaratan.php"><h6><strong>Persyaratan</strong></h6></a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'jadwal_siar.php')?>"><a style="color:white;" href="jadwal_siar.php"><h6><strong>Jadwal Siar</strong></h6></a></li>            
          </ul>
          
          <ul class="light-blue lighten-1 nav navbar-nav" style="float:right;">
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'login.php')?>"><a style="color:white;" href="login.php"><h6><strong>Login</strong></h6></a></li>
          </ul>
          
        </div>
      </div>
    </nav>
</html>

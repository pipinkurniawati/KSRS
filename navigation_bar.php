<!DOCTYPE html>
<html>
    <nav class="navbar navbar-default navbar-fixed-top light-blue lighten-1">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">KSRS</a>
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../KSRS"><strong>KSRS</strong></a>
            </div>
            <ul class="light-blue lighten-1 nav navbar-nav">
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.html'){echo 'active'; }else { echo ''; } ?>"><a href="index.html">Pendaftaran</a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'pengumuman.php'){echo 'active'; }else { echo ''; } ?>"><a href="pengumuman.php">Pengumuman</a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'persyaratan.php'){echo 'active'; }else { echo ''; } ?>"><a href="peryaratan.php">Persyaratan</a></li>
            </ul>
        </div>
      </div>
    </nav>
</html>

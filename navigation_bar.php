<!DOCTYPE html>
<html>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../KSRS">KSRS</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.html'){echo 'active'; }else { echo ''; } ?>"><a href="index.html">Transaksi</a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'pengumuman.php'){echo 'active'; }else { echo ''; } ?>"><a href="pengumuman.php">Pengembalian</a></li>
              <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'persyaratan.php'){echo 'active'; }else { echo ''; } ?>"><a href="peryaratan.php">Perbaikan</a></li>
            </ul>
        </div>
    </nav>
</html>

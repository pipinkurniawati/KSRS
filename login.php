  <!DOCTYPE html>
<?php
require_once("mysql.php");
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
        <h1 class="header col s12 light">Login</h1>
      </div>
      <div class="container">
          <form method="post" action="homepage.php?token='aaaaaaa'">
              <div class="input-field col s12">
                  <input type="text" name="user_id" class="validate">
                  <label for="user_id">User ID</label>
              </div>
              <div class="input-field col s12">
                  <input type="password" name="password" class="validate">
                  <label for="password">Password</label>
              </div>
              <div class="button-center">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
              </button>
              </div>
          </form>
      </div>
      </div>

      <br><br>

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
  </body>
</html>


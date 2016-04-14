  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

<?php
$db = mysqli_connect('localhost', 'root', '', 'k-lite');
if(!$db){
    die("Connection unsuccessful".mysqli_connect_error());
}
$sql = NULL;
// define variables and set to empty values
$nameErr = $emailErr = $statusErr = $genderErr = $addressErr = $reasonErr = $dateErr = $religionErr = $educationErr = $facebookErr = $contactErr = $dayErr = $startErr = $finishErr = "";
$accept = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $nameErr = "* Name is required";
    $accept = "0";
  }
  
  if (empty($_POST["tgl_lahir"])) {
    $dateErr = "* Birthdate is required";
    $accept = "0";
  }

  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
    $accept = "0";
  }

  if (empty($_POST["jenis_kelamin"])) {
    $genderErr = "* Gender is required";
    $accept = "0";
  }

  if (empty($_POST["alasan"])) {
    $reasonErr = "* Reason is required";
    $accept = "0";
  }

  if (empty($_POST["agama"])) {
    $religionErr = "* Religion is required";
    $accept = "0";
  }
  
  if (empty($_POST["alamat"])) {
    $addressErr = "* Address is required";
    $accept = "0";
  }
  
  if (empty($_POST["pendidikan"])) {
    $educationErr = "* Education is required";
    $accept = "0";
  }
  
  if (empty($_POST["status"])) {
    $statusErr = "* Marriage status is required";
    $accept = "0";
  }
  
  if (empty($_POST["no_hp"])) {
    $contactErr = "* Contact is required";
    $accept = "0";
  }
  
  if (empty($_POST["akun_fb"])) {
    $facebookErr = "* Facebook account is required";
    $accept = "0";
  }
  
  if (empty($_POST["shift_mulai"])) {
    $startErr = "* Start shift is required";
    $accept = "0";
  }
  
  if (empty($_POST["shift_selesai"])) {
    $finishErr = "* End shift is required";
    $accept = "0";
  }
  
  if (empty($_POST["hari"])) {
    $hariErr = "* Shift day is required";
    $accept = "0";
  }
  
  if($accept == "1"){
      $time = strtotime($_POST["tgl_lahir"]);
      $tgl = date('Y-m-d',$time);
      $sql = "INSERT INTO calon_penyiar (nama, tempat_tanggal_lahir, jenis_kelamin, agama, alamat, pendidikan, status, no_hp, email, akun_fb, hari, shift_mulai, shift_selesai, alasan)
        VALUES ('$_POST[nama]','$tgl','$_POST[jenis_kelamin]','$_POST[agama]', '$_POST[alamat]','$_POST[pendidikan]','$_POST[status]','$_POST[no_hp]','$_POST[email]','$_POST[akun_fb]','$_POST[hari]','$_POST[shift_mulai]','$_POST[shift_selesai]','$_POST[alasan]')";

      $rq = mysqli_query($db,$sql);
  }
  $db->close();
  }
?>

</html>
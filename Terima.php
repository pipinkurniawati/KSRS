<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "k-lite";
	$id_calon = $_GET["id_calon"];
	$status = $_GET["status"];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE calon_penyiar SET status_aplikasi='".$status."' WHERE (id_calon = $id_calon)";

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	header('Location: http://localhost/KSRS/daftar_calon.php');

	$conn->close();
?>
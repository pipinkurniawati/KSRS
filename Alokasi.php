<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "k-lite";
	$id_penyiar = $_GET["id_penyiar"];
	$id_acara = $_GET["id_acara"];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE acara_penyiar SET id_penyiar=$id_penyiar WHERE (id_penyiar = 53) AND (id_acara = $id_acara)";

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	header('Location: http://localhost/KSRS/jadwal_siar_admin.php');

	$conn->close();
?>
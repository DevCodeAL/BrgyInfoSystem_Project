<?php
function connection(){

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dataBase = "brgyinfosystem_db";


	// Create a connection to the database
	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dataBase);

		// Check if the connection was successful
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);

		} else {
			//	echo "Connection succesfully:";

		return $conn;
		}
	}
?>

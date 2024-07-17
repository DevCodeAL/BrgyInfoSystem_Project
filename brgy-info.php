<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

$sql = "SELECT `email`, `barangay`, `municipality`, `province`, `phone_number` FROM `admin`";
// Execute the query
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    while ($row = $result->fetch_assoc()) {
        // Access individual columns
        $barangay = $row['barangay'];
        $municipality = $row['municipality'];
        $province = $row['province'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
    }

    // Free the result set
    $result->free();
} else {
    // If the query was not successful, handle the error
    echo "Error: " . $conn->error;
}

?>
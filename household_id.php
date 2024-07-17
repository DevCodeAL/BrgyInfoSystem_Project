<?php
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

// Perform a database query to retrieve all data
$sql = "SELECT * FROM `household-db` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if ($result) {
    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Handle query failure
    echo json_encode(['error' => 'Failed to fetch data']);
}
?>


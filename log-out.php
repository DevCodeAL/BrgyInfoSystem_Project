<?php 

include_once('connection.php');
$conn = connection();

session_start();

// Destroy all session data
session_destroy();

// Redirect to the login page or any other page
header("Location: index.php");
exit();

?>
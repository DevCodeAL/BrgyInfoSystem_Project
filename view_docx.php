<?php
session_start();
require_once('connection.php');
$conn = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Document</title>
</head>
<body>
    <?php
    // Check if the 'doc' parameter is set in the URL
    if(isset($_GET['docx'])) {
        // Get the path to the document file from the URL parameter
        $docPath = $_GET['docx'];
        
        // Output an iframe to display the document file
        if (pathinfo($docPath, PATHINFO_EXTENSION) === 'pdf') {
            // If it's a PDF file, use Google Docs Viewer to display it
            echo "<iframe src='$docPath' style='width:100%; height:100vh;'></iframe>";
        } elseif (pathinfo($docPath, PATHINFO_EXTENSION) === 'docx') {
            // If it's a DOCX file, use a direct iframe to display it
            echo "<iframe src='$docPath' style='width:100%; height:100vh;'></iframe>";

        } else {
            // If the file type is not supported, display an error message
            echo "Unsupported file format.";
        }
    } else {
        // If the 'doc' parameter is not set, display an error message
        echo "Document file not specified.";
    }
    ?>
</body>
</html>

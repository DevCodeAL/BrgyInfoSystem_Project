<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

function uploadFileAndInsertIntoDB($conn) {
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if file was uploaded without errors
        if (isset($_FILES["fileUpload"]) && $_FILES["fileUpload"]["error"] == 0) {
            $filename = $_FILES["fileUpload"]["name"];
            $filetype = $_FILES["fileUpload"]["type"];
            $filesize = $_FILES["fileUpload"]["size"];

            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $allowed = array("pdf", "docx");
            if (!in_array($ext, $allowed)) {
                die("Error: Please upload a valid file format.");
            }

            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) {
                die("Error: File size is larger than the allowed limit.");
            }

            // Define a destination
            $destination = "upload/" . $filename;

            // Check if file already exists
            if (!file_exists($destination)) {
                // Attempt to move the uploaded file to it's new destination
                if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $destination)) {
                    $sql = $conn->prepare("INSERT INTO files (filename, file_path) VALUES (?, ?)");
                    $sql->bind_param("ss", $filename, $destination);
                    $sql->execute();
                    if ($sql->affected_rows > 0) {
                        header('Location: brgyclearance.php');
                        echo "File uploaded and saved to the database successfully.";
                    } else {
                        echo "File upload failed, please try again.";
                    }
                    $sql->close();
                } else {
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
            } else {
                echo "Error: File already exists.";
            }
        } else {
            echo "Error: " . $_FILES["fileUpload"]["error"];
        }
    }
}

uploadFileAndInsertIntoDB($conn);

$conn->close();
?>
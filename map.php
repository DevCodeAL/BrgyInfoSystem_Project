<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php include('header.php'); ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61444.82264141607!2d120.66179036757588!3d15.735186209344032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33912dd7c68a74a7%3A0x61f732140cef2556!2sCacapasan%20Barangay%20Hall%20(Old)!5e0!3m2!1sen!2sph!4v1702017294832!5m2!1sen!2sph"width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>
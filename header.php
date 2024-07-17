<?php
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
<style>
    #header{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: #ad0718;
    color: white;
    width: 100%;
    height: 40px;
    padding: 0px;
    margin: 0px;
}
</style>
<body>
        <div id="header">
            <h3>Barangay Information System</h3>
    </div>
</body>
</html>
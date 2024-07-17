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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include('header.php'); ?>

    <h4 style="text-align: center; padding: 10px;">Bararangay Clearance</h4>

    <div class="container mt-5">
    <h2>Upload File</h2>
    <form action="brgy-procees.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fileUpload" class="form-label">Choose file</label>
            <input type="file" class="form-control" id="fileUpload" name="fileUpload" accept=".docx,.pdf">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Filename</th>
      <th scope="col">Document</th>
      <th scope="col">Date in Time</th>
      <th style="text-align: center;" colspan="3" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
   
   // SQL to fetch data
$sql = "SELECT * FROM files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["filename"] . '</td>';
        echo '<td>' . $row["file_path"] . '</td>';
        echo '<td>' . $row["uploaded_at"] . '</td>';
        echo '<td>' . '<a href="view_docx.php?docx=' . urlencode($row["file_path"]) . '" class="btn btn-secondary">View</a></td>';
        echo '<td>' . '<a href="delete_doc.php?delete_docx=' . $row["id"] . '" class="btn btn-danger">Delete</a>' . '</td>';
        echo '</tr>';
    }
} else {
    echo "<tr><td colspan='7'>0 results</td></tr>";
}

$conn->close();
  ?>

  </iframe>
  </tbody>
</table>
</body>
</html>

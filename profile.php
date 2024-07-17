<?php
session_start();
include_once('connection.php');
$conn = connection();

// Set a default image path
$defaultImagePath = 'default_image.jpg';

if (isset($_SESSION['id'])) {
  $username = $_SESSION['username'];
  $user_type = $_SESSION['user_type'];
  $email = $_SESSION['email'];

  // SQL query to fetch image path
  $sql = "SELECT image_path FROM admin WHERE email = '$email'";

  // Execute the query
  $result = $conn->query($sql);

  if ($result) {
    if ($result->num_rows > 0) {
      // Retrieve the image path
      $row = $result->fetch_assoc();
      $imagePath = $row['image_path'];
    } else {
      // User not found or no image path available
      $imagePath = $defaultImagePath; // Use the default image path
    }
  } else {
    // Handle SQL query error
    echo "Error executing the query: " . $conn->error;
  }
} else {
  // Redirect to the login page if the user is not logged in
  header('Location: log-in.php');
  exit();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile CSS/Bootstrap Viewer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css-style/profile.css">
</head>
<body>
<?php include('header.php'); ?>
    <h4>Profile Account</h4>
  <div class="container">
    <div class="profile">
      <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Display the uploaded image -->
        <?php if (!empty($imagePath)) : ?>
            <img class="profile_" src="<?php echo $imagePath; ?>" alt="User Image">
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image">
          <?php endif; ?><br>
        <!-- Add the file input for image upload -->
        <label for="fileInput">Choose a profile picture:</label><br>
        <input type="file" id="fileInput" name="file">
        <button type="submit" id="submitBtn" class="btn btn-primary btn" name="submit">Upload</button>

        <!-- Your form fields go here -->
        <h6>Profile</h6>
        <h6>Account Type</h6>
        <p><?php echo $user_type; ?></p>
        <h6>Username:</h6>
        <p><?php echo $username; ?></p>
        <h6>Email:</h6>
        <p><?php echo $email; ?></p>
      </form>
    </div>
  </div>
</body>
</html>

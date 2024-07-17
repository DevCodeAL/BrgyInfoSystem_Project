<?php 
session_start();
include_once('connection.php');
$conn = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $barangay = $_POST['brgy_name'];
    $municipal = $_POST['municipal'];
    $province = $_POST['province'];
    $phone = $_POST['phone_number'];
    $user_type = $_POST["account_type"];
  
    // Switch Case for Sign up
  switch ($user_type) {
        // Case for Admin
    case 'admin':
        // prepare SQL statement to check if username exists
        $stmt = mysqli_prepare($conn, "SELECT * FROM admin WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
  
        // execute the query
        mysqli_stmt_execute($stmt);
  
        // get the result
        $result = mysqli_stmt_get_result($stmt);
  
        // check if username already exists
        if (mysqli_num_rows($result) > 0) {
            echo "Username already exists";
        
        } else {
            // prepare SQL statement to check if email exists
            $stmt = mysqli_prepare($conn, "SELECT * FROM admin WHERE email = ?");
            mysqli_stmt_bind_param($stmt, "s", $email);
  
            // execute the query
            mysqli_stmt_execute($stmt);
  
            // get the result
            $result = mysqli_stmt_get_result($stmt);
  
            // check if username already exists
            if (mysqli_num_rows($result) > 0) {
                echo "Email already exists";
    } else {
  
        
       // Generate password hash
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
  
  
        // Prepare insert statement
        $stmt = mysqli_prepare($conn, "INSERT INTO admin (username, password, email, barangay, municipality, province, phone_number, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, 'admin')");
        mysqli_stmt_bind_param($stmt, "sssssss", $username, $password_hash, $email, $barangay, $municipal, $province, $phone);
  
        // Execute the insert statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Admin record created successfully";
            header('Location: log-in.php');
            exit;
        } else {
          echo '<div class="alert alert-danger errorAlert">';
          echo '<a class="close-X" href="sign-up.php">X</a>';
          echo '<strong>This system is set for 1 Admin only: </strong> ' .mysqli_error($conn);
          echo '</div>';

          
        }
  
        // Close the statement
        mysqli_stmt_close($stmt);
  
    }
  
  }

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-style/sign-up.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign-up Form</title>
</head>
<body>

<style>
        body{
            background-image: url("image/brgyhall.jpg");
            background-repeat: no-repeat;
            background-size: 100% 120vh;   
            background-position: center;
        }

        .body-con{
            background-color: rgba(0,0,0,0.3);
            width: 100%;
            height: 100vh;
        }

  .errorAlert{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    z-index: 1;
    top: 200px;
    left: 260px;
    width: 60%;
    height: 100px;
 }

 .close-X{
    position: relative;
    top: -38px;
    left: 630px;
    font-weight: bolder;
 }
    </style>

<div class="body-con">
<div class="form-container">
        <form id="landingForm" action="" method="post">
          <div class="form-group">
            <label for="account_type">Account Type:</label>
            <select class="form-control" id="account_type" name="account_type">
              <option value="admin">Admin</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
                    <div class="form-group">
                    <label for="brgy_name">Barangay:</label>
                    <input type="text" class="form-control" id="brgy_name" name="brgy_name" required>
                    </div>

                    <div class="form-group">
                    <label for="municipal">Municipality:</label>
                    <input type="text" class="form-control" id="municipal" name="municipal" required>
                    </div>

                    <div class="form-group">
                    <label for="province">Province:</label>
                    <input type="text" class="form-control" id="province" name="province" required>
                    </div>

                    <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>

        <div class="form-group-btn">
          <a href="log-in.php" class="btn-text">Do you have any other account?</a>
      </div>

      <div class="form-group-btn">
          <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
        </div>
        </form>
    </div>
    </div>

    <script src="js\disabled.js"></script>
</body>
</html>
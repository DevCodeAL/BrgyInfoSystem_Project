<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

$error_message = ""; // Variable to hold error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["name"];
    $password = $_POST["password"];

    // Check username and password for admin
    // Execute the query using mysqli or PDO and fetch the result
    $query = "SELECT password, email FROM admin WHERE username = '".$username."'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $password_hash = $row['password'];

        if (password_verify($password, $password_hash)) {
            // Password is correct, log the user in
            $_SESSION['id'] = 1;
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $user_type;
            $_SESSION['email'] = $row['email']; // Store the email in the session
            header('Location: admin_sidebar.php');
            exit;
        } else {
            // Password is incorrect, set error message
            $error_message = "Password is incorrect, display an error message";
        }
    } else {
        // User not found, set error message
        $error_message = "User not found, display an error message";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css-style/log-in.css">
    <title>Log-in Form</title>
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

        /* Modal styles */
.modal {
  display: none; 
  position: fixed; 
  z-index: 2; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 500px;
  z-index: 2;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

    </style>

<div id="errorModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="background-color: #bd2d17; color: white; text-align: center; padding: 10px;" id="errorMessage"></p>
  </div>
</div>


<div class="body-con">
 <div class="form-container">
    <div class="tittle_container">
        <h1>Barangay Cacapasan Management <br><span>Information System</span></h1>
    </div>       
        <form action="" method="post">
            <div class="user-login"><h4>User Login</h4></div>
            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Type your username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Type your password" required>
            </div>

            <div class="form-group-btn">
                <a href="forgot-password.php">Forgot Password</a>
            </div>

            <div class="form-group-btn">
                <a href="sign-up.php">Sign-Up</a>
            </div>

            <div class="form-group-btn">
                <button type="submit" name="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>
 </div>
 </div>

 <script>
    // PHP error message variable
    var errorMessage = "<?php echo $error_message; ?>";

    // Function to display error modal with custom message
    function displayErrorModal(message) {
        var modal = document.getElementById("errorModal");
        var errorMessageElement = document.getElementById("errorMessage");

        errorMessageElement.innerText = message;
        modal.style.display = "block";

        // Close the modal when clicking on the close button or outside the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }
    }

    // Display error modal if error message exists
    if (errorMessage !== "") {
        displayErrorModal(errorMessage);
    }
 </script>
</body>
</html>

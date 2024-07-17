<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

$sql = "SELECT `email`, `barangay`, `municipality`, `province`, `phone_number` FROM `admin`";
// Execute the query
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    while ($row = $result->fetch_assoc()) {
        // Access individual columns
        $barangay = $row['barangay'];
        $municipality = $row['municipality'];
        $province = $row['province'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
    }

    // Free the result set
    $result->free();
} else {
    // If the query was not successful, handle the error
    echo "Error: " . $conn->error;
}

//Update

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get data from the form
  $barangay = $_POST['brgy_name'];
  $municipality = $_POST['municipal'];
  $province = $_POST['province'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];

  // Update the data in the database
  $sql = "UPDATE `admin` SET `barangay`='$barangay', `municipality`='$municipality', `province`='$province', `phone_number`='$phone_number', `email`='$email' WHERE `id`= 0";

  if ($conn->query($sql) === TRUE) {
      echo "<div id='Confirmation'><button class='btn btn-primary ok-btn' onclick='myFunction()'>Ok</button>Record updated successfully</div>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
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
    <link rel="stylesheet" href="css-style/brgy-information.css">
    <title>Barangay Information</title>
</head>

<body>
    <?php include('header.php'); ?>
    <h4>Barangay Information</h4>
    <div class="form-container">
        <div class="data-container">
            <table>
                <tr>
                    <td>Barangay:</td>
                    <td><?php echo $barangay; ?></td>
                </tr>
                <tr>
                    <td>Municipality:</td>
                    <td><?php echo $municipality; ?></td>
                </tr>
                <tr>
                    <td>Province:</td>
                    <td><?php echo $province; ?></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><?php echo $phone_number; ?></td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><?php echo $email; ?></td>
                </tr>

            </table>
        </div>
        <div class="form-controls">
            <form action="" method="post">
                <!-- Use a hidden input to store the ID for updating -->
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label id="label-styl" for="brgy_name">Barangay</label>
                <input type="text" id="brgy_name" class="form-control" name="brgy_name" value="<?php echo $barangay; ?>" required>
                <label  id="label-styl" for="municipal">Municipality</label>
                <input  type="text" id="municipal" class="form-control" name="municipal" value="<?php echo $municipality; ?>" required>
                <label  id="label-styl" for="province">Province</label>
                <input type="text" id="province" class="form-control" name="province" value="<?php echo $province; ?>" required>
                <label  id="label-styl" for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>" required>
                <label  id="label-styl" for="email">Email Address</label>
                <input type="text" id="email" class="form-control" name="email" value="<?php echo $email; ?>" required><br>
                <button type="submit" class="btn btn-primary btn"><i class="fas fa-file-pen"></i> Update</button>
            </form>
        </div>
    </div>

    <script>
      function myFunction() {
        // Assuming you want to hide an element with the ID "elementToHide"
        var element = document.getElementById("Confirmation");
        if (element) {
          element.style.display = "none";
        }
      }
</script>

    </script>
</body>

</html>
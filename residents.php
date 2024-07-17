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
    <link rel="stylesheet" href="css-style/residents.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Residence Information</title>
</head>
<body>
<style>
        .search-container {
            max-width: 400px;
            position: relative;
            top: -20px;
            margin-left: 10px;
        }
    </style>


<?php include('header.php'); ?>
    <h4>Residence Information</h4>

    <button id="btn-show" class="btn btn-primary add-icon">Add <i class="fa-solid fa-plus"></i></button>
    
    <div class="search-container">
    <label for="searchInput" class="h6">Search:</label>
    <div class="input-group">
        <input type="text" class="form-control" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
    </div>
</div>

    <div id="resident-form" class="resident-form-styl">
    <form id="resident-form-show" action="residents-form.php" method="post" class="row g-3 form-container">
    <span class="resident-x-btn">&times</span>
    <div class="col-md-6">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control" name="fullname" id="" required>
  </div>

  <div class="col-md-6">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" name="age" id="" required>
  </div>

  <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label>
    <select id="gender" name="gender" class="form-select" required>
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

  <div class="col-8">
    <label for="C_occ" class="form-label">Occupation</label>
    <input type="text" class="form-control" name="C_occ" id="C_occ" required>
  </div>
  
  <div class="col-6">
    <label for="CNumber" class="form-label">Contact Number</label>
    <input type="text" class="form-control" name="CNumber" id="CNumber" required>
  </div>


    <div class="col-6">
    <label for="inputAddress" class="form-label">Barangay</label>
    <input type="text" class="form-control" name="inputAddress" id="inputAddress" required>
  </div>

  <div class="col-md-6">
    <label for="city" class="form-label">Municipality</label>
    <input type="text" class="form-control" name="city" id="" required>
  </div>
  <div class="col-6">
    <label for="state" class="form-label">Province</label>
    <input type="text" class="form-control" name="state" id="" required>
  </div>

  <div class="col-md-4">
    <label for="zipcode" class="form-label">Zip Code</label>
    <input type="text" class="form-control" id="" name="zipcode" required>
  </div>

  <div class="col-md-4">
    <label for="residence" class="form-label">Type of Residence</label>
    <select id="inputState" name="residence" class="form-select" required>
      <option selected>Choose...</option>
      <option>Single Family Home</option>
      <option>Spouse</option>
      <option>Child</option>
    </select>
  </div>
 
  <div class="col-4 submit-btn">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
</div>

<!--Modal Edit Residence-->
<div id="modal-residence" class="modal-edit-residence">
<div class="modal-content-residence">
  <span class="close-edit-residence">&times</span>
  <form id="" action="residence-data.php" method="post" class="row g-3 form-container-residence">

  <input type="hidden" id="blotterId" name="id">

  <div class="col-md-6">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control" name="fullname" id="fullname_" required>
  </div>

  <div class="col-md-6">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" name="age" id="age_" required>
  </div>

  <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label>
    <select id="gender_" name="gender" class="form-select" required>
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

  <div class="col-8">
    <label for="C_occs" class="form-label">Occupation</label>
    <input type="text" class="form-control" name="C_occs" id="C_occs" required>
  </div>
  
  <div class="col-5">
    <label for="CNumbers" class="form-label">Contact Number</label>
    <input type="text" class="form-control" name="CNumbers" id="CNumbers" required>
  </div>

    <div class="col-7">
    <label for="inputAddress" class="form-label">Barangay</label>
    <input type="text" class="form-control" name="inputAddress" id="inputAddress_" required>
  </div>

  <div class="col-md-6">
    <label for="city" class="form-label">Municipality</label>
    <input type="text" class="form-control" name="city" id="city_" required>
  </div>
  <div class="col-6">
    <label for="state" class="form-label">Province</label>
    <input type="text" class="form-control" name="state" id="state_" required>
  </div>

  <div class="col-md-5">
    <label for="zipcode" class="form-label">Zip Code</label>
    <input type="text" class="form-control" id="zipcode_" name="zipcode" required>
  </div>

  <div class="col-md-7">
    <label for="residence" class="form-label">Type of Residence</label>
    <select id="type_residence" name="residence" class="form-select" required>
      <option selected>Choose...</option>
      <option>Single Family Home</option>
      <option>Spouse</option>
      <option>Child</option>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" id="btn-center" name="update" class="btn btn-primary">Update</button>
  </div>
</form>

</div>
</div>



    <table>
      <thead>
        <tr>
            <th>Fullname</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Contact Number</th>
            <th>Occupation</th>
            <th>Barangay</th>
            <th>Municipality</th>
            <th>Province</th>
            <th>ZIP Code</th>
            <th>Type of Residence</th>
            <th colspan="3" style="text-align: center;">Action</th>
        </tr>
      </thead> 

      <tbody id="dataTable">
        <?php
            // Retrieving data from the database
          $sql = "SELECT * FROM `residence-db` ORDER BY fullname ASC";
          $result = mysqli_query($conn,$sql);

      // Check if the query was successful
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>" . $row['fullname'] . "</td>";
       echo "<td>" . $row['age'] . "</td>";
       echo "<td>" . $row['gender'] . "</td>";
       echo "<td>" . $row['conNumber'] . "</td>";
       echo "<td>" . $row['occuPation'] . "</td>";
       echo "<td>" . $row['address'] . "</td>";
       echo "<td>" .$row['city']. "</td>";
       echo "<td>" .$row['state']. "</td>";
       echo "<td>" .$row['zipcode']. "</td>";
       echo "<td>" .$row['type_of_residence']. "</td>";
       echo '<td><a href="residence-view.php?residence-view=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-eye"></i></a></td>';
       echo '<td><button class="btn btn-primary edit-btn-residence" data-id-residence="' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i></button></td>';
       echo '<td><a href="residence-delete.php?residence-delete=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
       echo "</tr>";

        }
      }
        ?>
    </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/residence-edit.js"></script>
    <script src="js/resident-form.js"></script>
    <script>
        function filterTable() {
            // Get input element and filter value
            var input = document.getElementById('searchInput');
            var filter = input.value.toUpperCase();

            // Get the table and table rows
            var table = document.getElementById('dataTable');
            var rows = table.getElementsByTagName('tr');

            // Loop through all table rows, hide those that don't match the search query
            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName('td');
                var shouldShow = false;

                for (var j = 0; j < cells.length; j++) {
                    var cellText = cells[j].textContent || cells[j].innerText;

                    if (cellText.toUpperCase().indexOf(filter) > -1) {
                        shouldShow = true;
                        break;
                    }
                }

                if (shouldShow) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    </script>
</body>
</html>
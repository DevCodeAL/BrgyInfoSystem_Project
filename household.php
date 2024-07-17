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
    <link rel="stylesheet" href="css-style/household.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Household Information</title>
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
    <h4>Household Information</h4>

    <button id="form-show" class="btn btn-primary add-icon">Add <i class="fa-solid fa-plus"></i></button>
     
  <div class="search-container">
    <label for="searchInput" class="h6">Search:</label>
    <div class="input-group">
        <input type="text" class="form-control" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
    </div>
</div>

    <div id="household-form" class="view-form">
    <form id="form-action" action="household-form.php" method="post" class="row g-3 form-container">
      <span class="x-btn">&times</span>

      <h5 style="text-align: center;">Family Members</h5>

   <div class="col-md-4">
    <label for="famName" class="form-label">Family Lastname</label>
    <input type="text" class="form-control" name="famName" id="FamLname" required>
  </div>

  <div class="col-md-4">
    <label for="fmt" class="form-label">Family Members Total</label>
    <input type="text" class="form-control" name="fmt" id="famTotal" required>
  </div>

  <div class="col-md-4">
    <label for="Hnumber" class="form-label">House Number</label>
    <input type="text" class="form-control" name="Hnumber" id="Hnumber" required>
  </div>

  <div class="col-md-8">
    <label for="SbN" class="form-label">Street/Building Number</label>
    <input type="text" class="form-control" name="SbN" id="SbN" required>
  </div>

  <div class="col-md-4">
    <label for="con_Num" class="form-label">Contact Number</label>
    <input type="text" class="form-control" name="con_Num" id="con_Num" required>
  </div>

  <div class="col-md-25">
    <label for="pAddress" class="form-label">Permanent Address</label>
    <input type="text" class="form-control" name="pAddress" id="pAddress" required>
  </div>

<h5 style="text-align: center;">Head of Household</h5>

  <div class="col-md-4">
    <label for="relationship" class="form-label">Relationship</label>
    <select id="inputState" name="relationship" class="form-select" required>
      <option selected>Choose...</option>
      <option value="Head of Household">Head of Household</option>
    </select>
  </div>

  <div class="col-md-5">
    <label for="name" class="form-label">Fullname</label>
    <input type="text" class="form-control" name="name" id="inputEmail4" required>
  </div>

  <div class="col-md-3">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" name="age" id="inputPassword4" required>
  </div>

  <div class="col-md-4">
  <label for="gender" class="form-label">Gender</label>
    <select id="" name="gender" class="form-select" required>
      <option selected>Choose...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>

  <div class="col-md-8">
    <label for="occupation" class="form-label">Occupation:</label>
    <input type="text" class="form-control" name="occupation" id="occupation" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="inputAddress" id="inputAddress" required>
  </div>


  <h5 style="text-align: center;">Spouse</h5>

  <div class="col-md-4">
    <label for="relationship" class="form-label">Relationship</label>
    <select id="inputState" name="Spouse_relationship" class="form-select" required>
      <option selected>Choose...</option>
      <option value="Spouse">Spouse</option>
    </select>
  </div>

  <div class="col-md-5">
    <label for="Spouse_name" class="form-label">Fullname</label>
    <input type="text" class="form-control" name="Spouse_name" id="Spouse_name" required>
  </div>

  <div class="col-md-3">
    <label for="Spouse_age" class="form-label">Age</label>
    <input type="text" class="form-control" name="Spouse_age" id="Spouse_age" required>
  </div>

  <div class="col-md-4">
  <label for="Spouse_gender" class="form-label">Gender</label>
    <select id="Spouse_gender" name="Spouse_gender" class="form-select" required>
      <option selected>Choose...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>

  <div class="col-md-8">
    <label for="Spouse_occupation" class="form-label">Occupation:</label>
    <input type="text" class="form-control" name="Spouse_occupation" id="Spouse_occupation" required>
  </div>

  <div class="col-12">
    <label for="Spouse_Address" class="form-label">Address</label>
    <input type="text" class="form-control" name="Spouse_Address" id="Spouse_Address" required>
  </div>


  <h5 style="text-align: center;">Child</h5>

  <div class="col-md-25">
    <label for="Child_relationship" class="form-label">Relationship</label>
    <select id="Child_relationship" name="Child_relationship" class="form-select" required>
      <option selected>Choose...</option>
      <option value="Child">Child</option>
    </select>
  </div>

  <label for="Child_name" class="form-label">Child Form</label>
    <textarea class="form-control" name="Child_name" id="Child_name" placeholder="Name/Age/Gender/Occupation"></textarea>

  <div class="col-4">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
</div>
        <!--Modal for Edit-->
        <div id="modal-edit-form" class="modal-edit-style">
          <div class="modal-content-household">
            <span class="close-content">&times</span>
            <form action="household-data.php" method="post" class="row g-3 form-container-edit">

            <input type="hidden" id="blotterId" name="id">

            <h5 style="text-align: center;">Family Members</h5>

          <div class="col-md-4">
            <label for="famNames" class="form-label">Family Lastname</label>
            <input type="text" class="form-control" name="famNames" id="FamLnames" required>
          </div>

          <div class="col-md-4">
            <label for="fmts" class="form-label">Family Members Total</label>
            <input type="text" class="form-control" name="fmts" id="famTotals" required>
          </div>

          <div class="col-md-4">
            <label for="Hnumbers" class="form-label">House Number</label>
            <input type="text" class="form-control" name="Hnumbers" id="Hnumbers" required>
          </div>

          <div class="col-md-8">
            <label for="SbNs" class="form-label">Street/Building Number</label>
            <input type="text" class="form-control" name="SbNs" id="SbNs" required>
          </div>

          <div class="col-md-4">
            <label for="con_Nums" class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="con_Nums" id="con_Nums" required>
          </div>

          <div class="col-md-25">
            <label for="pAddresss" class="form-label">Permanent Address</label>
            <input type="text" class="form-control" name="pAddresss" id="pAddresss" required>
          </div>

        <h5 style="text-align: center;">Head of Household</h5>

          <div class="col-md-4">
            <label for="Hrelationships" class="form-label">Relationship</label>
            <select id="S_Relationship" name="Hrelationships" class="form-select" required>
              <option selected>Choose...</option>
              <option value="Head of Household">Head of Household</option>
            </select>
          </div>

          <div class="col-md-5">
            <label for="names" class="form-label">Fullname</label>
            <input type="text" class="form-control" name="names" id="S_fullName" required>
          </div>

          <div class="col-md-3">
            <label for="ages" class="form-label">Age</label>
            <input type="text" class="form-control" name="ages" id="S_agess" required>
          </div>

          <div class="col-md-4">
          <label for="genders" class="form-label">Gender</label>
            <select id="Genderss" name="genders" class="form-select" required>
              <option selected>Choose...</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="col-md-8">
            <label for="occupationss" class="form-label">Occupation:</label>
            <input type="text" class="form-control" name="occupationss" id="S_occupations" required>
          </div>

          <div class="col-12">
            <label for="inpuAddresss" class="form-label">Address</label>
            <input type="text" class="form-control" name="inpuAddresss" id="S_Address" required>
          </div>


          <h5 style="text-align: center;">Spouse</h5>

          <div class="col-md-4">
            <label for="relationships" class="form-label">Relationship</label>
            <select id="S_rel" name="Spouse_relationships" class="form-select" required>
              <option selected>Choose...</option>
              <option value="Spouse">Spouse</option>
            </select>
          </div>

          <div class="col-md-5">
            <label for="Spouse_names" class="form-label">Fullname</label>
            <input type="text" class="form-control" name="Spouse_names" id="Spouse_names" required>
          </div>

          <div class="col-md-3">
            <label for="Spouse_ages" class="form-label">Age</label>
            <input type="text" class="form-control" name="Spouse_ages" id="SAge" required>
          </div>

          <div class="col-md-4">
          <label for="Spouse_genders" class="form-label">Gender</label>
            <select id="Spouse_genders" name="Spouse_genders" class="form-select" required>
              <option selected>Choose...</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="col-md-8">
            <label for="Spouse_occupations" class="form-label">Occupation:</label>
            <input type="text" class="form-control" name="Spouse_occupations" id="Spouse_occupations" required>
          </div>

          <div class="col-12">
            <label for="Spouse_Addresss" class="form-label">Address</label>
            <input type="text" class="form-control" name="Spouse_Addresss" id="Spouse_Addresss" required>
          </div>


          <h5 style="text-align: center;">Child</h5>

          <div class="col-md-25">
            <label for="Child_relationships" class="form-label">Relationship</label>
            <select id="Child_relationships" name="Child_relationships" class="form-select" required>
              <option selected>Choose...</option>
              <option value="Child">Child</option>
            </select>
          </div>

          <label for="Child_names" class="form-label">Child Form</label>
            <textarea class="form-control" name="Child_names" id="Child_names" placeholder="Name/Age/Gender/Occupation"></textarea>
                  
            <div class="col-4 update-btn">
              <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
 
          </form>
          </div>
        </div>
        
    <table>
      <thead>
        <tr>
            <th>Family Lastname</th>
            <th>Family Members Total</th>
            <th>House Number</th>
            <th>Street/Building Number</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th colspan="3" style="text-align: center;">Action</th>
        </tr>
        </thead>

        <tbody id="dataTable">
        <?php

            // Retrieving data from the database
          $sql = "SELECT * FROM `household-db` ORDER BY fullname ASC";
          $result = mysqli_query($conn,$sql);

      // Check if the query was successful
      if (mysqli_num_rows($result) > 0) {

        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>" . $row['fam_lastname'] . "</td>";
       echo "<td>" .$row['fam_Mt']. "</td>";
       echo "<td>" .$row['Hs']. "</td>";
       echo "<td>" .$row['Sb_number']. "</td>";
       echo "<td>" .$row['contact_number']. "</td>";
       echo "<td>" .$row['perm_add']. "</td>";
       echo '<td><a href="household-view.php?household-view=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-eye"></i></a></td>';
       echo '<td><button class="btn btn-primary edit-btn" data-id="' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i></button></td>';
       echo '<td><a href="household-delete.php?household-delete=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
       echo "</tr>";

        }
      }
        ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/household-edit.js"></script>
    <script src="js/household-form.js"></script>
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

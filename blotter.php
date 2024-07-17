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
    <link rel="stylesheet" href="css-style/blotter.css">
    <title>Blotter Records Management</title>
</head>
<body>
<style>
        .search-container {
            max-width: 400px;
            position: relative;
            top: -10px;
            margin-left: 10px;
        }
    </style>

<?php include('header.php'); ?>
    <h4>Blotter Records Management</h4>
    <button id="form-show" style="margin: 10px;" class="btn btn-primary add-icon">Add <i class="fa-solid fa-plus"></i></button>
    
    <div class="search-container">
    <label for="searchInput" class="h6">Search:</label>
    <div class="input-group">
        <input type="text" class="form-control" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
    </div>
</div>


    <div id="household-form" class="blotter-modal">
        <div class="conblotter-modal">
            <span class="x-btn">&times</span>
    <div  class="container mt-5">
    <form style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;" action="blotter-form.php" method="post">
            <div class="col-md-3">
                <label for="status" class="form-label">Status:</label>
                <select id="status" name="status" class="form-select">
                    <option value="new">New</option>
                    <option value="ongoing">Ongoing</option>
                </select>
            </div>


        <div class="col-md-8">
        <label for="incidentType">Comments:</label>
            <textarea class="form-control"  name="incidentType" id="incidentType" placeholder="Leave a comment here"></textarea>
            </div>

            <div class="col-md-5">
                <label for="ComName" class="form-label">Complainant Name:</label>
                <input type="text" id="ComName" name="ComName" class="form-control" required>
            </div>



            <div class="col-md-5">
                <label for="RespondentName" class="form-label">Blotter Name:</label>
                <input type="text" id="RespondentName" name="RespondentName" class="form-control" required>
            </div>


            <div class="col-md-5">
                <label for="dateTimeReported" class="form-label">Date & Time Reported:</label>
                <input type="datetime-local" id="dateTimeReported" name="dateTimeReported" class="form-control" required>
            </div>


            <div class="col-md-5">
                <label for="dateTimeIncident" class="form-label">Date & Time Incident:</label>
                <input type="datetime-local" id="dateTimeIncident" name="dateTimeIncident" class="form-control" required>
            </div>



            <div class="col-md-5">
                <label for="dateRecorded" class="form-label">Date Recorded:</label>
                <input type="date" id="dateRecorded" name="dateRecorded" class="form-control" required>
            </div>



            <div class="col-md-5">
                <button style="margin: 30px;" type="submit" class="btn btn-primary">Add</button>
            </div>

    </form>
</div>
</div>
</div>

    <!--Blotter Modal-->
    <div id="blotter-modal" class="class-blotter-modal">
        <div class="content-blotter-modal">
            <span class="close-btn">&times</span>

            <form action="blotter-data.php" method="post" class="row g-3">

            <input type="hidden" id="blotterId" name="id">

        <div class="col-md-3">
            <label for="status_">Status:</label>
            <select id="status_2" name="status_" class="form-select">
                <option value="new">New</option>
                <option value="ongoing">Ongoing</option>
            </select><br>
        </div>

        <div class="col-md-8">
        <label for="incidentTypes">Comments:</label>
            <textarea class="form-control"  name="incidentTypes" id="incidentType_2" placeholder="Leave a comment here"></textarea>
            </div>

            <div class="col-md-5">
                <label for="ComNames" class="form-label">Complainant Name:</label>
                <input type="text" id="ComNames" name="ComNames" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="RespondentNames" class="form-label">Blotter Name:</label>
                <input type="text" id="RespondentNames" name="RespondentNames" class="form-control" required>
            </div>

        <div class="col-md-6">
            <label for="dateTimeReported">Date & Time Reported:</label>
            <input type="datetime-local" id="dateTimeReported_2" name="dateTimeReported_" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="dateTimeIncident">Date & Time Incident:</label>
            <input type="datetime-local" id="dateTimeIncident_2" name="dateTimeIncident_" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="dateRecorded">Date Recorded:</label>
            <input type="date" id="dateRecorded_2" name="dateRecorded_" class="form-control" required>
        </div>
        

        <div class="col-md-5">
            <button style="margin: 25px;" type="submit" name="update" class="btn btn-primary btn">Update</button>
        </div>
    </form>

        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th>Status</th>
            <th>Incident Type</th>
            <th>Complainant Name</th>
            <th>Blotter Name</th>
            <th>Date & Time Reported</th>
            <th>Date & Time Incident</th>
            <th>Date Recorded</th>
            <th style="text-align: center;" colspan="3">Action</th>
        </tr>
        </thead>

        <tbody id="dataTable">
        <?php
            // Retrieving data from the database
          $sql = "SELECT * FROM `blotter-db` ORDER BY id DESC";
          $result = mysqli_query($conn,$sql);

      // Check if the query was successful
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>" . $row['status'] . "</td>";
       echo "<td>" .$row['incident']. "</td>";
       echo "<td>" .$row['ComName']. "</td>";
       echo "<td>" .$row['RespondentName']. "</td>";
       echo "<td>" .$row['date_time_reported']. "</td>";
       echo "<td>" .$row['date_time_incident']. "</td>";
       echo "<td>" .$row['date_record']. "</td>";
       echo '<td><a href="blotter-view.php?blotter-view=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-eye"></i></a></td>';
       echo '<td><button class="btn btn-primary edit-btn-blotter" data-id-blotter="' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i></button></td>';
       echo '<td><a href="blotter-delete.php?blotter-delete=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
       echo "</tr>";

        }
      }
        ?>
</tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/blotter-edit.js"></script>
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

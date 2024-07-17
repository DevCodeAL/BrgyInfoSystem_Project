<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();


// Retrieve the data from the database residence and households
$residence = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `residence-db` WHERE id <> ''");
$residence_counts = mysqli_fetch_assoc($residence)['count'];

$household = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `household-db` WHERE id <> ''");
$household_counts = mysqli_fetch_assoc($household)['count'];

$blotter = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `blotter-db` WHERE id <> ''");
$blotter_counts = mysqli_fetch_assoc($blotter)['count'];

// Retrieve the data from the database barangay officials
$captain = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `captain_db` WHERE email  <> ''");
$captain_counts = mysqli_fetch_assoc($captain)['count'];

$kagawad1 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd1-db` WHERE email <> ''");
$kagawad1_counts = mysqli_fetch_assoc($kagawad1)['count'];

$kagawad2 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd2-db` WHERE email <> ''");
$kagawad2_counts = mysqli_fetch_assoc($kagawad2)['count'];

$kagawad3 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd3-db` WHERE email <> ''");
$kagawad3_counts = mysqli_fetch_assoc($kagawad3)['count'];

$kagawad4 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd4-db` WHERE email <> ''");
$kagawad4_counts = mysqli_fetch_assoc($kagawad4)['count'];

$kagawad5 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd5-db` WHERE email <> ''");
$kagawad5_counts = mysqli_fetch_assoc($kagawad5)['count'];

$kagawad6 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd6-db` WHERE email <> ''");
$kagawad6_counts = mysqli_fetch_assoc($kagawad6)['count'];

$kagawad7 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `kgwd7` WHERE email <> ''");
$kagawad7_counts = mysqli_fetch_assoc($kagawad7)['count'];

$secretary = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `secretary-db` WHERE email <> ''");
$secretary_counts = mysqli_fetch_assoc($secretary)['count'];

$treasurer = mysqli_query($conn, "SELECT COUNT(*) AS count FROM   `treasurer-db` WHERE email <> ''");
$treasurer_counts = mysqli_fetch_assoc($treasurer)['count'];

$sk_chairman = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-chairman` WHERE email <> ''");
$sk_chairman_counts = mysqli_fetch_assoc($sk_chairman)['count'];

$sk_kgwd1 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd-db` WHERE email <> ''");
$sk_kgwd1_counts = mysqli_fetch_assoc($sk_kgwd1)['count'];

$sk_kgwd2 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd2-db` WHERE email <> ''");
$sk_kgwd2_counts = mysqli_fetch_assoc($sk_kgwd2)['count'];

$sk_kgwd3 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd3-db` WHERE email <> ''");
$sk_kgwd3_counts = mysqli_fetch_assoc($sk_kgwd3)['count'];

$sk_kgwd4 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd4-db` WHERE email <> ''");
$sk_kgwd4_counts = mysqli_fetch_assoc($sk_kgwd4)['count'];

$sk_kgwd5 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd5-db` WHERE email <> ''");
$sk_kgwd5_counts = mysqli_fetch_assoc($sk_kgwd5)['count'];

$sk_kgwd6 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd6-db` WHERE email <> ''");
$sk_kgwd6_counts = mysqli_fetch_assoc($sk_kgwd6)['count'];

$sk_kgwd7 = mysqli_query($conn, "SELECT COUNT(*) AS count FROM  `sk-kgwd7-db` WHERE email <> ''");
$sk_kgwd7_counts = mysqli_fetch_assoc($sk_kgwd7)['count'];

//Over all total
$brgy_officials_total = $captain_counts + $kagawad1_counts + $kagawad2_counts + $kagawad3_counts + $sk_kgwd4_counts + $sk_kgwd5_counts + $kagawad6_counts + $kagawad7_counts + $secretary_counts + $treasurer_counts + $sk_chairman_counts + $sk_kgwd1_counts + $sk_kgwd2_counts + $sk_kgwd3_counts + $sk_kgwd4_counts + $sk_kgwd5_counts + $sk_kgwd6_counts + $sk_kgwd7_counts;
$total = $brgy_officials_total;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css-style/main_page.css">
    <title>Document</title>
</head>
<body>
    <!--Main Page-->
    <div class="main_page-style">
        
        <div id="header"><h3>Barangay Information System</h3></div>
        <h4 class="text">Dashboard</h4>
                <div class="main-container">
                    <div class="t_Residence"><i class="fa-solid fa-person-circle-plus person-plus"></i>Total Residence<br><span><?php echo $residence_counts; ?></span></div>
                    <div class="t_household"><i class="fa-solid fa-house-chimney-user house-icon"></i>Total Household<br><span><?php echo $household_counts; ?></span></div>
                    <div class="t_Blotter"><i class="fa-sharp fa-solid fa-chart-simple chart-icon"></i>Total Blotter<br><span><?php echo $blotter_counts; ?></span></div>
                    <div class="t_Official"><i class="fa-solid fa-people-line person-listicon"></i>Brgy Officials<br><span><?php echo $total; ?></span></div>
                </div>

<div class="records-container">
    <div class="list-container">
        <h6 class="text"><i class="fa-solid fa-list list-icon"></i>LIST OF OFFICIALS</h6>
         <div>
            <label><h6>Search:</h6></label>
            <input type="text" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
        </div>
    </div>
                <!--My Tables-->
                <table id="dataTable" class="table table-hover">
          <thead>
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">POSITION</th>
                    <th scope="col">TERM FROM-TO</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>

<?php

        // Retrieving data from the database
      $sql = "SELECT * FROM `captain_db` ORDER BY email";
      $result = mysqli_query($conn,$sql);

  // Check if the query was successful
  if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
   echo "<tr>";
   echo "<td>" . $row['fullname'] . "</td>";
   echo "<td>" .$row['gender']. "</td>";
   echo "<td>" .$row['position']. "</td>";
   echo "<td>" .$row['term']. "</td>";
   echo "<td>" .$row['address']. "</td>";
   echo '<td><a href="file.php?delete=' . $row['captain_id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
   echo "</tr>";

    }
  }
    ?>

            <?php

            // Retrieving data from the database
            $sql = "SELECT * FROM `kgwd1-db` ORDER BY email";
            $result = mysqli_query($conn,$sql);

            // Check if the query was successful
            if (mysqli_num_rows($result) > 0) {

            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" .$row['gender']. "</td>";
            echo "<td>" .$row['position']. "</td>";
            echo "<td>" .$row['term']. "</td>";
            echo "<td>" .$row['address']. "</td>";
            echo '<td><a href="file.php?delete1=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
            echo "</tr>";

            }
            }
            ?>

            <?php

            // Retrieving data from the database
            $sql = "SELECT * FROM `kgwd2-db` ORDER BY email";
            $result = mysqli_query($conn,$sql);

            // Check if the query was successful
            if (mysqli_num_rows($result) > 0) {

            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" .$row['gender']. "</td>";
            echo "<td>" .$row['position']. "</td>";
            echo "<td>" .$row['term']. "</td>";
            echo "<td>" .$row['address']. "</td>";
            echo '<td><a href="file.php?delete2=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
            echo "</tr>";

            }
            }
            ?>

            <?php

            // Retrieving data from the database
            $sql = "SELECT * FROM `kgwd3-db` ORDER BY email";
            $result = mysqli_query($conn,$sql);

            // Check if the query was successful
            if (mysqli_num_rows($result) > 0) {

            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" .$row['gender']. "</td>";
            echo "<td>" .$row['position']. "</td>";
            echo "<td>" .$row['term']. "</td>";
            echo "<td>" .$row['address']. "</td>";
            echo '<td><a href="file.php?delete3=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
            echo "</tr>";

            }
            }
            ?>

                <?php

                // Retrieving data from the database
                $sql = "SELECT * FROM `kgwd4-db` ORDER BY email";
                $result = mysqli_query($conn,$sql);

                // Check if the query was successful
                if (mysqli_num_rows($result) > 0) {

                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" .$row['gender']. "</td>";
                echo "<td>" .$row['position']. "</td>";
                echo "<td>" .$row['term']. "</td>";
                echo "<td>" .$row['address']. "</td>";
                echo '<td><a href="file.php?delete4=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                echo "</tr>";

                }
                }
                ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `kgwd5-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete5=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>


                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `kgwd6-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete6=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `kgwd7` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete7=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `secretary-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete8=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `treasurer-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete9=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-chairman` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete10=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete11=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd2-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete12=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd3-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete13=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd4-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete14=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd5-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete15=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd6-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete16=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    <?php

                    // Retrieving data from the database
                    $sql = "SELECT * FROM `sk-kgwd7-db` ORDER BY email";
                    $result = mysqli_query($conn,$sql);

                    // Check if the query was successful
                    if (mysqli_num_rows($result) > 0) {

                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td>" .$row['position']. "</td>";
                    echo "<td>" .$row['term']. "</td>";
                    echo "<td>" .$row['address']. "</td>";
                    echo '<td><a href="file.php?delete17=' . $row['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                    echo "</tr>";

                    }
                    }
                    ?>

                    
            </tbody>      
        </table>
    </div>

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
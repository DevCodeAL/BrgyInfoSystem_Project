<?php
    session_start();
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
    <title>Document</title>
</head>
<body>
<?php include('header.php'); ?>
<style>
    .table th, .table td {
        vertical-align: middle;
        color: black;
        background-color: white;
        text-align: center;
    }
</style>

<div class="container my-4" id="print-content">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tbody>
                <?php 
                $id = $_GET['blotter-view'];
                $sql = "SELECT * FROM  `blotter-db` WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th colspan="2"><h3>Blotter</h3></th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Status</th>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Incident Type</th>';
                        echo '<td>'.$row['incident'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Complainant Name</th>';
                        echo '<td>'.$row['ComName'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Blotter Name</th>';
                        echo '<td>'.$row['RespondentName'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Date Time Reported</th>';
                        echo '<td>'.$row['date_time_reported'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Date Time Incident</th>';
                        echo '<td>'.$row['date_time_incident'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Date Time Record</th>';
                        echo '<td>'.$row['date_record'].'</td>';
                        echo '</tr>';

                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<button style="display: block; margin-left: auto; margin-right: auto;" onclick="printData()" class="btn btn-primary">Print Data</button>
<script src="js/print.js"></script>
</body>
</html>

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
                $id = $_GET['residence-view'];
                $sql = "SELECT * FROM  `residence-db` WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th colspan="2"><h3>Residence</h3></th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Fullname</th>';
                        echo '<td>'.$row['fullname'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Age</th>';
                        echo '<td>'.$row['age'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Gender</th>';
                        echo '<td>'.$row['gender'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Contact Number</th>';
                        echo '<td>'.$row['conNumber'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Occupation</th>';
                        echo '<td>'.$row['occuPation'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Type of Residence</th>';
                        echo '<td>'.$row['type_of_residence'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Barangay</th>';
                        echo '<td>'.$row['address'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Municipality</th>';
                        echo '<td>'.$row['city'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Province</th>';
                        echo '<td>'.$row['state'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Zipcode</th>';
                        echo '<td>'.$row['zipcode'].'</td>';
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

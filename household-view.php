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
                $id = $_GET['household-view'];
                $sql = "SELECT * FROM `household-db` WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th colspan="2"><h3>Household Members</h3></th>';
                        echo '</tr>';
                        
                        echo '<tr>';
                        echo '<th scope="row">Family Lastname</th>';
                        echo '<td>'.$row['fam_lastname'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Family Members Total</th>';
                        echo '<td>'.$row['fam_Mt'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">House Number</th>';
                        echo '<td>'.$row['Hs'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Street/Building Number</th>';
                        echo '<td>'.$row['Sb_number'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Contact Number</th>';
                        echo '<td>'.$row['contact_number'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Permanent Address</th>';
                        echo '<td>'.$row['address'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th colspan="2"><h3>Head of Household</h3></th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Relationship</th>';
                        echo '<td>'.$row['relationship'].'</td>';
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
                        echo '<th scope="row">Occupation</th>';
                        echo '<td>'.$row['occupation'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Address</th>';
                        echo '<td>'.$row['address'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th colspan="2"><h3>Spouse</h3></th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Relationship</th>';
                        echo '<td>'.$row['S_relationship'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Fullname</th>';
                        echo '<td>'.$row['S_fullname'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Age</th>';
                        echo '<td>'.$row['S_age'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Gender</th>';
                        echo '<td>'.$row['S_gender'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Occupation</th>';
                        echo '<td>'.$row['S_occupation'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Address</th>';
                        echo '<td>'.$row['S_address'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th colspan="2"><h3>Child</h3></th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Relationship</th>';
                        echo '<td>'.$row['C_relationship'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<th scope="row">Fullname/Age/Gender</th>';
                        echo '<td style="white-space: normal">';

                        // Assuming $row['C_fullname'] contains a string with child information separated by numbers
                        $child_info = $row['C_fullname'];

                        // Split the string into individual child entries
                        $children = explode(".", $child_info);

                        // Output each child's information with a line break after each
                        foreach ($children as $child) {
                            echo $child . '<br>';
                        }

                        echo '</td>';
                        echo '</tr>';
                        echo '</tr>';

                        

                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<button style="display: block; margin-left: auto; margin-right: auto; margin-bottom: 20px;" onclick="printData()" class="btn btn-primary">Print Data</button>
<script src="js/print.js"></script>
</body>
</html>

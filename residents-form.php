<?php
    session_start();
    include_once('connection.php');
    $conn = connection();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = $_POST['fullname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['inputAddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        $residence = $_POST['residence'];
        $contact = $_POST['CNumber'];
        $occupation = $_POST['C_occ'];

        $stmt = mysqli_prepare($conn, "INSERT INTO `residence-db` (`fullname`, `age`,`conNumber`, `occuPation`,`gender`, `address`, `city`, `state`, `zipcode`, `type_of_residence`) VALUES (?,?,?,?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt,"ssssssssss",$fullname,$age,$contact,$occupation,$gender,$address,$city,$state,$zipcode,$residence);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: residents.php");
        exit;
   
    }

    ?>
<?php
    session_start();
    include_once('connection.php');
    $conn = connection();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['inputAddress'];
        $gender = $_POST['gender'];
        $relationship = $_POST['relationship'];
        $occupation = $_POST['occupation'];
        
        $famLname = $_POST['famName'];
        $fmT = $_POST['fmt'];
        $houseNum = $_POST['Hnumber'];
        $SbN = $_POST['SbN'];
        $con_Num = $_POST['con_Num'];
        $pAddress = $_POST['pAddress'];

        $S_relationship = $_POST['Spouse_relationship'];
        $S_fullname = $_POST['Spouse_name'];
        $S_age = $_POST['Spouse_age'];
        $S_gender = $_POST['Spouse_gender'];
        $S_occupation = $_POST['Spouse_occupation'];
        $S_add = $_POST['Spouse_Address'];

        $C_relationship = $_POST['Child_relationship'];
        $C_fullname = $_POST['Child_name'];

        $stmt = mysqli_prepare($conn, "INSERT INTO `household-db` (`fullname`, `age`, `address`, `gender`, `relationship`, `occupation`, `fam_lastname`, `fam_Mt`, `Hs`, `Sb_number`, `contact_number`, `perm_add`, `S_relationship`, `S_fullname`, `S_age`, `S_gender`, `S_occupation`, `S_address`, `C_relationship`, `C_fullname`) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt,"ssssssssssssssssssss",$name,$age,$address,$gender,$relationship,$occupation, $famLname, $fmT, $houseNum, $SbN, $con_Num, $pAddress, $S_relationship, $S_fullname, $S_age, $S_gender, $S_occupation, $S_add, $C_relationship, $C_fullname);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: household.php");
        exit;
   
    };

    ?>
<?php

include_once('connection.php');
$conn = connection();


if (isset($_POST['update'])) {
    $id = $_POST['id'];/* Retrieve the ID from the form, e.g., $_POST['id'] */
    $name = $_POST['names'];
    $age = $_POST['ages'];
    $address = $_POST['inpuAddresss'];
    $gender = $_POST['genders'];
    $relationship = $_POST['Hrelationships'];
    $occupation = $_POST['occupationss'];

        $famLname = $_POST['famNames'];
        $fmT = $_POST['fmts'];
        $houseNum = $_POST['Hnumbers'];
        $SbN = $_POST['SbNs'];
        $con_Num = $_POST['con_Nums'];
        $pAddress = $_POST['pAddresss'];

        $S_relationship = $_POST['Spouse_relationships'];
        $S_fullname = $_POST['Spouse_names'];
        $S_age = $_POST['Spouse_ages'];
        $S_gender = $_POST['Spouse_genders'];
        $S_occupation = $_POST['Spouse_occupations'];
        $S_add = $_POST['Spouse_Addresss'];

        $C_relationship = $_POST['Child_relationships'];
        $C_fullname = $_POST['Child_names'];


    // Update the database record
    $updateQuery = "UPDATE `household-db` SET 
    fullname='$name', 
    age='$age', 
    address='$address', 
    gender='$gender', 
    relationship='$relationship', 
    occupation='$occupation', 
    fam_lastname='$famLname', 
    fam_Mt='$fmT', 
    Hs='$houseNum', 
    Sb_number='$SbN', 
    contact_number='$con_Num', 
    perm_add='$pAddress', 
    S_relationship='$S_relationship', 
    S_fullname='$S_fullname', 
    S_age='$S_age', 
    S_gender='$S_gender', 
    S_occupation='$S_occupation', 
    S_address='$S_add', 
    C_relationship='$C_relationship', 
    C_fullname='$C_fullname'
    WHERE id=$id";



    $updateResult = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($updateResult) {
        // Redirect to the page or perform any other action
        header('Location: household.php');
        exit();
    } else {
        // Handle the update failure
        echo "Update failed: " . mysqli_error($conn);
    }
}

?>

<?php
session_start();
include_once('connection.php');
$conn = connection();

if(isset($_GET['household-delete'])){
    $id = $_GET['household-delete'];
    $sql = "DELETE FROM `household-db` WHERE id = ?";

    // prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // bind the parameter
    mysqli_stmt_bind_param($stmt, 'i', $id);
    
    // execute the statement
    $result = mysqli_stmt_execute($stmt);
    
    if ($result) {
        echo "Deleted Successfully";
        header('Location: household.php');

    } else {
        echo "Deleting Error: " . mysqli_error($conn);
    }
    
    // close the statement
    mysqli_stmt_close($stmt);
}
?>

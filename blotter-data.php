<?php

include_once('connection.php');
$conn = connection();


if (isset($_POST['update'])) {
    $id = $_POST['id'];/* Retrieve the ID from the form, e.g., $_POST['id'] */
    $status = $_POST['status_'];
    $incidentType = $_POST['incidentTypes'];
    $dateTimeReported = $_POST['dateTimeReported_'];
    $dateTimeIncident = $_POST['dateTimeIncident_'];
    $dateRecorded = $_POST['dateRecorded_'];
    $comName = $_POST['ComNames'];
    $bName = $_POST['RespondentNames'];

    // Update the database record
    $updateQuery = "UPDATE `blotter-db` SET 
                    status='$status', 
                    incident='$incidentType', 
                    date_time_reported='$dateTimeReported', 
                    date_time_incident='$dateTimeIncident', 
                    date_record='$dateRecorded',
                    ComName = '$comName',
                    RespondentName = '$bName'
                    WHERE id=$id";

    $updateResult = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($updateResult) {
        // Redirect to the page or perform any other action
        header('Location: blotter.php');
        exit();
    } else {
        // Handle the update failure
        echo "Update failed: " . mysqli_error($conn);
    }
}

?>

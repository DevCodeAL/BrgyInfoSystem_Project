<?php
    session_start();
    include_once('connection.php');
    $conn = connection();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $status = $_POST['status'];
        $incident_type = $_POST['incidentType'];
        $datetime_reported = $_POST['dateTimeReported'];
        $datetime_incident = $_POST['dateTimeIncident'];
        $date_record = $_POST['dateRecorded'];
        $comName = $_POST['ComName'];
        $bName = $_POST['RespondentName'];

        $stmt = mysqli_prepare($conn,"INSERT INTO `blotter-db` (`status`, `incident`, `date_time_reported`, `date_time_incident`, `date_record`,`ComName`, `RespondentName`) VALUES (?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt,"sssssss",$status,$incident_type,$datetime_reported,$datetime_incident,$date_record, $comName, $bName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('Location: blotter.php');
        exit;

    }

    ?>
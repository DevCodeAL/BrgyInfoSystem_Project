<?php
include_once('connection.php');
$conn = connection();

if (isset($_POST['update'])) {
         $id = $_POST['id'];/* Retrieve the ID from the form, e.g., $_POST['id'] */
        $fullname = $_POST['fullname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['inputAddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        $residence = $_POST['residence'];
        $contact = $_POST['CNumbers'];
        $occupation = $_POST['C_occs'];

    // Update the database record
    $updateQuery = "UPDATE `residence-db` SET 
                    fullname='$fullname', 
                    age='$age',
                    conNumber='$contact',
                    occuPation='$occupation', 
                    gender='$gender', 
                    address='$address', 
                    city='$city',
                    state='$state', 
                    zipcode='$zipcode',
                    type_of_residence='$residence'
                    WHERE id=$id";


    $updateResult = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($updateResult) {
        // Redirect to the page or perform any other action
        header('Location: residents.php');
        exit();
    } else {
        // Handle the update failure
        echo "Update failed: " . mysqli_error($conn);
    }
}

?>

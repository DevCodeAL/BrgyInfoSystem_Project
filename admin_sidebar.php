<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css-style/admin-sidebar.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div class="div-container">
            <!--SideBar-->
            <div class="sidebar-style">

                <div class="logo-tittle">
                        <img src="image/brgy-logo.png" />
                        <h5>Barangay Records</h5>
                    </div>

                <ul>
                    <li><a class="links" href="dashboard.php" id="AutoLoad" target="iframe"><i class="fa-solid fa-gauge dashboard-icon"></i><span>Dashboard</span></a></li>
                    <li><a class="links" href="brgy-information.php" target="iframe"><i class="fa-solid fa-house dash_icon"></i><span>Barangay Information</span></a></li>
                    <li><a class="links" href="barangay-officials.php" target="iframe"><i class="fa-solid fa-people-group official_icon"></i><span>Barangay Officials</span></a></li>
                    <li><a class="links" href="map.php" target="iframe"><i class="fa-solid fa-map-location map"></i><span>Barangay Map</span></a></li>
                    
                    <li>
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" id="dropBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-file resident"></i><span>Documents</span></button>
                        <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="brgyclearance.php" target="iframe">Bararangay Clearance</a></li>
                            <li><a class="dropdown-item" href="idegency.php" target="iframe">Certificate of Idengency</a></li>
                        </ul>
                        </div>
                    </li>
                    
                    <li><a class="links" href="household.php" target="iframe"><i class="fa-solid fa-people-roof household"></i><span>Household List</span></a></li>
                    <li><a class="links" href="residents.php" target="iframe"><i class="fa-solid fa-users-line resident"></i><span>Resident</span></a></li>
                    <li><a class="links" href="blotter.php" target="iframe"><i class="fa-solid fa-address-book book-icon"></i><span>Blotter Record</span></a></li>  
                    <li><a class="links" href="profile.php" target="iframe"><i class="fa-solid fa-user user_icon"></i><span>Profile Acount</span></a></li>
                    <li> <button id="disableFormButton" class="btn btn-danger"><i class="fa-solid fa-eye-slash resident"></i><span>Disable Sign-Up Form</span></button></li>
                    <li><a class="links" href="log-out.php"><i class="fa-solid fa-right-from-bracket log-out_icon"></i><span>Log-Out</span></a></li>
                </ul>
            </div>

            
            <div class="main_page">
            <iframe src="" name="iframe" id="iframe" title="Iframe Example"></iframe>
            </div>
        </div>
    </div>

    <script>
document.getElementById('disableFormButton').addEventListener('click', function() {
  // Check and toggle the state for the first form
  var currentState1 = localStorage.getItem('disableForm1');
  if (currentState1 === 'true') {
    localStorage.setItem('disableForm1', 'false');
    alert('The Sign up form for admin will now be enabled.');
  } else {
    localStorage.setItem('disableForm1', 'true');
    alert('The Sign up form for admin will now be disabled.');
  }
});

</script>

    <script>
    
       var AutoLoadAnchor = document.getElementById('AutoLoad');

        function autoClick() {
            AutoLoadAnchor.click(); 
        }

        setTimeout(autoClick, 1000); 
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
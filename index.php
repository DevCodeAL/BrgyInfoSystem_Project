<?php
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

require('brgy-info.php');
//Retrieve data from processing another file using require method
require('captain-data.php');
require('kgwd1-data.php');
require('kgwd2-data.php');
require('kgwd3-data.php');
require('kgwd4-data.php');
require('kgwd5-data.php');
require('kgwd6-data.php');
require('kgwd7-data.php');
require('secretary-data.php');
require('treasurer-data.php');
require('sk-chairman-data.php');
require('sk-kgwd1-data.php');
require('sk-kgwd2-data.php'); 
require('sk-kgwd3-data.php');
require('sk-kgwd4-data.php');
require('sk-kgwd5-data.php');
require('sk-kgwd6-data.php');
require('sk-kgwd7-data.php');

//Officials Picture
require('captain-img-data.php');
require('kgwd-img-data.php');
require('kgwd2-img-data.php');
require('kgwd3-img-data.php');
require('kgwd4-img-data.php');
require('kgwd5-img-data.php');
require('kgwd6-img-data.php');
require('kgwd7-img-data.php');
require('secretary-img-data.php');
require('treasurer-img-data.php');
require('sk-c-img-data.php');
require('sk1-img-data.php');
require('sk2-img-data.php');
require('sk3-img-data.php');
require('sk4-img-data.php');
require('sk5-img-data.php');
require('sk6-img-data.php');
require('sk7-img-data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css-style/index.css">
    <title>Barangay Cacapasan Management Information System</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
      header{
        position: -webkit-sticky; /* For older Safari browsers */
        position: sticky;        /* Standard property for other modern browsers */
        top: 0;                  /* Distance from the top of the viewport */
        color: white;            /* Text color of the links */
        z-index: 1000;           /* Ensure the navbar stays on top of other content */
      }

     #navs .navbar-nav .nav-link {
        color: white;
    }

   #navs .navbar-nav .nav-link:hover {
        color: black;
    }
    </style>
</head>
<body>
  <div class="contain">
    <header>
        <!-- Navbar -->
        <nav id="navs" class="navbar navbar-expand-lg  navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="index.php">BC-MIS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Main content -->
        <section class="py-5">
            <div class="container animation">
                <h1>Welcome to Barangay Cacapasan MIS</h1>
                <p>This is the official management information system for Barangay Cacapasan. Explore our services and stay updated with the latest news and events.</p>
                <!-- Add more content as needed -->
            </div>
        </section>

        <section id="about" class="py-5 sections">
          <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.9274575574154!2d120.72419338874671!3d15.72589302276615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33912dd7c68a74a7%3A0x61f732140cef2556!2sCacapasan%20Barangay%20Hall%20(Old)!5e1!3m2!1sen!2sph!4v1714607250177!5m2!1sen!2sph" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div>
          <h5>Cacapasan</h5>
          <h6>Municipality of Cuyapo Province of Nueva Ecija</h6>
          <p class="text">
          <b>Cacapasan</b> is a barangay in the municipality of Cuyapo, in the province of Nueva Ecija. Its population as determined by the 2020 Census was 763. This represented 1.12% of the total population of Cuyapo.</p>
          <h5>Historical population</h5>
            <p class="text">The population of Cacapasan grew from 356 in 1990 to 763 in 2020, an increase of 407 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 2.17%, or an increase of 74 people, from the previous population of 689 in 2015.</p>
          </div>
        </section>
     

        <section class="py-5">
          <h5 class="element">History of Cacapasan, Cuyapo, Nueva Ecija, Philippines</h5>
          <p class="history element">Barangay Cacapasan in Cuyapo, Nueva Ecija, has a rich history that spans centuries, deeply intertwined with the cultural, social, and economic developments of the region.

Pre-colonial Era:
Before the arrival of Spanish colonizers in the Philippines, Barangay Cacapasan was likely inhabited by indigenous peoples belonging to various tribes such as the Ilocanos, Pangasinenses, and Tagalogs. These tribes practiced agriculture, fishing, and hunting, establishing small communities in the area.

Spanish Colonial Period (1565-1898):
During the Spanish colonial period, the Spanish authorities established the barangay system, organizing the indigenous communities into smaller administrative units called "barangays." The exact founding date of Barangay Cacapasan is not precisely documented, but it was likely established during this period, possibly in the late 16th or early 17th century. The Spanish influence brought changes in governance, religion, and culture to the barangay.

American Period (1898-1946):
With the defeat of the Spanish in the Spanish-American War of 1898, the Philippines came under American rule. During this period, Barangay Cacapasan experienced further changes in governance and infrastructure development. The American colonial government introduced modern education, improved transportation, and initiated economic reforms in the region.

World War II and Japanese Occupation (1941-1945):
Like the rest of the Philippines, Barangay Cacapasan endured the hardships of World War II and the Japanese occupation. The residents experienced economic struggles, food shortages, and the atrocities of war. Many locals participated in the resistance movement against the Japanese forces, contributing to the eventual liberation of the Philippines.

Post-Independence Era (1946-Present):
After gaining independence from the United States in 1946, the Philippines underwent a period of nation-building and socio-economic development. Barangay Cacapasan, like other rural communities, transitioned into a more modernized society. Agriculture remained the primary livelihood, with rice, corn, and other crops being cultivated in the fertile lands surrounding the barangay.

In recent decades, Barangay Cacapasan has seen improvements in infrastructure, healthcare, and education. The barangay hall serves as the center of local governance, where elected officials address the needs of the community. The barangay also celebrates traditional festivals and events, preserving its cultural heritage amidst modernization.

Today, Barangay Cacapasan continues to thrive as a vibrant community, with its residents contributing to the socio-economic development of Cuyapo, Nueva Ecija, and the Philippines as a whole.</p>
        </section>

      <h5>Barangay Officials</h5>

        <section class="sec-con">
            <div class="element">
            <h6><?php echo $position ?></h6>
                <!-- Display the uploaded image -->
        <?php if (!empty($imagePath)) : ?>
            <img class="profile_" src="<?php echo $imagePath; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
          <h6><?php echo $fullname ?></h6>
            </div>

            <div class="element">
            <h6><?php echo $position1 ?></h6>
            <?php if (!empty($imagePath1)) : ?>
            <img class="profile_" src="<?php echo $imagePath1; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            <h6><?php echo $fullname1 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position2 ?></h6>
                <?php if (!empty($imagePath2)) : ?>
            <img class="profile_" src="<?php echo $imagePath2; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname2 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position3 ?></h6>
                <?php if (!empty($imagePath3)) : ?>
            <img class="profile_" src="<?php echo $imagePath3; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname3 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position4 ?></h6>
                <?php if (!empty($imagePath4)) : ?>
            <img class="profile_" src="<?php echo $imagePath4; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname4 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position5 ?></h6>
                <?php if (!empty($imagePath5)) : ?>
            <img class="profile_" src="<?php echo $imagePath5; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname5 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position6 ?></h6>
                <?php if (!empty($imagePath6)) : ?>
            <img class="profile_" src="<?php echo $imagePath6; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname6 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position7 ?></h6>
                <?php if (!empty($imagePath7)) : ?>
            <img class="profile_" src="<?php echo $imagePath7; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname7 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position8 ?></h6>
                <?php if (!empty($imagePath8)) : ?>
            <img class="profile_" src="<?php echo $imagePath8; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname8 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position9 ?></h6>
                <?php if (!empty($imagePath9)) : ?>
            <img class="profile_" src="<?php echo $imagePath9; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname9 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position10 ?></h6>
                <?php if (!empty($imagePath10)) : ?>
            <img class="profile_" src="<?php echo $imagePath10; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname10 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position11 ?></h6>
                <?php if (!empty($imagePath11)) : ?>
            <img class="profile_" src="<?php echo $imagePath11; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname11 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position12 ?></h6>
                <?php if (!empty($imagePath12)) : ?>
            <img class="profile_" src="<?php echo $imagePath12; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname12 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position13 ?></h6>
                <?php if (!empty($imagePath13)) : ?>
            <img class="profile_" src="<?php echo $imagePath13; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname13 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position14 ?></h6>
                <?php if (!empty($imagePath14)) : ?>
            <img class="profile_" src="<?php echo $imagePath14; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname14 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position15 ?></h6>
                <?php if (!empty($imagePath15)) : ?>
            <img class="profile_" src="<?php echo $imagePath15; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname15 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position16 ?></h6>
                <?php if (!empty($imagePath16)) : ?>
            <img class="profile_" src="<?php echo $imagePath16; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname16 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position17 ?></h6>
                <?php if (!empty($imagePath17)) : ?>
            <img class="profile_" src="<?php echo $imagePath17; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6><?php echo $fullname17 ?></h6>
            </div>
        </section>
    </main>

    <footer id="contact" class="bg-dark text-light text-center py-3">
        <!-- Footer content -->
        <div class="containersss">
          <div>
            <p>Contact</p>
            <?php echo $email ?><br>
            <?php echo $phone_number ?>
          </div>

          <div>
          <p>&copy; <?php echo date("Y"); ?> Barangay Cacapasan MIS. All rights reserved.</p>
          </div>
            
        </div>
    </footer>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>



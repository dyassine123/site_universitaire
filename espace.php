<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['role'])){
    $var = $_SESSION['email'];
    $mot = $_SESSION['password'];
    $role = $_SESSION['role'];
} else {
    header('Location: login.php');
    exit(); // exit after redirecting to stop executing the code further
}

//connexion avec le serveur (APACHE)
$username = "root";
$password = "";
$hostname = "localhost";

// activer le rapport d'erreur
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);

if (!$dbhandle) {
    die("Connection failed: " . mysqli_connect_error());
}

// connect with table
$selected = mysqli_select_db($dbhandle, "site-fac");

if (!$selected) {
    die("Selection failed: " . mysqli_error($dbhandle));
}

// Query the database to check if the user exists
$sql = "SELECT * FROM user WHERE email='$var' AND password='$mot' AND role='$role'";
$result = mysqli_query($dbhandle, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($dbhandle));
}

// check if any rows were returned by the query
if (mysqli_num_rows($result) == 0) {
    header('Location: login.php');
    exit(); // exit after redirecting to stop executing the code further
}

// fetch the row as an associative array
$row = mysqli_fetch_assoc($result);

// use the data from $row as needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="imgs/2.jfif" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">ISIKEF</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="index.php">Home</a></li>
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="Activités.php">Activities</a></li>
          <li><a href="events.php">Events</a></li>
          
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="membres.php">Membres</a></li>
              <li><a href="news.php">Our news</a></li>
              <li><a  href="calendar.php">calendar</a></li>
              <li><a href="Liens Utiles.php">Liens Utiles</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </li>

          
        </ul>       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
                        if (session_status() == PHP_SESSION_NONE) {
                          session_start();
                      }
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                            echo 
                           ' <a href="espace.php" class="get-started-btn">profil</a>    <a href="logout.php" class="get-started-btn">Logout</a> ';
                        } else {
                            echo '<a href="login.php" class="get-started-btn">Login</a>  <a href=" signup.php" class="get-started-btn">Sign Up</a>';
                        }
                        ?>
    </div>
  </header><!-- End Header -->
  <main id="main" data-aos="fade-in">
  <div class="breadcrumbs">
      <div class="container">
        <h2>WELCOME</h2>
      </div>
    </div>
<body>
<section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Institut Supérieur d'Informatique du Kef</h3>
              <p>
              <div class="text-center">
              <H4><?php echo $row['username'];?> <br></h4>
              <BR>
              <BR>
              <strong><?php echo $row['role'];?> </strong>
                      </div>
              
              </p>
             
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <a href="#">
                    <i class="bx bx-receipt"></i>
                    <h4>Informations</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                      </a>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <a href="#">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Paramètres</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                      </a>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <a href="#">
                    <i class="bx bx-images"></i>
                    <h4>photos</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                      </a>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    </main>
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">
    

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Institut Supérieur d'Informatique du Kef</h3>
        <p>
          5 rue Salah Ayache 7100  <br>
          Le kef<br>
          <strong>Phone:</strong> 78 201 056 Fax : 78 200 237<br>
          <strong>Email:</strong>www.isikef.rnu.tn<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join us </h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright © Tous droits réservés 2023 <strong><span>ISIKEF</span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
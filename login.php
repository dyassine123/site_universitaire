<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database = "site-fac";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbhandle = mysqli_connect($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    $email = mysqli_real_escape_string($dbhandle, $_POST['email']);
    $password = mysqli_real_escape_string($dbhandle, $_POST['password']);
    $role = mysqli_real_escape_string($dbhandle, $_POST['role']);
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' AND role='$role'";
    $result = mysqli_query($dbhandle, $sql);
    if (mysqli_num_rows($result) == 1) {
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['role'] = $role;
      header('Location: espace.php');
      $_SESSION['loggedin'] = true;
      exit;
    } else {
      $erreur = "Adresse Mail ou Mots de passe incorrectes ou role !";
    }
  }
}
mysqli_close($dbhandle);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
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

  <script language="javascript" type="text/jscript" src="login/login.js"></script>
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
          <ul>
            <li><a  href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
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

    </div>
  </header><!-- End Header -->

<!-- LOGIN FORM CREATION -->
<div class="background1"></div>
<div class="container1">
    <div class="item1">
        <h2 class="logo1"><i class='bx bxl-xing'></i>Institut Supérieur d'Informatique du Kef</h2>
        <div class="text-item1">
            <h2>Welcome! <br><span>
            </span>
            
          </h2>
            <p><strong> </strong></p>
        </div>
    </div>
    <div class="login-section1">
        <div class="form-box login">
            <form action="" method="post">
                <h2>Login </h2>
                <?php
                        session_start();
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                            echo 
                           '<h4 id="true">your account is created </h4> ';
                        }
                        
                        ?>
                <?php 
                   if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ; ?>
                    <p class="Erreur"> <?php  echo $erreur ?></p> 
                    <?php   }
                    ?>
                
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" required id="Email" name="email">
                    <label >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password" required id="Password" name="password">
                    <label>Password</label>
                </div>
                <div class="remember-password">
                <label for="">
                  <input type="radio" class="role" name="role" value="enseignant" required  > ENSEIGNANT
                  <input type="radio" class="role" name="role" value="etudiant"  >  ETUDIANT 
                  <input type="radio" class="role" name="role" value="responsable" >  RESPONSABLE
            </div>
                <button class="btn1" >Login </button>
            </form>
        </div>
    </div>
</div>
 <!-- SIGN UP FORM CREATION -->

</body>

</html>
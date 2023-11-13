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
                        session_start();
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                            echo 
                           ' <a href="espace.php" class="get-started-btn">profil</a>    <a href="logout.php" class="get-started-btn">Logout</a> ';
                        } else {
                            echo '<a href="login.php" class="get-started-btn">Login</a>  <a href=" signup.php" class="get-started-btn">Sign Up</a>';
                        }
                        ?>
    </div>
  </header><!-- End Header -->

  <main id="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Institut Supérieur <br>d'Informatique du Kef</h1>
      </div>
    </section><!-- End Hero -->
       <!-- ======= About Section ======= -->
       <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="imgs/1.jfif" class="img-fluid" width= "80%" height="100%"> 
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Présentation</h3>
              <p class="fst-italic">
                L’Institut  Supérieur d’Informatique du Kef a été crée selon le décret n°06-1587 du 6 juin 2006 portant création d’établissements  d’enseignement supérieur et de recherche.
          
                En effet, l’ISIKef est l’une des établissements universitaires de l’université de Jendouba.
              </p>
              <ul>
  
                <li>Responsables :</li>
                <li>Directeur : Mr. Hayouni Mohamed</li>
                <li>Secrétaire général : Mr. KHAMMASSI AISSA</li>
              </ul>
              <ul>
  
                <li>Cordonnées :</li>
                <li><strong>Adresse :</strong> 5 rue Salah Ayache 7100 Le Kef</li>
                <li><strong>Téléphone :</strong> 78 201 056    Fax : 78 200 237</li>
               <li><strong> Site web :</strong> www.isikef.rnu.tn</li>
              </ul>
  
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>Activités</p>
          </div>

        </div>

      </div>


      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2> <strong>administration</strong></h2>
          </div>
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="imgs/directeur2.jpg" class="testimonial-img" alt="">
                    <h3>Mr. Hayouni Mohamed</h3>
                    <h4><strong> Directeur de l'isi kef </strong> </h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Dr. Mohamed Hayouni received his B.S. degree in electrical engineering from the electrical engineering department, Higher National School of Engineers (ENSIT) of Tunis, Tunisia in 2002 and the M. Eng. and the Ph.D. degrees in Information Technology and Communication from the Higher School of Communications (Sup’Com) of Tunis, Tunisia in 2005 and 2012 respectively
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="imgs/aissa2.jpg" class="testimonial-img" alt="">
                    <h3>Mr. KHAMMASSI AISSA</h3>
                    <h4> <strong>Secrétaire général de l'isi kef </strong> </h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->


  </main><!-- End #main -->


  

  <!-- ======= Footer ======= -->
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NEWS</title>
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
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="Activités.php">Activities</a></li>
          <li><a href="events.php">Events</a></li>
          
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="membres.php">Membres</a></li>
              <li><a class="active" href="news.php">Our news</a></li>
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
    <br>
    <br>

    <!-- ======= Breadcrumbs ======= -->
    
    <br> 
    <br>



    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">DEMANDE DE STAGE ETE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Annonce stage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">PEEJ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Avis Consultation PAQ-DGSE2022</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Meilleures Initiatives entrepreneuriales</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>DEMANDE DE STAGE ETE</h3>
                    <p class="fst-italic">2023-01-20</p>
                    <a href="http://www.isikef.rnu.tn/upload/1674203150.pdf">DEMANDE DE COLLABORATION POUR ACCUEILLIR LES ETUDIANTS DE L'ISIKEF EN STAGE D'ETE.pdf</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="imgs/new 1.php" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Annonce stage</h3>
                    <p class="fst-italic">2022-12-05</p>
                    <p>Fiche de demande de stage par specialité :</p>
                    <a href="http://www.isikef.rnu.tn/upload/1670236574.pdf">FICHE DE PROPOSITION DE STAGE</a><br>
                    <a href="http://www.isikef.rnu.tn/upload/1670235690.pdf">DEMANDE DE STAGE IM</a><br>
                    <a href="http://www.isikef.rnu.tn/upload/1670235685.pdf">DEMANDE DE STAGE LIRS</a><br>
                    <a href="http://www.isikef.rnu.tn/upload/1670235686.pdf">DEMANDE DE STAGE GL</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="imgs/new 2.php" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>PEEJ</h3>
                    <p class="fst-italic">2022-11-15</p>
                    <p>   L'Université de Jendouba a lancé un appel à candidature pour la sélection des référents du Pole de l'Etudiant Entrepreneur PEEJ en vue de l'accompagnement des étudiants entrepreneurs dans les établissements universitaires de l'Université de Jendouba et leurs octroyer le Statut de l'Etudiant Entrepreneur selon la circulaire 42/19 du 08 Novembre 2019.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="imgs/new3.php" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Avis Consultation PAQ-DGSE2022</h3>
                    <p class="fst-italic">2022-09-24</p>
                    <p>Avis d’une consultation N°01-2022-PAQ DGSE_septembre 2022</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="imgs/new 4.php" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Meilleures Initiatives entrepreneuriales</h3>
                    <p class="fst-italic">2022-09-21</p>
                    <p>Tu as une idée de projet Innovante et tu veux le valoriser et l'ameliorer 
                      Veillez s'inscrire au workshop "Meilleures Initiatives entrepreneuriales" au plus tard le 28/09/2022 via ce lien :
                      <a href="https://forms.office.com/pages/responsepage.aspx?id=TWbW27lO60aZ2FxDuhU8YWCgHtxRmT9NqoEVATYSY3VUNURTNURZUlZLNlo3RDhSS1ZCTTIxRDBQTC4u"><s>>Lien</s></a> <br>
                      <strong>NB : seuls les étudiants de l'isikef (Ancien et nouveau )sont autorisés à s'inscrire </strong>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="imgs/new 5.php" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main><!-- End #main -->

  <<!-- ======= Footer ======= -->
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
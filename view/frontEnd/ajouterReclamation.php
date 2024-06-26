<?php
/*include_once 'C:\xampp\htdocs\tache reclamation\Model\Reclamation.php';
include_once 'C:\xampp\htdocs\tache reclamation\Controller\ReclamationC.php';
$error = "";

    // create adherent
    $Reclamation = null;
    $ReclamationC = new ReclamationC();
    if (
    isset($_POST["ID_RECLAMATION"]) &&
    isset($_POST["NAME"]) &&
   // isset($_POST["image"]) &&
   isset($_FILES["image"]) &&
    isset($_POST["EMAIL"]) &&
    isset($_POST["SUBJECT"])&&
    isset($_POST["MESSAGE"]) 
    ) {
        if (
            !empty($_POST["ID_RECLAMATION"]) &&
            !empty($_POST["NAME"]) &&
           // !empty($_POST["image"]["name"]) &&
           !empty($_FILES["image"]["name"]) &&
            !empty($_POST["EMAIL"]) &&
            !empty($_POST["SUBJECT"])&&
            !empty($_POST["MESSAGE"]) 
        ) {
          // Get the temporary filename of the uploaded image
        $tmp_name = $_FILES["image"]["tmp_name"];

        // Generate a unique filename for the image
        $filename = uniqid() . '.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        // Move the uploaded image to a permanent location on the server
      
        $destination = 'C:/xampp/htdocs/tache reclamation/View/front/image/' . $filename;
        move_uploaded_file($tmp_name, $destination);

        // Create a new Soin object with the image filename
            $Reclamation = new Reclamation(
                $_POST['ID_RECLAMATION'],
                $_POST['NAME'],
                $filename,
                $_POST['EMAIL'],
                $_POST['SUBJECT'],
                $_POST['MESSAGE']
            );
            $ReclamationC->ajouteReclamation($Reclamation);
           //header('Location:afficherReclamation.php');
        }
        else
            $error = "Missing information";
    }*/

    include_once '../../model/Reclamation.php';
include_once '../../controller/ReclamationC.php';
session_start();


if(isset($_SESSION["id"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}
//include 'header.php';

// Create an empty error message
$error = "";

// Create a new Reclamation object
$Reclamation = null;

// Create a new ReclamationC object
$ReclamationC = new ReclamationC();

// Check if the form has been submitted
if (
    isset($_POST["ID_RECLAMATION"]) &&
    isset($_POST["NAME"]) &&
    isset($_FILES["image"]) &&
    isset($_POST["EMAIL"]) &&
    isset($_POST["SUBJECT"]) &&
    isset($_POST["MESSAGE"])
) {
    // Check if the required fields are not empty
    if (
        !empty($_POST["ID_RECLAMATION"]) &&
        !empty($_POST["NAME"]) &&
        //!empty($_POST["image"]) &&
        !empty($_FILES["image"]["name"]) &&
        !empty($_POST["EMAIL"]) &&
        !empty($_POST["SUBJECT"]) &&
        !empty($_POST["MESSAGE"])
    ) {
        // Get the temporary filename of the uploaded image
        $tmp_name = $_FILES["image"]["tmp_name"];

        // Generate a unique filename for the image
        $filename = uniqid() . '.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        // Move the uploaded image to a permanent location on the server
        $destination = '../images/' . $filename;
        move_uploaded_file($tmp_name, $destination);

        // Create a new Reclamation object with the image filename
        $Reclamation = new Reclamation(
            $_POST['ID_RECLAMATION'],
            $_POST['NAME'],
            $filename,
           //$_POST['image'],
            $_POST['EMAIL'],
            $_POST['SUBJECT'],
            $_POST['MESSAGE']
        );

        // Add the Reclamation to the database
        $ReclamationC->ajouteReclamation($Reclamation);

        // Redirect the user to the Reclamation list page
        //header('Location: afficherReclamation.php');
       
    } else 
        // Set the error message
        $error = "Missing information";
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>




  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">EL COLISEUM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto" href="pageHome.php">Home</a></li>
            <li><a class="nav-link scrollto" href="#">About</a></li>
            <li><a class="nav-link scrollto" href="pageReservation.php">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto active" href="#">Reclamation</a></li>
            <li><a class="nav-link scrollto" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>
      <a href="index.php" class="book-a-table-btn scrollto">Profile</a>
<?php 
                          if(isset($_SESSION['id'])){
                             ?>

                        <li class=""><a class="" href="../actions/logout.php">
                        <style>
    .logout-link {
      position: absolute;
      top: 0;
      right: 0;
    }
  </style>
						
							<p>LOG OUT</p>
					</a></li>
          <?php 
                   }
    
                       
                     ?>
        </div>
    
      
    <center>
    
      
    <div id="google_translate_element"></div> 
      
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},
 'google_translate_element'); 
    } 
    </script>   
    <script type="text/javascript"
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script> 
      
   
  </center>
   


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>EL COLISEUM</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

        
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

      
                                 <button onclick="window.print()">Print this page</button>

         <div class="col-md-6 form-group" ID_RECLAMATION="error">
            <?php echo $error; ?>
         </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 23:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>


      <div class="col-lg-8 mt-5 mt-lg-0">
        <form action="" method="post" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="number" name="ID_RECLAMATION" class="form-control" id="ID_RECLAMATION" placeholder="Your ID" value="<?=$_SESSION['id']?>">
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="NAME" class="form-control" id="NAME" placeholder="Your Name" value="<?=$_SESSION['firstname']?>">
                </div>
                <div class="col-md-6 form-group">
                    <input type="file" name="image" class="form-control" id="image" placeholder="image">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="EMAIL" id="EMAIL" placeholder="Your Email" value="<?=$_SESSION['email']?>">
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="SUBJECT" id="SUBJECT" placeholder="SUBJECT">
            </div>
      
                <div class="form-group mt-3">
                    <textarea class name="MESSAGE" rows="8" placeholder="MESSAGE"></textarea>
                </div>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input  class="text-center" type="reset" value="Annuler" >
                    </td>
                </tr>
            </form>
        </div>


    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
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
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



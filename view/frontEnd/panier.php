<?php 
session_start();
require_once '../../config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PANIER </title> 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">
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
  <link href="assets/css/produits.css" rel="stylesheet">
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

      <h1 class="logo me-auto me-lg-0"><a href="index.html">EL-COLISEUM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          
          <li><a class="nav-link scrollto" href="#specials">PANIER(<?php echo count($_SESSION['panier'])?>)</a></li>
      
        
         
          
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="pageHome.php" class="book-a-table-btn  scrollto d-none d-lg-flex "><i class="fa-solid fa-house fa-bounce"></i> | HOME</a>
      

    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>WELCOME TO <span>EL-COLISEUM</span></h1>
          <h2>YOUR TICKET TO A WORLD OF CREATIVITY !</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our event</a>
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

    <!-- ======= About Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PANIER:</h2>
         
        </div>
        <div class="section-title">
         
          <p>VOTRE PANIER:</p>
        </div>
        
      <div class="container">
          <div class="row">
       
          

  <?php
  $panier = $_SESSION['panier'];
  
if(empty($panier)){
?>
<div class="alert alert-warning" role="alert">

votre panier est vide.
</div>

<?php 
}else{

  $idproduit = array_keys($panier); //cle de tableau
  $idproduit = implode(',',$idproduit) ;
  $pdo = config::getConnexion();
  try{
  $produits = $pdo->query("SELECT * FROM produit WHERE id IN ($idproduit) ")->fetchALL(PDO::FETCH_ASSOC);
  }
  catch (exception $e){
    die('error: ' .$e->getMessage());
}
    ?> 
 <table  class="table table-dark table-striped "> 
    <tr>
<th scope="col"class="table-primary" >#</th>
<th scope="col" class="table-primary">IMAGE</th>
<th scope="col" class="table-primary">NOM</th>
<th scope="col" class="table-primary">QUANTITE</th>
<th scope="col" class="table-primary">PRIX</th>
<th scope="col" class="table-primary">TOTAL</th>

    </tr>
    <?php
    $total=0;
    foreach($produits as $produit ){
$idproduit=$produit['id'];
$totalproduit =  $produit['prix'] * $panier[$idproduit];
$total =$totalproduit+$total;
?>
<tr>
    <td>#<?php echo $produit['id'] ?></td>
    <td><img class="img-fluid" width="50" height="50"  src="../uplaod/produit/<?php echo $produit['image'] ?>" ></td>
    <td><?php echo $produit['nom'] ?></td>
    <td>x <div>
      <?php
      $qty = $_SESSION['panier'][$idproduit] ?? 0;
      
      if ($qty == 0) {
        $color = 'btn-primary';
        $button = '<i class="fa fa-light fa-cart-plus"></i>';
    } else {
        $button = '<i class="fa-solid fa-pencil"></i>';
    }
      
      ?>
<form method="POST" class="counter d-flex" action="ajouter_panier.php">
<button  onclick="return false;" class="btn btn-primary  mx-2 counter-mois">-</button>
      
      <input type="hidden" name="id" value="<?php echo $idproduit?>">
      <input type="number" value="<?php echo  $qty ?>"  class="form-control" name="qty" id="qty" max="99" >
      <button onclick="return false;" class="btn btn-primary mx-2 counter-plus">+</button>   
      <button class="btn btn-success btn-sm" type="submit" name="ajouter">
                <?= $button ?>
            </button>
      <?php 
      if($qty !==0){

     
      ?>
       <button formaction="supprimer-panier.php" class="btn btn-sm btn-danger mx-1 " type="submit"
                        name="supprimer">
                    <i class="fa-solid fa-trash"></i>
          
      <?php 
}
      ?>
 </form>
       </div></td>
       <td><?php echo $produit['prix'] ?>$</td>
       <td><?php echo $totalproduit ?>$</td>

</tr>
<?php

    }
    ?> 
<tfoot>
    <tr>
        <td colspan="5" align="right"><strong>
          TOTAL:</strong></td>
        <td><?php echo $total ?>$</td>
    </tr>
    <tr>
    <td colspan="6" align="right">
      <?php 
      if(isset($_POST['vider'])){

      $_SESSION['panier']=[];
      echo "<script> window.location.href='panier.php'; </script>";
    
      
      }
      ?>
          <form  method="post">
            <input type="submit" name="valider" class="btn btn-success"value="Valider la commande">
            <input onclick="return confirm('voulez vous vider le panier')" type="submit" name="vider" class="btn btn-danger"value="Vider le panier">
          </form> 
        </td>
    </tr>
</tfoot>


   </table>
    <?php
}
?>
        
        



       
                </div>



         
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End testimonial item -->

           <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
   <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

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
          <div id="google_translate_element"></div>

<script> 
function googleTranslateElementInit()
{
  new google.translate.TranslateElement(
  {pageLanguage: 'en' },
  'google_translate_element'
);
};

</script>

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
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src="assets/js/counter.js"></script>
  
  <script src="assets/js/main.js"></script>
 
 
</body>

</html>
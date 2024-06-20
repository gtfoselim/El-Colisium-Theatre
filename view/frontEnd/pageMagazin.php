<?php 
          session_start();
        if(isset($_SESSION["id"])) {
        }else{
          session_destroy();
          header('Location: signin.php');
        
            
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
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

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
        <li><a class="nav-link scrollto" href="pageHome.php">Home</a></li>
            <li><a class="nav-link scrollto" href="#">About</a></li>
            <li><a class="nav-link scrollto" href="pageReservation.php">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto" href="ajouterReclamation.php">Reclamation</a></li>
            <li><a class="nav-link scrollto active" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
         
          
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="http://127.0.0.1/produit/view/addcat.php" class="book-a-table-btn scrollto d-none d-lg-flex">ADMIN</a>
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



    <!-- ======= Menu Section ======= -->
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>CATEGORIS</h2>
          <p><i class="fa fa-duotone fa-list fa-beat-fade"> </i> |  list des categories</p>
        </div>
        <?php 
       
require_once '../../config.php';
$pdo = config::getConnexion();
try{
$categories = $pdo->query("SELECT * FROM categorie")->fetchAll(PDO::FETCH_OBJ);

}
catch (exception $e){
  die('error: ' .$e->getMessage());
}
?>




        <div class="row" data-aos="fade-up" data-aos-delay="100" >
          <div class="col-lg-3">


            <ul class="nav nav-tabs flex-column" >
<?php 
foreach($categories as $categorie){
  ?> 
    <li class="nav-item">
 <a class="nav-link " href="categorie.php?id=<?php echo $categorie->id ?>">
 <i class="<?php echo $categorie->icone;      ?>"></i> | <?php    echo   $categorie->nom ?>
</a>
</li>
<?php 
 

}

?>

            
                               </ul>
                         </div>



              <div class="col-lg-9 mt-4 mt-lg-0">
                 <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="#" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
      </div>
      </div>
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
    <section id="chefs" class="chefs">


      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PRODUITS</h2>
          <p><i class=" fa fa-solid fa-shop fa-beat"></i>   |  LISTE DES PRODUITS </p>
        </div>
      
        <?php  require_once '../../config.php';
          $pdo = config::getConnexion();
          try{
      $produits = $pdo->query("SELECT produit.*,categorie.nom as 'categorie_nom' FROM produit INNER JOIN categorie ON produit.id_categorie = categorie.id")->fetchAll(PDO::FETCH_OBJ);
    }
   catch (exception $e){
    die('error: ' .$e->getMessage());}
      ?>

        <div class="row">
        
        
        <?php
foreach($produits as $produit) 
{  $idproduit=$produit->id; ?>  

<div class=" card text-bg-dark card mb-3 col-md-3 m-4">
  <img src="../uplaod/produit/<?= $produit->image ?>" width="700" height="400" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="produit.php?id=<?php echo $produit->id ?>" class="btn stretched-link " ><i class="fa fa-solid fa-magnifying-glass fa-bounce"></i> DETAILS</a>
    <h3 class="card-title"><?php echo $produit->nom ?></h3>
    <hr>
    <h4 class="card-text"><?php echo $produit->prix ?>$</h4> 
    <hr>
    <h6 class="card-text"><?php echo $produit->description ?></h6> 
    <p class="card-text"><small class="text-body-secondary">ajouter le <?php echo $produit->date_creation ?></small></p>
  </div>
  <div class="card-footer" style="z-index:10">
  <div>
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
       </div>
  </div>
</div>
  <?php 

}
if(empty($produits)){
?>
<div class="alert alert-secondary" role="alert">
 PAS DE PRODUITS POUR L'INSTANT
</div> 
<?php
  

}
?>

         

         

        </div>

      </div>
    </section><!-- End Chefs Section -->

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
            <h4>CHOISE YOUR LAGUAGE</h4>
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
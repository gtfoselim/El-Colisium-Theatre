<?php
include '../../Controller/UserC.php';
include '../../Model/User.php';
/*session_start();
$UserC=new UserC();
//$id = $UserC->getId();
$liste = $UserC->getUser('id');



  //header('Location: index.php');}
/*else{
  session_destroy();
	header('Location: tables-data.php');

    
}
*/
/*include "../actions/authorize.php";
  include $_SERVER['DOCUMENT_ROOT']."/register/Perfection/Controller/userController.php";
  $controller = new UserController();
  $id = (int)$_GET['id'];
  $infos = array("id"=>$id);
  $user=$controller->getUserById($infos);
  $row = $user->makeTableRow();*/

session_start();


if(isset($_SESSION["id"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}



/*if (isset($_SESSION["id"])){

  $mysqli =config::getConnexion();
  $sql= "SELECT * FROM users where id ={$_SESSION["id"]}";
  $result = $mysqli->query($sql);
  $User = $result->fetch();
}*/

/*if(isset($_SESSION["id"])) {

  //$User = new User($_POST['username'],$_POST['firstname'], $_POST['lastname'], $_POST['Email'], $_POST['phone'], $_POST['password'], $_POST['photo'] );
  
}else{
  session_destroy();
	header('Location: tables-data.php');  
}*/
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Profile</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../assets/boxicons/css/boxicons.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../../assets/style.css" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
            <h1><a href="#">El Colisium</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto" href="pageHome.php">Home</a></li>
            <li><a class="nav-link scrollto" href="#">About</a></li>
            <li><a class="nav-link scrollto" href="pageReservation.php">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto" href="ajouterReclamation.php">Reclamation</a></li>
            <li><a class="nav-link scrollto" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav> <!--.navbar -->

        <a href="#book-a-ticket" class="book-a-ticket-btn scrollto">Profile</a>
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
        
        </header><!-- End Header -->

        <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../../assets/img/slide/gtheatre.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Edit Profile</a>
                  <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Delete Profile</a>
                  
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(../../assets/img/slide/gtheatre2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                    <a href="#book-a-ticket" class="btn-menu animate__animated animate__fadeInUp scrollto">Edit Profile</a>
                    <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Delete Profile</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(../../assets/img/slide/gtheatre3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Edit Profile</a>
                    <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Delete Profile</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  <div class="row">
<div class="col-5">
</div>

  <!-- ======= Book A Ticket Section ======= -->
  
  <div class="container">
  <div class="section-title">
          <h2> <span>Your Profile</span></h2>
        </div>
    
        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                <?php
                        if(isset($_SESSION["id"]))
                        {
                            //$r=$UserC->getUser($_GET['id']);
                            
                                ?>
                                <img src="../images/<?php echo $_SESSION['photo']; ?>" alt="" width="100" height="100" class="round-image">
                                <style>
                                   .round-image {
        display: block;
        margin: auto;
        border-radius: 50%;
    }
                                  </style>
                            <div class="container">    
                               <form method="POST" class="php-email-form" id="formUser">
                               <div class="row">
                                <div class="col-lg-4 col-md-6 form-group mt-3">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="<?=$_SESSION['username']?>">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mt-3">
                                    <label>FirstName</label>
                                    <input type="text" name="firstname" class="form-control" value="<?=$_SESSION['firstname']?>">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mt-3">
                                    <label>lastname</label>
                                    <input type="text" name="lastname" class="form-control" value="<?=$_SESSION['lastname']?>">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mt-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="<?=$_SESSION['password']?>">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mt-3">
                                    <label>Email</label>
                                    <input type="text" name="Email" class="form-control" value="<?=$_SESSION['email']?>">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mt-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="<?=$_SESSION['phone']?>">
                                </div>
                               
                        </div>
                        <br><br><br>
                                <div class="text-center">
                                <a href="updateprofil.php?id= <?= $_SESSION['id'];?>">Update Profile</a></div>
                                <div class="text-center">   
                                 <a href="deleteprofil.php?id= <?= $_SESSION['id'];?>">Delete Profile </a></div>
            
                                </form>
                        </div>
<?php
                        }
                        
                        ?>


                    
<br><br><br>
  <footer id="footer">
    <div class="container">
      <h3>El Colisium</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>El Colisium</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="#">Mehdi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    Vendor JS Files -->
   <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/main.js"></script>
  <script src="../../assets/script.js"></script>

    </body>
</html>
<?php
//session_start();
    include_once '../../Model/Admin.php';
    include_once '../../Controller/AdminC.php';
    
  if(isset($_POST["login"])) {
    $AdminC = new AdminC();
    if($AdminC->signinAdmin($_POST["password_admin"],$_POST["email_admin"])!="")
    {
      $a=$AdminC->signinAdmin($_POST["password_admin"],$_POST["email_admin"]);
      if ($a["active_admin"]==1)
{
    session_start();
           

    $_SESSION["id_admin"]= $a["id_admin"];
    $_SESSION["username_admin"]=$a["username_admin"];
    $_SESSION["firstname_admin"]= $a["firstname_admin"];
    $_SESSION["lastname_admin"]=$a["lastname_admin"];
    $_SESSION["email_admin"]= $a["email_admin"];
    $_SESSION["phone_admin"]=$a["phone_admin"];
    $_SESSION["password_admin"]= $a["password_admin"];
    $_SESSION["active_admin"]= $a["active_admin"];
    $_SESSION["poste_admin"]=$a["poste_admin"];
    $_SESSION["photo_admin"]=$a["photo_admin"];

    if($_SESSION["poste_admin"]=="admin")
    {
        header("location:../backEnd/tables_admin.php");
    }
    else
    {
        header("location:pageHome.php");
    }
}
  }
}

   /* $error = "";

    // create offre
    $user = null;



    // create an instance of the controller
    $UserC = new UserC();
    if (
		isset($_POST["email"]) &&
        isset($_POST["password"]) 
  
    ) if (
        isset($_POST["email"]) &&
        isset($_POST["password"])  		
    
        
    ){
              
           if( $UserC->recupereremail($_POST["email"])!="")
           {
         
             if ($UserC->signin($_POST["password"],$_POST["email"])!="")
             {
                $a=$UserC->signin($_POST["password"],$_POST["email"]);
               
if ($a["active"]==1)
{
    session_start();
           

    $_SESSION["id"]= $a["id"];
    $_SESSION["username"]=$a["username"];
    $_SESSION["firstname"]= $a["firstname"];
    $_SESSION["lastname"]=$a["lastname"];
    $_SESSION["email"]= $a["email"];
    $_SESSION["phone"]=$a["phone"];
    $_SESSION["password"]= $a["password"];
    $_SESSION["active"]= $a["active"];
    $_SESSION["role"]=$a["role"];
    $_SESSION["photo"]=$a["photo"];

    if($_SESSION["role"]=="user")
    {
        header("location:index.php");
    }
    else
    {
        header("location:signup.php");
    }
}
else
{       
    echo '<script>alert("your are banned")</script>';


    
}
                 
                   
             }
             else
             {
                echo '<script>alert("wrong password")</script>';

             }
           }
           else
           {
            echo '<script>alert("wrong email or username")</script>';

           }
        }
        else $error = "Missing information";*/

    
?>



<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Login</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="../../assets/img/favicon.png" rel="icon">
        <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <li><a class="nav-link scrollto active" href="pageReservation.php">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto" href="ajouterReclamation.php">Reclamation</a></li>
            <li><a class="nav-link scrollto" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav> <!--.navbar -->

        <a href="#book-a-ticket" class="book-a-ticket-btn scrollto">Login</a>

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
                  <!--<a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Events</a>
                  <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Ticket</a>
                  <a href="#book-a-place" class="btn-menu animate__animated animate__fadeInUp scrollto">book the Place for event</a>-->
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
                
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(../../assets/img/slide/gtheatre3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
               
                  
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

  <!-- ======= Book A Ticket Section ======= -->
  <section id="book-a-ticket" class="book-a-ticket">
      <div class="container">

        <div class="section-title">
          <h2> <span>Login Admin</span></h2>
        </div>
        <?php 
                        /*  if(isset($_SESSION['id'])){
                             ?>

                        <li class=""><a href="">
						
							<p>LOG OUT</p>
					</a></li>
                 
                    <?php 
                    }
                    //else{*/
                    
                    ?>
        <form action="" method="post" class="php-email-form" id="formUser">
          <div class="row">
            

            
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="email_admin" class="form-control" id="email_admin" placeholder="Your Email">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="password" class="form-control" name="password_admin" id="password_admin" placeholder="Password">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            
            
            

          </div>
          <div class="text-center"><button type="submit" name="login">Login</button></div>
          <div class="link">Don't have an account ?<a href="signupadmin.php"> Sign up Now</a></div><br>
          <!--<a href="forgetpassword.php"><input class="btn hvr-hover" type="" value="forgot password?"> </a>
          <style>
            .btn{
        display: block;
        margin: 0 auto;
        text-align: center;
      }
            </style>
        </form>

      </div>-->
    </section><!-- End Book A Ticket Section -->

      
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/main.js"></script>
  <script src="../../assets/script.js"></script>

    </body>
</html>
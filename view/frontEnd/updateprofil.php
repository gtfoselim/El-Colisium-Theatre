<?php
session_start();

if(isset($_SESSION["id"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}
?>

<?php
  

            include '../../Controller/UserC.php';
            include '../../Model/User.php';
        


            $error = "";

    // create offre
    $user = null;

   

    

    // create an instance of the controller
    $UserC = new UserC();
    if (
		isset($_POST["username"]) &&		
        isset($_POST["firstname"]) &&
		isset($_POST["lastname"]) &&
        isset($_POST["email"]) &&		
        isset($_POST["phone"]) &&
        isset($_POST["password"]) &&
        isset($_POST["photo"])
    ) if (
        isset($_POST["username"]) &&		
        isset($_POST["firstname"]) &&
		isset($_POST["lastname"]) &&
        isset($_POST["email"]) &&		
        isset($_POST["phone"]) &&
        isset($_POST["password"]) &&
        isset($_POST["photo"])
    ){
        if (strlen($_POST["password"])<2) 
        { 
            echo '<script>alert("passwor must be more then 8 characters")</script>';
        }
       /* else if ((($UserC->recupereremail($_POST["email"]))!="")&&($_POST["email"]!=$_SESSION["email"]))
        {
            echo '<script>alert("email already used")</script>';
        }
        else if ((($UserC->recupererusername($_POST["username"]))!="")&&($_POST["username"]!=$_SESSION["username"]))
        {
            echo '<script>alert("username already used")</script>';
        }
        else if (strlen($_POST["num_tel"])!=8)
        {
            echo '<script>alert("must use valid phone number")</script>';
        }*/
        else
        {
            $user = new User(
                $_POST["username"],
                $_POST["firstname"],		
                 $_POST["lastname"] ,
                 $_POST["email"],
                 $_POST["phone"],	
                 $_POST["password"],
                 $_POST["photo"]
              );
         
            $UserC->updateUser($_SESSION["id"],$user);
            
            $_SESSION["username"]=  $_POST["username"];
            $_SESSION["firstname"]=  $_POST["firstname"];		
              $_SESSION["lastname"]= $_POST["lastname"] ;
             $_SESSION["email"]=  $_POST["email"];
             $_SESSION["phone"]= $_POST["phone"];	
              $_SESSION["password"]= $_POST["password"];
             $_SESSION["photo"]= $_POST["photo"];
            header("Location:index.php");
        }
        }
        else
            $error = "Missing information";

           /* $UserC = new UserC();
            if(isset($_POST['update_User'])){
                $User = new User($_POST['username'],$_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['photo'] );
                $UserC->updateUser($_GET['id'],$User);
                header('Location:index.php');
            }*/

        
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
            <li><a class="nav-link scrollto active" href="pageReservation.php">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto" href="ajouterReclamation.php">Reclamation</a></li>
            <li><a class="nav-link scrollto" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav> <!--.navbar -->

        <a href="#book-a-ticket" class="book-a-ticket-btn scrollto">Update Profile</a>

      
        <?php 
                          if(isset($_SESSION['id'])){
                             ?>

                        <li class=""><a href="../actions/logout.php">
						
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
          <h2> <span>Update Profile</span></h2>
        </div>
       
                    <?php
                        if(isset($_SESSION['id']))
                        {
                            $r=$UserC->getUser($_SESSION['id']);
                                ?>
        <form action="" method="post" class="php-email-form" id="formUser">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $_SESSION['username']; ?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Your First Name" value="<?=$r['firstname']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Your Last Name" value="<?=$r['lastname']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
             
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="email" class="form-control" id="email" placeholder="Your Email" value="<?=$r['email']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?=$r['phone']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?=$r['password']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="file" id="photo" name="photo" class="file-input" placeholder="Select a Photo " value="<?=$r['photo']?>"
                            oninvalid="this.setCustomValidity('Select a profile image')"
                            oninput="this.setCustomValidity('')" accept="image/jpg, image/jpeg, image/png">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
           
          </div>

          <div class="text-center"><button type="submit" name="update_User">Update</button></div>
        </form>
        <?php
                        }
                        
                        ?>
      </div>
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
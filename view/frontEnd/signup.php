<?php
   


  
   // Start session
   /*session_start();
   include "../controller/UserC.php";
    include "../model/User.php";
    
   // Initialize error variable
   $error = "";
   
   // If form is submitted
   if (isset($_POST['submit_user'])) {
       // Check if all required fields are present
       if (
           isset($_POST["username"]) &&
           isset($_POST["firstname"]) &&
           isset($_POST["lastname"]) &&
           isset($_POST["email"]) &&
           isset($_POST["phone"]) &&
           isset($_POST["password"]) &&
           isset($_POST["photo"])
       ) {
           // Sanitize user input
           /*$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
           $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
           $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
           $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
           $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
           $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password for security
           $photo = $_FILES["photo"]["name"]; // Get the name of the uploaded photo
           
           // Validate user input
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $error = "Invalid email address";
           } else if (strlen($_POST["password"]) < 8) {
               $error = "Password must be at least 8 characters long";
           } else if ($_FILES["photo"]["size"] > 5000000) { // 5MB maximum file size
               $error = "Photo size must be less than 5MB";
           } else {
               // Create new user object
               $user = new User();
               
               // Add user to database
               $UserC = new UserC();
               $UserC->addUser($user);
               
               // Store user data in session
               
               $_SESSION["username"] = $user->getuserName();
               $_SESSION["firstname"] = $user->getFirsNname();
               $_SESSION["lastname"] = $user->getLastName();
               $_SESSION["email"] = $user->getEmail();
               $_SESSION["phone"] = $user->getphone();
               $_SESSION["password"] = $user->getpassword();
               //$_SESSION["role"] = $user->getrole();
               $user->$role="user";
               $_SESSION["photo"] = $user->getphoto();
               
               // Upload photo to server
               /*$target_dir = "uploads/";
               $target_file = $target_dir . basename($_FILES["photo"]["name"]);
               move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
               
               // Redirect to homepage
               header("Location: index.php");
          // }
       } else {
           $error = "Missing information";
       }
   }*/



   include "../../controller/UserC.php";
    include "../../model/User.php";
    

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
       /*if (strlen($_POST["password"])<3) 
       { 
           echo '<script>alert("passwor must be more then 8 characters")</script>';
       }*/
       if (($UserC->recupereremail($_POST["email"]))!="")
       {
           echo '<script>alert("email already used")</script>';
       }
      /* else if (($UserC->recupererusername($_POST["username"]))!="")
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
             $a=$_POST['dateModification'];
           $UserC->addUser($user);
           header("Location:signin.php");
       }
       }
       else
           $error = "Missing information";
















   ?>
   
        
        


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Sign Up</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="../../assets/img/favicon.png" rel="icon">
        <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/all.min.css">-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
           <<ul>
            <li><a class="nav-link scrollto" href="pageHome.php">Home</a></li>
            <li><a class="nav-link scrollto" href="#">About</a></li>
            <li><a class="nav-link scrollto " href="pageReservation.php">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto" href="ajouterReclamation.php">Reclamation</a></li>
            <li><a class="nav-link scrollto" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav> <!--.navbar -->

        <a href="#book-a-ticket" class="book-a-ticket-btn scrollto">Sign Up</a>

        <li class=""><a class="" href="signupadmin.php">
                        <style>
    .logout-link {
      position: absolute;
      top: 0;
      right: 0;
    }
  </style>
						
							<p>Admin</p>
					</a></li>
     <!--<div class="form">
       <form>
                 <div class="profile-img">
                    <div class="file-upload">
                        <input type="file" id="photo" name="photo" class="file-input"
                            oninvalid="this.setCustomValidity('Select a profile image')"
                            oninput="this.setCustomValidity('')" accept="image/jpg, image/jpeg, image/png">
                        <i class="fas fa-user-edit"></i>

                    </div>
                </div>
      
       </form>
      </div>-->

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
          <h2> <span>Sign Up</span></h2>
        </div>

        <form action="" method="post" class="php-email-form" id="formUser">
          <div class="row">
            
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Your First Name">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Your Last Name">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
             
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" name="email" class="form-control" id="email" placeholder="Your Email">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="file" id="photo" name="photo" class="form-control" placeholder="Select a Photo "
                             accept="image/jpg, image/jpeg, image/png">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
            

          <div class="text-center"><button type="submit" name="submit_user">Sign Up</button><br></div>
          <br><div class="link">Already signed up ?<a href="signin.php"> Login Now</a></div>
        </form>

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
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ 
        Designed by <a href="#">Mehdi</a>-->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/main.js"></script>

 <script src="../../assets/scriptuser.js"></script>

    </body>
</html>
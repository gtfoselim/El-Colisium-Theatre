<?php
  include '../../controller/ticketC.php';
  session_start();


if(isset($_SESSION["id"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}
    $list = null;
    $tab = null;
    $TicketC = new TicketC();
    $list = $TicketC->listTicket();
    $tab = $TicketC->afficher();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Resaervation</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <li><a class="nav-link scrollto active" href="#">Reservation</a></li>
            <li><a class="nav-link scrollto" href="pageEvents.php">Events</a></li>
            <li><a class="nav-link scrollto" href="ajouterReclamation.php">Reclamation</a></li>
            <li><a class="nav-link scrollto" href="pageMagazin.php">Magazin</a></li>
            <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#book-a-ticket" class="book-a-ticket-btn scrollto">Book a ticket</a>
        <a href="index.php" class="book-a-ticket-btn scrollto">Profile</a>
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

        <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/theatre-bg.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Events</a>
                  <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Ticket</a>
                  <a href="#book-a-place" class="btn-menu animate__animated animate__fadeInUp scrollto">book the Place for event</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/theatre-bg.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Events</a>
                  <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Ticket</a>
                  <a href="#book-a-place" class="btn-menu animate__animated animate__fadeInUp scrollto">book the Place for event</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/theatre-bg.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>El Colisium</span> Theatre</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Events</a>
                  <a href="#book-a-ticket" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Ticket</a>
                  <a href="#book-a-place" class="btn-menu animate__animated animate__fadeInUp scrollto">book the Place for event</a>
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

  <!-- ======= Book A Ticket Section ======= -->
  <section id="book-a-ticket" class="book-a-ticket">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Ticket</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <?php
                        if(isset($_SESSION["id"]))
                        {
                            //$r=$UserC->getUser($_SESSION["id"]);
                                ?>

        <form action="../actions/ajoutReservationTicketUser.php" method="post" class="php-email-form" id="formTicket">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="CIN" class="form-control" id="CIN" placeholder="Your CIN">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
              <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Your First Name" value="<?=$_SESSION['firstname']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
              <input type="text" class="form-control" name="Prenom" id="Prenom" placeholder="Your Last Name" value="<?=$_SESSION['lastname']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="Email" class="form-control" id="Email" placeholder="Your Email" value="<?=$_SESSION['email']?>">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <!--<input type="text" class="form-control" name="NomEvenement" id="NomEvenement" placeholder="Event's Name">-->
              <select class="form-control" name="NomEvenement" id="NomEvenement">
                <option value="">Event's Name:</option>
                <?php
                  foreach($tab as $even){
                ?>
                <option value=<?php echo ($even['nom']); ?>><?php echo ($even['nom']); ?></option>
                <?php }?>
              </select>
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" class="form-control" name="DateReservation" id="DateReservation" placeholder="Reservation's Date">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
              <small>error message</small>
            </div>

            <div class="popup col-lg-4 col-md-6 form-group mt-3" id="popup-1">
              <div class="overlay"></div>
                <div class="content">
                  <div class="spaceContainer">
                    <div class="screen"></div>
                    <div class="row">  
                      <div class="seat" id="A01"></div>
                      <div class="seat" id="A02"></div>
                      <div class="seat" id="A03"></div>
                      <div class="seat" id="A04"></div>
                      <div class="seat" id="A05"></div>
                      <div class="seat" id="A06"></div>
                      <div class="seat" id="A07"></div>
                      <div class="seat" id="A08"></div>
                      <div class="seat" id="A09"></div>
                      <div class="seat" id="A10"></div>
                      <div class="seat" id="A11"></div>
                      <div class="seat" id="A12"></div>
                      <div class="seat" id="A13"></div>
                      <div class="seat" id="A14"></div>
                      <div class="seat" id="A15"></div>
                      <div class="seat" id="A16"></div>
                      <div class="seat" id="A17"></div>
                      <div class="seat" id="A18"></div>
                      <div class="seat" id="A19"></div>
                      <div class="seat" id="A20"></div>
                      <div class="seat" id="A21"></div>
                      <div class="seat" id="A22"></div>
                      <div class="seat" id="A23"></div>
                    </div>
                    <div class="row">
                      <div class="seat" id="B01"></div>
                      <div class="seat" id="B02"></div>
                      <div class="seat" id="B03"></div>
                      <div class="seat" id="B04"></div>
                      <div class="seat" id="B05"></div>
                      <div class="seat" id="B06"></div>
                      <div class="seat" id="B07"></div>
                      <div class="seat" id="B08"></div>
                      <div class="seat" id="B09"></div>
                      <div class="seat" id="B10"></div>
                      <div class="seat" id="B11"></div>
                      <div class="seat" id="B12"></div>
                      <div class="seat" id="B13"></div>
                      <div class="seat" id="B14"></div>
                      <div class="seat" id="B15"></div>
                      <div class="seat" id="B16"></div>
                      <div class="seat" id="B17"></div>
                      <div class="seat" id="B18"></div>
                      <div class="seat" id="B19"></div>
                      <div class="seat" id="B20"></div>
                      <div class="seat" id="B21"></div>
                      <div class="seat" id="B22"></div>
                      <div class="seat" id="B23"></div>
                    </div>
                    <div class="row">
                      <div class="seat" id="C01"></div>
                      <div class="seat" id="C02"></div>
                      <div class="seat" id="C03"></div>
                      <div class="seat" id="C04"></div>
                      <div class="seat" id="C05"></div>
                      <div class="seat" id="C06"></div>
                      <div class="seat" id="C07"></div>
                      <div class="seat" id="C08"></div>
                      <div class="seat" id="C09"></div>
                      <div class="seat" id="C10"></div>
                      <div class="seat" id="C11"></div>
                      <div class="seat" id="C12"></div>
                      <div class="seat" id="C13"></div>
                      <div class="seat" id="C14"></div>
                      <div class="seat" id="C15"></div>
                      <div class="seat" id="C16"></div>
                      <div class="seat" id="C17"></div>
                      <div class="seat" id="C18"></div>
                      <div class="seat" id="C19"></div>
                      <div class="seat" id="C20"></div>
                      <div class="seat" id="C21"></div>
                      <div class="seat" id="C22"></div>
                      <div class="seat" id="C23"></div>
                    </div>
                    <div class="row">
                      <div class="seat" id="D01"></div>
                      <div class="seat" id="D02"></div>
                      <div class="seat" id="D03"></div>
                      <div class="seat" id="D04"></div>
                      <div class="seat" id="D05"></div>
                      <div class="seat" id="D06"></div>
                      <div class="seat" id="D07"></div>
                      <div class="seat" id="D08"></div>
                      <div class="seat" id="D09"></div>
                      <div class="seat" id="D10"></div>
                      <div class="seat" id="D11"></div>
                      <div class="seat" id="D12"></div>
                      <div class="seat" id="D13"></div>
                      <div class="seat" id="D14"></div>
                      <div class="seat" id="D15"></div>
                      <div class="seat" id="D16"></div>
                      <div class="seat" id="D17"></div>
                      <div class="seat" id="D18"></div>
                      <div class="seat" id="D19"></div>
                      <div class="seat" id="D20"></div>
                      <div class="seat" id="D21"></div>
                      <div class="seat" id="D22"></div>
                      <div class="seat" id="D23"></div>
                    </div>
                    <div class="row">
                      <div class="seat" id="E01"></div>
                      <div class="seat" id="E02"></div>
                      <div class="seat" id="E03"></div>
                      <div class="seat" id="E04"></div>
                      <div class="seat" id="E05"></div>
                      <div class="seat" id="E06"></div>
                      <div class="seat" id="E07"></div>
                      <div class="seat" id="E08"></div>
                      <div class="seat" id="E09"></div>
                      <div class="seat" id="E10"></div>
                      <div class="seat" id="E11"></div>
                      <div class="seat" id="E12"></div>
                      <div class="seat" id="E13"></div>
                      <div class="seat" id="E14"></div>
                      <div class="seat" id="E15"></div>
                      <div class="seat" id="E16"></div>
                      <div class="seat" id="E17"></div>
                      <div class="seat" id="E18"></div>
                      <div class="seat" id="E19"></div>
                      <div class="seat" id="E20"></div>
                      <div class="seat" id="E21"></div>
                      <div class="seat" id="E22"></div>
                      <div class="seat" id="E23"></div>
                    </div>
                    <div class="row">
                      <div class="seat" id="F01"></div>
                      <div class="seat" id="F02"></div>
                      <div class="seat" id="F03"></div>
                      <div class="seat" id="F04"></div>
                      <div class="seat" id="F05"></div>
                      <div class="seat" id="F06"></div>
                      <div class="seat" id="F07"></div>
                      <div class="seat" id="F08"></div>
                      <div class="seat" id="F09"></div>
                      <div class="seat" id="F10"></div>
                      <div class="seat" id="F11"></div>
                      <div class="seat" id="F12"></div>
                      <div class="seat" id="F13"></div>
                      <div class="seat" id="F14"></div>
                      <div class="seat" id="F15"></div>
                      <div class="seat" id="F16"></div>
                      <div class="seat" id="F17"></div>
                      <div class="seat" id="F18"></div>
                      <div class="seat" id="F19"></div>
                      <div class="seat" id="F20"></div>
                      <div class="seat" id="F21"></div>
                      <div class="seat" id="F22"></div>
                      <div class="seat" id="F23"></div>
                    </div>
                  </div> 
                  <p class="text">you have selected <span id="count">0</span> steats for a price of <span id="total">0</span>$</p>
                  <div class="buttons">
                    <button  type="button" class="book-a-ticket-btn" onclick="showSelectedSeats()">book tickets</button>
                    <button  type="button" class="cancel-ticket-btn" onclick="togglePopup()">cancel</button>
                  </div>
                </div>
                <input type="text" name="seatsReserver" id="seatReserver" class="form-control" hidden/>
                <button type="button" onclick="togglePopup()">seats</button>
                <i class="bi-check-circle-fill"></i>
                <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

          </div>
          <div class="text-center"><button type="submit">Reserver</button></div>
        </form>
        <?php
                        }
                        
                        ?>

      </div>
    </section><!-- End Book A Ticket Section -->

      <!-- ======= Book A Place Section ======= -->
  <section id="book-a-place" class="book-a-place">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Place</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="../actions/ajoutReservationPlace.php" method="post" class="php-email-form" id="formPlace">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="CIN" class="form-control" id="CINplace" placeholder="Your CIN">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="Nom" id="NomPlace" placeholder="Your First Name">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="Prenom" id="PrenomPlace" placeholder="Your Last Name">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="Email" class="form-control" id="EmailPlace" placeholder="Your Email">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
                <select class="form-control" name="typeEvenement" id="typeEvenementPlace">
                    <option value="0">Select type of Event:</option>
                    <option value="Musical">Musical</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Seminar">Seminar</option>
                </select>
                <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="NomEvenement" id="NomEvenementPlace" placeholder="Event's Name">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" class="form-control" name="DateEvenement" id="DateEvenementPlace" placeholder="Event's Date">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" name="nbPersonneEstime" class="form-control" id="nbPersonneEstimePlace" placeholder="Number of tickets">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" name="PrixTicket" class="form-control" id="PrixTicketPlace" placeholder="Price of ticket">
              <i class="bi-check-circle-fill"></i>
              <i class="bi-exclamation-circle-fill"></i>
                <small>error message</small>
            </div>

          </div>
          <div class="text-center"><button type="submit">Reserver</button></div>
        </form>

      </div>
    </section><!-- End Book A Place Section -->

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
  <script src="../../assets/seats.js"></script>
  <script src="../../assets/popupWindow.js"></script>
  <?php
                    foreach($list as $ticket){
                      echo "<script> \n";
                      echo "document.getElementById(".json_encode($ticket['seat']).").classList.toggle('occupied');";
                      echo "</script>";
                    }
                    ?>

    </body>
</html>
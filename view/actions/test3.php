<?php

include '../../controller/evenC.php';
require '../../model/even.php';


$error = "";
$even = null;
$evenC = new evenC();


if ( 
    isset($_POST["nom"]) &&
    isset($_POST["categorie"]) &&
    isset($_POST["date"]) &&
    isset($_POST["time"])&&
    isset($_POST["actors"])&&
    isset($_POST["price"])&&
    isset($_POST["tickets"])
) {
    if (
        
        !empty($_POST["nom"]) &&
        !empty($_POST["categorie"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["time"])&&
        !empty($_POST["actors"])&&
        !empty($_POST["price"])&&
        !empty($_POST["tickets"])
    ) {
        $even = new even(
            null,
            $_POST['nom'],
            $_POST['categorie'],
            new DateTime($_POST['date']),
            new DateTime($_POST['time']),
            $_POST['actors'],
            $_POST['price'],
            $_POST['tickets']          
        );

        $evenC->updateEvent($even, $_POST["id"]);
        header('Location:../backEnd/afficher.php');
    } else
        $error = "Missing information";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms Update </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../backEnd/assets/img/favicon.png" rel="icon">
  <link href="../backEnd/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../backEnd/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../backEnd/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../backEnd/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../backEnd/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../backEnd/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../backEnd/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../backEnd/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../backEnd/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ADMIN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">N.Wejden</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>NASFI WEJDEN </h6>
              <span>IT Engineering Student

              </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      

     

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="add.php" class="active">
              <i class="bi bi-circle"></i><span>Form Elements(event)</span>
            </a>
          </li>
          <li>
            <a href="addS.php" class="active">
              <i class="bi bi-circle"></i><span>Form Elements(sponsor)</span>
            </a>
          </li>
         
         
          
          
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="afficher.php">
              <i class="bi bi-circle"></i><span>event Table</span>
            </a>
          </li>
          <li>
            <a href="afficherS.php">
              <i class="bi bi-circle"></i><span>sponsor Table</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          
          <li>
            <a href="stat2.php">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="text-center">
        <!--<div class="col-lg-6">-->
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>
              <?php
    if(isset($_GET['id'])){
        $p = $evenC->getEvent($_GET['id']);
        ?>
              <!-- General Form Elements -->
              <form method="POST" action ="">
                <div class="row mb-3">
                  <label for="inputNom" class="col-sm-2 col-form-label">id</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" maxlength="25"  placeholder="Place id " name ="id" value = "<?php echo $p['id'];?>" readonly >
                  </div>
                </div>
              <form method="POST" action ="">
                <div class="row mb-3">
                  <label for="inputNom" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" maxlength="25"  placeholder="Place your Name " name ="nom"  value = "<?php echo $p['nom'];?>">
                  </div>
                </div>

          

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Type</label>
                  
                 <div class="col-sm-10">
                 <input type="text" class="form-control" name = "categorie" value = "<?php echo $p['categorie'];?>">
                  </div> 

                </div>
                <!--
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Picture Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
-->
               
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control"   name ="date"  >
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  
                  <div class="col-sm-10">
                    <input type="time" class="form-control"  name ="time"  >
                  </div> 
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Actors</label>
                  <div class="col-sm-10">
                  <input class="form-control"   name ="actors" value = "<?php echo $p['actors'];?>" >
                  </div>
                </div>
          
                <div class="row mb-3">
                  <label for="inputPRIX" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    
                    <input type="number" class="form-control"  name ="price" value = "<?php echo $p['price'];?>"  >
                   
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputPRIX" class="col-sm-2 col-form-label">Tickets </label>
                  <div class="col-sm-10">
                    
                    <input type="number" class="form-control"   name ="tickets" value = "<?php echo $p['tickets'];?>" >
                   
                  </div>
                </div>
               
                
              

                

                

                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                 
                

              </form>
              <?php
    }
    ?>
              <!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>

        <!--<div class="col-lg-6"> -->
          <!--
         <div class="col-12 text-center">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Advanced Form Elements</h5>  
            -->

              <!-- Advanced Form Elements -->
       <!--       
           <form>
                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Switches</label>
                  <div class="col-sm-10">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                      <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                      <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Ranges</label>
                  <div class="col-sm-10">
                    <div>
                      <label for="customRange1" class="form-label">Example range</label>
                      <input type="range" class="form-range" id="customRange1">
                    </div>
                    <div>
                      <label for="disabledRange" class="form-label">Disabled range</label>
                      <input type="range" class="form-range" id="disabledRange" disabled>
                    </div>
                    <div>
                      <label for="customRange2" class="form-label">Min and max with steps</label>
                      <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange2">
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Floating labels</label>
                  <div class="col-sm-10">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">Comments</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingSelect">Works with selects</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Input groups</label>
                  <div class="col-sm-10">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                      <span class="input-group-text">With textarea</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>

              </form> -->
               <!-- End General Form Elements -->  
  <!--
           </div>
          </div>

        </div>
      </div>
    </div>
    </section> 
    -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../backEnd/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../backEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../backEnd/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../backEnd/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../backEnd/assets/vendor/quill/quill.min.js"></script>
  <script src="../backEnd/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../backEnd/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../backEnd/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../backEnd/assets/js/main.js"></script>

  </body>
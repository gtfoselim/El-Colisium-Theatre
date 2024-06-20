<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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

















<?php
include_once '../../controller/SolutionC.php';
include_once '../../model/Solution.php';

//require 'header.php'
$error = "";

// create adherent
$solution = null;

$solutionC = new SolutionC();
if (
    isset($_POST["ID_S"]) &&
    isset($_POST["DATE_RESOLUTION"]) &&
    isset($_POST["DESCRIPTION"]) &&
    isset($_POST["ID_REC"]) 
) {
    if (
        !empty($_POST["ID_S"]) &&
        !empty($_POST["DATE_RESOLUTION"]) &&
        !empty($_POST["DESCRIPTION"]) &&
        !empty($_POST["ID_REC"]) 
    ) {
        $solution = new Solution(
            $_POST['ID_S'],
            new DateTime($_POST["DATE_RESOLUTION"]),
            $_POST['DESCRIPTION'],
            $_POST['ID_REC']

        );
        $solutionC->modifierSolution($solution, $_POST["ID_S"]);
        header('Location:../backEnd/afficherSolution.php');
    } else {
        $error = "Missing information";
    }
}
?>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
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
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="afficherReclamation.php">
          <i class="bi bi-person"></i>
          <span>user</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="white.html">
          <i class="bi bi-person"></i>
          <span>evenement</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="white.html">
          <i class="bi bi-person"></i>
          <span>produit</span>
        </a>

      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="white.html">
          <i class="bi bi-person"></i>
          <span>reservation</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="afficherReclamation.php">
          <i class="bi bi-person"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Profile Page Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="afficherSolution.php">
          <i class="bi bi-person"></i>
          <span>Solution</span>
        </a>
      </li><!-- End Profile Page Nav -->

        


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->




<button><a href="../backEnd/afficherSolution.php">Retour à la liste des Solutions</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_POST['ID_S'])) {
    $solution = $solutionC->recupererSolution($_POST['ID_S']);
?>

<form action="" method="POST">
    <table border="1" align="center">
        <tr>
            <td>
                <label for="ID_S">ID_Solution:</label>
            </td>
            <td>
                <input type="number" name="ID_S" id="ID_S" value="<?php echo $solution['ID_S']; ?>" maxlength="11">
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="DATE_RESOLUTION">DATE_RESOLUTION:</label>
            </td>
            <td>
                <input type="date" name="DATE_RESOLUTION" id="DATE_RESOLUTION" value="<?php echo $solution['DATE_RESOLUTION']; ?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="DESCRIPTION">Description:</label>
            </td>
            <td>
                <input type="text" name="DESCRIPTION" value="<?php echo $solution['DESCRIPTION']; ?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="ID_REC">ID_RECLAMATION:</label>
            </td>
            <td>
                <input type="number" name="ID_REC" id="ID_REC" value="<?php echo $solution['ID_REC']; ?>" maxlength="11">
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Modifier">
</td>
                <td>
                    <input type="reset" value="Annuler">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>



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

</html>
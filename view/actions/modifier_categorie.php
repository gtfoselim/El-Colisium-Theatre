<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../backEnd/assets/img/favicon.png" rel="icon">
  <link href="../backEnd/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" rel="stylesheet" type="text/css">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.css" integrity="sha512-mJH2UCb8EplzC+Yw56CdWqGt6sazPKhJHpyNnT3Au6lx5tueCa/VhBe2yIQZQcjKVelo6U5foei5lhsmWOA+tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <img src="" alt="">
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
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>ARFAOUI NIDHAL </h6>
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

      
      </li><!-- End Dashboard Nav -->

      <!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="addcat.php" class="active">
              <i class="bi bi-circle"></i><span>AJOUTER CATEGORIES</span>
            </a>
          </li>
         
          
          
        </ul>
        
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="addprod.php" class="active">
              <i class="bi bi-circle"></i><span>AJOUTER PRODUITS</span>
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
            <a href="tables-cat.php">
              <i class="bi bi-circle"></i><span>TABLES CATEGORIES</span>
            </a>
          </li>
          <li>
            <a href="tables-prod.php">
              <i class="bi bi-circle"></i><span>TABELS PRODUITS</span>
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
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <!-- End Icons Nav -->

     <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>MODIFIER CATEGORIE</h1>
         
          <?php
          require_once '../../config.php';
          $pdo = config::getConnexion();
          $sqlState = $pdo->prepare('SELECT * FROM categorie WHERE id=?');
          $id = $_GET['id'];
          $sqlState->execute([$id]);
      
          $category = $sqlState->fetch(PDO::FETCH_ASSOC);
          if (isset($_POST['modifier'])) {
              $nom = $_POST['nom'];
              $description = $_POST['description'];
              $icone = $_POST['icone'];
              
      
              if (!empty($nom) && !empty($description)) {
                  $sqlState = $pdo->prepare('UPDATE categorie
                                                      SET nom = ? ,
                                                          description = ?,
                                                          icone = ?
                                                        
                                                  WHERE id = ?
                                                  ');
                  $sqlState->execute([$nom, $description,$icone, $id]);
                  
                  echo "<script> window.location.href='../backEnd/tables-cat.php'; </script>";
                  
              } else {
                  ?>
                  <div class="alert alert-danger" role="alert">
                      nom , description sont obligatoires
                  </div>
                  <?php
              }
      
          }
      
          



         



       /*require_once '../config.php';
      $sqlState = $pdo->prepare('SELECT * FROM categorie WHERE id=?');
      $id = $_GET['id'];
      $sqlState->execute([$id]);
      $category = $sqlState->fetch(PDO::FETCH_ASSOC);
   
      
      if (isset($_POST['modifier'])) {
        $nom = $_POST['nom'];
        $description = $_POST['description'];
       

        if (!empty($nom) && !empty($description)) {
            $sqlState = $pdo->prepare('UPDATE categorie
                                                SET nom = ? ,
                                                    description = ?
                                                   
                                            WHERE id = ?
                                            ');
            $sqlState->execute([$nom, $description, $id ]);
            ?>
            <div class="alert alert-success" role="alert">
                la categorie <?php echo $nom ?> est bien MODIFIER .
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                nom , description sont obligatoires
            </div>
            <?php
        }
       
    }   */
  
   

    ?>

      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">MODIFIER</li>
          <li class="breadcrumb-item active">CATEGORIES</li>
        </ol>
      </nav>




      <?php 
           
        ?>




    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="text-center">
        <!--<div class="col-lg-6">-->
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">MODIFIER</h5>

              <!-- General Form Elements -->
              <div class="container">

                <div class="admin-product-form-container">
             
         


                   <form method="POST" >

                   <div class="row mb-3">
                  <label for="inputPRIX" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-10">
                    
                  <input readonly type="text"  class="form-control" value="<?php echo $category['id'] ?>"  name="id" class="box">
                  
                  </div>
                </div>

                   <div class="row mb-3">
                  <label for="inputPRIX" class="col-sm-2 col-form-label">NOM </label>
                  <div class="col-sm-10">
                    
                  <input type="text" placeholder="NOM CATEGORIE" class="form-control" value="<?php echo $category['nom'] ?>" name="nom" class="box">
                  
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPRIX" class="col-sm-2 col-form-label">DESCRIPTION </label>
                  <div class="col-sm-10">
                    
                  <textarea  class="form-control" name="description"  class="box"> <?php echo $category['description'] ?></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPRIX" class="col-sm-2 col-form-label">ICONE </label>
                  <div class="col-sm-10">
                    
                  <input type="text" placeholder="NOM CATEGORIE" class="form-control" value="<?php echo $category['icone'] ?>" name="icone" class="box">
                  
                  </div>
                </div>
               



                
               
                   
                
              <input type="submit" class="btn btn-info btn-lg" name="modifier" value="MODIFIER CATEGORIE" >
                    
               
                      <input type="reset"  class="btn btn-dark btn-lg"  value="RESET">
                   </form>
             
                </div>



             

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

</html>
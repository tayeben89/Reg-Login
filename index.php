<?php


session_start();
if(isset($_SESSION['is_login'])){

} else{
    header("Location:login.php");
}


?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Dashboard</title>
    <link rel="icon" href="cof/haha.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .image {
            padding: 0 20px 40px;
            min-width: 25%;
            flex-grow: 1;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Tayeben <sup>!!!</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Settings
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                My Works
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">This Website:</h6>
                        <a class="collapse-item" href="login.php">Login</a>
                        <a class="collapse-item" href="register.php">Register</a>
                        <a class="collapse-item" href="cof/forgotpass.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="cof/ComplainPage.html">Complain Page</a>
                        <a class="collapse-item" href="cof/Submitted.html">Complain Submission</a>
                        <a class="collapse-item" href="cof/OfferPage.html">Offer Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="cof/iubathp.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>IUBAT Student Reg</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cof/ComplainPage.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>ComplainPage of StarTech</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="cof/OfferPage.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>OfferPage of StarTech</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php  echo $_SESSION['user_name']  ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="cv.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<!-- Main Content -->

<div class="container"> 
  <div class="row align-items-stretch" align="center">
    <!-- First row -->
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/01.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Star Tech Free Home Delivery</h5>
              <p class="card-text">Order Online & Enjoy Free Home Delivery!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/02.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">New Outlet Opening Offer</h5>
              <p class="card-text">Buy & Get Exciting Gifts!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/03.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Star Tech Television Offer</h5>
              <p class="card-text">Buy Television and Get Sewing Machine Free!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
  </div>

  <!-- Second row -->
  <div class="row align-items-stretch" align="center">
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/04.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">PNY Graphics Card Offer</h5>
              <p class="card-text">Buy PNY Graphics Card & Get Exciting Gift</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/06.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Razer Gaming Chair Offer !!</h5>
              <p class="card-text">Buy Razer Gaming Chair & 5k tk Gift voucher!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/05.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"> Tank HP InkPrinter Offer</h5>
              <p class="card-text">Buy HP Ink Tank Printer & Get Exciting Gift!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
  </div>

  <!-- Third row -->
  <div class="row align-items-stretch" align="center">
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/07.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">MSI Summer Sale</h5>
              <p class="card-text">Buy MSI Laptop to Get Prize Bond</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card h-100">
            <img src="cof/08.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">TP-Link Router Offer</h5>
              <p class="card-text">Buy TP-Link Router & Get Water Bottle!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
    </div>
  </div>
</div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <p>
                <img src="cof/mylogo.png" align="left" width="165" height="86">
                    <a href="https://www.instagram.com/tayeben_sagar/"><img src="cof/ig.png" align="right" width="45" height="45"></a>
                <a href="https://www.facebook.com/tayeben.sagar/"><img src="cof/fb.png" align="right" width="45" height="45"></a>
            </p>
            <div>
                <br>
                <br>
                <br>
                <p align="Center">
                    © Practiced By Tayeben
                </p>
                <br>
                <br>
            </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div> >
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
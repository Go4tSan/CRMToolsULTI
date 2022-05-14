<?php 
require_once "../bd/sesion.php"; /* todos los modulos que usen esta platilla tedran la validacion automaticamente */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CRMTools - Dashboard</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../vendor/datatables/datatables.min.css"/>
    <link href="../css/sbadmin-2.min.css" rel="stylesheet">
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">      
    
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <img src="img/crm.png" alt="CRMTools" width="50" height="50">
        </div>
        <div class="sidebar-brand-text mx-3">CRM <sup>Tools</sup></div>
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
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" 
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="bi bi-info-circle"></i>
          <span>Gestionar Informacion</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestionar Información:</h6>
            <a class="collapse-item" href="buttons.php">Buttons</a>
            <a class="collapse-item" href="blank.php">Blank Page</a>
            <a class="collapse-item" href="cards.php">Cards</a>
          </div>
        </div>
      </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-info-circle"></i>
                    <span>Generar Informes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Generar Informes:</h6>
                        <a class="collapse-item" href="">Colors</a>
                        <a class="collapse-item" href="">Borders</a>
                        <a class="collapse-item" href="">Animations</a>
                        <a class="collapse-item" href="">Other</a>
                    </div>
                </div>
            </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="profile.php">Perfil</a>
                        <a class="collapse-item" href="profile_security.php">Seguridad</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="register.php">Registro Usuarios</a>
                    </div>
                </div>
            </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

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

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMINISTRADOR</span>
                <img class="img-profile rounded-circle" src="data:image/jpeg;base64,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">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

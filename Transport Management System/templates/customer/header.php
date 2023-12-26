<?php
  session_start();
  if ($_SESSION["data"] != '1')
  {
    echo "<script>window.location='../main/login.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">

        
        <!-- Title -->
        <title>Cusomer - Transport Management System</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="../../assets/plugins/pace/pace.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../../assets/css/main.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <script src="https://kit.fontawesome.com/7ad186a4dd.js" crossorigin="anonymous"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
      

        <div class="page-container">
          <div class="page-sidebar">
            <a class="logo" href="index.php">TMS</a>
            <ul class="list-unstyled accordion-menu">

              <li>
                <a href="index.php" class="active"><i data-feather="activity"></i>Dashboard</a>
              </li>
              
              <li>
                <a href="add_transport.php"><i class="far fa-plus-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add Shipment</a>
              </li>

              <li>
                <a href="your_shipments.php"><i class="fas fa-truck"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Shipments</a>
              </li>

              
              
            </ul>
            <!-- <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a> -->
        </div>

        <div class="page-content">
              <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                  <div class="header-title flex-fill">
                    <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
                    <h5></h5>
                  </div>
                   <!--  <div class="header-search">
                      <form>
                        <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                        <a href="#" class="close-search"><i data-feather="x"></i></a>
                      </form>
                    </div> -->
                    <div class="flex-fill" id="headerNav">
                      <ul class="navbar-nav">
                        <li class="nav-item d-md-block d-lg-none">
                          <a class="nav-link" href="#" id="toggle-search"><i data-feather="search"></i></a>
                        </li>
                        
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image.png" alt=""></a>
                          <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                            <a class="dropdown-item" ><?php echo $_SESSION["mail"];?></a>
                            <a class="dropdown-item" href="logout.php"><i data-feather="log-out"></i>Logout</a>
                          </div>
                        </li>
                      </ul>
                  </div>
                </nav>
            </div>
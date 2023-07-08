<?php
  session_start();
  require_once("config.php"); 
  $user_email =  $_SESSION['user_email'];
  $user_password = $_SESSION['user_password'];
  if(empty($user_email) && empty($user_password )){
    header('location: login.php');
  }
  else{
   // header('location: dashboard.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Dashboard | Agile Ventures
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  
</head>

<body class="g-sidenav-show employeename-page bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php" target="_blank">
        <img src="assets/img/logos/agile-logo.png" class="navbar-brand-img h-100" alt="Agile Ventures">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="dashboard.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/billing.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Report</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="export-data.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="logout.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
       
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-flex align-items-center">
              <a href="logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3 yellow-box">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-md mb-0 text-capitalize font-weight-bold">Total Employee</p>
                    <h5 class="font-weight-bolder mb-0">
                    <span class="badge bg-success">
                      <?php
                      $sql = "SELECT COUNT(*) FROM emp_storage";
                      $result = mysqli_query($Conn, $sql);
                      
                      // Retrieve number of rows
                      if ($result) {
                          $row = mysqli_fetch_array($result);
                          $count = $row[0];
                          echo  $count;
                      } else {
                          echo "Error executing query: " . mysqli_error($conn);
                      }
                      ?></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3 green-box">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-md mb-0 text-capitalize font-weight-bold">Active Employee</p>
                    <h5 class="font-weight-bolder mb-0">
                    <span class="badge bg-success">
                    <?php
                      $sql = "SELECT COUNT(*) FROM emp_storage where Current_Status = 'Active'";
                      $result = mysqli_query($Conn, $sql);
                      
                      // Retrieve number of rows
                      if ($result) {
                          $row = mysqli_fetch_array($result);
                          $count = $row[0];
                          echo  $count;
                      } else {
                          echo "Error executing query: " . mysqli_error($conn);
                      }
                      ?> 
                      </span>                    
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3 red-box">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-md mb-0 text-capitalize font-weight-bold">Inactive Employee</p>
                    <h5 class="font-weight-bolder mb-0">
                    <span class="badge bg-dark">
                    <?php
                      $sql = "SELECT COUNT(*) FROM emp_storage where Current_Status = 'Inactive'";
                      $result = mysqli_query($Conn, $sql);
                      
                      // Retrieve number of rows
                      if ($result) {
                          $row = mysqli_fetch_array($result);
                          $count = $row[0];
                          echo  $count;
                      } else {
                          echo "Error executing query: " . mysqli_error($conn);
                      }
                      ?> 
                      </span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-user-run text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">                   
                    <h5 class="font-weight-bolder">Search for Employees</h5>
                    <form class="pt-2" id="searchResultByid" method="post" action="dashboard-emp-id.php">
                      <div class="row">
                        <div class="col-md-2"><span class="btn bg-gradient-info">#1</span></div>
                        <div class="col-md-7"><input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="Employee ID"></div>
                        <div class="col-md-3"><input type="submit" class="btn bg-gradient-success" name="search_id" id="search_id" value="Search"></div>
                      </div>
                    </form>
                    <!-- <form class="pt-2" id="searchByName" method="post" action="dashboard-emp-name.php">
                      <div class="row">
                        <div class="col-md-2"><span class="btn bg-gradient-info">#2</span></div>
                        <div class="col-md-7"><input type="text" name="search_emp_name" id="search_emp_name" class="form-control" placeholder="Employee Name" value=""></div>
                        <div class="col-md-3"><input type="submit" class="btn bg-gradient-success" name="search_empname" id="search_empname" value="Search"></div>
                      </div>
                    </form> -->
                    <form class="pt-2" id="searchByDepartment" method="post" action="dashboard-emp-department.php">
                      <div class="row">
                        <div class="col-md-2"><span class="btn bg-gradient-info">#3</span></div>
                        <div class="col-md-7"><select name="search_emp_department" id="search_emp_department" class="form-control">
                        <option>--Choose Department--</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="hr">Human Resource</option>
                        <option value="IT">IT</option>
                        <option value="QB">QB</option>
                        <option value="Sage">Sage</option>
                        <option value="Cloud">Cloud</option>
                        <option value="Bangaluru_Marketing">Bangaluru Marketing</option>
                        </select>
                        </div>
                        <div class="col-md-3"><input type="submit" class="btn bg-gradient-success" name="search_id" id="search_id" value="Search"></div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-lg-0">
                  <div class="border-radius-lg h-100">
                    <img src="assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2" src="assets/img/employees-search.png" alt="Employees">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <span class="mask bg-gradient"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">             
              <h5 class="font-weight-bolder">Data organized by Departments</h5>
                                <div class="table-responsive table-height">
                                    <table class="table table-striped table-dark table-sm table-hover">
                                        <?php require_once("department-count.php"); ?>
                                    </table>
                                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-12 col-md-12">
        <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Search Employee By Name</h6>
              <div class="table-responsive">
                                    <table class="table align-items-center mb-0 table-sm" id="sortTable">
                                        <thead>
                                            <tr>
                                                <th class="text-sm align-items-left">Employee ID</th>
                                                <th class="text-sm">Employee Name</th>
                                                <th class="text-sm">Employee Department</th>
                                                <th class="text-sm">Other Department</th>
                                                <th class="text-sm">Dialer</th>
                                                <th class="text-sm">Dialer ID</th>
                                                <th class="text-sm">Employee Email</th>
                                                <th class="text-sm">Current Status</th>
                                                <th class="text-sm">Date of Joining</th>
                                                <th class="text-sm">Date of Leaving</th>
                                                <th class="text-sm"></th>
                                            </tr>
                                        </thead>
      <?php
$searchempname = $_REQUEST['search_emp_name'];
$_SESSION['oldname'] = $searchempname;
$sql = "SELECT * FROM emp_storage where EMP_Name = '$searchempname'";
$result = $Conn->query($sql);            
  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";  
      echo "<td class='text-sm emid'>" . $row["Prefix_AG"] ."".$row["Employee_ID"]. "</td><td class='text-sm csch csch-name'>" . $row["EMP_Name"]. "</td><td class='text-sm csch csch-department' name='Department'>" . $row["Department"]. "</td><td class='text-sm'>" . $row["Other"]. "</td><td class='text-sm'>" . $row["Dialer"]. "</td><td class='text-sm'>" . $row["Dialer_ID"]. "</td><td class='text-sm csch csch-email' name='Email_ID'>" . $row["Email_ID"]. "</td><td class='text-sm csch csch_CS' name='Current_Status'>" . $row["Current_Status"]. "</td><td class='text-sm'>" . $row["Date_of_Joining"]. "</td><td class='text-sm csch csch-dol' name='Date_of_Leaving'>" . $row["Date_of_Leaving"]."</td><td class='text-sm'><a href='javascript:void(0)' class='btn bg-gradient-success btn-edit'>Edit</a><a href='javascript:void(0)' class='btn bg-gradient-primary btn-update' style='display:none'>Update</a></td>";
      echo "</tr>";
    }
} else {
  echo "0 results";
} 
?>
</table>
</div>
</div>
</div>
</div>
</div>
      <div class="row my-4">
        <div class="col-lg-12 col-md-12">
        <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Add Employee</h6>
              <div><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="emp_record">    
              <div class="row">
              <div class="col-md-6 mb-2 mt-1">
                <label for="emp_name">Employee Name:</label>
                <input type="text" class="form-control" id="emp_name" placeholder="Employee Name" name="emp_name" required>
              </div>
              <div class="col-md-6 mb-2 mt-1">
                <label for="emp_department">Department:</label>
                <select class="form-control" id="emp_department" placeholder="Department" name="emp_department" required>
                  <option aria-readonly="true" value="Read only" Readonly>--Select Department--</option>
                  <option value="Admin">Admin</option>
                  <option value="IT">IT</option>
                  <option value="HR">HR</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Other">Other</option>
                </select></div>  
              </div>
    <div class="mb-2 mt-1 other-department" style="display:none;">
      <label for="emp_other_department">Other:</label>
      <input type="text" class="form-control" id="emp_other_department" placeholder="Other" name="emp_other_department" onkeyup="this.value=this.value.replace(/[^a-z]/g,'');">
    </div>
    <div class="mb-2 mt-1">
      <label for="emp_dialer">Dialer:</label>
      <div class="row emp_dialer_check">
        <div class="form-check ml-2">
          <input type="radio" class="form-check-input" id="emp_dialer1" name="Dialer" value="Dialer" checked> Dialer
          <label class="form-check-label" for="Dialer"></label>
        </div>
        <div class="form-check">
        <input type="radio" class="form-check-input" id="emp_dialer2" name="Dialer" value="Non Dialer" checked> Non Dialer
          <label class="form-check-label" for="radio2"></label>
        </div>
      </div>
      <div class="mb-2 mt-1 dialerId" style="display:none;">
      <label for="emp_dialer_id">Dialer ID:</label>
      <input type="text" class="form-control" id="emp_dialer_id" placeholder="Dialer ID" name="emp_dialer_id">
    </div>
    </div>
    <div class="row">
    <div class="mb-2 mt-1 col-md-6 emp-email">
      <label for="emp_email">Email ID:</label>
      <input type="text" class="form-control" id="emp_email" placeholder="Email ID" name="emp_email" required">
    </div>
    <div class="mb-2 mt-1 col-md-6">
      <label for="emp_status">Status:</label>     
      <select class="form-control" id="emp_status" placeholder="Status" name="emp_status" onkeyup="this.value=this.value.replace(/[^a-z]/g,'');"  required>
      <option aria-readonly="true" value="Read only" Readonly>--Select Status--</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
      </select>
    </div>
    </div>
    <div class="row">
    <div class="mb-2 mt-1 col-md-6">
      <label for="emp_doj">Date of joining:</label>
      <input type="text" class="form-control" id="emp_doj" placeholder="Date of joining" name="emp_doj" required>
    </div>
    <div class="mb-2 mt-1 col-md-6 leaveDate" style="display:none;">
      <label for="emp_dol">Date of Leaving:</label>
      <input type="text" class="form-control" id="emp_dol" placeholder="Date of Leaving" name="emp_dol">
    </div>
    </div>
    <?php
    require_once("config.php");
    require_once("select-id.php");    
    if(isset($_POST['submit'])){     
      $emp_name = $_POST['emp_name'];
      $emp_department = $_POST['emp_department'];
      if($emp_department == 'Other'){
        $emp_other_department = $_POST['emp_other_department'];
      }
      else{
          $emp_other_department = NULL;
      }
      $emp_dialer = $_POST['Dialer'];
      if($emp_dialer == 'Dialer'){
          $emp_dialer1 = "Dialer";
      }
      else{
          $emp_dialer1 = "Non-Dialer";
      }
      $emp_dialer_id = $_POST['emp_dialer_id'];
      $emp_email = $_POST['emp_email'];
      $emp_status = $_POST['emp_status'];
      $emp_doj = $_POST['emp_doj'];
      if($emp_status == 'Inactive'){
          $emp_dol = $_POST['emp_dol'];
      }
      else{
          $emp_dol = NULL; 
      } 
      //Insert Data here
      $sql = "INSERT INTO emp_storage (Employee_ID, EMP_Name, Department, Other, Dialer, Dialer_ID, Email_ID, Current_Status, Date_of_Joining, Date_of_Leaving) 
      VALUES ('$addPlus','$emp_name','$emp_department','$emp_other_department','$emp_dialer1','$emp_dialer_id','$emp_email','$emp_status','$emp_doj','$emp_dol')";
    
      if ($conn->query($sql) === TRUE) {
      echo "<style>.msg{display:block}</style>";
      echo "<p class='register-title msg mb-2'>New record created successfully</p>";
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }      
    }      
?>
    <button type="submit" name="submit" class="btn bg-gradient-success">Submit</button>
    
  </form>
  
</div>
            </div>            
          </div>
    
      </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Agile Ventures Pvt Ltd by Anil Padihar
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
   <!--   Core JS Files   -->
   <div class="updateform" style="display:none;">
    <form method="post" id="updateemp" action="updateemployeename.php">
      <div><label for="Employee Current Name">Employee Current Name</label> <input type="text" name="empcurrentname" id="empcurrentname" value=""><input type="hidden" name="search_emp_name" id="search_emp_name" class="form-control" placeholder="Employee Name"></div>
      <div><label for="Employee Name">Employee Name</label> <input type="text" name="nameofemp" id="nameofemp" value=""></div>
      <div><label for="Employee Department">Employee Department</label> <input type="text" name="departmentofemp" id="departmentofemp" value=""></div>
      <div><label for="Employee Email">Employee Email</label> <input type="text" name="emailofemp" id="emailofemp" value=""></div>
      <div><label for="Employee Current Status">Employee Current Status</label> <input type="text" name="currentStatusofemp" id="currentStatusofemp" value=""></div>
      <div><label for="Employee Date of Leaving">Employee Date of Leaving</label> <input type="text" name="dateofleavingofemp" id="dateofleavingofemp" value=""></div>
      <div id="updatehere"><input type="submit" name="updatesubmit" id="updatesubmit"></div>
    </form>
  </div>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
 <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  
<script>
    jQuery(document).ready(function(){        
        jQuery('#emp_department').on('change', function(){          
            let dep = jQuery(this).val();
            console.log(dep);
            if(jQuery(this).val() == 'Other'){                
                jQuery('.other-department').show();
            }
            else{
                jQuery('.other-department').hide();
            }
        });
        jQuery('.form-check-input').on('click', function(){
            let radioval =  jQuery("input[name='Dialer']:checked").val();
            if(radioval == 'Dialer'){
                jQuery('.dialerId').show();
            }
            else{
                jQuery('.dialerId').hide();
            }
        });
        jQuery('#emp_status').on('change', function(){
            let dep = jQuery(this).val();
            if(jQuery(this).val() == 'Inactive'){                
                jQuery('.leaveDate').show();
            }
            else{
                jQuery('.leaveDate').hide();
            }
        });
        jQuery('.emp_status, .emp_other_department').bind('keyup blur',function(){ 
            var node = jQuery(this);
            node.val(node.val().replace(/[^a-z]/g,'') ); }
        );
        jQuery('#phone').bind('keyup blur',function(){ 
            var node = jQuery(this);
            node.val(node.val().replace(/[^0-9]/g,'') ); }
        );
        jQuery('#emp_record').on('submit', function(){
          //alert("New record created successfull");
        });
        jQuery('#sortTable').DataTable({
          paging: true,
          scrollY: 400
        });
        jQuery('#sortstatusTable').DataTable({
          scrollY: 250,
          paging: true
        }); 
        jQuery('#sortTable .bg-gradient-success').click(function(){
          jQuery(this).hide();
          jQuery(this).next('.bg-gradient-primary').show();  
          jQuery(this).parents('tr').addClass('active-row');
          jQuery('tr').addClass('inactive-row');
          jQuery('.inactive-row').find('.csch').attr('contenteditable', 'false');
          jQuery('.active-row').find('.csch').attr('contenteditable', 'true');
        });
        jQuery('#sortTable .bg-gradient-primary').click(function(){
          jQuery(this).hide();
          jQuery(this).prev('.bg-gradient-success').show();
          jQuery(this).parents('tr').removeClass('active-row');
          jQuery('tr').removeClass('inactive-row');
          jQuery('.csch').attr('contenteditable', 'false');
            jQuery.ajax({ 
            url: "update-row.php",
            type: "POST",
            data: { function_name: "updateRecord" },
            success: function(result) {
              // Handle the result of the function here
            },
            error: function(xhr, status, error) {
              // Handle any errors here
            }
        });
    });
  });
 </script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
jQuery(function() {
  jQuery( "#emp_doj, #emp_dol" ).datepicker({
        dateFormat: 'dd-mm-yy',
        defaultDate:"01-01-2012"
    });
});
</script>
<script>
  jQuery(document).ready(function() {
    jQuery('#searchByName').submit(function(event) {
     let empNameSearch =jQuery('#search_emp_name').val();
     if (empNameSearch == ""){
        alert('Enter Correct Name');
        event.preventDefault();
      }
      else{
        return true;
      }
    });
  });
</script>
<script>
  jQuery(document).ready(function() {
    jQuery('#searchByDepartment').submit(function(event) { 
      let departmentvalue = jQuery('#search_emp_department').val(); 
      if(departmentvalue == "--Choose Department--"){
        alert('Choose Correct Department');
        event.preventDefault();
      }
      else{
        return true;
      }
    });
  });
</script>
<script>  
  jQuery(document).ready(function() {
    jQuery('#searchResultByid').submit(function() {
      var inputVal = jQuery('input#emp_id').val();
      if (inputVal.length == 0) {
          alert('Enter Correct ID');
          return false;
      } else {
          let inputresult = inputVal.substring(3);
          jQuery('input#emp_id').val(inputresult);          
      }      
    });
  });
</script>
<script>
  jQuery(window).on('load', function(){
    jQuery('#searchResultForDepartment a').unbind('click', function(){
      return true;
      alert();
     }); 
  });  
</script>
<script type="text/javascript">
  jQuery(window).on('load', function(){
    jQuery('#nameofemp').val();
          jQuery('#departmentofemp').val();
          jQuery('#emailofemp').val();
          jQuery('#currentStatusofemp').val();
          jQuery('#dateofleavingofemp').val();
          //jQuery('.updateform').show();  
          jQuery('.btn-edit').on('click', function(){
            let formName =jQuery(this).parents('tr').children('.csch-name').text();
            let formdepartment =jQuery(this).parents('tr').children('.csch-department').text();
            let formEmail =jQuery(this).parents('tr').children('.csch-email').text();
            let formCS =jQuery(this).parents('tr').children('.csch_CS').text();
            let formdol =jQuery(this).parents('tr').children('.csch-dol').text();
          var inputValTable = jQuery('.emid').text();
          if (inputValTable.length == 0) {
              alert('Enter Correct ID');
              return false;
          } else {
              let inputresultable = inputValTable.substring(2);
              jQuery('#idofemp').val(inputresultable);                     
          }   
          console.log(formName +" " +formdepartment +" " +formEmail +" " +formCS +" " +formdol);
          
          
          jQuery('#nameofemp').val(formName);
          jQuery('#departmentofemp').val(formdepartment);
          jQuery('#emailofemp').val(formEmail);
          jQuery('#currentStatusofemp').val(formCS);
          jQuery('#dateofleavingofemp').val(formdol);
                  
        }); 
        function formsumit(){
          jQuery('#updatesubmit').click();
        }
        jQuery('.btn-update').click(function(){
          let formName =jQuery(this).parents('tr').children('.csch-name').text();
          let formdepartment =jQuery(this).parents('tr').children('.csch-department').text();
          let formEmail =jQuery(this).parents('tr').children('.csch-email').text();
          let formCS =jQuery(this).parents('tr').children('.csch_CS').text();
          let formdol =jQuery(this).parents('tr').children('.csch-dol').text();
          var inputValTable = jQuery('.emid').text();
          if (inputValTable.length == 0) {
              alert('Enter Correct ID');
              return false;
          } else {
              let inputresultable = inputValTable.substring(2);
              jQuery('#idofemp').val(inputresultable);                     
          }   
          console.log(formName +" " +formdepartment +" " +formEmail +" " +formCS +" " +formdol);
          
          
          jQuery('#nameofemp').val(formName);
          jQuery('#departmentofemp').val(formdepartment);
          jQuery('#emailofemp').val(formEmail);
          jQuery('#currentStatusofemp').val(formCS);
          jQuery('#dateofleavingofemp').val(formdol);
          formsumit();
        });
  });  
</script>
</body>
</html>
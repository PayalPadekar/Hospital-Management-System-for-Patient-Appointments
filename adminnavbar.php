<?php include_once('../connection.php') ?>
<?php
    if($_SESSION['id']==""){
        echo "<script> alert('Something went wrong...');</script>";
        header('location:index.php');
    }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Dashboard</title>
  <link rel="shortcut icon" href="img/shri.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  
  

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /* Sidebar*/

    .sidebar {
     /*position: fixed;*/
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      /* Behind the navbar */
      padding: 48px 0 0;
      /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      color:blue;
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 5rem;
        
      }
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
      
      /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #727272;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /Navbar/
    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }
    body a.active {
            background-color: #074590!important;
           color: #F5F9FA!important;
           border-radius:4px;
           font-weight: bold;
           font-family: "Times New Roman", Times, serif;
           font-size:20px;
        }
  </style>
</head>

<body>
<?php
    $pagename=basename($_SERVER['PHP_SELF']);
     ?>

  <nav class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="dashboard.php"><i class="fa fa-hospital-o"></i> Shree Hospital</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link <?php if ($pagename=='index.php'){ echo 'active'; } ?>" href="index.php">Sign out</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">
                <span data-feather="home"></span>
                <i class="fa fa-user fa-2x"></i> <?php echo $_SESSION['username'];?>
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='dashboard.php'){ echo 'active'; } ?>" aria-current="page" href="dashboard.php">
                <span data-feather="home"></span>
                <i class="fa fa-dashboard"></i> Dashboard 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='adminaboutus.php'){ echo 'active'; } ?> " aria-current="page" href="adminaboutus.php">
                <span data-feather="file"></span>
                <i class="fa fa-user"></i> About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='adminblog.php'){ echo 'active'; } ?>" aria-current="page" href="adminblog.php">
                <span data-feather="file"></span>
                <i class="fa fa-list"></i> Blogs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='adminspecialties.php'){ echo 'active'; } ?> " aria-current="page" href="adminspecialties.php">
                <span data-feather="file"></span>
                <i class="fa fa-heartbeat" aria-hidden="true"></i> Specialties
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='admindoctors.php'){ echo 'active'; } ?>" aria-current="page" href="admindoctors.php">
                <span data-feather="file"></span>
                <i class="fa fa-user-md" aria-hidden="true " ></i>
                Doctors
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='admingallery.php'){ echo 'active'; } ?>" aria-current="page" href="admingallery.php">
                <span data-feather="file"></span>
                <i class="fa fa-photo"></i> Gallery
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='adminappointment.php'){ echo 'active'; } ?> " aria-current="page" href="adminappointment.php">
                <span data-feather="file"></span>
                <i class="fa fa-calendar-check-o"></i> Appointment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='admincontact.php'){ echo 'active'; } ?>" href="admincontact.php">
                <span data-feather="file"></span>
                <i class="fa fa-phone "></i> Contact Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pagename=='index.php'){ echo 'active'; } ?>" href="index.php">
                <span data-feather="file"></span>
                <i class="fa fa-sign-out "></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>
<?php include_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        footer li a{
            color: white !important;
        }
        img{
            transition: transform .2s; /* Animation */
        }
        img:hover{
            transform: scale(1.1);
        }
        iframe:hover{
            transition: transform .2s; /* Animation */
        }
        iframe:hover{
            transform: scale(1.1);
        }
        
        footer li a:hover{
            transform: scale(1.1);
        }
        footer li a:hover{
            transition: transform .2s; /* Animation */
        }
        body a:hover{
            transition: transform .2s; /* Animation */
            transform: scale(1.1);
        
        }
        body a.active {
            background-color: #F5F9FA!important;
           color: #074590!important;
           border-radius:4px;
           font-weight: bold;
           font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <?php
    $pagename=basename($_SERVER['PHP_SELF']);
     ?>
    <header class="container-fluid">
        <h1 class="text-center p-2 m-2"><img src="image/logo.png" h-10px w-50px alt=""></h1>
    </header>
         <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top h-100">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="index.php"><i class="fa fa-hospital-o"></i> SHREE HOSPITAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='index.php'){ echo 'active'; } ?>" aria-current="page" href="index.php"><i class="fa fa-home"></i> 
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='blog.php'){ echo 'active'; } ?>" href="blog.php"><i class="fa fa-building-o"></i> Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='about.php'){ echo 'active'; } ?>" href="about.php"><i class="fa fa-user"></i> About Us</a>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='specialties.php'){ echo 'active'; } ?>" href="specialties.php"><i
                                    class="fa fa-heartbeat"></i> Specialties</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='doctors.php'){ echo 'active'; } ?>" href="doctors.php"><i class="fa fa-user-md"></i> Doctors</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($pagename=='gallery.php'){ echo 'active'; } ?>" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Gallery
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="gallery.php#image"><i class="fa fa-image"></i> 
                                        Images</a></li>
                                <li><a class="dropdown-item" href="gallery.php#videos"><i class="fa fa-play"></i> 
                                        Videos</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='appointment.php'){ echo 'active'; } ?>" href="appointment.php"><i
                                    class="fa fa-stethoscope"></i> Appointment</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pagename=='contactus.php'){ echo 'active'; } ?>" href="contactus.php"><i class="fa fa-phone"></i> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
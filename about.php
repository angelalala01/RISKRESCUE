<?php

$host = 'localhost'; 
$db_name = 'feedback';
$username = 'root'; 
$password = ''; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RISKRESCUE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
          background-image: url('img/bg.png'); /* Path to your background image */
          background-size: cover; /* Ensure the image covers the entire viewport */
          background-position: center; /* Center the image */
          background-repeat: no-repeat; /* Prevent the image from repeating */
          background-attachment: fixed; /* Keep the background image fixed during scrolling */
        }
        .page-header {
        background-color: #38b6ff;
    }
      </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-medkit" aria-hidden="true"></i>RISKRESCUE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="learnmore.php" class="nav-item nav-link">Article</a>
                    <a href="about.php" class="nav-item nav-link active">About Us</a>
                    <a href="help.php" class="nav-item nav-link">Help</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Download Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="video-wrapper">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-4 text-justify">About RiskRescue</h1>
                            <p class="mb-4 text-justify"> RiskRescue is an innovative web-based role-playing game designed to enhance flood preparedness education for elementary students in Binangonan, Rizal. Utilizing interactive gameplay, RiskRescue engages students in learning crucial DRR skills, preparing them to effectively respond to natural disasters such as typhoons, floods, and earthquakes. This project aims to create a more resilient and disaster-prepared generation through immersive and engaging educational experiences.</p>       
                        </div>
                        <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.png" alt="">
                                </div>
                                <div class="col-6 text-start" style="margin-top: -150px;">
                                    <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.png" alt="">
                                </div>
                                <div class="col-6 text-end" style="margin-top: -150px;">
                                    <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <br><br>
        <!-- Team Start -->
            <section id="meet-the-team">
                <div class="video-wrapper">
                    <section class="py-5">
                        <h1 class="section-title">Meet the Team</h1>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 col-lg-3">
                                <img src="img/maine.png" class="img-fluid rounded" alt="Germaine Hartily Sumugat">
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <div class="card-body ms-md-5 mt-3 mt-md-0">
                                    <div class="text-muted">Project Manager/3D Artist</div>
                                    <h3 class="fw-bold m-0 mb-4">Germaine Hartily Sumugat</h3>
                                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing vel eligendi necessitatibus quos voluptates doloribus at itaque</p>
                                    <div class="d-flex mt-4">
                                        <a class="btn btn-sm me-2" href="https://www.facebook.com/yourprofile">
                                            <svg class="bi bi-facebook" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                            </svg>
                                        </a>
                                        <a class="btn btn-sm me-2" href="https://www.twitter.com/yourprofile">
                                            <svg class="bi bi-twitter" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                            </svg>
                                        </a>
                                        <a class="btn btn-sm" href="https://www.linkedin.com/in/yourprofile">
                                            <svg class="bi bi-linkedin" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="py-5">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 col-lg-3">
                                    <img src="img/pol.png" class="img-fluid rounded" alt="Jenina Velle Masangcay">
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <div class="card-body ms-md-5 mt-3 mt-md-0">
                                        <div class="text-muted">Game Developer</div>
                                        <h3 class="fw-bold m-0 mb-4">Pola Total</h3>
                                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing vel eligendi necessitatibus quos voluptates doloribus at itaque</p>
                                        <div class="d-flex mt-4">
                                            <a class="btn btn-sm me-2" href="https://www.facebook.com/yourprofile">
                                                <svg class="bi bi-facebook" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm me-2" href="https://www.twitter.com/yourprofile">
                                                <svg class="bi bi-twitter" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm" href="https://www.linkedin.com/in/yourprofile">
                                                <svg class="bi bi-linkedin" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="py-5">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 col-lg-3">
                                    <img src="img/angela.png" class="img-fluid rounded" alt="Jenina Velle Masangcay">
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <div class="card-body ms-md-5 mt-3 mt-md-0">
                                        <div class="text-muted">Frontend/Backend Developer</div>
                                        <h3 class="fw-bold m-0 mb-4">Ma. Angela Maravilla</h3>
                                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing vel eligendi necessitatibus quos voluptates doloribus at itaque</p>
                                        <div class="d-flex mt-4">
                                            <a class="btn btn-sm me-2" href="https://www.facebook.com/yourprofile">
                                                <svg class="bi bi-facebook" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm me-2" href="https://www.twitter.com/yourprofile">
                                                <svg class="bi bi-twitter" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm" href="https://www.linkedin.com/in/yourprofile">
                                                <svg class="bi bi-linkedin" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="py-5">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 col-lg-3">
                                    <img src="img/jenina.png" class="img-fluid rounded" alt="Jenina Velle Masangcay">
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <div class="card-body ms-md-5 mt-3 mt-md-0">
                                        <div class="text-muted">3D Artist</div>
                                        <h3 class="fw-bold m-0 mb-4">Jenina Velle Masangcay</h3>
                                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing vel eligendi necessitatibus quos voluptates doloribus at itaque</p>
                                        <div class="d-flex mt-4">
                                            <a class="btn btn-sm me-2" href="https://www.facebook.com/yourprofile">
                                                <svg class="bi bi-facebook" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm me-2" href="https://www.twitter.com/yourprofile">
                                                <svg class="bi bi-twitter" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm" href="https://www.linkedin.com/in/yourprofile">
                                                <svg class="bi bi-linkedin" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        <!-- Team End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 text-justify">
                        <h3 class="text-white mb-4">RiskRescue</h3>
                        <p class="mb-2">RiskRescue is an innovative virtual reality game designed to enhance flood preparedness education among elementary public school students. Through immersive storytelling and interactive scenarios, it aims to equip students with essential skills for disaster response and resilience.</p>
                    </div>

                    <div class="col-lg-4 text-justify">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social me-2" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 text-justify">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white" href="">About Us</a><br>
                        <a class="btn btn-link text-white" href="">Contact Us</a><br>
                        <a class="btn btn-link text-white" href="">Privacy Policy</a><br>
                        <a class="btn btn-link text-white" href="">Terms & Condition</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr class="bg-white my-4"> <!-- Line separator -->
                <div class="copyright text-center">
                    <p>&copy; <a class="border-bottom text-white" href="index.php">RiskRescue</a>, All Rights Reserved. 
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
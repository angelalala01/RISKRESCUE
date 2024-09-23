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
                    <a href="learnmore.php" class="nav-item nav-link active">Article</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="help.php" class="nav-item nav-link">Help</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Download Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/background.gif" alt="" style="opacity: 0.5;">
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Content Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <!-- Video Section -->
                <section class="video-section mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="video-wrapper">
                                <h2 class="mb-4 text-center">Watch Our Introduction Video</h2>
                                <div class="video-container">
                                    <!-- Embed a video here (YouTube or any video source) -->
                                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/your_video_id" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p class="text-center mt-4 text-justify">Learn more about our initiatives in flood preparedness and how we can help keep your community safe.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="info">
                    <div class="video-wrapper">
                        <h2 class="mb-4 text-center">What is RiskRescue?</h2>
                        <p class="mt-4 text-justify">RiskRescue is an innovative educational platform designed to enhance flood preparedness among elementary public school students in Binangonan, Rizal. Through a role-playing game integrated with virtual reality, RiskRescue immerses students in realistic scenarios, helping them understand and prepare for flood emergencies. The game combines interactive storytelling with practical knowledge, engaging students in an educational experience that emphasizes safety and preparedness.</p>
                    </div>
                </section>
                <br>
                <section id="info2">
                    <div class="video-wrapper">
                        <h2 class="mb-4 text-center">Flood Preparedness Kit</h2>
                        <p class="mt-4 text-justify">
                            Flood preparedness is crucial for minimizing the risks and impacts of flooding. An emergency kit is a vital component, ensuring that families have essential supplies ready. Here’s what a well-prepared flood emergency kit should include:
                        </p>
                        <ul class="mt-4 text-justify">
                            <li><strong>Water:</strong> At least one gallon per person per day for three days.</li>
                            <li><strong>Non-perishable Food:</strong> Enough to last three days, including ready-to-eat items.</li>
                            <li><strong>Battery-Powered or Hand-Crank Radio:</strong> To stay updated on weather conditions and emergency alerts.</li>
                            <li><strong>Flashlight:</strong> With extra batteries to provide light if the power goes out.</li>
                            <li><strong>First Aid Kit:</strong> Including bandages, antiseptics, and prescription medications.</li>
                            <li><strong>Personal Hygiene Items:</strong> Such as soap, hand sanitizer, and moist towelettes.</li>
                            <li><strong>Important Documents:</strong> Copies of personal identification, insurance papers, and medical records.</li>
                            <li><strong>Multi-tool or Swiss Army Knife:</strong> Useful for various needs during an emergency.</li>
                            <li><strong>Cash:</strong> Small denominations in case ATMs are out of service.</li>
                            <li><strong>Comfort Items:</strong> Such as blankets, pillows, and toys for children.</li>
                        </ul>
                    </div>
                </section>
                <br>
                <section id="info3">
                    <div class="video-wrapper">
                        <h2 class="mb-4 text-center">Family Emergency Planning</h2>
                        <p class="mt-4 text-justify">
                            Effective family emergency planning ensures that everyone knows what to do in the event of a flood or other emergencies. Here’s how to create a comprehensive family emergency plan:
                        </p>
                        <ul class="mt-4 text-justify">
                            <li><strong>Designate an Emergency Meeting Place:</strong> Choose a safe location outside your home where family members can gather if you need to evacuate.</li>
                            <li><strong>Create a Communication Plan:</strong> Establish how you will contact each other and where you will meet if separated during an emergency. Ensure that all family members know the contact information of out-of-town relatives who can serve as a point of contact.</li>
                            <li><strong>Develop a Family Emergency Kit:</strong> Make sure your emergency kit is accessible and that all family members know where it is located.</li>
                            <li><strong>Know Your Evacuation Routes:</strong> Familiarize yourself with the local evacuation routes and shelters. Practice these routes regularly.</li>
                            <li><strong>Teach Children About Emergency Procedures:</strong> Ensure children understand what to do in an emergency, including how to use emergency contact information and the importance of staying calm.</li>
                            <li><strong>Plan for Pets:</strong> Include your pets in the emergency plan, ensuring you have their food, water, and medications, and know where they can be safely sheltered.</li>
                        </ul>
                    </div>
                </section>
                
            </div>
        </div>
        <!-- Content End -->


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
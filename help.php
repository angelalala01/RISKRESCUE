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
          background-image: url('img/bg.png'); 
          background-size: cover; 
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed; 
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
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="help.php" class="nav-item nav-link active">Help</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Download Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Help</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Help</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!--Help Start-->
        <section id="help" class="help-sec">
            <div class="container">
              <h1>How can we support you today?</h1>
              <p>If there's anything you need, don't hesitate to ask! We have experts on hand 
                to assist you with any challenge. Just choose among these icons below what you're
                looking for.</p>
              <div class="row">
                <div class="col-md-4">
                  <a href="#info">
                    <div class="feature-box">
                      <i class="fas fa-map"></i>
                      <h3>Game Guide</h3>
                      <p>Learn how to play RiskRescue with this help guide!.</p>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#faqs">
                    <div class="feature-box">
                      <i class="fas fa-question"></i>
                      <h3>FAQs</h3>
                      <p>Browse with ease and find answers to frequently asked 
                        topics in our FAQs.</p>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#feedback">
                    <div class="feature-box">
                      <i class="fas fa-comments"></i>
                      <h3>Feedback</h3>
                      <p>Got a minute? Share your thoughts to help us grow and serve you better.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
        
          <!-- Virtual Button Guide Section -->
          <section id="info" class="p-5">
            <div class="container">
              <h2><i class="fas fa-book"></i> Game Controls</h2>
              <hr>
              <div class="virtual-tour-guide">
                <div class="guide-section">
                  <div class="guide-box">
                    <h5><i class="fas fa-arrow-alt-circle-up icon"></i><i class="fas fa-arrow-alt-circle-down icon"></i><i class="fas fa-arrow-alt-circle-left icon"></i><i class="fas fa-arrow-alt-circle-right icon"></i>
                    Arrows</h5>
                    <p>Arrow Keys and W,A,S,D keys enable users to move both vertically and horizontally during the game.</p>
                </div>
                <div class="guide-section">
                  <div class="guide-box">
                    <h5><i class="fas fa-info-circle icon"></i>Space Bar</h5>
                    <p> Press to jump.
                    </p>
                  </div>
                  <div class="guide-box">
                    <h5><i class="fas fa-bullseye icon"></i>Scroll Bar</h5>
                    <p>Zoom in and Zoom out </p>
                  </div>
                  <div class="guide-box">
                    <h5><i class="fas fa-draw-polygon icon"></i>Left mouse button</h5>
                    <p>To interactive with characters and items within the game.</p>
                  </div>
                  <div class="guide-box">
                    <h5><i class="fas fa-qrcode icon"></i>QR Code</h5>
                    <p>Serve as scannable code that when scanned, provides a clue for a treasure.
                    </p>
                  </div>
                  <div class="guide-box">
                    <h5><i class="fas fa-vr-cardboard icon"></i>Backpack</h5>
                    <p> Allows you to keep the items you find within the game.
                    </p>
                  </div>
                  <div class="guide-box">
                    <h5><i class="fas fa-th-large icon"></i>Phone</h5>
                    <p>Allows you to interact with the characters and accept sudden quests.
                    </p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
        <!-- FAQ Section -->
        <section id="faqs" class="faq-section">
          <div class="container">
            <h2 style="color: #1c64b1;">
              <i class="fas fa-question-circle"></i> Frequently Asked Questions
            </h2>
            <hr>
            <p><br>Here are some of the most frequently asked questions we have received:</p>

            <!-- FAQ Item 1 -->
            <div class="faq">
              <div class="faq-question">
                <span>What is RiskRescue?</span>
                <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                <p><i class="fas fa-lightbulb"></i> 
                  RiskRescue is an innovative web-based role-playing game designed to enhance disaster risk reduction (DRR) education for elementary students in Binangonan, Rizal. Through interactive gameplay, RiskRescue engages students in learning crucial DRR skills, preparing them to effectively respond to natural disasters such as typhoons, floods, and earthquakes. The project aims to create a more resilient and disaster-prepared generation through immersive educational experiences.
                </p>
              </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq">
              <div class="faq-question">
                <span>How do I navigate through the game?</span>
                <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                <p><i class="fas fa-lightbulb"></i> 
                  To navigate through the game, use the arrow or W, A, S, D keys to move up, down, left, or right. <br>
                  For more information, refer to the 
                  <a href="#info">Game Guide</a> above.
                </p>
              </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq">
              <div class="faq-question">
                <span>What is the treasure, and how do I claim it?</span>
                <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                <p><i class="fas fa-lightbulb"></i> 
                  The treasure can be found by locating the mystery character in the game, who will present a small quiz.
                </p>
              </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq">
              <div class="faq-question">
                <span>Is RiskRescue available on the Play Store and App Store?</span>
                <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                <p><i class="fas fa-lightbulb"></i> 
                  Unfortunately, no. But it will be available soon.
                </p>
              </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq">
              <div class="faq-question">
                <span>Is RiskRescue multiplayer?</span>
                <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                <p><i class="fas fa-lightbulb"></i> 
                  Currently, RiskRescue does not support multiplayer mode. However, this feature will be developed in the future.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section id="feedback" class="feedback-section">
        <form action="feedback/feedback.php" method="post" class="agile_form">
            <h2>How satisfied were you with our Service?</h2>
            <div class="feedback">
                <!-- Each emoji is linked to a word-based value -->
                <label class="feedback-option">
                    <input type="radio" value="poor" name="view" required class="hidden-radio" />
                    <div>
                        <!-- Sad Emoji -->
                        &#128577; <!-- Frowning Face -->
                    </div>
                    <span>Poor</span>
                </label>
                <label class="feedback-option">
                    <input type="radio" value="neutral" name="view" class="hidden-radio" />
                    <div>
                        <!-- Neutral Emoji -->
                        &#128528; <!-- Neutral Face -->
                    </div>
                    <span>Neutral</span>
                </label>
                <label class="feedback-option">
                    <input type="radio" value="good" name="view" class="hidden-radio" />
                    <div>
                        <!-- Smiling Emoji -->
                        &#128578; <!-- Slightly Smiling Face -->
                    </div>
                    <span>Good</span>
                </label>
                <label class="feedback-option">
                    <input type="radio" value="excellent" name="view" class="hidden-radio" />
                    <div>
                        <!-- Grinning Emoji -->
                        &#128515; <!-- Grinning Face -->
                    </div>
                    <span>Excellent</span>
                </label>
            </div>

            <h2>If you have specific feedback, please write to us...</h2>
            <input type="text" placeholder="Your Name (optional)" name="name" />
            <input type="email" placeholder="Your Email (optional)" name="email" />
            <textarea placeholder="Additional comments" class="w3l_summary" name="comments" required></textarea>
            
            <center><input type="submit" value="Submit Feedback" class="agileinfo" /></center>
        </form>
        </section>
          <div class="container">
        <!--Help End-->

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
    <script type="application/x-javascript"> 
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); 
    }, false);
    
    function hideURLbar() { 
        window.scrollTo(0, 1); 
    } 
</script>
</body>

</html>
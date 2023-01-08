<?php
ini_set('allow_url_fopen', 1);
ini_set('display_errors', True);
$response_navstevnost = file_get_contents('./api/getUsers/UsersCount');
if ($response_navstevnost > 10) { $new_response_navstevnost = 10; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 50) { $new_response_navstevnost = 50; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 100) { $new_response_navstevnost = 100; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 200) { $new_response_navstevnost = 200; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 400) { $new_response_navstevnost = 400; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 600) { $new_response_navstevnost = 600; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 800) { $new_response_navstevnost = 800; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 1000) { $new_response_navstevnost = 1000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 6000) { $new_response_navstevnost = 6000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 9000) { $new_response_navstevnost = 9000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 10000) { $new_response_navstevnost = 10000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 50000) { $new_response_navstevnost = 50000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 90000) { $new_response_navstevnost = 90000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 100000) { $new_response_navstevnost = 100000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 900000) { $new_response_navstevnost = 500000; } else { $new_response_navstevnost = $response_navstevnost; }
if ($response_navstevnost >= 1000000) { $new_response_navstevnost = 900000; } else { $new_response_navstevnost = $response_navstevnost; }
// Set the API endpoint URL
$apikey_navstevnost = 'ATCYEMBaji1zRqmEugRGzbFR3qSkYIrSc9G2GUZmEsn0PvLwVv';
$ip_address = 'http://192.168.100.47';
$cookieName = 'UsersCount';

// Check if the cookie is set
if (!isset($_COOKIE[$cookieName])) {
    // The cookie is not set, so this is a new user
    $storage_num = 0;
    // Increment the counter
    $storage_num = file_get_contents('./api/getUsers/UsersCount');
    $storage_num++;
    file_put_contents('./api/getUsers/UsersCount', $storage_num);

    // Set the cookie
    setcookie($cookieName, 1, time() + (86400 * 31), '/'); // 86400 = 1 day
}
if ($_GET)
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>CodeIT! | Code your plugin for free!</title>

  <!-- Metadata -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="We will code your plugin for free!" name="description">
  <meta content="codeit, codeitforfun, minecraft plugin coding, web coding, We will code your plugin for free!, plugin code for free, free code, freelancer" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">CodeIT</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="https://discord.gg/M2NaWMuDq5">Discord</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Code IT for fun with us</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We code only for you, we are novice developers who make minecraft plugins and mutch more..</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="https://github.com/CodeITForFun/" class="btn-get-started scrollto">GitHub</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                      <span data-purecounter-start="0" data-purecounter-end="<?php echo $new_response_navstevnost; ?>" data-purecounter-duration="5" class="purecounter"></span>
                    <p>We have <?php echo $new_response_navstevnost; ?>+ <strong>Happy Clients</strong> what uses our plugins..</p>
                  </div>
                </div>

                <!-- <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div> -->

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="5" class="purecounter"></span>
                    <p><strong>Months of experience</strong> working in Java.</p>
                  </div>
                </div>

                <!-- <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div> -->
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>We offer you</h2>
          <p>Our team offer you these options.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Flexibility</a></h4>
              <p class="description">All important messages we put into file.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Documentation</a></h4>
              <p class="description">For all features we made detailed documentation. If you don't know, you can ask on our discord server.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Fast as can</a></h4>
              <p class="description">We made our programs most optimize as we can. Only your server can slow down.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Language</a></h4>
              <p class="description">We support multiple languages, Slovak, Czech, English.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions (FAQ)</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section>
    <!-- End F.A.Q Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>CodeITForFun</strong>. All Rights Reserved
          </div>
          <div class="credits">
            Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>, Edited by <a href="https://github.com/FungY911/#">FungY911</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#hero" class="scrollto">Home</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>BanjirInfo.DIY</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="home.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="img/logo.png" alt="" />
          <h1>BanjirInfo.DIY</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a class="other" href="other.php" class="active">Other</a></li>
            <li><a href="logoutpage.php">Logout</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('img/page-header.gif')">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Other</h2>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="home.php">Home</a></li>
              <li>Get a Quote</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Get a Quote Section ======= -->
      <section id="get-a-quote" class="get-a-quote">
        <div class="container" data-aos="fade-up">
          <div class="row g-0">
            <div class="col-lg-5 quote-bg" style="background-image: url(img/quote-bg.gif)"></div>

            <div class="col-lg-7">
              <form action="forms/quote.php" method="post" class="php-email-form">
                <h3>Saran dan Kritik</h3>
                <p>Untuk terus meningkatkan kualitas layanan yang kami berikan, silakan gunakan formulir di bawah ini untuk memberikan masukan Anda.</p>
                  <div class="col-lg-12">
                  </div>

                  <div class="col-md-12">
                    <input type="text" name="name" class="form-control" placeholder="Name" required />
                  </div>

                  <div class="col-md-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" required />
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required />
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                    <button type="submit">Send</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Quote Form -->
          </div>
        </div>
      </section>
      <!-- End Get a Quote Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="home.php" class="logo d-flex align-items-center">
              <span>BanjirInfo.DIY</span>
            </a>
            <p>Stay Informed About Flood with Us!</p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Terban No. 79<br />
              Yogyakarta, Daerah Istimewa Yogyakarta<br />
              Indonesia <br /><br />
              <strong>Phone:</strong> 021 345 9444<br />
              <strong>Email:</strong> banjirinfodiy@gmail.com<br />
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span>BanjirInfo.DIY</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="purecounter/purecounter_vanilla.js"></script>
    <script src="glightbox/js/glightbox.min.js"></script>
    <script src="swiper/swiper-bundle.min.js"></script>
    <script src="aos/aos.js"></script>
    <script src="php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
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
          <li><a href="services.php" class="active">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="other" href="other.php">Other</a></li>
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
              <h2>Services</h2>
              <p>BanjirInfo.DIY hadir sebagai media untuk mengakses informasi seputar bencana banjir yang berada di wilayah provinsi Derah Istimewa Yogyakarta.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li>Services</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="img/peta.gif" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details.php" class="stretched-link">Peta Bencana Banjir</a></h3>
              <p>Menyediakan peta persebaran wilayah provinsi DIY berpotensi terdampak bencana banjir.</p>
            </div>
          </div>
          <!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="img/panduan.gif" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details2.php" class="stretched-link">Prosedur Peringatan Dini dan Evakuasi Darurat</a></h3>
              <p>Serangkaian langkah-langkah yang dirancang untuk membantu masyarakat dalam menghadapi ancaman banjir.</p>
            </div>
          </div>
          <!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="img/cuaca.gif" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details3.php" class="stretched-link">Prakiraan Cuaca</a></h3>
              <p>Menyajikan informasi prakiraan cuaca di daerah provinsi DIY secara real-time</p>
            </div>
          </div>
          <!-- End Card Item -->
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="img/qgis.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-md-7">
            <h3>Peta Bencana Banjir</h3>
            <ul>
              <li><i class="bi bi-check"></i> Peta persebaran banjir membantu mengidentifikasi daerah-daerah yang rentan terhadap banjir.</li>
              <li><i class="bi bi-check"></i> Data dari peta persebaran banjir digunakan untuk memantau dan memprediksi banjir mendatang.</li>
              <li><i class="bi bi-check"></i> Peta ini digunakan untuk meningkatkan kesadaran masyarakat tentang risiko banjir di wilayah mereka dan tindakan pencegahan yang dapat diambil.</li>
            </ul>
          </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="img/features-2.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Prosedur Peringatan Dini dan Evakuasi Darurat</h3>
            <p class="fst-italic">
              Prosedur ini membantu masyarakat untuk meningkatkan kewaspadaan mereka terhadap bahaya yang mungkin terjadi dan mempersiapkan rencana darurat untuk merespons dengan cepat dan efektif saat situasi darurat terjadi sehingga dapat
              mengurangi dampak negatifnya.
            </p>
          </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="img/features-3.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-md-7">
            <h3>Prakiraan Cuaca</h3>
            <ul>
              <li><i class="bi bi-check"></i>Prakiraan cuaca memberikan peringatan dini tentang potensi banjir.</li>
            </ul>
          </div>
        </div>
        <!-- Features Item -->
      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">
            <div class="accordion accordion-flush" id="faqlist">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa penyebab utama banjir?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Penyebab banjir bisa bermacam-macam, termasuk hujan lebat, aliran sungai yang berlebihan, pasang laut yang tinggi, atau kombinasi dari faktor-faktor tersebut. Perubahan iklim dan aktivitas manusia seperti deforestasi dan
                    perubahan tata guna lahan juga dapat berkontribusi pada meningkatnya risiko banjir.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bagaimana saya bisa mempersiapkan diri untuk menghadapi banjir?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Beberapa langkah yang dapat Anda ambil untuk mempersiapkan diri menghadapi banjir antara lain: 1. Membangun kesadaran akan risiko banjir di wilayah Anda; 2. Membuat rencana evakuasi darurat dan mempersiapkan tas atau
                    kotak evakuasi yang berisi perlengkapan penting; 3. Memperbaiki atau meningkatkan sistem drainase dan pengaliran air di sekitar rumah Anda; 4. Mengamankan barang-barang berharga dan penting di tempat yang aman dan tahan
                    air.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bagaimana cara memantau perkembangan banjir?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Anda dapat memantau perkembangan banjir melalui layanan cuaca dan informasi bencana yang disediakan oleh otoritas setempat atau lembaga pemerintah terkait. Situs web resmi atau aplikasi ponsel mereka sering menyediakan
                    pembaruan terkini tentang kondisi banjir, peringatan dini, dan rekomendasi evakuasi.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa perbedaan antara banjir bandang dan banjir sungai?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Banjir bandang terjadi secara tiba-tiba dan biasanya sangat cepat, disebabkan oleh hujan lebat, curah hujan ekstrem, atau pecahnya bendungan. Banjir sungai, di sisi lain, terjadi ketika air sungai meluap melewati batas
                    normalnya, seringkali sebagai akibat dari hujan yang berkepanjangan atau salju meleleh di daerah aliran sungai.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa yang harus saya lakukan jika saya tinggal di area rentan banjir?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Jika Anda tinggal di area rentan banjir, penting untuk memiliki rencana darurat yang jelas dan terencana. Ini termasuk memahami jalur evakuasi, memiliki persediaan air dan makanan yang cukup, serta mempersiapkan
                    perlengkapan darurat seperti lampu senter, baterai cadangan, dan peralatan medis dasar. Selain itu, Anda juga dapat mempertimbangkan untuk membeli asuransi banjir untuk melindungi properti Anda.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
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

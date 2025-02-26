<?php
session_start();
$pageTitle = "Inlaw | Landing Page";

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body class="index-page">

  <?php include 'includes/nav.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/heroimg.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>All In Law <br>
              <span>InLaw-Legal</span>
            </h1>
            <p> Your Trusted Partner in Legal Success</p>
            <div class="d-flex">
              <a href="https://app.inlaw-legal.tech/firm-login" class="btn-get-started" target="_blank">Get Started</a>
              <a href="assets/img/Introductory Video.mp4" class="glightbox btn-watch-video d-flex align-items-center">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>

            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>InLaw Legal is an All-In-One Legal Management Software. </h2>
            <p>All the features you'll need from calendaring, invoice tracking, client communication, expenses tracking, document management, reminders, case updates, status reports automation, document automation, user management and case management. We even offer document digitization and data entry to have you using the system smoothly. Manage your practice at ease</p>
            <a href="assets/docs/about-us.pdf" target="_blank " class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-pc-display"></i>
                  <h3>InLaw-Legal App</h3>
                  <p>With an all-in-one stop of features, InLaw empowers firms to manage cases, clients, courts, and documents with unmatched efficiency.</p>
                </div>
              </div> <!-- End Icon Box -->


              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-file-earmark-code"></i>
                  <h3>Hard to Soft Copy</h3>
                  <p>Get your physical documents digitized to soft copy PDFs for easier storage and management.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <p class="coming-soon">Coming Soon</p>
                  <i class="bi bi-newspaper"></i>
                  <h3>InLaw News</h3>
                  <p>What do YOU think? <br> Stay Informed, Share Your Thoughts: Your Source for Legal News and Insights with User Comments.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <p class="coming-soon">On Request</p>
                  <i class="bi bi-file-earmark-break"></i>
                  <h3>InLaw Doc Automation</h3>
                  <p>Why bother spending time drafting those same Notices, Affidavits or Fee Notes over and over again?</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>App Features</h2>
        <div><span>What You Get</span> <span class="description-title"></span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-person-lines-fill" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Client Portal</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-file-earmark-code" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Document Automation</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-chat-dots" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Client-Advocate Communication</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-people" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">User Management</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-list-task" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Task Management</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-bar-chart" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Status Reports</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-calendar-check" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Calendaring</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-folder-symlink" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Document Management</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-currency-dollar" style="color: #b2904f;"></i>
              <h3><a href="" class="stretched-link">Accounting</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-alarm" style="color: #b20969;"></i>
              <h3><a href="" class="stretched-link">Reminders</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-briefcase" style="color: #ff5828;"></i>
              <h3><a href="" class="stretched-link">Case Management</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-lightbulb" style="color: #29cc61;"></i>
              <h3><a href="" class="stretched-link">Case Updates</a></h3>
            </div>
          </div><!-- End Feature Item -->

        </div>


      </div>

    </section><!-- /Features Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->
        </div>
      </div>
    </section><!-- /Stats Section -->
    <script>
      // Hide the section by setting display to none
      document.getElementById('stats').style.display = 'none';
    </script>

    <!-- Details Section -->
    <section id="details" class="details section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Details</h2>
        <div><span>Check Our</span> <span class="description-title">Details</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Details Section -->
    <script>
      // Hide the section by setting display to none
      document.getElementById('details').style.display = 'none';
    </script>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <div><span>Check Our</span> <span class="description-title">Gallery</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->
    <script>
      // Hide the section by setting display to none
      document.getElementById('gallery').style.display = 'none';
    </script>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span></span> <span class="description-title">What some of our users have to say</span></div>
      </div><!-- End Section Title -->

      <img src="#" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/defaultpfp.png" class="testimonial-img" alt="">
                <h3>Ashley Makena</h3>
                <h4>Advocate</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Partnering with InLaw Legal completely changed our firm's operations for the better.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/defaultpfp.png" class="testimonial-img" alt="">
                <h3>Robert Oduor</h3>
                <h4>Advocate, Managing Partner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>If it is time, work load and money you want to save up on; then i highly recomend InLaw Legal.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/defaultpfp.png" class="testimonial-img" alt="">
                <h3>Kigen Chebet</h3>
                <h4>Firm Partner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span> A one stop shop indeed for all your Legal practice needs.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <div><span>The brains behind the magic</span> <span class="description-title"></span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="#" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Chad Diro</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href="mailto:chad.diro@inlaw-legal.tech"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="#" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mark Talamson</h4>
                <span>Chief Technical Officer</span>
                <div class="social">
                  <a href="mailto:mark.talamson@inlaw-legal.tech"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="#" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sammi Oyabi</h4>
                <span>Head of RND</span>
                <div class="social">
                  <a href="mailto:info@inlaw-legal.tech"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->
    <script>
      // Hide the section by setting display to none
      document.getElementById('team').style.display = 'none';
    </script>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <div><span>Check out our</span> <span class="description-title">different pricing options</span></div>
      </div>

      <!-- New slider -->
      <div class="container text-center mb-4 d-flex flex-row justify-content-center gap-4">
        <p class="toggle-text monthly">Pay Monthly</p>
        <label for="pricing-toggle">
          <input type="checkbox" class="toggle-checkbox" id="pricing-toggle">
          <div class="toggle-switch"></div>
        </label>
        <p class="toggle-text yearly">Pay Annualy</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Basic Plan</h3>
              <p class="description">Suitable for your briefcase practice</p>
              <h4 class="price monthly"><sup>$</sup>50<span> / month</span></h4>
              <h4 class="savings yearly"><sup>$</sup>500<span> / year <br> save $50</span></h4>
              <a href="#" class="cta-btn">Start today</a>
              <ul>
                <li><i class="bi bi-check"></i> <span>Case Management</span></li>
                <li><i class="bi bi-check"></i> <span>Documnt Management</span></li>
                <li><i class="bi bi-check"></i> <span>Calendaring and Reminders</span></li>
                <li><i class="bi bi-check"></i> <span>Document Automation</li>
                <li><i class="bi bi-check"></i> <span>User Management (upto 5 users)</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Task Management</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Accounting</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Status Report</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Client Portal</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Client Communications</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Case Updates</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">

              <h3>Standard Plan</h3>
              <p class="description">That's more like it! <br>Perfect for all your in house needs.</p>
              <h4 class="price monthly"><sup>$</sup>75<span> / month</span></h4>
              <h4 class="savings yearly"><sup>$</sup>825<span> / year <br> save $75</span></h4>
              <a href="#" class="cta-btn">Start Today</a>
              <ul>
                <li><i class="bi bi-check"></i> <span>Case Management</span></li>
                <li><i class="bi bi-check"></i> <span>Documnt Management</span></li>
                <li><i class="bi bi-check"></i> <span>Calendaring and Reminders</span></li>
                <li><i class="bi bi-check"></i> <span>Document Automation></li>
                <li><i class="bi bi-check"></i> <span>User Management</span></li>
                <li><i class="bi bi-check"></i> <span>Task Management</span></li>
                <li><i class="bi bi-check"></i> <span>Accounting</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Status Report</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Client Portal</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Client Communications</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Case Updates</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item featured">
              <p class="popular">Popular</p>
              <h3>Pro Plan</h3>
              <p class="description">All in one! <br>
                Keep those clients in the loop.<br> Get to fully experience what InLaw App is all about. </p>
              <h4 class="price monthly"><sup>$</sup>100<span> / month</span></h4>
              <h4 class="savings yearly"><sup>$</sup>1000<span> / year <br> save $200</span></h4>
              <a href="#" class="cta-btn">Start Today</a>
              <ul>
                <li><i class="bi bi-check"></i> <span>Case Management</span></li>
                <li><i class="bi bi-check"></i> <span>Documnt Management</span></li>
                <li><i class="bi bi-check"></i> <span>Calendaring and Reminders</span></li>
                <li><i class="bi bi-check"></i> <span>Document Automation></li>
                <li><i class="bi bi-check"></i> <span>User Management</span></li>
                <li><i class="bi bi-check"></i> <span>Task Management</span></li>
                <li><i class="bi bi-check"></i> <span>Accounting</span></li>
                <li><i class="bi bi-check"></i>
                  <span>Status Report</span>
                </li>
                <li><i class="bi bi-check"></i> <span>Client Portal</span></li>
                <li><i class="bi bi-check"></i>
                  <span>Client Communications</span>
                </li>
                <li><i class="bi bi-check"></i>
                  <span>Case Updates</span>
                </li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->
        </div>
      </div>
    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Some of our most Common inquiries answered. If you have any other questions, feel free to <a href="#contact">Contact Us</a>
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>How do i start a subscription?</h3>
                <div class="faq-content">
                  <p>We are currently handling the onboarding of new clients via direct contact with our Management Team. Feel free to either <a href="tel:+254718654571">Call</a>, <a href="mailto:info@inlaw-legal.tech">email</a> or <a href="https://wa.me/254718654571?text=Hello%2C%20I%20would%20like%20to%20set%20up%20an%20account%20for%20my%20firm%20with%20InLaw" target="_blank">Whatsapp us</a> and we will swiftly help set up your account.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>How Can You Convert Your Hard Copy Documents To Soft Copy?</h3>
                <div class="faq-content">
                  <p> We offer digitization services by converting your hardcopy documents to soft copy PDFs at affordable rates. <a href="#contact">Get in touch with us</a> to know how we can get it done for you today.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Can i have my data entered for me?</h3>
                <div class="faq-content">
                  <p>Yes, We Do Offer Initial Setup Services to our clients. <a href="#contact">Contact Us</a> to get started</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Where do i get document automation templates?</h3>
                <div class="faq-content">
                  <p><a href="#contact">Contact Us</a> to get document automation templates generated for you and added to your account and get to free up time from those repetitive tasks.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <div><span>Let us get back to you</span> <span class="description-title"></span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p>Nairobi, Kenya</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <a href="tel:+254718654571">+254 718 654 571</a> <br>
                <a href="tel:+254792314330">+254 792 314 330</a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h3>WhatsApp Us</h3>
                <a href="https://wa.me/254718654571?text=Hello%2C%20I%20have%20an%20inquiry%20for%20InLaw%20Legal" target="_blank">+254 718 654 571</a> <br>
                <a href="https://wa.me/254792314330?text=Hello%2C%20I%20have%20an%20inquiry%20for%20InLaw%20Legal" target="_blank">+254 792 314 330</a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><a href="mailto:info@inlaw-legal.tech">info@inlaw-legal.tech</a></p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php include 'includes/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <?php include 'includes/scripts.php' ?>

</body>

</html>
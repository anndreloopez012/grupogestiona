<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GRUPO GESTIONA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

  <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/logo.jpg" alt=""></a>
      <h1 data-aos="zoom-in">GRUPO GESTIONA</h1>
      <h2 data-aos="fade-up">SLOGAN</h2>
      <a data-aos="fade-up" href="#about" class="btn-get-started scrollto">Iniciar</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Acerca De</a></li>
          <li><a href="#services">Servicios</a></li>

          <li class="nav-logo"><a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a></li>

          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#pricing">Empresas</a></li>
          <li><a href="#contact">Contacto</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <!-- ======= IMPORT PHP ======= -->
  <?php include 'data/conexion.php'; ?>
  <?php include 'api/adm_index.php'; ?>
  <!-- ======= END IMPORT PHP ======= -->
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
          <p><?php echo  $inf_general; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="assets/img/<?php echo  $img_gen; ?>" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3><?php echo  $title_mision; ?></h3>
              <p class="font-italic">
                <?php echo  $content_mision; ?>
              </p>
              <h3><?php echo  $title_plan; ?></h3>
              <p class="font-italic">
                <?php echo  $content_plan; ?>
              </p>
              <h3><?php echo  $title_vision; ?></h3>
              <p class="font-italic">
                <?php echo  $content_vision; ?>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Servicios</h2>
          <p><?php echo  $content_gen; ?></p>
        </div>

        <div class="row">
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/<?php echo  $img_service; ?>");' data-aos="fade-left" data-aos-delay="100"></div>

          <div class="col-lg-6 order-2 order-lg-1">
            <?php
            if (is_array($arrService) && (count($arrService) > 0)) {
              reset($arrService);
              foreach ($arrService as $rTMP['key'] => $rTMP['value']) {
            ?>
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                  <?php echo  $rTMP["value"]['ico']; ?>
                  <h4><?php echo  $rTMP["value"]['titulo']; ?></h4>
                  <p><?php echo  $rTMP["value"]['content']; ?></p>
                </div>
            <?php
              }
            }
            ?>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portafolio</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <?php
              if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
                reset($arrMenuPorfolio);
                foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {

                  if ($rTMP["value"]['abreviatura'] == '*') {
              ?>
                    <li data-filter="<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
                  <?php
                  } else {
                  ?>
                    <li data-filter=".<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
              <?php
                  }
                }
              }
              ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php
          if (is_array($arrPorfolio) && (count($arrPorfolio) > 0)) {
            reset($arrPorfolio);
            foreach ($arrPorfolio as $rTMP['key'] => $rTMP['value']) {
          ?>

          <div class="col-lg-4 col-md-6 portfolio-item <?php echo  $rTMP["value"]['abreviatura']; ?>">
            <div class="portfolio-wrap">
              <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo  $rTMP["value"]['tittle']; ?></h4>
                <p><?php echo  $rTMP["value"]['content']; ?></p>
                <div class="portfolio-links">
                  <a href="<?php echo  $rTMP["value"]['img']; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="<?php echo  $rTMP["value"]['url']; ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          }
          ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Empresas</h2>
        </div>

        <div class="row">

        <?php
          if (is_array($arrEmp) && (count($arrEmp) > 0)) {
            reset($arrEmp);
            foreach ($arrEmp as $rTMP['key'] => $rTMP['value']) {
          ?>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <h3><?php echo  $rTMP["value"]['nombre']; ?></h3>
              <ul>
                <li> <img src="<?php echo  $rTMP["value"]['img']; ?>" width="100%" height="100%"> </li>
                <li><?php echo  $rTMP["value"]['descrip']; ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo  $rTMP["value"]['url']; ?>" class="btn-buy">Ingresar</a>
              </div>
            </div>
          </div>
          <?php
            }
          }
          ?>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Preguntas Frecuentes</h2>
        </div>

        <ul class="faq-list">
        <?php
            if (is_array($arrQuestion) && (count($arrQuestion) > 0)) {
              reset($arrQuestion);
              foreach ($arrQuestion as $rTMP['key'] => $rTMP['value']) {
            ?>
          <li data-aos="fade-up">
            <a data-toggle="collapse" class="collapsed" href="#faq<?php echo  $rTMP["value"]['id']; ?>"><?php echo  $rTMP["value"]['question']; ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq<?php echo  $rTMP["value"]['id']; ?>" class="collapse" data-parent=".faq-list">
              <p>
              <?php echo  $rTMP["value"]['request']; ?>              </p>
            </div>
          </li>
          <?php
              }
            }
            ?>
        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p><?php echo  $descrip; ?></p><br>
          <div class="map-responsive">
            <?php echo  $ubi; ?>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>DIRECCION:</h4>
                <p><?php echo  $dress; ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>CORREO:</h4>
                <p><?php echo  $mail; ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>TELEFONO:</h4>
                <p><?php echo  $telefono; ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="phpmailer/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="assets/img/logo.jpg" alt=""></a>
            <h3>GRUPO GESTIONA</h3>
          </div>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SPI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Servicios Profesionales De Informatica</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <style>
    .map-responsive {
      overflow: hidden !important;
      padding-bottom: 56.25% !important;
      position: relative !important;
      height: 0 !important;
    }

    .map-responsive iframe {
      left: 0 !important;
      top: 0 !important;
      height: 100% !important;
      width: 100% !important;
      position: absolute !important;
    }
  </style>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <!-- Font Osome -->
    <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

<!-- ALERTS MODAL JS -->
<script src="lib/alertify/alertify.js"></script>
<script src="lib/alertify/alertify.min.js"></script>
<!-- SEC  JS -->
<!-- UPLOAD -->
<script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
<script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>

</body>

</html>
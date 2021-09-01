<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> {{ $general->name }} </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="/assets/frontend/img/favicon.png" rel="icon">
  <link href="/assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="/assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/frontend/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/frontend/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/frontend/css/style.css" rel="stylesheet">
</head>

<body>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:{{ $general->email }}"> {{ $general->email }} </a>
        <i class="icofont-phone"></i> {{ $general->phone }}
      </div>
      <div class="social-links">
        <a href="{{ $general->social_twitter }}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{ $general->social_facebook }}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ $general->social_instagram }}" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html"> {{ $general->name }} <span>.</span></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#clients"> Clients </a></li>
          <li><a href="#testimonials"> Testimonials </a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> Welcome to <span> {{ $general->name }} </span></h1>
      <h2> {{ $general->slogan }} </h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto"> Get Started </a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section>

  <main id="main">
    @include('pages.frontend.partial.team')
    @include('pages.frontend.partial.about')
    @include('pages.frontend.partial.skills')
    @include('pages.frontend.partial.counts')
    @include('pages.frontend.partial.clients')
    @include('pages.frontend.partial.features')
    @include('pages.frontend.partial.services')
    @include('pages.frontend.partial.testimonials')
    @include('pages.frontend.partial.portfolio')
    @include('pages.frontend.partial.pricing')
    @include('pages.frontend.partial.faq')
    @include('pages.frontend.partial.contact')
  </main>

  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p> Get the latest news & trends delivered to your inbox. </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3> {{ $general->name }} <span>.</span></h3>
            <p>
              {{ $general->address }}
              <strong>Phone:</strong> {{ $general->phone }} <br>
              <strong>Email:</strong> {{ $general->email }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4> Our Social Networks </h4>
            <p> Follow Us </p>
            <div class="social-links mt-3">
              <a href="{{ $general->social_twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ $general->social_facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $general->social_instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span> {{ $general->name }} </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="#"> XXX </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/frontend/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/frontend/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/frontend/vendor/php-email-form/validate.js"></script>
  <script src="/assets/frontend/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/frontend/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/frontend/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/frontend/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/frontend/js/main.js"></script>

</body>

</html>

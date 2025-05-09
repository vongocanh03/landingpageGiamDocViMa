@extends('layouts.app')

@section('title', 'Portfolio Details')

@section('content')

<header class="header d-flex align-items-center fixed-top" id="header">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a class="logo d-flex align-items-center" href="index.html">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Folio</h1>
    </a>

    <nav class="navmenu" id="navmenu">
      <ul>
      <li><a class="active" href="#hero">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li class="dropdown">
        <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
        <li><a href="#">Dropdown 1</a></li>
        <li class="dropdown">
          <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
          <li><a href="#">Deep Dropdown 1</a></li>
          <li><a href="#">Deep Dropdown 2</a></li>
          <li><a href="#">Deep Dropdown 3</a></li>
          <li><a href="#">Deep Dropdown 4</a></li>
          <li><a href="#">Deep Dropdown 5</a></li>
          </ul>
        </li>
        <li><a href="#">Dropdown 2</a></li>
        <li><a href="#">Dropdown 3</a></li>
        <li><a href="#">Dropdown 4</a></li>
        </ul>
      </li>
      <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <!-- Mobile nav toggle button - Đặt đúng vị trí ngoài nav -->
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

    </div>
  </header>
<main class="main">
<!-- Page Title -->
<div class="page-title dark-background">
<div class="container position-relative">
<h1>Portfolio Details</h1>
<p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
<nav class="breadcrumbs">
<ol>
<li><a href="index.html">Home</a></li>
<li class="current">Portfolio Details</li>
</ol>
</nav>
</div>
</div><!-- End Page Title -->
<!-- Portfolio Details Section -->
<section class="portfolio-details section" id="portfolio-details">
<div class="container" data-aos="fade-up" data-aos-delay="100">
<div class="row gy-4">
<div class="col-lg-8">
<div class="portfolio-details-slider swiper init-swiper">
<script class="swiper-config" type="application/json">
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
<div class="swiper-wrapper align-items-center">
<div class="swiper-slide">
<img alt="" src="assets/img/portfolio/app-1.jpg"/>
</div>
<div class="swiper-slide">
<img alt="" src="assets/img/portfolio/product-1.jpg"/>
</div>
<div class="swiper-slide">
<img alt="" src="assets/img/portfolio/branding-1.jpg"/>
</div>
<div class="swiper-slide">
<img alt="" src="assets/img/portfolio/books-1.jpg"/>
</div>
</div>
<div class="swiper-pagination"></div>
</div>
</div>
<div class="col-lg-4">
<div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
<h3>Project information</h3>
<ul>
<li><strong>Category</strong>: Web design</li>
<li><strong>Client</strong>: ASU Company</li>
<li><strong>Project date</strong>: 01 March, 2020</li>
<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
</ul>
</div>
<div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
<h2>Exercitationem repudiandae officiis neque suscipit</h2>
<p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
</div>
</div>
</div>
</div>
</section><!-- /Portfolio Details Section -->
</main>
<footer class="footer light-background" id="footer">
<div class="container">
<h3 class="sitename">Folio</h3>
<p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
<div class="social-links d-flex justify-content-center">
<a href=""><i class="bi bi-twitter-x"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-skype"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
<div class="container">
<div class="copyright">
<span>Copyright</span> <strong class="px-1 sitename">Folio</strong> <span>All Rights Reserved</span>
</div>
<div class="credits">
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you've purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</div>
</div>
</footer>
<!-- Scroll Top -->
<a class="scroll-top d-flex align-items-center justify-content-center" href="#" id="scroll-top"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>

@endsection

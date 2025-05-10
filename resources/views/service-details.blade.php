@extends('layouts.app')

@section('title', 'Service Details')

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
<h1>Service Details</h1>
<p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
<nav class="breadcrumbs">
<ol>
<li><a href="index.html">Home</a></li>
<li class="current">Service Details</li>
</ol>
</nav>
</div>
</div><!-- End Page Title -->
<!-- Service Details Section -->
<section class="service-details section" id="service-details">
<div class="container">
<div class="row gy-5">
<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
<div class="service-box">
<h4>Serices List</h4>
<div class="services-list">
<a class="active" href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
<a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
<a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product Management</span></a>
<a href="#"><i class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
<a href="#"><i class="bi bi-arrow-right-circle"></i><span>Marketing</span></a>
</div>
</div><!-- End Services List -->
<div class="service-box">
<h4>Download Catalog</h4>
<div class="download-catalog">
<a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
<a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
</div>
</div><!-- End Services List -->
<div class="help-box d-flex flex-column justify-content-center align-items-center">
<i class="bi bi-headset help-icon"></i>
<h4>Have a Question?</h4>
<p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
<p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
</div>
</div>
<div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
<img alt="" class="img-fluid services-img" src="assets/img/services.jpg"/>
<h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
<p>
              Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
            </p>
<ul>
<li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
<li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
<li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
</ul>
<p>
              Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
            </p>
<p>
              Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
            </p>
</div>
</div>
</div>
</section><!-- /Service Details Section -->
</main>
<footer class="footer light-background" id="footer">
<div class="container">
<h3 class="sitename">Nguyễn Văn Hiếu</h3>
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

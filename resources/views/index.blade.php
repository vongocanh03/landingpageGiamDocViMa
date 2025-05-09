@extends('layouts.app')

@section('title', 'Index')

@section('content')
  <main class="main">
    <!-- Hero Section -->
    <section class="hero section dark-background" id="hero">
    <img alt="" data-aos="fade-in" src="assets/img/anh2.jpg" />
    <div class="container" data-aos="fade-up" data-aos-delay="100" style="color:rgb(255, 255, 255)">
    </div>
    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section class="about section" id="about">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 justify-content-between">
      <div class="col-lg-4 profile-img align-self-start">
        <img alt="" class="img-fluid" src="assets/img/profile-img.jpg" />
      </div>
      <div class="col-lg-7 content">
        <h3>Tôi là Nguyễn Văn Hiếu – Giám đốc điều hành Vietnam Marketing (VIMA), đồng thời là Founder của LASA và Thế
        Giới Giày Bảo Hộ. Với hơn 10 năm kinh nghiệm triển khai hàng trăm chiến dịch thực chiến, tôi luôn kiên định
        theo đuổi sứ mệnh.</h3>
        <p>
        Mang tư duy Marketing hiện đại đến gần hơn với doanh nghiệp Việt, góp phần tạo ra giá trị thực sự.
        </p>
        <ul>
        <li><i class="bi bi-check2-all"></i> <span>Founder & CEO Công Ty Cổ Phần LASA (Nhập khẩu & PP Bảo Hộ Lao
          Động).</span>
        </li>
        <li><i class="bi bi-check2-all"></i> <span>Founder Sàn Giao Dịch Công ty Thế Giới Giày Bảo Hộ (Giải thưởng Ý
          tưởng khởi nghiệp xuất sắc năm 2019).</span>
        </li>
        <li><i class="bi bi-check2-all"></i> <span>Giải thưởng Sao Đỏ - Doanh nhân trẻ Việt Nam Tiêu biểu năm
          2019.</span></li>

        <li><i class="bi bi-check2-all"></i> <span>Giải Nhất Ý tưởng khởi nghiệp xuất sắc năm 2022 – CÔNG TY VIETNAM
          MARKETING (VIMA), Dự án : ỨNG DỤNG CHUYỂN ĐỔI SỐ TRONG VIỆC XÂY DỰNG NỀN TẢNG MARKETING CHO DOANH NGHIỆP
          .</span></li>
        </ul>
        <a class="readmore stretched-link" href="{{ route('about.director') }}">
        <span>Xem thêm về tôi </span><i class="bi bi-arrow-right"></i>
        </a>

      </div>
      </div>
    </div>
    </section><!-- /About Section -->


    <!-- Portfolio Section -->
    <section class="portfolio section" id="portfolio">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
      <p>Những cột mốc nổi bật trong hành trình phát triển và hợp tác quốc tế</p>
    </div>
    <!-- End Section Title -->
    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li class="filter-active" data-filter="*">Tất Cả</li>
        <li data-filter=".filter-app">Giải thưởng</li>
        <li data-filter=".filter-product">Giao lưu & Đối tác quốc tế</li>
        <li data-filter=".filter-branding">Hoạt động</li>
        <li data-filter=".filter-books">Công tác Châu Âu</li>
      </ul><!-- End Portfolio Filters -->
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/giaithuong-1.jpg" class="img-fluid" alt="Giải thưởng 1">
          <div class="portfolio-info">
          <h4>Giải thưởng 1</h4>
          <p>Khoảnh khắc nhận giải danh giá</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-app"
            href="assets/img/portfolio/giaithuong-1.jpg" title="App 1"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/doitacquocte-1.jpg" class="img-fluid" alt="Đối tác 1">
          <div class="portfolio-info">
          <h4>Giao lưu quốc tế 1</h4>
          <p>Kết nối với các đối tác toàn cầu</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-product"
            href="assets/img/portfolio/doitacquocte-1.jpg" title="Product 1"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/hoatdong-1.jpg" class="img-fluid" alt="Hoạt động 1">
          <div class="portfolio-info">
          <h4>Hoạt động nội bộ 1</h4>
          <p>Team building gắn kết</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-branding"
            href="assets/img/portfolio/hoatdong-1.jpg" title="Branding 1"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/congtac-1.jpg" class="img-fluid" alt="Châu Âu 1">
          <div class="portfolio-info">
          <h4>Công tác Châu Âu 1</h4>
          <p>Hội thảo tại Đức</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-book"
            href="assets/img/portfolio/congtac-1.jpg" title="Branding 1"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/giaithuong-2.jpg" class="img-fluid" alt="Giải thưởng 2">
          <div class="portfolio-info">
          <h4>Giải thưởng 2</h4>
          <p>Vinh danh nỗ lực không ngừng</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-app"
            href="assets/img/portfolio/giaithuong-2.jpg" title="App 2"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/doitacquocte-2.jpg" class="img-fluid" alt="Đối tác 2">
          <div class="portfolio-info">
          <h4>Giao lưu quốc tế 2</h4>
          <p>Chia sẻ chiến lược phát triển</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-product"
            href="assets/img/portfolio/doitacquocte-2.jpg" title="Product 2"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/hoatdong-2.jpg" class="img-fluid" alt="Hoạt động 2">
          <div class="portfolio-info">
          <h4>Hoạt động nội bộ 2</h4>
          <p>Văn hóa doanh nghiệp năng động</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-branding"
            href="assets/img/portfolio/hoatdong-2.jpg" title="Branding 2"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/congtac-2.jpg" class="img-fluid" alt="Châu Âu 2">
          <div class="portfolio-info">
          <h4>Công tác Châu Âu 2</h4>
          <p>Ký kết tại Pháp</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-book"
            href="assets/img/portfolio/congtac-2.jpg" title="Branding 2"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/giaithuong-3.jpg" class="img-fluid" alt="Giải thưởng 3">
          <div class="portfolio-info">
          <h4>Giải thưởng 3</h4>
          <p>Thành tựu nổi bật trong ngành</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-app"
            href="assets/img/portfolio/giaithuong-3.jpg" title="App 3"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/doitacquocte-3.jpg" class="img-fluid" alt="Đối tác 3">
          <div class="portfolio-info">
          <h4>Giao lưu quốc tế 3</h4>
          <p>Hợp tác phát triển bền vững</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-product"
            href="assets/img/portfolio/doitacquocte-3.jpg" title="Product 3"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/hoatdong-3.jpg" class="img-fluid" alt="Hoạt động 3">
          <div class="portfolio-info">
          <h4>Hoạt động nội bộ 3</h4>
          <p>Sức trẻ & sáng tạo</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-branding"
            href="assets/img/portfolio/hoatdong-3.jpg" title="Branding 2"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div><!-- End Portfolio Item -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/congtac-3.jpg" class="img-fluid" alt="Châu Âu 3">
          <div class="portfolio-info">
          <h4>Công tác Châu Âu 3</h4>
          <p>Thăm doanh nghiệp Hà Lan</p>
          <a class="glightbox preview-link" data-gallery="portfolio-gallery-book"
            href="assets/img/portfolio/congtac-3.jpg" title="Branding 3"><i class="bi bi-zoom-in"></i></a>
          <a class="details-link" href="portfolio-details.html" title="More Details"><i
            class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        </div>
        <!-- End Portfolio Item -->
      </div>
      <!-- End Portfolio Container -->
      </div>
    </div>
    </section>
    <!-- /Portfolio Section -->

    <!-- Brand Support Section -->
    <section class="section bg-light" id="brand-support">
    <div class="container section-title" data-aos="fade-up">
      <h2>Đồng hành xây dựng thương hiệu tại Việt Nam</h2>
      <p>Từng bước định vị – Chiến lược hóa – Phát triển bền vững</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 align-items-stretch">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h3 class="fw-bold mb-3">Hơn một thập kỷ đồng hành cùng hàng trăm thương hiệu</h3>
        <p>
        Với vai trò là Giám đốc Vietnam Marketing (VIMA), tôi đã có cơ hội trực tiếp hỗ trợ nhiều nhãn hàng trong và
        ngoài nước chinh phục thị trường Việt Nam. Từ khâu nghiên cứu thị trường, phát triển bộ nhận diện thương
        hiệu, đến triển khai các chiến dịch truyền thông tích hợp – tất cả đều hướng tới mục tiêu tạo dựng giá trị
        dài hạn cho doanh nghiệp.
        </p>
        <ul class="list-unstyled">
        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Tư vấn định vị thương hiệu theo thị trường nội
          địa</li>
        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Thiết kế bộ nhận diện phù hợp văn hóa tiêu
          dùng</li>
        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Lập kế hoạch và triển khai truyền thông đa nền
          tảng</li>
        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Đồng hành tái định vị khi mở rộng quy mô</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img src="assets/img/portfolio/congtac-2.jpg" class="img-fluid  shadow" alt="Brand Support Image">
      </div>
      </div>
    </div>
    </section>
    <!-- /Brand Support Section -->
    <!-- Testimonials Section -->
    <!-- Media Coverage Section -->
    <section class="section bg-light" id="media">
    <div class="container section-title" data-aos="fade-up">
      <h2>Truyền thông nói về tôi</h2>
      <p>Những bài báo, phóng sự và ghi nhận từ các kênh truyền thông uy tín</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper media-swiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
        <a href="https://diendandoanhnghiep.vn/ceo-nguyen-van-hieu-doanh-nhan-dau-tien-cua-ha-tinh-nhan-giai-thuong-doanh-nhan-tre-viet-nam-tieu-bieu-10097922.html"
          target="_blank" class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-1.png" class="card-img-top" alt="VTV4">
          <div class="card-body">
            <h5 class="card-title">CEO Nguyễn Văn Hiếu:</h5>
            <p class="card-text">Doanh nhân đầu tiên của Hà Tĩnh nhận giải thưởng Doanh nhân trẻ Việt Nam tiêu
            biểu
            </p>
          </div>
          </div>
        </a>
        </div>


        <!-- Slide 2 -->
        <div class="swiper-slide">
        <a href="https://dnthatinh.com/nam-doanh-nhan-tre-ha-tinh-lot-top-100-doanh-nhan-tre-tieu-bieu-toan-quoc/"
          target="_blank" class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-3.png" class="card-img-top" alt="VTV1">
          <div class="card-body">
            <h5 class="card-title">Hội Doanh Nhân Trẻ Hà Tĩnh</h5>
            <p class="card-text">Nam doanh nhân trẻ Hà Tĩnh lọt top 100 doanh nhân trẻ tiêu biểu toàn quốc</p>
          </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
        <a href="https://baohatinh.vn/trao-giai-cuoc-thi-y-tuong-khoi-nghiep-sang-tao-tinh-ha-tinh-2022-post242182.html?fbclid=IwY2xjawJ9dCpleHRuA2FlbQIxMABicmlkETFYSjgwU3pTY1lyT2JFSjlmAR4uRnE5sD5i6PRtA2-gJE18drCDIJbuIZqhhyggXRj1kF9-NR94TgrQbmWpyw_aem_ex_VVmVP98PFh3q7luJhgA"
          target="_blank" class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-4.png" class="card-img-top" alt="Giáo dục & Thời đại">
          <div class="card-body">
            <h5 class="card-title">Báo Hà Tĩnh</h5>
            <p class="card-text">Trao giải Cuộc thi Ý tưởng khởi nghiệp sáng tạo tỉnh Hà Tĩnh 2022.</p>
          </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
        <a href="https://baohatinh.vn/cong-ty-viet-nam-marketing-tu-y-tuong-khoi-nghiep-xuat-sac-den-doanh-nghiep-marketing-tieu-bieu-post274879.html"
          target="_blank" class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-4.png" class="card-img-top" alt="Giáo dục & Thời đại">
          <div class="card-body">
            <h5 class="card-title">Công ty Việt Nam Marketing:</h5>
            <p class="card-text">Từ ý tưởng khởi nghiệp xuất sắc đến doanh nghiệp Marketing tiêu biểu.</p>
          </div>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="swiper-slide">
        <a href="https://vietnammarketing.com.vn/cong-ty-viet-nam-marketing-tu-y-tuong-khoi-nghiep-xuat-sac-den-doanh-nghiep-marketing-tieu-bieu-nguon-bao-ha-tinh/"
          target="_blank" class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-2.png" class="card-img-top" alt="Giáo dục & Thời đại 2">
          <div class="card-body">
            <h5 class="card-title">Công ty Việt Nam Marketing:</h5>
            <p class="card-text">Từ ý tưởng khởi nghiệp xuất sắc đến doanh nghiệp Marketing tiêu biểu.</p>
          </div>
          </div>
        </div>

      </div>

      <!-- Navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination pagination-spacing"></div>
      </div>
    </div>
    </section>

  </main>
  <!-- Scroll Top -->
  <a class="scroll-top d-flex align-items-center justify-content-center" href="#" id="scroll-top"><i
    class="bi bi-arrow-up-short"></i></a>
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
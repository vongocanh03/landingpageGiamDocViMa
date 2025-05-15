@extends('layouts.app')

@section('title', 'Nguyễn Văn Hiếu')

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
        <img alt="" class="img-fluid" src="assets/img/profile.jpg"
        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);" />
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
          Động).</span></li>
        <li><i class="bi bi-check2-all"></i> <span>Founder Sàn Giao Dịch Giày Bảo Hộ (Giải thưởng Ý tưởng khởi
          nghiệp xuất sắc năm 2019).</span></li>
        <li><i class="bi bi-check2-all"></i> <span>UVBCH hội Doanh Nhân Trẻ. 2019.</span></li>
        <li><i class="bi bi-check2-all"></i> <span>Chủ Tịch Hội BNI (Business Network International).</span></li>

        <li><strong>Kinh nghiệm quốc tế:</strong></li>
        <li><i class="bi bi-globe2"></i> <span>5 năm làm việc tại tập đoàn Nhật Bản (tại Việt Nam và Nhật).</span>
        </li>
        <li><i class="bi bi-globe2"></i> <span>1 năm hợp tác với đối tác Pháp.</span></li>
        <li><i class="bi bi-globe2"></i> <span>2 năm làm tại doanh nghiệp Bỉ tại thị trường quốc tế.</span></li>
        </ul>

        <!-- Nội dung ẩn -->
        <div class="collapse mt-3" id="moreInfo">
        <h5>Các dấu mốc sự nghiệp nổi bật</h5>
        <p>🔷 <strong>2013 – Thành lập công ty TNHH LASA</strong><br>
          Chủ tịch HĐQT kiêm Giám đốc điều hành. LASA trở thành doanh nghiệp tiên phong trong ngành bảo hộ lao động
          tại Việt Nam.
        </p>
        <p>🔷 <strong>2019 – Sáng lập sàn Giao dịch Thế giới Giày Bảo Hộ</strong><br>
          Mô hình thương mại điện tử kết nối nhà cung cấp toàn cầu với thị trường Việt, nổi bật bởi tính đột phá và
          thực tiễn.
        </p>
        <p>🔷 <strong>2022 – Sáng lập & điều hành VIMA</strong><br>
          Chủ tịch HĐQT kiêm CEO Công ty CP Giải pháp Tổng thể Marketing Việt Nam – đơn vị tiên phong về chuyển đổi
          số và marketing đa nền tảng.
        </p>
        <h5>Giá trị & Tầm nhìn</h5>
        <p>
          “Đưa tư duy toàn cầu vào giải pháp nội địa – Gắn sự bền vững trong từng chiến lược phát triển.”<br>
          Với triết lý kinh doanh nhân văn và tầm nhìn chiến lược, Tôi không chỉ là nhà lãnh đạo doanh nghiệp, mà
          còn là người truyền cảm hứng cho cộng đồng khởi nghiệp, luôn sẵn sàng chia sẻ kiến thức để nâng cao giá
          trị nội lực doanh nghiệp Việt.
        </p>
        </div>
        <div class="text-center mt-3">
        <a id="toggleMoreBtn" class="btn btn-outline-primary" data-bs-toggle="collapse" href="#moreInfo"
          role="button" aria-expanded="false" aria-controls="moreInfo">
          <span>Xem thêm </span><i class="bi bi-arrow-down"></i>
        </a>
        </div>
      </div>

      </div>
    </div>
    </section><!-- /About Section -->

    <!-- Giải thưởng Section -->
    <section class="portfolio section bg-light" id="awards">
    <div class="container section-title" data-aos="fade-up">
      <h2>Dấu mốc danh giá</h2>
      <p>Những cột mốc ghi dấu nỗ lực và thành tựu nổi bật trong hành trình phát triển</p>
    </div>

    <div class="container">
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
      <!-- Ảnh 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-content h-100">
        <a href="assets/img/portfolio/giaithuong-1.jpg" class="glightbox" data-gallery="awards-gallery"
          title="“Giải thưởng Doanh nhân trẻ Việt Nam tiêu biểu 2019 – một trong những danh hiệu cao quý nhất do 
          Trung ương Hội Doanh nhân trẻ Việt Nam tổ chức, với sự tham dự của Thủ tướng Chính phủ và Bộ trưởng 
          Kế hoạch & Đầu tư Nguyễn Chí Dũng trực tiếp trao tặng.”">
          <img src="assets/img/portfolio/giaithuong-1.jpg" class="img-fluid" alt="Giải thưởng 1">
        </a>
        <div class="portfolio-info">
          <p>Doanh nhân trẻ tiêu biểu 2019</p>
        </div>
        </div>
      </div>

      <!-- Ảnh 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-content h-100">
        <a href="assets/img/portfolio/giaithuong-4.jpg" class="glightbox" data-gallery="awards-gallery"
          title="“Công ty CP Giải pháp Tổng thể Marketing Việt Nam (VIMA) 
          vinh dự được trao chứng nhận Doanh nghiệp khởi nghiệp sáng tạo tiêu biểu tại TechFest 2024
           – diễn đàn kết nối nguồn lực và thúc đẩy đổi mới sáng tạo khu vực Bắc Trung Bộ & Duyên hải miền Trung.”">
          <img src="assets/img/portfolio/giaithuong-4.jpg" class="img-fluid" alt="Giải thưởng 2">
        </a>
        <div class="portfolio-info">
          <p>Chứng nhận Techfest 2024</p>
        </div>
        </div>
      </div>

      <!-- Ảnh 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-content h-100">
        <a href="assets/img/portfolio/giaithuong-3.jpg" class="glightbox" data-gallery="awards-gallery"
          title="“Giải Nhất tại Cuộc thi Ý tưởng Khởi nghiệp Sáng tạo tỉnh Hà Tĩnh năm 2022 là sự ghi nhận 
          xứng đáng cho tinh thần đổi mới, bản lĩnh dấn thân và năng lực kiến tạo giải pháp thực tiễn của một 
          doanh nghiệp trẻ trong hành trình tạo giá trị cho cộng đồng.”">
          <img src="assets/img/portfolio/giaithuong-3.jpg" class="img-fluid" alt="Giải thưởng 3">
        </a>
        <div class="portfolio-info">
          <p>Giải Nhất cuộc thi ý tưởng khởi nghiệp sáng tạo 2022</p>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!-- /Giải thưởng Section -->


    <!-- Hoạt động Section (Rút gọn 6 ảnh) -->
<section class="portfolio section bg-light" id="hoatdong">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Những bước đi thực chiến</h2>
    <p>Đồng hành cùng các thương hiệu, xây dựng nền tảng marketing và phát triển tại thị trường Việt Nam</p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
      <!-- Ảnh 1 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/doitacquocte-1.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Làm việc cùng Chủ tịch hãng Giày Safety Jogger (Bỉ) tại Bỉ , hãng giày có mặt tại 130 quốc gia trên thế giới và bán ra hơn 10 triệu đôi giày mỗi năm">
            <img src="assets/img/portfolio/doitacquocte-1.jpg" class="img-fluid" alt="Team building 1">
          </a>
          <div class="portfolio-info">
            <p>Chủ tịch hãng Giày Safety Jogger (Bỉ)</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 2 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/doitacquocte-3.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Gặp gỡ và ký kết hợp tác với Chủ tịch hãng giày Ziben tại Hàn Quốc (hãng giày lớn nhất Hàn Quốc), phát triển Việt Nam trở thành thị trường lớn thứ 2 của hãng.">
            <img src="assets/img/portfolio/doitacquocte-3.jpg" class="img-fluid" alt="Giao lưu 2">
          </a>
          <div class="portfolio-info">
            <p>Thăm và ký kết hợp tác với Chủ tịch hãng giày Ziben tại Hàn Quốc</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 3 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/doitacquocte-2.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Ký kết hợp tác tổng đại lý phân phối, xây dựng nền tảng Marketing phát triển hệ thống đại lý tại thị trường Việt Nam.">
            <img src="assets/img/portfolio/doitacquocte-2.jpg" class="img-fluid" alt="Workshop 3">
          </a>
          <div class="portfolio-info">
            <p> Hợp tác cùng chủ tịch công ty HANS CO., Ltd. (Hàn Quốc)</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 4 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/anh5.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Làm việc cùng Giám đốc kinh doanh Châu Á của hãng Honeywell (Mỹ)">
            <img src="assets/img/portfolio/anh4.jpg" class="img-fluid" alt="Hội nghị 4">
          </a>
          <div class="portfolio-info">
            <p>Làm việc cùng giám đốc kinh doanh Honeywell (Mỹ)</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 5 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/congtac-3.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Làm việc cùng Giám đốc nhà máy, tìm hiểu công nghệ sản xuất, thu thập dữ liệu để lên chiến lược Marketing cho hãng để phát triển hệ thống các Đại lý tại thị trường Việt Nam.">
            <img src="assets/img/portfolio/congtac-3.jpg" class="img-fluid" alt="Triển lãm 5">
          </a>
          <div class="portfolio-info">
            <p>Thăm nhà máy giày Ziben Safety tại Camphuchia</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 6 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/anh6.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Thăm và làm việc cùng Giám đốc công ty, tìm hiểu quy mô kho hàng, công suất nhà máy, nghiên cứu sản phẩm mới và lên chiến lược phát triển thị trường Việt Nam.">
            <img src="assets/img/portfolio/anh6.jpg" class="img-fluid" alt="Tọa đàm 6">
          </a>
          <div class="portfolio-info">
            <p>Thăm văn phòng hãng giày Hans tại Hàn Quốc</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Hoạt động Section -->


    <!-- Hoạt động khác -->
<section class="portfolio section bg-light" id="hoatdong">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kết nối & lan tỏa</h2>
    <p>Chuỗi hoạt động giao lưu, đào tạo và phát triển nền tảng marketing – nơi các thương hiệu được kết nối, chia sẻ và cùng nhau lớn mạnh.</p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
      <!-- Ảnh 1 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/anh7.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Làm việc cùng Chủ tịch và Giám đốc kinh doanh châu Á công ty Cortina, văn phòng và nhà máy hãng Safety Jogger.">
            <img src="assets/img/portfolio/anh7-1.jpg" class="img-fluid" alt="Team building 1">
          </a>
          <div class="portfolio-info">
            <p>Làm việc cùng Chủ tịch và Giám đốc kinh doanh châu Á công ty Cortina</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 2 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/congtac-1.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Kết nối giao thương tại Thái Lan.">
            <img src="assets/img/portfolio/congtac-1.jpg" class="img-fluid" alt="Giao lưu 2">
          </a>
          <div class="portfolio-info">
            <p>Kết nối giao thương tại Thái Lan</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 3 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/anh8-1.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Cùng Giám đốc châu Á hãng Jogger thăm và làm việc tại Văn phòng chính tập đoàn tại Bỉ, và thăm quan một số nước châu Âu.">
            <img src="assets/img/portfolio/anh8.jpg" class="img-fluid" alt="Workshop 3">
          </a>
          <div class="portfolio-info">
            <p>Thăm và làm việc tại Văn phòng chính tập đoàn Cortina tại Bỉ</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 4 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/hoatdong-3.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Hội thảo chia sẽ chủ đề KPI.">
            <img src="assets/img/portfolio/hoatdong-3.jpg" class="img-fluid" alt="Hội nghị 4">
          </a>
          <div class="portfolio-info">
            <p>Hội thảo chia sẽ chủ đề KPI</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 5 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/anh9.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Chia sẻ, giao lưu với cộng đồng doanh nghiệp, doanh nhân.">
            <img src="assets/img/portfolio/anh9.jpg" class="img-fluid" alt="Triển lãm 5">
          </a>
          <div class="portfolio-info">
            <p>Chia sẻ, giao lưu với cộng đồng doanh nghiệp, doanh nhân</p>
          </div>
        </div>
      </div>

      <!-- Ảnh 6 -->
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <a href="assets/img/portfolio/anh10.jpg" class="glightbox" data-gallery="hoatdong-gallery" title="Chia sẻ kinh nghiệm khởi nghiệp với Sinh viên Đại học Hà Tĩnh.">
            <img src="assets/img/portfolio/anh10.jpg" class="img-fluid" alt="Tọa đàm 6">
          </a>
          <div class="portfolio-info">
            <p>Chia sẻ kinh nghiệm khởi nghiệp với Sinh viên Đại học Hà Tĩnh</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Hoạt động khác Section -->
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
      <h2>Báo chí nói về tôi</h2>
      <p>Hành trình được truyền tải qua những bài viết, chương trình và góc nhìn từ các kênh báo chí – nơi câu chuyện cá nhân trở thành nguồn cảm hứng cho cộng đồng.</p>
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


      </div>

      <!-- Navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination pagination-spacing"></div>
      </div>
    </div>
    </section>


    <section class="section bg-light" id="business-perspective">
    <div class="container section-title" data-aos="fade-up">
      <h2>Tôi tham gia với báo chí, tham luận, bài viết</h2>
      <p>Các bài viết, tọa đàm và phân tích chiến lược từ trải nghiệm điều hành doanh nghiệp thực tế.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper media-swiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
        <a href="https://baohatinh.vn/doanh-nghiep-ha-tinh-chuyen-minh-trong-thoi-dai-so-post255613.html?fbclid=IwY2xjawJ9c_xleHRuA2FlbQIxMABicmlkETFYSjgwU3pTY1lyT2JFSjlmAR4uRnE5sD5i6PRtA2-gJE18drCDIJbuIZqhhyggXRj1kF9-NR94TgrQbmWpyw_aem_ex_VVmVP98PFh3q7luJhgA"
          class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-4.png" class="card-img-top" alt="Bài viết 1">
          <div class="card-body">
            <h5 class="card-title">Báo Hà TĨnh</h5>
            <p class="card-text">Doanh nghiệp Hà Tĩnh "chuyển mình" trong thời đại số
            </p>
          </div>
          </div>
        </a>
        </div>



        <!-- Slide 3 -->
        <div class="swiper-slide">
        <a href="https://vietnammarketing.com.vn/giam-doc-vima-chia-se-kinh-nghiem-khoi-nghiep-voi-sinh-vien-dai-hoc-ha-tinh/"
          class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-2.png" class="card-img-top" alt="Bài viết 3">
          <div class="card-body">
            <h5 class="card-title">Việt Nam Marketing</h5>
            <p class="card-text">Giám đốc VIMA chia sẻ kinh nghiệm khởi nghiệp với Sinh viên Đại học Hà Tĩnh</p>
          </div>
          </div>
        </a>
        </div>

                <!-- Slide 2 -->
        <div class="swiper-slide">
        <a href="https://baohatinh.vn/thuong-mai-hoa-nhieu-y-tuong-khoi-nghiep-o-ha-tinh-post254033.html?fbclid=IwY2xjawJ9dBRleHRuA2FlbQIxMABicmlkETFYSjgwU3pTY1lyT2JFSjlmAR64LG-uHmjkEr5ZEUiyLaONIQveScWmrL5fFrbx0_ZMq_Ntb8uqBOHl72R3jA_aem_rpoQK4PFmLIy7VkSYyLlvg"
          class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-4.png" class="card-img-top" alt="Bài viết 2">
          <div class="card-body">
            <h5 class="card-title">Báo Hà Tĩnh</h5>
            <p class="card-text">Thương mại hóa nhiều ý tưởng khởi nghiệp ở Hà Tĩnh</p>
          </div>
          </div>
        </a>
        </div>

        <div class="swiper-slide">
        <a href="https://vietnammarketing.com.vn/viet-nam-marketing-dat-giai-nhat-cuoc-thi-y-tuong-khoi-nghiep-sang-tao/"
          class="text-decoration-none text-reset">
          <div class="card border-0 shadow-sm h-100">
          <img src="assets/img/baochi/baochi-2.png" class="card-img-top" alt="Bài viết 3">
          <div class="card-body">
            <h5 class="card-title">Việt Nam Marketing</h5>
            <p class="card-text">Việt Nam Marketing đạt giải nhất Cuộc thi Ý tưởng khởi nghiệp sáng tạo tỉnh Hà
            Tĩnh</p>
          </div>
          </div>
        </a>
        </div>

      </div>

      <!-- Navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination pagination-spacing"></div>
      </div>
    </div>
    </section>

    <!-- Video Trao Giải Section -->
<section class="portfolio section bg-light" id="video-awards">
  <div class="container section-title" data-aos="fade-up">
    <h2>Khoảnh Khắc Vinh Danh</h2>
    <p>Ghi lại những dấu ấn đáng nhớ trong hành trình được công nhận và vinh danh từ các tổ chức uy tín.</p>

  </div>

  <div class="container">
    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
      <!-- Video 1 -->
      <div class="col-lg-6 col-md-12 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <div class="ratio ratio-16x9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/1uMMX-idZjs?si=9OHzG7qPZrL4PX6y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>          </div>

        </div>
      </div>

      <!-- Video 2 -->
      <div class="col-lg-6 col-md-12 portfolio-item">
        <div class="portfolio-content h-100 text-center">
          <div class="ratio ratio-16x9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/nKh7y7-b83s?si=DCPQ_sVGjIVXcuNC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>          </div>

        </div>
      </div>
    </div>
  </div>
</section>


    <section class="section" id="my-business">
    <div class="container section-title" data-aos="fade-up">
      <h2>Doanh Nghiệp Của Tôi</h2>
      <p>Khám phá các công ty và dự án mà tôi đã sáng lập và điều hành</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 justify-content-center">
      <!-- Công ty 1 -->
      <div class="col-md-3 d-flex justify-content-center">
        <a href="https://baoholaodonglasa.com" class="text-decoration-none" target="_blank">
        <div class="card border-0 shadow-sm mb-4 d-flex justify-content-center">
          <img src="assets/img/lasa2.png" class="card-img-top" alt="Công ty LASA"
          style="width: 300px; height: 150px;">
        </div>
        </a>
      </div>

      <!-- Công ty 2 -->
      <div class="col-md-3 d-flex justify-content-center">
        <a href="https://vietnammarketing.com.vn/" class="text-decoration-none" target="_blank">
        <div class="card border-0 shadow-sm mb-4 d-flex justify-content-center">
          <img src="assets/img/vima2.png" class="card-img-top" alt="Công ty Vi Ma"
          style="width: 300px; height: 150px;">
        </div>
        </a>
      </div>
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
    <style>
    .portfolio .portfolio-info {
    pointer-events: none;
    }

    .about .content h3 {
    font-size: 1.55rem;
    font-weight: 700;
    line-height: 1.6;
    }
    .btn-outline-primary{
    background-color: #fff !important;
    color: #0f2a7c !important;
    border: 1px solid #0f2a7c;
    }
    .btn-outline-primary:hover{
    background-color: #0f2a7c !important;
    color: #fff !important;
    }
  </style>
  <script>
  const toggleBtn = document.getElementById("toggleMoreBtn");
  const collapseElement = document.getElementById("moreInfo");

  collapseElement.addEventListener("show.bs.collapse", function () {
    toggleBtn.innerHTML = '<span>Thu gọn </span><i class="bi bi-arrow-up"></i>';
  });

  collapseElement.addEventListener("hide.bs.collapse", function () {
    toggleBtn.innerHTML = '<span>Xem thêm </span><i class="bi bi-arrow-down"></i>';
  });
</script>
@endsection
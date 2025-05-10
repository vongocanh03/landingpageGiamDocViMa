@extends('layouts.app')

@section('title', 'Giới thiệu Giám đốc')

@section('content')

    {{-- Giới thiệu chung --}}
    <section id="about-leader" class="section bg-while">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5 text-center mb-0" style="margin-top: 50px;">
                    <img src="{{ asset('assets/img/giamdoc.jpg') }}" alt="Chân dung Giám đốc" class="img-fluid mb-0">
                </div>
                <div class="col-lg-7 mt-0">
                    <div class="section-title mb-3">
                        <h2 class="fw-bold text-uppercase">Giới thiệu chung</h2>
                    </div>
                    <p class="fs-5 text-muted">
                        Nguyễn Văn Hiếu – Chủ tịch HĐQT, Giám đốc điều hành nhiều công ty hàng đầu trong lĩnh vực bảo hộ lao
                        động và marketing tổng thể tại Việt Nam. Với hơn 20 năm kinh nghiệm làm việc tại các tập đoàn đa
                        quốc gia và điều hành doanh nghiệp, anh là người tiên phong trong các mô hình đổi mới sáng tạo, kết
                        nối thị trường nội địa và quốc tế.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Hành trình học vấn --}}
    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center mb-4">
                <h3 class="text-uppercase fw-bold">Hành trình học vấn & trải nghiệm quốc tế</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 ml-5">
                    <ul class="fs-5">
                        <li><strong>Tốt nghiệp:</strong> Đại học Bách Khoa Đà Nẵng (2004) – chuyên ngành kỹ thuật.</li>
                        <li><strong>Kinh nghiệm quốc tế:</strong>
                            <ul>
                                <li>5 năm làm việc tại tập đoàn Nhật Bản (tại Việt Nam và Nhật).</li>
                                <li>1 năm hợp tác với đối tác Pháp.</li>
                                <li>2 năm làm tại doanh nghiệp Bỉ tại thị trường quốc tế.</li>
                            </ul>
                        </li>
                    </ul>
                    <p class="fst-italic text-muted">Đây là giai đoạn đặt nền móng cho tư duy quản trị hiện đại, chuẩn quốc
                        tế.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Dấu mốc sự nghiệp --}}
    <section class="section bg-light">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center mb-4">
                <h3 class="text-uppercase fw-bold">Các dấu mốc sự nghiệp nổi bật</h3>
            </div>

            <div class="timeline">
                <div class="mb-4">
                    <h5 class="fw-bold">🔷 2013 – Thành lập công ty TNHH LASA</h5>
                    <p>Chủ tịch HĐQT kiêm Giám đốc điều hành. LASA trở thành doanh nghiệp tiên phong trong ngành bảo hộ lao
                        động tại Việt Nam.</p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold">🔷 2019 – Sáng lập sàn Giao dịch Thế giới Giày Bảo Hộ</h5>
                    <p>Mô hình thương mại điện tử kết nối nhà cung cấp toàn cầu với thị trường Việt, nổi bật bởi tính đột
                        phá và thực tiễn.</p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold ">🔷 2022 – Sáng lập & điều hành VIMA</h5>
                    <p>Chủ tịch HĐQT kiêm CEO Công ty CP Giải pháp Tổng thể Marketing Việt Nam – đơn vị tiên phong về chuyển
                        đổi số và marketing đa nền tảng.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Giá trị & tầm nhìn --}}
    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center mb-4">
                <h3 class="text-uppercase fw-bold">Giá trị & Tầm nhìn</h3>
            </div>
            <blockquote class="blockquote fs-5 fst-italic text-center">
                “Đưa tư duy toàn cầu vào giải pháp nội địa – Gắn sự bền vững trong từng chiến lược phát triển.”
            </blockquote>
            <p class="fs-5 text-muted text-center">
                Với triết lý kinh doanh nhân văn và tầm nhìn chiến lược, [Tên Giám đốc] không chỉ là nhà lãnh đạo doanh
                nghiệp, mà còn là người truyền cảm hứng cho cộng đồng khởi nghiệp, luôn sẵn sàng chia sẻ kiến thức để nâng
                cao giá trị nội lực doanh nghiệp Việt.
            </p>
        </div>
    </section>

    {{-- Hình ảnh hoạt động --}}
    <section class="section bg-light">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center mb-4">
                <h3 class="text-uppercase fw-bold">Một vài hình ảnh hoạt động</h3>
            </div>

            <div class="row gy-4">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/portfolio/giaithuong-2.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="Hình ảnh 1">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/portfolio/hoatdong-1.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="Hình ảnh 2">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/portfolio/congtac-1.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="Hình ảnh 3">
                </div>
            </div>
        </div>
    </section>

    {{-- Thành tích & giải thưởng --}}
    <section class="section" id="awards">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center mb-4">
                <h3 class="text-uppercase fw-bold">Thành tích & Giải thưởng</h3>
            </div>

            {{-- Giải thưởng Sao Đỏ --}}
            <div class="mb-5">
                <h4 class="fw-bold  mb-3">🏆 Giải thưởng Sao Đỏ – Doanh nhân trẻ Việt Nam tiêu biểu 2019</h4>
                <p class="fs-5">Giải thưởng danh giá do Trung ương Hội Doanh nhân trẻ Việt Nam tổ chức. Buổi lễ có sự tham
                    dự của Thủ tướng Chính phủ, và Bộ trưởng Kế hoạch và Đầu tư Nguyễn Chí Dũng trực tiếp trao giải.</p>
                <div class="row gy-3">
                    <div class="col-md-8">
                        <img src="{{ asset('assets/img/giaithuong/saodo.jpg') }}" class="img-fluid rounded shadow"
                            alt="Nhận giải thưởng Sao Đỏ">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-between">
                        <img src="{{ asset('assets/img/giaithuong/saodo-1.jpg') }}" class="img-fluid rounded shadow-sm mb-3"
                            alt="Báo chí đưa tin 1">
                        <img src="{{ asset('assets/img/giaithuong/saodo-2.jpg') }}" class="img-fluid rounded shadow-sm"
                            alt="Báo chí đưa tin 2">
                    </div>
                </div>
            </div>

            {{-- Top 10 Ý tưởng khởi nghiệp --}}
            <div class="mb-5">
                <h4 class="fw-bold  mb-3">🏅 Giải thưởng Top 10 Ý tưởng khởi nghiệp xuất sắc 2019</h4>
                <p class="fs-5">
                    Được tổ chức bởi Sở Khoa học & Công nghệ Hà Tĩnh. Dự án đạt giải:
                    <strong>Sàn Giao dịch Thế giới Giày Bảo Hộ</strong> –
                    <a href="http://www.thegioigiaybaoho.com" target="_blank">www.thegioigiaybaoho.com</a>
                </p>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/giaithuong/giaykhen.jpg') }}" class="img-fluid rounded shadow"
                            alt="Giấy khen 2019">
                    </div>
                </div>
            </div>

            {{-- Quán quân 2022 --}}
            <div class="mb-5">
                <h4 class="fw-bold  mb-3">🥇 Giải thưởng Quán quân Ý tưởng khởi nghiệp xuất sắc 2022</h4>
                <p class="fs-5">Dự án: <strong>Ứng dụng chuyển đổi số trong việc xây dựng nền tảng Marketing cho doanh
                        nghiệp</strong></p>
                <div class="row justify-content-center">
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/img/giaithuong/ungdung.jpg') }}" class="img-fluid rounded shadow mb-4"
                            alt="Nhận giải 2022">
                        <img src="{{ asset('assets/img/giaithuong/chungnhan.jpg') }}" class="img-fluid rounded shadow"
                            alt="Chứng nhận tham gia tổ tư vấn chuyển đổi số">
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
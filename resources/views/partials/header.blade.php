<header class="header d-flex align-items-center fixed-top" id="header">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center" href="{{ url('/') }}">
            <!-- Hiện trên mobile -->
            <h5 class="sitename text-white d-block d-md-none">Nguyễn Văn Hiếu</h5>

            <!-- Hiện trên desktop -->
            <h3 class="sitename text-white d-none d-md-block">Nguyễn Văn Hiếu</h3>
        </a>

        <!-- Menu navigation -->
        <nav class="navmenu" id="navmenu">
            <ul>
                <li><a href="{{ url('/') }}#hero">Home</a></li>
                <li><a href="{{ url('/') }}#about">Về Tôi</a></li>
                <li><a href="{{ url('/') }}#portfolio">Dấu ấn sự nghiệp</a></li>
                <li><a href="{{ url('/') }}#brand-support">Hoạt động</a></li>
                <li><a href="{{ url(path: '/') }}#media">Truyền Thông</a></li>
                <li><a href="{{ url(path: '/') }}#business-perspective">Doanh Nhân</a></li>

                <li class="dropdown">
                    <a href="#"><span>Công Ty của tôi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="https://vietnammarketing.com.vn/" target="_blank">VIMA</a></li>
                        <!-- <li class="dropdown">
                            <a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li> -->
                        <li><a href="{{ route('lasa.director') }}">LASA</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Icon toggle menu mobile -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list" style="font-size: 30px"></i>
    </div>
</header>

<!-- CSS Styles -->
<style>
    @media (min-width: 992px) {
        .navmenu li a[href="{{ url('/') }}#hero"] {
            display: none;
            /* Ẩn mục "Home" trên desktop */
        }
    }

    /* Ẩn menu icon khi ở desktop */
    @media (min-width: 992px) {
        .mobile-nav-toggle {
            display: none;
        }

        .navmenu {
            display: block;
        }
    }

    /* Các item trong menu */
    .navmenu ul {
        margin: 0;
        padding: 0;
    }

    /* Các mục trong menu */
    .navmenu li {
        position: relative;
        padding: 10px 10px;
        transition: background-color 0.3s ease-in-out;
    }

    /* Hover trên menu */
    .navmenu li:hover {
        color: #f0c674;
    }

    /* Liên kết trong menu */
    .navmenu a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        display: block;
        padding: 8px 0;
    }

    /* Hiệu ứng hover cho các liên kết */
    .navmenu a:hover {
        color: #f0c674 !important;
        /* Thay đổi màu chữ khi hover */
    }

    /* Dropdown style */
    .dropdown ul {
        display: none;
        /* Ẩn menu dropdown */
        position: absolute;
        list-style: none;
        padding-left: 0;
        background-color: white;
        color: white;
        min-width: 150px;
        z-index: 10;
        border-radius: 8px;
        margin-top: 10px;
        /* Khoảng cách giữa item chính và dropdown */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Thêm hiệu ứng shadow cho dropdown */
        transition: all 0.3s ease-in-out;
        /* Hiệu ứng mượt mà */
    }

    /* Hiển thị dropdown khi hover hoặc khi menu dropdown được kích hoạt */
    .dropdown:hover ul {
        display: block;
    }

    .dropdown ul li a {
        padding: 10px 20px;
        text-decoration: none;
        color: black;
        transition: background-color 0.3s ease-in-out;
        background-color: white;
    }

    /* Hiệu ứng hover trong dropdown */
    .dropdown ul li a:hover {
        background-color: #0a1f98;
        ;
        color: #f0c674 !important;
        /* Thay đổi màu khi hover */

    }

    /* Mũi tên dropdown */
    .toggle-dropdown {
        font-size: 10px;
        margin-left: 5px;
        transition: transform 0.3s ease-in-out;
    }

    /* Thay đổi hướng mũi tên khi dropdown được mở */
    .dropdown:hover .toggle-dropdown {
        transform: rotate(180deg);
    }
</style>

<!-- jQuery (optional, for mobile menu toggle) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript to Toggle Mobile Menu -->
<script>
    $(document).ready(function () {
        // Khi người dùng nhấn vào biểu tượng menu
        $('.mobile-nav-toggle').click(function () {
            // Thêm hoặc bỏ lớp "active" cho menu
            $('.navmenu').toggleClass('active');
        });
    });
</script>
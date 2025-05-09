<header class="header d-flex align-items-center fixed-top" id="header">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center" href="{{ url('/') }}">
            <h1 class="sitename">Nguyễn Văn Hiếu</h1>
        </a>

        <nav class="navmenu" id="navmenu">
            <ul>
                <li><a href="{{ url('/') }}#hero">Home</a></li>
                <li><a href="{{ url('/') }}#about">Về Tôi</a></li>
                <li><a href="{{ url('/') }}#portfolio">Dấu ấn sự nghiệp</a></li>
                <li><a href="{{ url('/') }}#brand-support">Hỗ trợ</a></li>
                <li><a href="{{ url('/') }}#media">Truyền Thông</a></li>



                <li class="dropdown">
                    <a href="#"><span>Công Ty của tôi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">VIMA</a></li>
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
                        <li><a href="#">LASA</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </div>
</header>
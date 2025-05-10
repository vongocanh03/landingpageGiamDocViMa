<header class="header d-flex align-items-center fixed-top" id="header">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a class="logo d-flex align-items-center" href="{{ url('/') }}">
      <!-- Hiện trên mobile -->
      <h5 class="sitename text-white d-block d-md-none">Nguyễn Văn Hiếu</h5>

      <!-- Hiện trên desktop -->
      <h3 class="sitename text-white d-none d-md-block">Nguyễn Văn Hiếu</h3>
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
            <!-- Sub-dropdown nếu dùng sau này -->
            <li><a href="#">LASA</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- Toggle button -->
    <i class="mobile-nav-toggle d-xl-none bi bi-list" id="mobileToggle"></i>
  </div>
</header>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Mạng lưới Cựu Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    /* Reset và cài đặt chung */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Arial', sans-serif;
}

/* Sidebar */
.sidebar {
    background: #D32F2F; /* Đỏ tươi */
    width: 250px;
    position: fixed;
    height: 100%;
    overflow-y: auto;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
}
.sidebar h3 {
    color: #FFEB3B; /* Trắng */
    text-align: center;
    padding: 20px 0;
    border-bottom: 2px solid #FFFFFF; /* Trắng */
    font-size: 1.4em;
    text-transform: uppercase;
    font-weight: bold;
}
.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.sidebar ul li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.sidebar ul li a {
    display: block;
    color: #FFFFFF; /* Trắng */
    text-decoration: none;
    padding: 15px 20px;
    font-size: 1.1em;
    transition: all 0.3s ease;
}
.sidebar ul li a:hover {
    background-color: #FFEB3B; /* Vàng sáng cho hover */
    color: #000000; /* Đen */
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
}

/* Dropdown trong Sidebar */
.sidebar ul li ul {
    display: none;
    list-style: none;
    padding-left: 20px;
}
.sidebar ul li ul li a {
    font-size: 0.9em;
    padding: 10px 20px;
}
.sidebar ul li.active ul {
    display: block;
}

/* Header */
.header {
    margin-left: 250px;
    background: #1976D2; /* Xanh dương đậm */
    color: #FFFFFF; /* Trắng */
    padding: 15px;
    text-align: center;
    font-size: 1.7em;
    font-weight: bold;
    text-transform: uppercase;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

/* Content */
.content {
    margin-left: 250px;
    padding: 20px;
    min-height: calc(100vh - 70px);
    background: #FAFAFA; /* Xám nhạt */
    color: #424242; /* Xám đậm */
    font-size: 1.1em;
    line-height: 1.8;
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.05);
}
.content h2 {
    color: #0288D1; /* Xanh dương sáng */
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 1.8em;
    text-align: center;
}
.content p {
    color: #333333; /* Xám đậm */
}

/* Hiệu ứng nút trong sidebar */
.dropdown a.dropdown-toggle::after {
    content: "\f078"; /* Biểu tượng mũi tên */
    font-family: "FontAwesome";
    margin-left: 10px;
}
.dropdown.active a.dropdown-toggle::after {
    content: "\f077"; /* Mũi tên ngược */
}

/* Hiệu ứng chuyển đổi nội dung */
.content-section {
    display: none;
}
.content-section.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

/* Hiệu ứng fade in */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <ul>
            <li><a href="{{ route('addashboard') }}" data-target="dashboard"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle"><i class="fas fa-cogs"></i> Quản lý</a>
                <ul>
                    <li><a href="{{ route('adtaikhoan') }}" data-target="tai-khoan"><i class="fas fa-user"></i> Tài Khoản</a></li>
                    <li><a href="{{ route('adbandieuhanh') }}" data-target="ban-dieu-hanh"><i class="fas fa-users"></i> Ban Điều Hành</a></li>
                    <li><a href="{{ route('adbaidang') }}" data-target="bai-dang"><i class="fas fa-file-alt"></i> Bài Đăng</a></li>
                    <li><a href="{{ route('adtintuc') }}" data-target="tin-tuc"><i class="fas fa-newspaper"></i> Tin Tức</a></li>
                    <li><a href="{{ route('adsukien') }}" data-target="su-kien"><i class="fas fa-calendar-alt"></i> Sự Kiện</a></li>
                    <li><a href="{{ route('admangluoi') }}" data-target="mang-luoi"><i class="fas fa-network-wired"></i> Mạng Lưới</a></li>
                    <li><a href="{{ route('adcohoivieclam') }}" data-target="co-hoi-viec-lam"><i class="fas fa-briefcase"></i> Cơ Hội Việc Làm</a></li>
                </ul>
            </li>
            <li><a href="{{ route('adhoso') }}" class="menu-link" data-target="ho-so"><i class="fas fa-id-card"></i> Hồ sơ cá nhân</a></li>
        </ul>
    </div>

    <!-- Header -->
    <div class="header">
        Quản lý mạng lưới cựu sinh viên
    </div>

    <!-- Content -->
    <div class="content">
        <section>
            @yield('content-admin')
        </section>
        {{-- <div id="dashboard" class="content-section active">
            <h2>Trang chủ - Dashboard</h2>
            <p>Chào mừng bạn đến với trang quản trị mạng lưới cựu sinh viên.</p>
        </div>
        <div id="tai-khoan" class="content-section">
            <h2>Quản lý Tài Khoản</h2>
            <p>Chức năng quản lý tài khoản người dùng.</p>
        </div>
        <div id="ban-dieu-hanh" class="content-section">
            <h2>Quản lý Ban Điều Hành</h2>
            <p>Quản lý thông tin ban điều hành.</p>
        </div>
        <div id="bai-dang" class="content-section">
            <h2>Quản lý Bài Đăng</h2>
            <p>Danh sách và nội dung bài đăng trên hệ thống.</p>
        </div>
        <div id="tin-tuc" class="content-section">
            <h2>Quản lý Tin Tức</h2>
            <p>Quản lý thông tin tin tức mới nhất.</p>
        </div>
        <div id="su-kien" class="content-section">
            <h2>Quản lý Sự Kiện</h2>
            <p>Danh sách và quản lý sự kiện tổ chức.</p>
        </div>
        <div id="mang-luoi" class="content-section">
            <h2>Quản lý Mạng Lưới</h2>
            <p>Quản lý thông tin mạng lưới cựu sinh viên.</p>
        </div>
        <div id="co-hoi-viec-lam" class="content-section">
            <h2>Cơ Hội Việc Làm</h2>
            <p>Danh sách cơ hội việc làm.</p>
        </div>
        <div id="ho-so" class="content-section">
            <h2>Hồ sơ cá nhân</h2>
            <p>Thông tin hồ sơ cá nhân của bạn.</p>
        </div> --}}
    </div>

    <!-- JavaScript -->
    <script>
        const menuLinks = document.querySelectorAll('.menu-link');
        const contentSections = document.querySelectorAll('.content-section');
        const dropdowns = document.querySelectorAll('.dropdown');

        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('data-target');
                contentSections.forEach(section => section.classList.remove('active'));
                document.getElementById(target).classList.add('active');
            });
        });

        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            });
        });
    </script>
</body>
</html>

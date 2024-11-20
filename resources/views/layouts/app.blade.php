<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Mạng Lưới Cựu Sinh Viên</title>
    <link rel="icon" href="{{ asset('images/Alumni.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <!-- Thêm link Bootstrap Icons vào phần <head> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

</head>

<body>

    <!-- Header -->
    <div class="top">
        <header>
            <div class="header-left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/Alumni.png') }}" alt="Logo" class="logo">
                </a>
            </div>
            <div class="header-center">
                <h1>
                    Mạng Lưới Cựu Sinh Viên <br>
                    Trường Đại Học Công Nghệ Thông Tin và Truyền Thông Việt Hàn
                </h1>
            </div>
            <div class="header-auth">

                @if(!Auth::check())
                    <button class="login" onclick="window.location.href='{{ route('login') }}'">
                        <i class="bi bi-person" id="login"></i> Đăng nhập
                    </button>
                    <button class="login" onclick="window.location.href='{{ route('register') }}'">
                        <i class="bi bi-person-plus" id="register"></i> Đăng ký
                    </button>
                @else
                    <!-- <p>Xin chào, {{ Auth::user()->name }}!</p> -->

                    <div class="dropdown">
                        <a href="javascript:void(0)" class="login dropdown-toggle" onclick="toggleDropdown()">
                            Xin chào, {{ Auth::user()->name }}!
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="menu-items" id="userDropdown">
                            <li><a href="#">Cài đặt & quyền riêng tư</a></li>
                            <li><a href="#">Trợ giúp & hỗ trợ</a></li>
                            <li><a href="#">Đóng góp ý kiến</a></li>
                            @if(Auth::user()->level === '1')
                                <!-- Menu dành riêng cho admin -->
                                <li><a href="{{ route('createPost') }}">Đăng bài</a></li>
                                <li><a href="">Quản lý thành viên</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </div>

                @endif
            </div>
        </header>

        <!-- Thanh Menu Chính -->
        <nav class="navbar">
            <ul>
                <li id="about-menu">
                    <a href="{{ route('about') }}"><i class="bi bi-info-circle"></i> Giới thiệu</a>
                    <ul class="submenu">
                        <li><a href="{{ route('gioithieumangluoi') }}">Giới thiệu mạng lưới</a></li>
                        <li><a href="{{ route('bandieuhanh') }}">Ban điều hành</a></li>
                        <li><a href="{{ route('quyenloivanghiavu') }}">Quyền lợi và nghĩa vụ</a></li>
                    </ul>
                </li>
                <li id="forum-menu">
                    <a href="{{route('forum')}}"><i class="bi bi-chat-dots"></i> Diễn đàn</a>
                </li>
                <li id="news-menu">
                    <a href="{{route('news')}}"><i class="bi bi-newspaper"></i> Tin tức</a>
                    <ul class="submenu">
                        <li><a href="{{ route('thongbao') }}">Thông báo</a></li>
                        <li><a href="#">Hoạt động</a></li>
                        <li><a href="#">Vinh danh</a></li>
                    </ul>
                </li>
                <li id="events-menu">
                    <a href="{{route('events')}}"><i class="bi bi-calendar-event"></i> Sự kiện</a>
                    <ul class="submenu">
                        <li><a href="#">Sắp tới</a></li>
                        <li><a href="#">Đang diễn ra</a></li>
                        <li><a href="#">Đã kết thúc</a></li>
                    </ul>
                </li>
                <li id="network-menu">
                    <a href="{{ route('network') }}"><i class="bi bi-people"></i> Mạng lưới</a>
                    <ul class="submenu">
                        <li><a href="{{ route('clb') }}">Câu lạc bộ</a></li>
                        <li><a href="#">Ban liên lạc các Ngành</a></li>
                    </ul>
                </li>
                <li id="jobs-menu">
                    <a href="{{ route('jobs') }}"><i class="bi bi-briefcase"></i> Cơ hội việc làm</a>
                    <ul class="submenu">
                        <li><a href="#">Giới thiệu việc làm</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Đối tác</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Nội dung chính -->
    <div class="content">
        <div class="sidebar">
            <h3 id="sidebar-title">Giới thiệu</h3>
            <ul class="submenu">
                <li><a href="{{ route('gioithieumangluoi') }}">Giới thiệu mạng lưới</a></li>
                <li><a href="{{ route('bandieuhanh') }}">Ban điều hành</a></li>
                <li><a href="{{ route('quyenloivanghiavu') }}">Quyền lợi và nghĩa vụ</a></li>
            </ul>

            <h3 id="sidebar-title">Diễn đàn</h3>

            <h3 id="sidebar-title">Tin tức</h3>
            <ul class="submenu">
                <li><a href="{{ route('thongbao') }}">Thông báo</a></li>
                <li><a href="#">Hoạt động</a></li>
                <li><a href="#">Vinh danh</a></li>
            </ul>

            <h3 id="sidebar-title">Sự kiện</h3>
            <ul class="submenu">
                <li><a href="#">Sắp tới</a></li>
                <li><a href="#">Đang diễn ra</a></li>
                <li><a href="#">Đã kết thúc</a></li>
            </ul>

            <h3 id="sidebar-title">Mạng lưới</h3>
            <ul class="submenu">
                <li><a href="#">Câu lạc bộ</a></li>
                <li><a href="#">Ban liên lạc các Ngành</a></li>
            </ul>

            <h3 id="sidebar-title">Cơ hội việc làm</h3>
            <ul class="submenu">
                <li><a href="#">Giới thiệu việc làm</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Đối tác</a></li>
            </ul>

        </div>
        <div class="main-content">
            @yield('content') <!-- Nội dung chính sẽ được chèn vào đây -->
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <!-- Phần Logo -->
        <div class="footer-section footer-logo">
            <img src="{{ asset('images/Alumni.png') }}" alt="Logo" class="logo">
        </div>

        <!-- Phần Thông tin cơ bản -->
        <div class="footer-section footer-info">
            <p><strong>Mạng lưới Cựu Sinh Viên <br>Trường Đại học Công Nghệ Thông Tin Và Truyền Thông Việt Hàn</strong>
            </p>
            <p><i class="bi bi-geo-alt-fill"></i> Địa chỉ: Hoà Hải, Ngũ Hành Sơn, Đà Nẵng, Việt Nam</p>
            <p><i class="bi bi-telephone-fill"></i> Điện thoại: 999999999999</p>
            <p><i class="bi bi-envelope-fill"></i> Email: <a href="mailto:hanu@hanu.edu.vn">alumni.vku.udn.vn</a></p>
        </div>

        <!-- Phần Liên kết quan trọng -->
        <div class="footer-section footer-links">
            <h3>Liên kết quan trọng</h3>
            <ul>
                <li><a href="#"><i class="bi bi-info-circle"></i> Giới thiệu</a></li>
                <li><a href="#"><i class="bi bi-chat-dots"></i> Diễn đàn</a></li>
                <li><a href="#"><i class="bi bi-newspaper"></i> Tin tức</a></li>
                <li><a href="#"><i class="bi bi-calendar-event"></i> Sự kiện</a></li>
                <li><a href="#"><i class="bi bi-people"></i> Mạng lưới</a></li>
                <li><a href="#"><i class="bi bi-briefcase"></i> Cơ hội việc làm</a></li>
            </ul>
        </div>

        <!-- Phần Liên kết Mạng xã hội -->
        <div class="footer-section footer-social">
            <h3>Theo dõi chúng tôi</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div> <br>
        <div class="footer-copyright">
            <hr>
            <h4> Copyright &copy;2024 - Trường Đại học Công Nghệ Thông Tin Và Truyền Thông Việt Hàn, All Rights Reserved
                |
                Powered by Phan Văn Đạt-Nguyễn Thành Thịnh</h4>
        </div>
    </footer>





</body>

</html>
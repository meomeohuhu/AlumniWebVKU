<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Mạng Lưới Cựu Sinh Viên</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Thêm link Bootstrap Icons vào phần <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


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
            <a class="login" href="{{ route('login') }}"><i class="bi bi-person"></i> Đăng nhập</a>
            <a class="login" href="{{ route('register') }}"><i class="bi bi-person-plus"></i> Đăng ký</a>
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
                    <li><a href="#">Thông báo</a></li>
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
                    <li><a href="#">Câu lạc bộ</a></li>
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
<div class="home-content">
    
    <div class="inner-home-content">
        <!-- Video Banner -->
        <section class="banner-section">
            <video autoplay muted loop class="banner-video">
                <source src="{{ asset('images/banner.mp4') }}" type="video/mp4">
                Trình duyệt của bạn không hỗ trợ video.
            </video>
            <div class="banner-text">
                <h2>Chào mừng đến với <br> Mạng lưới Cựu Sinh Viên VKU</h2> 
                <p>Kết nối đam mê - Tạo dựng cơ hội</p>
            </div>

        </section>

<br>
    <div class="container">
        <div class="stat-card">
            <i class="bi bi-mortarboard" style="font-size: 70px; color: #b30000; margin-bottom: 15px;"></i>
            <h3>7K+</h3>
            <p><b>Cựu sinh viên</b></p>
        </div>
        <div class="stat-card">
            <i class="bi bi-building" style="font-size: 70px; color: #b30000; margin-bottom: 15px;"></i>
            <h3>5+</h3>
            <p><b>Năm thành lập</b></p>
        </div>
        <div class="stat-card">
            <i class="bi bi-people" style="font-size: 70px; color: #b30000; margin-bottom: 15px;"></i>
            <h3>10+</h3>
            <p><b>Câu lạc bộ</b></p>
        </div>
    </div>

    <main class="news-events-container new-style">
        <!-- Cột Tin tức -->
        <section class="news-column new-style">
            <h2 class="new-style"><i class="bi bi-caret-right-fill"></i>Giới thiệu</h2>
    <p>Mạng lưới Cựu sinh viên VKU là một cộng đồng kết nối các thế hệ sinh viên đã tốt nghiệp từ trường, tạo nên một 
        hệ sinh thái hỗ trợ và phát triển vì lợi ích chung của cựu sinh viên và nhà trường. Chúng tôi cam kết xây dựng 
        và duy trì mối quan hệ bền vững giữa nhà trường và các thế hệ cựu sinh viên, đồng thời hỗ trợ lẫn nhau trong 
        công việc, học tập và phát triển kỹ năng.</p>
            
        </section>
        
    </main>
<main class="news-events-container new-style">
    <!-- Cột Tin tức -->
    <section class="news-column new-style">
        <h2 class="new-style"><i class="bi bi-caret-right-fill"></i>Tin tức</h2>
        
        <!-- Form Tin tức -->
        <form action="#" method="POST">
            <div class="news-item new-style">
                <img src="https://th.bing.com/th/id/OIP.LZwo3IXK2fmvq3X_SjcLRgHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Hành trang kiến thức">
                <div>
                    <h3>HÀNH TRANG KIẾN THỨC VÀ TRẢI NGHIỆM CHO NHỮNG CHUYẾN ĐI DÀI</h3>
                    <p><strong>19/11/2024</strong> - Chiều ngày 15/11/2024...</p>
                </div>
            </div>
            <div class="news-item new-style">
                <img src="https://th.bing.com/th/id/OIP.LZwo3IXK2fmvq3X_SjcLRgHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Lắng nghe để hiểu">
                <div>
                    <h3>LẮNG NGHE ĐỂ HIỂU - GẮN KẾT ĐỂ TIẾN XA</h3>
                    <p><strong>05/11/2024</strong> - Chiều ngày 4/11/2024...</p>
                </div>
            </div>
            <div class="news-item new-style">
                <img src="https://th.bing.com/th/id/OIP.LZwo3IXK2fmvq3X_SjcLRgHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Gặp gỡ cựu sinh viên">
                <div>
                    <h3>GẶP GỠ CỰU SINH VIÊN NỘI TRÚ</h3>
                    <p><strong>31/10/2024</strong> - Chương trình D4...</p>
                </div>
            </div>
            <!-- Xem thêm Link -->
            <a href="#">Xem thêm</a>
        </form>
    </section>

    <!-- Cột Sự kiện -->
    <section class="events-column new-style">
        <h2 class="new-style"><i class="bi bi-caret-right-fill"></i>Sự kiện</h2>

        <!-- Slider Container -->
        <div class="slider-container">
            <div class="event-item new-style">
                <img src="https://th.bing.com/th/id/OIP.LZwo3IXK2fmvq3X_SjcLRgHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Đêm doanh nhân">
                <h3>ĐÊM DOANH NHÂN BÁCH KHOA 2022</h3>
                <p><strong>Ngày diễn ra:</strong> 22/12/2022</p>
                <p><strong>Địa điểm:</strong> 10/03/2024</p>
                <a href="#" class="btn new-style">Xem chi tiết</a>
            </div>
            <div class="event-item new-style">
                <img src="https://th.bing.com/th/id/OIP.LZwo3IXK2fmvq3X_SjcLRgHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Sự kiện khác">
                <h3>NGÀY HỘI VIỆC LÀM 2024</h3>
                <p><strong>Ngày diễn ra:</strong> 10/03/2024</p>
                <p><strong>Địa điểm:</strong> 10/03/2024</p>
                <a href="#" class="btn new-style">Xem chi tiết</a>
            </div>
            <div class="event-item new-style">
                <img src="https://th.bing.com/th/id/OIP.LZwo3IXK2fmvq3X_SjcLRgHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Sự kiện 3">
                <h3>SỰ KIỆN 3</h3>
                <p><strong>Ngày diễn ra:</strong> 20/05/2024</p>
                <p><strong>Địa điểm:</strong> 10/03/2024</p>
                <a href="#" class="btn new-style">Xem chi tiết</a>
            </div>
        </div>

        <!-- Arrow Buttons -->
        <div class="arrow-btn arrow-left" onclick="moveSlide(-1)">&#10094;</div>
        <div class="arrow-btn arrow-right" onclick="moveSlide(1)">&#10095;</div>
    </section>
</main>

<script>
    let currentIndex = 0;

    function moveSlide(direction) {
        const sliderContainer = document.querySelector('.slider-container');
        const items = document.querySelectorAll('.event-item.new-style');
        const totalItems = items.length;

        // Adjust index based on direction
        currentIndex = (currentIndex + direction + totalItems) % totalItems;

        // Move the slider to the correct position
        const slideWidth = items[0].offsetWidth + 25; // Get width of one item + margin
        sliderContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    // Optionally, set up an automatic slide every 3 seconds
    setInterval(() => moveSlide(1), 3000);
</script>


        
    </div>
    
</div>
<main class="news-events-container new-style">
    <!-- Cột Tin tức -->
    <section class="news-column new-style">
        <h2 class="new-style"><i class="bi bi-caret-right-fill"></i>Tuyển dụng</h2> 
        <body>
            <div class="job-listing-container">
                
                <!-- Second Job Card for a Software Company in Da Nang -->
                <div class="job-card-wrapper expired">
                    <img src="https://freelancervietnam.vn/wp-content/uploads/2019/05/fpt-software-fsoft-260452.jpg" alt="DaNang Software Solutions" class="company-logo-img">
                    <div class="job-info">
                        <h4>FPT Software Danang tuyển dụng</h4>
                        <p>Nhà phát triển phần mềm FPT Software</p>
                        <p><i class="bi bi-currency-dollar icon"></i><strong>Lương:</strong> 18,000,000 - 35,000,000 VND</p>
                        <p><i class="bi bi-geo-alt icon"></i><strong>Địa điểm:</strong> Đà Nẵng</p>
                        <p><i class="bi bi-calendar icon"></i><strong>Thời gian:</strong> 01/09/2024 - 30/10/2024</p>
                        <p><i class="bi bi-briefcase icon"></i><strong>Kinh nghiệm:</strong> Không yêu cầu kinh nghiệm</p>
                        <p class="expired-text">Đã hết hạn ứng tuyển</p>
                        <div class="action-buttons">
                            <a href="{{ route('chitiettuyendung') }}" class="view-details-link"><i class="bi bi-info-circle"></i> Xem chi tiết</a>
                            <button class="apply-button disabled" disabled><i class="bi bi-send"></i> Ứng tuyển</button>
                        </div>
                    </div>
                </div>
                <!-- First Job Card for a Software Company in Da Nang -->
                <div class="job-card-wrapper">
                    <img src="https://top10danang.com/wp-content/uploads/2023/01/cong-ty-phan-mem-enclave-cong-ty-it-o-da-nang-chat-luong-top10danang.jpg.webp" alt="Tech Innovators" class="company-logo-img">
                    <div class="job-info">
                        <h4>Công ty phần mềm Enclave tuyển dụng</h4>
                        <p></p>
                        <p><i class="bi bi-currency-dollar icon"></i><strong>Lương:</strong> 15,000,000 - 30,000,000 VND</p>
                        <p><i class="bi bi-geo-alt icon"></i><strong>Địa điểm:</strong> Đà Nẵng</p>
                        <p><i class="bi bi-calendar icon"></i><strong>Thời gian:</strong> 01/11/2024 - 15/12/2024</p>
                        <p><i class="bi bi-briefcase icon"></i><strong>Kinh nghiệm:</strong> Tối thiểu 2 năm</p>
                        <p class="remaining-time">Còn 20 ngày để ứng tuyển</p>
                        <div class="action-buttons">
                            <a href="{{ route('chitiettuyendung') }}" class="view-details-link"><i class="bi bi-info-circle"></i> Xem chi tiết</a>
                            <button class="apply-button active"><i class="bi bi-send"></i> Ứng tuyển</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#">Xem thêm</a>
        </body>
    </section>
</main>
<main class="news-events-container new-style">
    <!-- Cột Tin tức -->
    <section class="news-column new-style">
        <h2 class="new-style"><i class="bi bi-caret-right-fill"></i>Câu lạc bộ</h2>
        
        <body>
        
                <div class="club-details">
                    <div class="club-item">
                        <!-- Hiển thị ảnh hình chữ nhật cho câu lạc bộ -->
                        <img src="https://th.bing.com/th/id/R.f09b6bbecdaa54c35f9fb9f06754c0e0?rik=UHPgSN8b3zRSGA&pid=ImgRaw&r=0" alt="Club Logo" class="club-image">
                        <p><strong>CLB:</strong> Tennis Cựu sinh viên</p>
                        <p><strong>Số lượng thành viên:</strong> 4</p>
                        <p><strong>Chủ tịch:</strong> Phan Văn Đạt</p>
                        <a href="{{ route('ndclb') }}" class="view-button">Xem chi tiết</a>
                    </div>
                    <div class="club-item">
                        <!-- Hiển thị ảnh hình chữ nhật cho câu lạc bộ -->
                        <img src="https://th.bing.com/th/id/OIP.ViINj6OYu-uP64m4wT63yAHaEJ?rs=1&pid=ImgDetMain" alt="Club Logo" class="club-image">
                        <p><strong>CLB:</strong>Bóng Số CSV</p>
                        <p><strong>Số lượng thành viên:</strong> 99</p>
                        <p><strong>CT:</strong> Nguyễn Thành Thịnh</p>
                        <a href="{{ route('ndclb') }}" class="view-button">Xem chi tiết</a>
                    </div>
                    <div class="club-item">
                        <!-- Hiển thị ảnh hình chữ nhật cho câu lạc bộ -->
                        <img src="https://via.placeholder.com/300x200" alt="Club Logo" class="club-image">
                        <p><strong>CLB:</strong> Bóng Đá CSV</p>
                        <p><strong>Số lượng thành viên:</strong> 4</p>
                        <p><strong>Chủ tịch:</strong> Trống</p>
                        <a href="{{ route('ndclb') }}" class="view-button">Xem chi tiết</a>
                    </div>
                </div> <br>
                <a href="#">Xem thêm</a>
            </div>
        </body>
    </section>
    
</main>


<div class="home-content">
    
</div>

<!-- Footer -->
<footer>
    <!-- Phần Logo -->
    <div class="footer-section footer-logo">
        <img src="{{ asset('images/Alumni.png') }}" alt="Logo" class="logo">
    </div>

    <!-- Phần Thông tin cơ bản -->
    <div class="footer-section footer-info">
        <p><strong>Mạng lưới Cựu Sinh Viên <br>Trường Đại học Công Nghệ Thông Tin Và<br> Truyền Thông Việt Hàn</strong></p>
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
            <li><a href="#" >Facebook</a></li>
            <li><a href="#" >Instagram</a></li>
            <li><a href="#" >Twitter</a></li>
        </ul>
    </div> <br>
    <div class="footer-copyright">
        <hr>
        <h3> Copyright &copy;2024 - Trường Đại học Công Nghệ Thông Tin Và Truyền Thông Việt Hàn, All Rights Reserved |
            Powered by Phan Văn Đạt-Nguyễn Thành Thịnh</h3>
    </div>
</footer>


<!-- Kết nối JavaScript -->
{{-- <script src="{{ asset('js/sidebar.js') }}"></script> --}}

</body>
</html>
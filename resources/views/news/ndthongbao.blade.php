@extends('layouts.app')
@section('title', 'Tin tức')
@section('title-sidebar', 'Tin tức')
@section('sidebar-menu')
    <li>
        <a href="#">Thông báo</a>
    </li>
    <li>
        <a href="#">Hoạt động</a>
    </li>
    <li>
        <a href="#">Vinh danh</a>
    </li>
@endsection
@section('content')
<style>
   
    h1 {
        color: red;
    }
    figure img {
        width: 100%;
        max-width: 700px; /* Điều chỉnh kích thước ảnh */
        height: auto;
    }
</style>


    
<body>
    <article>
        <h1>VKU: Sinh viên năm nhất ngành Công nghệ thông tin trải nghiệm thực tế tại FPT Software Đà Nẵng – Khởi đầu hành trình chinh phục công nghệ</h1>
        <p><em>01/11/2024</em></p>
        <p>Chiều ngày 31/10/2024, hơn 700 sinh viên năm thứ nhất ngành Công nghệ thông tin của Trường Đại học Công nghệ Thông tin và Truyền thông Việt-Hàn (VKU), Đại học Đà Nẵng đã có cơ hội trải nghiệm thực tế tại FPT Software Đà Nẵng. Chương trình nhằm giúp sinh viên hiểu sâu hơn về môi trường làm việc, quy trình phát triển phần mềm và các công nghệ tiên tiến từ một trong những doanh nghiệp CNTT hàng đầu Việt Nam.</p>
        
        <figure>
            <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_2048/https://vku.udn.vn/wp-content/uploads/2024/11/toan-canh.jpg" alt="Toàn cảnh sinh viên VKU tham gia trải nghiệm">
            <figcaption>Toàn cảnh sinh viên VKU tham gia trải nghiệm (Ảnh: FPT Software Đà Nẵng)</figcaption>
        </figure>
        
        <p>Tại FPT Software Đà Nẵng, sinh viên VKU tham gia chuỗi hoạt động với các chuyên gia về dự án công nghệ lớn, quy trình làm việc nhóm và kỹ năng ngành CNTT. Hoạt động này giúp sinh viên định hướng sự nghiệp tương lai, mở rộng hiểu biết về CNTT trong môi trường thực tế.</p>
        
        <figure>
            <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_2048/https://vku.udn.vn/wp-content/uploads/2024/11/465122962_542580438524294_3627172510676108790_n.jpg" alt="Đại diện khoa Khoa học máy tính">
            <figcaption>Đại diện khoa Khoa học máy tính (Ảnh: FPT Software Đà Nẵng)</figcaption>
        </figure>
        
        <p>TS. Đặng Đại Thọ – Phó Trưởng khoa Khoa học máy tính phát biểu: Hoạt động trải nghiệm thực tế là cầu nối đưa kiến thức giảng đường đến doanh nghiệp, giúp sinh viên hình dung và định hướng sự nghiệp. Đây là bước khởi đầu để các em trở thành nguồn nhân lực công nghệ chất lượng cao trong tương lai.</p>

        <p>Chuyến tham quan giúp sinh viên trang bị kỹ năng cần thiết và tạo động lực học tập, mở ra hành trình đầy cảm hứng cho thế hệ kỹ sư công nghệ tương lai.</p>
    </article>
</body>
@endsection

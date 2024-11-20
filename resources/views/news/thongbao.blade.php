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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Thông Tin Bài Báo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f7f9fc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            font-size: 16px;
            text-align: left;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
        }
        th {
            background-color: #00796b; /* Màu teal cho tiêu đề */
            color: #ffffff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Màu xám nhạt cho các hàng chẵn */
        }
        
        .rounded-img {
            border-radius: 8px; /* Bo góc nhẹ cho ảnh */
            width: 320px;
            max-height: 250px; /* Kích thước ảnh chữ nhật */
        }
        /* Ẩn các đường viền dọc */
        table, th, td {
            border: none;
        }

        /* Chỉ giữ lại đường viền ngang giữa các dòng */
        tr {
            border-bottom: 1px solid #e0e0e0; /* Đường ngang giữa các dòng */
        }
        strong {
            font-size: 20px; /* Tăng kích thước chữ lên */
            font-weight: bold; /* Đảm bảo chữ vẫn đậm */
        }
        a {
            text-decoration: none; /* Không gạch chân */
            color: inherit; /* Giữ màu chữ như mặc định */
        }
    </style>
</head>
<body>

    <table>
        <tbody>
            <tr>
                <td class="center"><a href="{{ route('ndthongbao') }}"><img src="images/lg2.png" alt="Ảnh 1" class="rounded-img"></td>
                <td><strong><a href="{{ route('ndthongbao') }}">VKU: Sinh viên năm nhất ngành Công nghệ thông tin trải nghiệm thực tế tại FPT Software Đà Nẵng 
                    – Khởi đầu hành trình chinh phục công nghệ</strong><br>Ngày: 12/11/2024<br>
                    Tại FPT Software Đà Nẵng, các sinh viên VKU được tham gia vào chuỗi hoạt động như lắng nghe chia sẻ từ 
                    các chuyên gia về các dự án công nghệ lớn, quy trình làm việc nhóm, và những kỹ năng quan trọng trong ngành công nghệ thông tin. 
                    Đặc biệt, hoạt động trải nghiệm này sẽ khơi dậy đam mê và giúp sinh viên định hướng rõ ràng hơn cho sự nghiệp tương lai,
                     đồng thời mở rộng hiểu biết về CNTT trong môi trường doanh nghiệp thực tế.

                </td>
            </tr>
            <tr>
                <td class="center"><a href="#"><img src="images/lg3.png" alt="Ảnh 2" class="rounded-img"></td>
                <td><a href="#"><strong>Sinh viên VKU tự tin thể hiện năng lực và sáng tạo tại Chương trình Ideathon
                     – Fintech Student Excellence Program</strong><br>Ngày: 14/11/2024<br>Trong khuôn khổ Chương trình “2024 Korean Invitational Program”, 
                     với sự đồng hành và hỗ trợ bởi Tập đoàn Hanwha Life (Hàn Quốc) và Quỹ ChildFund Hàn Quốc, đoàn sinh viên xuất sắc của VKU đã tham gia 
                     nhiều hoạt động học tập, trải nghiệm rất thú vị. Một trong những điểm nhấn của chương trình là sự kiện “Idealthon – AI Applied in Fintech 
                     and Healthcare” được tổ chức vào chiều ngày 30/10/2024. Theo đó, Ban tổ chức đã sắp xếp 20 sinh viên VKU thành 4 nhóm, và trong vòng 120 
                     phút các nhóm tổ chức thảo luận nhóm, nghiên cứu, phân tích thực tế để đề xuất vấn đề và giải pháp dựa vào ứng dụng công nghệ trí tuệ nhân tạo (AI) 
                     cũng như các công nghệ tiên tiến khác nhằm giải quyết các bài toán được đặt ra trong lĩnh vực công nghệ tài chính (Fintech) và chăm sóc sức khỏe.</td>
            </tr>
            
        </tbody>
    </table>

</body>


@endsection

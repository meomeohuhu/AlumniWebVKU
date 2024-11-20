@extends('layouts.app')
@section('title', 'Cơ hội việc làm')
@section('title-sidebar', 'Cơ hội việc làm')
@section('content2')
<h3 id="sidebar-title">Cơ hội việc làm</h3>
<ul class="submenu">
    <li><a href="#">Giới thiệu việc làm</a></li>
    <li><a href="{{ route('tuyendung') }}">Tuyển dụng</a></li>
    <li><a href="#">Đối tác</a></li>
</ul>
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPT Software - Job Details</title>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
           
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #007bff;
            font-size: 1.8em;
        }

        .job-image {
            width: 400px;
            height: auto;
            border-radius: 8px;
            display: block;
            margin: auto;
        }

        .job-info {
            margin-top: 20px;
        }

        .job-info p {
            display: flex;
            align-items: center;
            font-size: 1em;
            margin: 8px 0;
        }

        .icon {
            margin-right: 10px;
            color: #007bff;
        }

        .job-description {
            margin-top: 20px;
            line-height: 1.6;
        }

        .apply-button {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1em;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;
            
        }
        .apply-container {
            text-align: center;
        }
        .apply-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>FPT Software - Tuyển dụng Kỹ Sư Phần Mềm</h2>
        </div>
        
        <!-- Company Image -->
        <img src="https://freelancervietnam.vn/wp-content/uploads/2019/05/fpt-software-fsoft-260452.jpg" alt="FPT Software Office" class="job-image">

        <!-- Job Information -->
        <div class="job-info">
            <p><i class="bi bi-geo-alt icon"></i><strong>Địa điểm:</strong> Đà Nẵng</p>
            <p><i class="bi bi-calendar icon"></i><strong>Thời gian ứng tuyển:</strong> 01/11/2024 - 30/11/2024</p>
            <p><i class="bi bi-currency-dollar icon"></i><strong>Mức lương:</strong> 20,000,000 - 40,000,000 VND</p>
            <p><i class="bi bi-briefcase icon"></i><strong>Kinh nghiệm yêu cầu:</strong> Tối thiểu 3 năm trong ngành phần mềm</p>
        </div>

        <!-- Job Description -->
        <div class="job-description">
            <h3>Mô tả công việc</h3>
            <p>
                FPT Software đang tìm kiếm các kỹ sư phần mềm tài năng để tham gia vào các dự án phần mềm hàng đầu của chúng tôi. 
                Bạn sẽ tham gia vào việc phát triển và bảo trì các ứng dụng cho các khách hàng quốc tế, làm việc trong một môi trường sáng tạo và năng động.
            </p>
            <h4>Trách nhiệm:</h4>
            <ul>
                <li>Phát triển các ứng dụng phần mềm theo yêu cầu của khách hàng.</li>
                <li>Tham gia vào quy trình thiết kế và đánh giá mã nguồn.</li>
                <li>Hợp tác với các nhóm trong và ngoài nước để triển khai các dự án.</li>
                <li>Đảm bảo chất lượng và bảo mật của ứng dụng.</li>
            </ul>

            <h4>Yêu cầu công việc:</h4>
            <ul>
                <li>Tốt nghiệp đại học chuyên ngành Công nghệ Thông tin hoặc liên quan.</li>
                <li>Kinh nghiệm lập trình ít nhất 3 năm với một trong các ngôn ngữ: Java, .NET, hoặc Python.</li>
                <li>Có kinh nghiệm với các hệ quản trị cơ sở dữ liệu như MySQL, PostgreSQL.</li>
                <li>Kỹ năng làm việc nhóm và giao tiếp tốt.</li>
            </ul>
        </div>

        <!-- Apply Button -->
        <!-- Apply Button -->
        <div class="apply-container">
            <a href="#" class="apply-button"><i class="bi bi-send"></i> Ứng tuyển</a>
        </div>

    </div>

</body>
</html>

@endsection
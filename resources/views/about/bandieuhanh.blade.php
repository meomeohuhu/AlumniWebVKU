@extends('layouts.app')
@section('title', 'Giới thiệu')
@section('title-sidebar', 'Giới thiệu')
@section('sidebar-menu')
    <li><a href="{{ route('gioithieumangluoi') }}">Giới thiệu mạng lưới</a></li>
    <li><a href="{{ route('bandieuhanh') }}">Ban điều hành</a></li>
    <li><a href="{{ route('quyenloivanghiavu') }}">Quyền lợi và nghĩa vụ</a></li>
@endsection
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Thông Tin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            background-color: #f7f9fc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px auto;
            font-size: 16px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        th {
            background-color: #00796b; /* Teal for header */
            color: #ffffff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray for even rows */
        }
        tr:hover {
            background-color: #d0fffa; /* Light teal for hover */
            color: #000000;
        }
        .center {
            text-align: center;
        }
        .title {
            text-align: center;
            color: #00796b; /* Teal for title */
            font-size: 24px;
            margin-bottom: 20px;
        }
        /* Rounded image style */
        .rounded-img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>

    <h2 class="title">BAN ĐIỀU HÀNH</h2>

    <table>
        <thead>
            <tr>
                <th class="center">Số TT</th>
                <th>Họ Tên</th>
                <th>Ảnh</th>
                <th>Ngày Sinh</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Nơi Làm Việc</th>
                <th>Chức Vụ BĐH</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="center">1</td>
                <td>Phan Văn Đạt</td>
                <td><img src="images/hihi.jpg" alt="Ảnh" class="rounded-img"></td>
                <td>26/06/2005</td>
                <td>0852747318</td>
                <td>datpv.23it@vku.udn.vn</td>
                <td>Trường ĐHCNTT&TT Việt Hàn</td>
                <td>Quản Lý</td>
            </tr>
            <tr>
                <td class="center">2</td>
                <td>Nguyễn Thành Thịnh</td>
                <td><img src="images/hihi.jpg" alt="Ảnh" class="rounded-img"></td>
                <td>02/08/2005</td>
                <td>0987654321</td>
                <td>thinhnt.23it@vku.udn.vn</td>
                <td>Trường ĐHCNTT&TT Việt Hàn</td>
                <td>Quản Lý</td>
            </tr>
            <!-- Thêm các hàng khác nếu cần -->
        </tbody>
    </table>

</body>



@endsection
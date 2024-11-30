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
            width: 90%; /* Tăng kích thước ảnh */
    max-height: 90%; /* Tăng kích thước ảnh */
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
            @foreach ($news as $item)
            <tr>
                <td class="center">
                    @if ($item->image)
                        <!-- Hiển thị ảnh nếu có -->
                        <img src="{{ $item->image }}" class="rounded-img" alt="News Image">
                    @endif
                </td>
                <td>
                    <!-- Hiển thị tiêu đề -->
                    <strong style="color: #df0218"><a href="{{ route('ndthongbao', $item->id) }}">{{ $item->title }}</a></strong><br>

                    <!-- Hiển thị nội dung -->
                    <div style="color:#374f8a">{{ $item->content }}</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

@endsection

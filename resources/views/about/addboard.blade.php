@extends('layouts.app')

@section('title', 'Thêm thành viên')
@section('title-sidebar', 'Thêm mới')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thành Viên</title>

    <!-- Thêm FontAwesome để sử dụng biểu tượng cây bút -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Dùng lại CSS từ file chỉnh sửa */
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            background-color: #f7f9fc;
        }

        .image-edit-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container img {
            width: 100px;
            height: 100px;
            border-radius: 50px;
        }

        .edit-icon {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background-color: #00796b;
            color: white;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            font-size: 18px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .edit-icon:hover {
            background-color: #005a4c;
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

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #00796b;
            color: #ffffff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d0fffa;
            color: #000000;
        }

        .form-control {
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            outline: none;
            font-size: 16px;
        }

        .form-control:focus {
            border: 2px solid #00796b;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
            gap: 10px;
        }

        button.save {
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button.save:hover {
            background-color: #005a4c;
        }

        .btn-secondary {
            padding: 10px 20px;
            background-color: #e0e0e0;
            color: black;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            text-align: center;
        }

        .btn-secondary:hover {
            background-color: #bdbdbd;
        }
    </style>
</head>

<div class="container">
    <form action="{{ route('board.store') }}" method="POST" enctype="multipart/form-data" class="form-table">
        @csrf

        <!-- Phần chỉnh sửa ảnh -->
        <div class="image-edit-container">
            <div class="image-container">
                <!-- Hiển thị ảnh mẫu ban đầu -->
                <img id="preview-img" src="{{ asset('default-image.png') }}" alt="Ảnh mẫu" class="rounded-img" width="100" height="100">
                
                <!-- Nút chỉnh sửa ảnh (hình cây bút) -->
                <label for="photo" class="edit-icon">
                    <i class="fas fa-pencil-alt"></i>
                </label>

                <!-- Input chọn ảnh -->
                <input type="file" class="form-control" name="photo" accept="image/*" id="photo" style="display: none;" onchange="previewImage(event)">
            </div>
        </div>

        <table>
            <tr>
                <th>Họ Tên</th>
                <td>
                    <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" required>
                </td>
            </tr>
            <tr>
                <th>Ngày Sinh</th>
                <td>
                    <input type="date" class="form-control" name="date_of_birth" required>
                </td>
            </tr>
            <tr>
                <th>Số Điện Thoại</th>
                <td>
                    <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" required>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="email" class="form-control" name="email" placeholder="Nhập email" required>
                </td>
            </tr>
            <tr>
                <th>Nơi Làm Việc</th>
                <td>
                    <input type="text" class="form-control" name="workplace" placeholder="Nhập nơi làm việc">
                </td>
            </tr>
            <tr>
                <th>Chức Vụ</th>
                <td>
                    <input type="text" class="form-control" name="position" placeholder="Nhập chức vụ">
                </td>
            </tr>
        </table>

        <div class="buttons">
            <button type="submit" class="save">Thêm Mới</button>
            <a href="{{ route('bandieuhanh') }}" class="btn btn-secondary">Hủy</a>
        </div>
    </form>
</div>

<script>
    // Hàm để xem trước ảnh khi chọn
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview-img');
            preview.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection

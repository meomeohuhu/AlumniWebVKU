@extends('admin.index')

@section('content-admin')
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Cá Nhân</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            width: 100px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #ddd;
            object-fit: cover;
            display: block;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="{{ asset($user->image) }}" alt="Ảnh đại diện" class="profile-image">
    </div>

    <div class="profile-info">
        <div><strong>Họ và tên:</strong> {{ $user->fullname }}</div>
        <div><strong>Số điện thoại:</strong> {{ $user->phone }}</div>
        <div><strong>Ngành học:</strong> {{ $user->major }}</div>
        <div><strong>Ngày sinh:</strong> {{ $user->birthdate }}</div>
        <div><strong>Tên đăng nhập:</strong> {{ $user->name }}</div>
        <div><strong>Năm nhập học:</strong> {{ $user->enrollment_year }}</div>
        <div><strong>Hệ đào tạo:</strong> {{ ucfirst($user->education_system) }}</div>
        <div><strong>Khoa:</strong> {{ $user->faculty }}</div>
    </div>
</body>
</html>
@endsection

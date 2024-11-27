@extends('layouts.app')

@section('content')
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

        /* Modal chung */
        .modal {
            display: flex; /* Hiển thị modal ngay khi vào file */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            width: 700px;
            max-width: 90%;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            font-size: 24px;
            color: #F44336;
            margin: 0;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 24px;
            color: #555;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #F44336;
        }

        /* Ảnh đại diện */
        .profile-container {
    position: relative;
    display: flex;
    justify-content: center; /* Căn giữa nội dung trong container */
    align-items: center; /* Căn giữa dọc */
    margin: 0 auto; /* Đảm bảo container được căn giữa */
    width: 100px; /* Thiết lập chiều rộng cố định cho container nếu cần */
}

.profile-image {
    width: 100px;
    height: 100px;
    border-radius: 50%; /* Bo tròn ảnh */
    border: 2px solid #ddd; /* Viền ảnh */
    object-fit: cover; /* Đảm bảo ảnh không bị méo */
    display: block;
}

.edit-icon {
    position: absolute;
    bottom: 0; /* Đặt bút ở dưới cùng ảnh */
    right: 0;  /* Đặt bút ở bên phải ảnh */
    background-color: #fff;
    border-radius: 50%;
    padding: 5px;
    font-size: 18px;
    color: #ddd;
    border: 2px solid #ddd;
    cursor: pointer;
}

        .edit-icon:hover {
            background-color: #F44336;
            color: #fff;
        }

        /* Form */
        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-column {
            width: 48%;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            margin-top: 8px;
            box-sizing: border-box;
        }

        input:focus,
        select:focus {
            border-color: #2196F3;
            outline: none;
            box-shadow: 0 0 6px rgba(33, 150, 243, 0.5);
        }

        .btn-update {
            background-color: #F44336;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            max-width: 300px;
            transition: background-color 0.3s ease;
        }

        .btn-update:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <!-- Modal -->
    <div id="profile-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>|| Hồ Sơ Cá Nhân</h2>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="profile-container">
    <img src="{{ asset($user->image) }}" alt="Ảnh đại diện" class="profile-image">

        
        <!-- Nút chọn ảnh -->
        <label for="image" class="edit-icon">&#9998;</label>
        <input type="file" name="image" id="image" style="display:none" onchange="previewImage(event)">
    </div>

    <div class="form-row">
        <!-- Cột bên trái -->
        <div class="form-column">
            <div class="form-group">
                <label for="fullname">Họ và tên</label>
                <input type="text" name="fullname" id="fullname" placeholder="Ví dụ: Phan Văn Đạt" value="{{ old('fullname', $user->fullname) }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" name="phone" id="phone" placeholder="Ví dụ: 0852747318" value="{{ old('phone', $user->phone) }}" required>
            </div>

            <div class="form-group">
                <label for="major">Ngành học</label>
                <input type="text" name="major" id="major" placeholder="Ví dụ: Công nghệ thông tin" value="{{ old('major', $user->major) }}" required>
            </div>

            <div class="form-group">
                <label for="user_name">Tên Đăng Nhập</label>
                <input type="email" name="name" id="user_name" placeholder="example@vku.udn.vn" value="{{ old('name', $user->name) }}" required>
            </div>
        </div>

        <!-- Cột bên phải -->
        <div class="form-column">
            <div class="form-group">
                <label for="birthdate">Ngày sinh</label>
                <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/yyyy" value="{{ old('birthdate', $user->birthdate) }}" class="datepicker" required>
            </div>

            <div class="form-group">
                <label for="enrollment_year">Năm nhập học</label>
                <select name="enrollment_year" id="enrollment_year" required>
                    @for ($year = 2017; $year <= date('Y'); $year++)
                        <option value="{{ $year }}" {{ old('enrollment_year', $user->enrollment_year) == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endfor
                </select>
            </div>

            <div class="form-group">
                <label for="education_system">Hệ đào tạo</label>
                <select name="education_system" id="education_system" required>
                    <option value="bachelor" {{ old('education_system', $user->education_system) == 'bachelor' ? 'selected' : '' }}>Cử nhân</option>
                    <option value="engineer" {{ old('education_system', $user->education_system) == 'engineer' ? 'selected' : '' }}>Kỹ sư</option>
                    <option value="master" {{ old('education_system', $user->education_system) == 'master' ? 'selected' : '' }}>Thạc sĩ</option>
                </select>
            </div>

            <div class="form-group">
                <label for="faculty">Khoa</label>
                <select name="faculty" id="faculty" required>
                    <option value="computer-science" {{ old('faculty', $user->faculty) == 'computer-science' ? 'selected' : '' }}>Khoa Khoa học máy tính</option>
                    <option value="computer-engineering" {{ old('faculty', $user->faculty) == 'computer-engineering' ? 'selected' : '' }}>Khoa Kỹ thuật máy tính và Điện tử</option>
                    <option value="digital-economics" {{ old('faculty', $user->faculty) == 'digital-economics' ? 'selected' : '' }}>Khoa Kinh tế số và Thương mại điện tử</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Nút cập nhật hồ sơ -->
    <div class="form-group" style="text-align: center; margin-top: 20px;">
        <button type="submit" class="btn-update">Cập nhật hồ sơ</button>
    </div>
</form>

    </div>
</div>

    <script>
        function closeModal() {
            document.getElementById('profile-modal').style.display = 'none';
        }
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.querySelector('.profile-image');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }


    </script>
</body>
</html>
@endsection
@extends('layouts.app') <!-- Kế thừa layout chính -->

@section('content') <!-- Định nghĩa nội dung cho section 'content' -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng bài viết</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container">
        <h1>Đăng bài viết</h1>
        <!-- Form đăng bài -->
        <form action="{{ route('posts.store') }}" method="POST" id="postForm" enctype="multipart/form-data">
            @csrf <!-- CSRF Token cho form bảo mật -->

            <label for="title">Tiêu đề:</label>
            <input type="text" id="title" name="title" placeholder="Nhập tiêu đề bài viết" required>

            <label for="content">Nội dung:</label>
            <textarea id="content" name="content" rows="6" placeholder="Nhập nội dung bài viết" required></textarea>

            <label for="image">Ảnh:</label>
            <input type="file" id="image" name="image" accept="image/*">
            <div id="preview">
                <img id="previewImg" src="#" alt="Xem trước ảnh" style="display: none; max-width: 100%; margin-top: 10px;">
            </div>

            <button type="submit">Đăng bài</button>
        </form>
        <p id="status"></p>
    </div>
    <script src="{{ asset('js/script.js') }}"></script> <!-- Liên kết với tệp JS bên ngoài -->
</body>
</html>
@endsection

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImg = document.getElementById('previewImg');
                previewImg.src = e.target.result;
                previewImg.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('previewImg').style.display = 'none';
        }
    });

    document.getElementById('postForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn không cho trang reload

        const title = document.getElementById('title').value.trim();
        const content = document.getElementById('content').value.trim();
        const imageFile = document.getElementById('image').files[0];

        if (!title || !content) {
            document.getElementById('status').innerText = "Vui lòng điền đầy đủ thông tin!";
            document.getElementById('status').style.color = "red";
            return;
        }

        const formData = new FormData();
        formData.append('title', title);
        formData.append('content', content);
        if (imageFile) {
            formData.append('image', imageFile);
        }

        fetch("{{ route('posts.store') }}", {  // Sử dụng route của Laravel
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')  // Thêm CSRF token nếu không dùng blade @csrf
            }
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('status').innerText = "Bài viết đã được đăng!";
            document.getElementById('status').style.color = "green";
            console.log(data);
        })
        .catch(error => {
            document.getElementById('status').innerText = "Có lỗi xảy ra, vui lòng thử lại!";
            document.getElementById('status').style.color = "red";
            console.error(error);
        });
    });
</script>

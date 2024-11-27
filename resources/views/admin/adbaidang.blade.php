@extends('admin.index')

@section('content-admin')
<div id="dashboard" class="content-section active">
    <h2>Đăng Bài Viết</h2>
    <p>Điền thông tin vào form bên dưới để tạo bài viết mới.</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('adbaidang') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">-- Chọn danh mục --</option>
                    <option value="events">Sự kiện</option>
                    <option value="news">Tin tức</option>
                    <option value="tuyendung">Tuyển dụng</option>
                </select>
            </div>

            <!-- Fields for "events" category -->
            <div id="event-fields" data-category="events" style="display: none;">
                <div class="form-group">
                    <label for="start">Ngày bắt đầu</label>
                    <input type="datetime-local" name="start" id="start" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end">Ngày kết thúc</label>
                    <input type="datetime-local" name="end" id="end" class="form-control">
                </div>
            </div>

            <!-- Fields for "tuyendung" category -->
            <div id="recruitment-fields" data-category="tuyendung" style="display: none;">
                <div class="form-group">
                    <label for="salary">Mức lương</label>
                    <input type="text" name="salary" id="salary" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Địa điểm</label>
                    <input type="text" name="location" id="location" class="form-control">
                </div>
                <div class="form-group">
                    <label for="experience">Kinh nghiệm</label>
                    <input type="text" name="experience" id="experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="time">Thời gian</label>
                    <input type="text" name="time" id="time" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Hình ảnh</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Đăng bài</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('category_id').addEventListener('change', function () {
        const selectedCategory = this.value;
        const fields = document.querySelectorAll('[data-category]');

        fields.forEach(field => {
            if (field.dataset.category === selectedCategory) {
                field.style.display = 'block';  
            } else {
                field.style.display = 'none';
            }
        });
    });
</script>

<style>
    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid green;
        background-color: #d4edda;
        color: #155724;
        border-radius: 4px;
    }
</style>
@endsection

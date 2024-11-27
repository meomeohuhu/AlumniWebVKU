    @extends('layouts.app')
    @section('title', 'Diễn đàn')
    @section('title-sidebar', 'Diễn đàn')
    @section('sidebar-menu')
    @endsection
    @section('content2')
    <style>
        /* CSS cho sidebar */

        .sidebar h3 {
            margin: 0;
            padding: 10px 0;
            font-size: 18px;
            color: #ff0000;
        }

        .contact {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .contact img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .contact span {
            font-size: 16px;
            color: #333;
            font-weight: bold;

        }
    </style>
    </head>

    <body>
    <h3>Người Dùng</h3>

    @if($users->isNotEmpty()) <!-- Kiểm tra nếu có người dùng -->
        @foreach($users as $user)
            <div class="contact">
                <!-- Kiểm tra xem người dùng có hình ảnh không -->
                <img src="{{ asset($user->image) }}" alt="Avatar">
                <span>{{ $user->fullname }}</span> <!-- Hiển thị tên người dùng -->
            </div>
        @endforeach
    @else
        <p>Không có người dùng nào.</p> <!-- Nếu không có người dùng -->
    @endif
</body>



    </html>
    @endsection
    @section('content')

    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diễn đàn</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
        <style>
            /* Cấu hình chung */
            body {
                background-color: #f0f2f5;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 95%;
                margin: auto;
                padding: 20px;
            }

            /* Thanh tìm kiếm */
            .search-bar {
                background-color: #fff;
                border-radius: 50px;
                /* Bo tròn cho thanh tìm kiếm */
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                padding: 10px 15px;
                margin-bottom: 20px;
                display: flex;
                align-items: center;
            }

            .search-bar input {
                flex: 1;
                padding: 8px 12px;
                font-size: 14px;
                border: none;
                border-radius: 30px;
                /* Bo tròn cho input */
                outline: none;
            }

            .search-bar button {
                background-color: #007bff;
                color: white;
                font-size: 14px;
                border: none;
                border-radius: 30px;
                /* Bo tròn cho nút tìm */
                padding: 8px 15px;
                cursor: pointer;
                margin-left: 10px;
            }

            .search-bar button:hover {
                background-color: #0056b3;
            }

            /* Bài đăng */
            .card.post {
                background-color: white;
                border-radius: 10px;
                margin-bottom: 20px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

            .card-body {
                padding: 15px;
            }

            .post-header {
                display: flex;
                align-items: center;
            }

            .post-header img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .post-header .info {
                line-height: 1.2;
            }

            .post-header .info h6 {
                margin: 0;
                font-size: 1rem;
            }

            .post-header .info small {
                font-size: 0.8rem;
                color: #6c757d;
            }

            .post-body {
                margin-top: 15px;
            }

            .post-body p {
                font-size: 1rem;
                color: #333;
            }

            .post-body img {
                width: 100%;
                margin-top: 15px;
                border-radius: 8px;
                object-fit: cover;
            }

            /* Footer bài đăng */
            .card-footer {
                padding: 10px 15px;
                border-top: 1px solid #ddd;
            }

            /* Lượt thích và bình luận */
            .like-comment-count {
                display: flex;
                justify-content: space-between;
                font-size: 0.9rem;
                color: #6c757d;
                margin-bottom: 10px;
                border-bottom: 1px solid #ddd;
                /* Đường phân chia dưới phần like-comment-count */
                padding-bottom: 10x;
                /* Khoảng cách dưới */
            }

            /* Nút hành động */
            .action-buttons {
    display: flex;
    justify-content: space-between; /* Cách đều các nút */
    align-items: center; /* Canh giữa theo chiều dọc */
    margin-top: 10px;
    gap: 10px; /* Khoảng cách giữa các nút (nếu cần) */
}

.action-buttons {
    display: flex;
    justify-content: space-between; /* Căn đều ba thành phần */
    align-items: center; /* Đảm bảo tất cả nội dung ở cùng hàng */
    padding: 10px 20px; /* Thêm khoảng trống cho phần nút */
    gap: 10px; /* Khoảng cách giữa các thành phần */
}

.action-buttons form,
.action-buttons .center-info,
.action-buttons .share-button {
    flex: 1; /* Chia đều không gian cho các thành phần */
    text-align: center; /* Căn giữa nội dung bên trong */
}

.action-buttons .btn1 {
    display: inline-flex; /* Giữ biểu tượng và chữ trên cùng hàng */
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-size: 1rem; /* Tăng kích thước chữ */
    padding: 10px 20px; /* Tăng kích thước nút */
    color: #6c757d;
    font-weight: bold;
    border: none;
    outline: none;
    border-radius: 8px;
    background-color: transparent;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.action-buttons .btn1:hover {
    background-color: #f0f2f5;
    color: #007bff;
}

.center-info {
    font-size: 0.9rem; /* Kích thước chữ vừa phải */
    color: #6c757d;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px; /* Khoảng cách giữa số lượt thích và bình luận */
}

.center-info span {
    white-space: nowrap; /* Tránh xuống dòng */
}




            /* Tạo khung chính full-width */
            .container {
                width: 100%;
                /* Chiếm toàn bộ chiều ngang */
                padding: 0;
                /* Loại bỏ padding mặc định */
                margin: 0 auto;
                /* Căn giữa nội dung */
            }

            .card {
                border: none;
                border-radius: 0;
                /* Loại bỏ bo tròn */
                box-shadow: none;
                /* Loại bỏ bóng mờ */
                background-color: #fff;
                margin: 0;
                /* Loại bỏ khoảng cách bên ngoài */
                width: 100%;
                /* Chiếm toàn bộ chiều ngang */
            }

            /* Tiêu đề */
            .card-title {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 10px;
                padding: 10px 15px;
                /* Thêm khoảng cách */
                border-bottom: 1px solid #ddd;
                /* Đường kẻ ngang chia tiêu đề */
            }

            /* Form */
            form {
                margin-top: 10px;
                padding: 10px 15px;
                /* Thêm khoảng cách trong form */
            }

            textarea {
                width: 100%;
                border: 1px solid #ddd;
                border-radius: 20px;
                padding: 10px 15px;
                font-size: 14px;
                resize: none;
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            textarea:focus {
                border-color: #007bff;
                outline: none;
                box-shadow: 0 0 3px rgba(0, 123, 255, 0.5);
            }

            /* File input */
            input[type="file"] {
                width: 100%;
                font-size: 14px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 20px;
                margin-top: 10px;
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            /* Nút đăng bài */
            button[type="submit"] {
                width: 100%;
                /* Nút chiếm toàn bộ chiều ngang */
                background-color: #1877f2;
                border: none;
                border-radius: 20px;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button[type="submit"]:hover {
                background-color: #145dbf;
            }
        </style>


        </style>
    </head>

    <body>

        <div class="container">
            <!-- Thanh tìm kiếm -->
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm...">
                <button><i class="bi bi-search"></i></button>
            </div>
            <div>
                <!DOCTYPE html>
                <html lang="vi">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Tạo bài viết</title>
                    <style>
                        /* Reset và cấu hình cơ bản */
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f0f2f5;
                            margin: 0;
                            padding: 0;
                        }

                        /* Phần thanh "Bạn đang nghĩ gì?" */
                        .post-bar {
                            background-color: #fff;
                            padding: 10px 15px;
                            border-radius: 10px;
                            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
                            margin: 20px;
                            display: flex;
                            align-items: center;
                            cursor: pointer;
                            width: 100%;
                            /* Chiếm toàn bộ chiều rộng */
                            box-sizing: border-box;
                            /* Đảm bảo padding không làm ảnh hưởng đến độ rộng */
                            margin-left: auto;
                            /* Căn giữa bên trái */
                            margin-right: auto;
                            /* Căn giữa bên phải */
                        }

                        .post-bar img {
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            margin-right: 10px;
                        }

                        .post-bar span {
                            color: #6c757d;
                            font-size: 16px;
                        }

                        /* Phần pop-up */
                        .modal {
                            display: none;
                            /* Ẩn modal mặc định */
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.5);
                            z-index: 1000;
                            justify-content: center;
                            align-items: center;
                        }

                        .modal-content {
                            background-color: #fff;
                            width: 500px;
                            max-width: 90%;
                            border-radius: 10px;
                            padding: 20px;
                            position: relative;
                        }

                        .modal-header {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            border-bottom: 1px solid #ddd;
                            padding-bottom: 10px;
                        }

                        .modal-header h5 {
                            margin: 0;
                            font-size: 18px;
                        }

                        .modal-header .close {
                            background: none;
                            border: none;
                            font-size: 24px;
                            cursor: pointer;
                        }

                        .modal-body {
                            margin-top: 20px;
                            display: flex;
                            flex-direction: column;
                            /* Đảm bảo các phần tử được căn theo cột */
                            align-items: stretch;
                            /* Đảm bảo tất cả các phần tử chiếm toàn bộ chiều rộng */
                        }

                        /* Căn chỉnh textarea và input file */
                        .modal-body textarea,
                        .modal-body .file-input input {
                            width: 100%;
                            /* Đảm bảo cả textarea và input đều có độ rộng 100% */
                            border: 1px solid #ddd;
                            border-radius: 10px;
                            padding: 10px;
                            font-size: 14px;
                            margin-bottom: 10px;
                            /* Thêm khoảng cách giữa textarea và input */
                            box-sizing: border-box;
                            /* Đảm bảo padding không làm ảnh hưởng đến độ rộng */
                        }

                        .file-input {
                            margin-top: 10px;
                        }

                        .image-preview {
                            margin-top: 20px;
                            text-align: center;
                        }

                        .image-preview img {
                            max-width: 80%;
                            /* Giảm kích thước ảnh xuống còn 80% */
                            height: auto;
                            /* Đảm bảo tỉ lệ ảnh được giữ nguyên */
                            border-radius: 10px;
                            margin-top: 10px;
                        }

                        .modal-footer {
                            margin-top: 20px;
                            text-align: right;
                        }

                        .modal-footer button {
                            background-color: #1877f2;
                            border: none;
                            border-radius: 10px;
                            padding: 10px 15px;
                            color: white;
                            cursor: pointer;
                        }

                        .modal-footer button:hover {
                            background-color: #145dbf;
                        }
                        .post {
    position: relative; /* Đặt container bài viết ở chế độ relative */
}

/* Chỉ áp dụng style cho nút xóa trong post-item */
.post-item .delete-button-form {
    position: absolute; /* Định vị nút xóa tuyệt đối so với post-item */
    top: 0px; /* Cách mép trên */
    right: 0px; /* Cách mép phải */
}

.post-item .delete-btn {
    background: none; /* Loại bỏ màu nền */
    border: none; /* Loại bỏ viền */
    font-size: 1.2rem; /* Kích thước icon */
    cursor: pointer; /* Thêm con trỏ tay khi hover */
    padding: 0; /* Loại bỏ khoảng cách */
    margin: 0; /* Loại bỏ lề */
    transition: color 0.2s ease, background-color 0.2s ease; /* Hiệu ứng mượt khi hover */
}

/* Đặt màu icon mặc định là đen */
.post-item .delete-btn i {
    color: #000000; /* Màu đen */
}

/* Thay đổi màu icon khi hover */
.post-item .delete-btn:hover i {
    color: #dc3545; /* Màu đỏ khi hover */
}

/* Loại bỏ nền khi hover */
.post-item .delete-btn:hover {
    background: none; /* Loại bỏ nền khi hover */
}

/* Loại bỏ viền xanh khi focus */
.post-item .delete-btn:focus {
    outline: none;
}         



/* Comment Section */
.comment-section {
    background-color: #1c1e21; /* Màu nền tối */
    padding: 15px;
    border-radius: 10px;
    font-family: Arial, sans-serif;
    color: #fff;
}

/* Form bình luận */
.comment-input-wrapper {
    display: flex;
    align-items: center;
    background-color: #333; /* Màu nền input */
    padding: 10px;
    border-radius: 20px;
    margin-bottom: 15px;
}

.comment-input-wrapper .avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment-input {
    flex: 1;
    border: none;
    background: transparent;
    color: #fff;
    font-size: 14px;
    outline: none;
    padding: 5px;
}

.comment-input::placeholder {
    color: #aaa;
}

.btn-submit {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
    margin-left: 10px;
}

.btn-submit:hover {
    background-color: #0056b3;
}

/* Comment Section */
.comment-section {
    background-color: #fff; /* Nền trắng */
    padding: 15px;
    border-radius: 10px;
    font-family: Arial, sans-serif;
    color: #333; /* Màu chữ tối */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Form bình luận */
.comment-input-wrapper {
    display: flex;
    align-items: center;
    background-color: #f8f9fa; /* Nền input sáng */
    padding: 10px;
    border-radius: 20px;
    margin-bottom: 15px;
    border: 1px solid #ddd; /* Viền nhẹ */
}

.comment-input-wrapper .avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment-input {
    flex: 1;
    border: none;
    background: transparent;
    color: #333; /* Màu chữ tối */
    font-size: 14px;
    outline: none;
    padding: 5px;
}

.comment-input::placeholder {
    color: #888; /* Placeholder màu xám */
}

.btn-submit {
    background-color: #007bff; /* Nút màu xanh */
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
    margin-left: 10px;
}

.btn-submit:hover {
    background-color: #0056b3;
}

/* Danh sách bình luận */
.comment-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
}

.comment-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment-item div {
    background-color: #f8f9fa; /* Nền bình luận sáng */
    padding: 10px;
    border-radius: 10px;
    color: #333; /* Màu chữ tối */
    font-size: 14px;
    flex: 1;
    border: 1px solid #ddd; /* Viền nhẹ */
}

.comment-item strong {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #000; /* Tên người dùng màu đậm */
}

.text-muted {
    color: #888; /* Màu chữ nhỏ xám */
}




                        
                    </style>
                </head>

                <body>
                <!-- Thanh "Bạn đang nghĩ gì?" -->
    <!-- Thanh "Bạn đang nghĩ gì thế?" -->
    @auth
        <div class="post-bar" onclick="openModal()">
            <span>Bạn đang nghĩ gì thế?</span>
        </div>
    @else
        <div class="post-bar" onclick="notifyRegister()">
            <span>Bạn đang nghĩ gì thế?</span>
        </div>
    @endauth



    <!-- Modal tạo bài viết -->
    <div class="modal" id="postModal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Tạo bài viết</h5>
                        <button class="close" onclick="closeModal()">×</button>
                    </div>
                    <div class="modal-body">
                        <form id="postForm" action="{{ route('forum.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <textarea id="postContent" name="content" rows="4" 
                                placeholder="@auth {{ Auth::user()->fullname }}, bạn đang nghĩ gì thế? @else Bạn đang nghĩ gì thế? @endauth"></textarea>
                            <div class="file-input">
                                <input type="file" name="image" id="imageInput" accept="image/*" onchange="previewImage(event)">
                            </div>
                            <div class="image-preview" id="imagePreview"></div>
                            <div class="modal-footer">
                                <button type="submit">Đăng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <script>
            function openModal() {
                document.getElementById("postModal").style.display = "flex";
            }

            function closeModal() {
                document.getElementById("postModal").style.display = "none";
                clearImagePreview();
            }

            function notifyRegister() {
                alert("Bạn chưa có tài khoản. Vui lòng đăng ký để tiếp tục.");
                window.location.href = "{{ route('register') }}";
            }

            function previewImage(event) {
                const file = event.target.files[0];
                const previewContainer = document.getElementById('imagePreview');

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewContainer.innerHTML = `<img src="${e.target.result}" alt="Xem trước hình ảnh">`;
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewContainer.innerHTML = "";
                }
            }

            function clearImagePreview() {
                const previewContainer = document.getElementById('imagePreview');
                previewContainer.innerHTML = "";
            }
        
        </script>
                </body>

                </html>

            </div>
            <!-- Bài đăng -->
            @foreach($posts as $post)
    <div class="card post">
        <div class="card-body">
            <div class="post-header">
                <img src="{{ $post->user->image }}" alt="Avatar">
                <div class="info">
                    @if($post->user)
                        <h6>{{ $post->user->fullname }} <span class="text-success"></span></h6>
                    @else
                        <h6>Người dùng không xác định <span class="text-danger">(Guest)</span></h6>
                    @endif
                    <small>{{ $post->created_at->diffForHumans() }} · 🌍</small>
                </div>
            </div>

            <!-- Post Body -->
            <div class="post-body">
                <p>{{ $post->content }}</p>
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Ảnh bài viết">
                @endif
            </div>

            @if($post->user_id == Auth::id())
                <div class="post-item">
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');" class="delete-button-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">
                            <i class="bi bi-x-circle"></i>
                        </button>
                    </form>
                </div>
            @endif
        </div>

        <!-- Hiển thị số lượt thích và bình luận -->
        <div class="like-comment-count">
            <span>{{ $post->likes_count ?? 0 }} lượt thích</span>
            <span>{{ $post->comments_count ?? 0 }} bình luận</span>
        </div>

        <!-- Footer with Like/Comment -->
        <div class="card-footer">
            <div class="action-buttons">
                <!-- Form xử lý nút Thích -->
                <form action="{{ route('posts.like', $post->id) }}" method="POST" class="like-button">
                    @csrf
                    <button class="btn1">
                        @if ($post->likes->contains('user_id', auth()->id()))
                            <i class="bi bi-hand-thumbs-up-fill"></i> Bỏ Thích
                        @else
                            <i class="bi bi-hand-thumbs-up"></i> Thích
                        @endif
                    </button>
                </form>

                <!-- Nút Bình luận -->
                <button type="button" class="btn1" onclick="toggleCommentSection({{ $post->id }})">
                    <i class="bi bi-chat-dots"></i> Bình luận
                </button>

                <!-- Nút Chia sẻ -->
                <form action="#" method="POST" class="share-button">
                    <button type="button" class="btn1">
                        <i class="bi bi-share"></i> Chia sẻ
                    </button>
                </form>
            </div>

            <!-- Khu vực bình luận -->
            <form action="{{ route('posts.comment', $post->id) }}" method="POST" class="comment-form">
                    @csrf
                    <div class="comment-input-wrapper">
                        <img src="{{ auth()->user()->image ?? 'https://via.placeholder.com/40' }}" alt="Avatar" class="avatar">
                        <input 
                            type="text" 
                            name="content" 
                            class="comment-input" 
                            placeholder="Bình luận dưới tên {{ auth()->user()->fullname }}" 
                            required>
                        <button class="btn btn-submit">Gửi</button>
                    </div>
                </form>
            <div id="comment-section-{{ $post->id }}" class="comment-section" style="display: none;">
                <!-- Form gửi bình luận -->

                <!-- Danh sách bình luận -->
                <ul class="comment-list">
                    @foreach ($post->comments as $comment)
                        <li class="comment-item">
                            <img src="{{ $comment->user->image }}" alt="Avatar" class="comment-avatar">
                            <div>
                                <strong>{{ $comment->user->fullname }}</strong>: {{ $comment->content }}
                                <span class="text-muted" style="font-size: 0.8em;">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endforeach



        </div>

    </body>

    </html>
    <script>
        function toggleCommentSection(postId) {
    const section = document.getElementById(`comment-section-${postId}`);
    section.style.display = section.style.display === 'none' ? 'block' : 'none';
}

    </script>


    @endsection
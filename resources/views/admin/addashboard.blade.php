@extends('admin.index')

@section('content-admin')
<style>
    /* Đặt toàn bộ CSS của bạn ở đây */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }
    header {
        background: #35424a;
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
    }
    .card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin: 20px;
        padding: 20px;
        flex: 1;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card h3 {
        margin: 0;
        color: #35424a;
    }
    .card p {
        color: #777;
    }
    .stats {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    footer {
        text-align: center;
        padding: 10px 0;
        background: #35424a;
        color: #ffffff;
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>

<header>
    <h1>Thống Kê Mạng Lưới Cộng Đồng</h1>
</header>

<div class="container">
    <div class="stats">
        <div class="card">
            <h3><i class="fas fa-users"></i> {{ $totalUsers }}</h3>
            <p>Thành viên</p>
        </div>
        <div class="card">
            <h3><i class="fas fa-comments"></i> {{ $totalComments }}</h3>
            <p>Bình luận</p>
        </div>
        <div class="card">
            <h3><i class="fas fa-thumbs-up"></i> {{ $totalLikes }}</h3>
            <p>Lượt thích</p>
        </div>
        <div class="card">
            <h3><i class=""></i> {{ $totalpost }}</h3>
            <p>Bài đăng</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Mạng Lưới Cộng Đồng</p>
</footer>

</body>
@endsection

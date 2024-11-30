@extends('layouts.app')

@section('title', 'Thông báo')
@section('title-sidebar', 'Thông báo')
@section('sidebar-menu')
    <li><a href="#">Thông báo</a></li>
    <li><a href="#">Hoạt động</a></li>
    <li><a href="#">Vinh danh</a></li>
@endsection

@section('content')
<style>
    h1 {
        color: red;
    }
    figure img {
        width: 100%;
        max-width: 700px; /* Điều chỉnh kích thước ảnh */   
        height: auto;
    }
</style>

<body>
    <article>
        <h1 style="color: #df0218">{{ $news->title }}</h1>
        <p><em>{{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y') }}</em></p>
        <p style="color:#374f8a">{{ $news->content }}</p>
        
        @if ($news->image)
                        <!-- Hiển thị ảnh nếu có -->
                        <img src="{{ $news->image_url }}" alt="News Image">

                    @endif

    </article>
</body>
@endsection

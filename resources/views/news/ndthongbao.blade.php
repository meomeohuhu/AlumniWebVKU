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
        <h1>{{ $news->title }}</h1>
        <p><em>{{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y') }}</em></p>
        <p>{{ $news->content }}</p>
        
        <figure>
            <img src="{{ asset('images/' . $news->image) }}" alt="Image">
            <figcaption>Ảnh minh họa</figcaption>
        </figure>
    </article>
</body>
@endsection

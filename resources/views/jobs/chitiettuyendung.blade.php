@extends('layouts.app')

@section('title', 'Chi tiết công việc tuyển dụng')
@section('title-sidebar', 'Cơ hội việc làm')

@section('content2')
<h3 id="sidebar-title">Cơ hội việc làm</h3>
<ul class="submenu">
    <li><a href="#">Giới thiệu việc làm</a></li>
    <li><a href="{{ route('tuyendung') }}">Tuyển dụng</a></li>
    <li><a href="#">Đối tác</a></li>
</ul>
@endsection

@section('content')
<div class="container">
    <div class="header">
        <h2>{{ $tuyendung->title }}</h2>
    </div>
    
    <!-- Company Image -->
    <img src="{{$tuyendung->image}}" alt="{{ $tuyendung->title }}" class="job-image">

    <!-- Job Information -->
    <div class="job-info">
        <p><i class="bi bi-geo-alt icon"></i><strong>Địa điểm:</strong> {{ $tuyendung->location }}</p>
        <p><i class="bi bi-calendar icon"></i><strong>Thời gian ứng tuyển:</strong> {{ $tuyendung->time }}</p>
        <p><i class="bi bi-currency-dollar icon"></i><strong>Mức lương:</strong> {{ $tuyendung->salary }} VND</p>
        <p><i class="bi bi-briefcase icon"></i><strong>Kinh nghiệm yêu cầu:</strong> {{ $tuyendung->experience }}</p>
    </div>

    <!-- Job Description -->
    <div class="job-description">
        <h3>Mô tả công việc</h3>
        <p>{{ $tuyendung->content }}</p>
    </div>

    <!-- Apply Button -->
    <div class="apply-container">
        <a href="#" class="apply-button"><i class="bi bi-send"></i> Ứng tuyển</a>
    </div>

</div>
@endsection

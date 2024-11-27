@extends('layouts.app')
@section('title', 'Cơ hội việc làm')
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Job Listings in Da Nang</title>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        /* CSS styling */

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .job-listing {
            width: 95%;
            margin: auto;
            padding: 20px;
        }

        .job-card {
            display: flex;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            align-items: center;
        }

        .company-logo {
            width: 400px;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
        }

        .job-details {
            flex-grow: 1;
        }

        h3 {
            color: #333;
            font-size: 1.2em;
            margin: 0;
        }

        .button-group {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between buttons */
            margin-top: 10px;
        }

        .detail-link {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }

        .detail-link:hover {
            color: #0056b3;
        }

        .apply-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .apply-button.active:hover {
            background-color: #0056b3;
        }

        .apply-button.disabled {
            background-color: #d3d3d3;
            color: #a0a0a0;
            cursor: not-allowed;
        }

        .expired .apply-button {
            background-color: #d3d3d3;
            color: #a0a0a0;
            cursor: not-allowed;
        }

        .expired .expired-text {
            color: red;
            font-weight: bold;
        }

        .remaining-days {
            color: #333;
            font-weight: bold;
        }

        p {
            margin: 4px 0;
            color: #666;
        }

        .icon {
            margin-right: 5px;
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="job-listing">
    @foreach ($tuyendungs as $tuyendung)
    <div class="job-card">
        <img src="{{$tuyendung->image}}" alt="{{ $tuyendung->title }}" class="company-logo">
        <div class="job-details">
            <h3>{{ $tuyendung->title }}</h3>
            <p><strong>Lương:</strong> {{ $tuyendung->salary }} VND</p>
            <p><strong>Địa điểm:</strong> {{ $tuyendung->location }}</p>
            <p><strong>Thời gian:</strong> {{ $tuyendung->time }}</p>
            <p><strong>Kinh nghiệm:</strong> {{ $tuyendung->experience }}</p>
            <div class="button-group">
                <!-- Liên kết đến chi tiết công việc, truyền id -->
                <a href="{{ route('chitiettuyendung', $tuyendung->id) }}" class="detail-link">
                    <i class="bi bi-info-circle"></i> Xem chi tiết
                </a>
                <button class="apply-button"><i class="bi bi-send"></i> Ứng tuyển</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

</body>
</html>


@endsection
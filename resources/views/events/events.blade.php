@extends('layouts.app')
@section('title', 'Sự kiện')
@section('title-sidebar', 'Sự kiện')
@section('sidebar-menu')
    <li>
        <a href="#">Sắp tới</a>
    </li>
    <li>
        <a href="#">Đang diễn ra</a>
    </li>
    <li>
        <a href="#">Đã kết thúc</a>
    </li>
@endsection

@section('content')
    <h2>Các sự kiện</h2>
    <p>Danh sách các sự kiện sắp tới, đang diễn ra và đã kết thúc.</p>
@endsection

@extends('layouts.app')
@section('title', 'Giới thiệu')
@section('title-sidebar', 'Giới thiệu')
@section('sidebar-menu')
    <li><a href="{{ route('gioithieumangluoi') }}">Giới thiệu mạng lưới</a></li>
    <li><a href="{{ route('bandieuhanh') }}">Ban điều hành</a></li>
    <li><a href="{{ route('quyenloivanghiavu') }}">Quyền lợi và nghĩa vụ</a></li>
@endsection
@section('content')
    <h2>Giới thiệu về Mạng lưới Cựu sinh viên</h2>
    <p>Thông tin về mạng lưới, ban điều hành, quyền lợi và nghĩa vụ của thành viên.</p>
@endsection

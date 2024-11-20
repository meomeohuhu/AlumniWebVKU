@extends('layouts.app')
@section('title', 'Tin tức')
@section('title-sidebar', 'Tin tức')
@section('sidebar-menu')
    <li>
        <a href="{{ route('thongbao') }}">Thông báo</a>
    </li>
    <li>
        <a href="#">Hoạt động</a>
    </li>
    <li>
        <a href="#">Vinh danh</a>
    </li>
@endsection
@section('content')
    <h2>Tin tức và Thông báo</h2>
    <p>Các thông báo, hoạt động và tin tức liên quan.</p>
@endsection

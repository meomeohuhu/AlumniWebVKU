<?php
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

// Route chính
Route::get('/app', function () {
    return view('layouts.app'); // Trả về view `app.blade.php`
})->name('app');

Route::get('home', function() {
    return view('home');
})->name('home');

Route::get('/', function() {
    return view('createPost');
})->name('createPost');

Route::get('/about', function() {
    return view('about.about');
})->name('about');

Route::get('/forum', function() {
    return view('forum.forum');
})->name('forum');

Route::get('/news', function() {
    return view('news.news');
})->name('news');

// Các route khác
Route::get('/events', function() {
    return view('events.events');
})->name('events');

Route::get('/network', function() {
    return view('network.network');
})->name('network');

Route::get('/jobs', function() {
    return view('jobs.jobs');
})->name('jobs');

Route::get('/gioithieumangluoi', function() {
    return view('about.gioithieumangluoi');
})->name('gioithieumangluoi');

Route::get('/quyenloivanghiavu', function() {
    return view('about.quyenloivanghiavu');
})->name('quyenloivanghiavu');

Route::get('/bandieuhanh', function() {
    return view('about.bandieuhanh');
})->name('bandieuhanh');

// Đăng nhập và đăng ký
Route::get('login', [LoginController::class, 'getLogin'])->name('login');
Route::post('login', [LoginController::class, 'postLogin']);

Route::post('register', [RegisterController::class, 'postRegister'])->name('register');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');


// Thông báo
Route::get('/thongbao', function() {
    return view('news.thongbao');
})->name('thongbao');

Route::get('/ndthongbao', function() {
    return view('news.ndthongbao');
})->name('ndthongbao');

// Các route khác
Route::get('/cbl', function() {
    return view('network.clb');
})->name('clb');

Route::get('/ndcbl', function() {
    return view('network.ndclb');
})->name('ndclb');

// Đăng xuất
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');


use App\Http\Controllers\PostController;

Route::get('postscreate', [PostController::class, 'create'])->name('createPost');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');

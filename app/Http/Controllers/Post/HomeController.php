<?php
namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Event;
use App\Models\Recruitment;
use App\Models\Tuyendung;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy tất cả tin tức từ bảng news
        $news = News::all();

        // Lấy tất cả sự kiện từ bảng events
        $events = Event::all();

        // Lấy 3 tin tuyển dụng mới nhất từ bảng tuyendung
        $recruitments = Tuyendung::latest()->take(3)->get();

        // Trả về view 'home' với các dữ liệu cần thiết
        return view('home', compact('news', 'events', 'recruitments'));
    }

    // Phương thức lấy dữ liệu tin tứ
}



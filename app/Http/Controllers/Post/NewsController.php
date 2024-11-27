<?php

namespace App\Http\Controllers\Post;

use App\Models\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        // Lấy tất cả tin tức từ cơ sở dữ liệu
        $news = News::all();

        // Trả về view news.thongbao với dữ liệu news
        return view('news.thongbao', compact('news'));
    }

    
    
    
}

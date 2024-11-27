<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Tuyendung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.adbaidang'); // Tên file view của bạn
    }

    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Xử lý upload ảnh
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Lưu dữ liệu vào database
        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Bài viết đã được đăng thành công!');
    }
}

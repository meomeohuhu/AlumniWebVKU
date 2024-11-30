<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Forum;
use App\Models\Comment;
use App\Models\Like;

class DashboardadController extends Controller
{
    /**
     * Hiển thị trang thống kê.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Đếm tổng số thành viên
        $totalUsers = User::count();

        // Đếm tổng số bình luận
        $totalComments = Comment::count();

        // Đếm tổng số lượt thích
        $totalLikes = Like::count();
        $totalpost = Forum::count();

        // Truyền dữ liệu về view
        return view('admin.addashboard', compact('totalUsers', 'totalComments', 'totalLikes','totalpost' ));
    }
}
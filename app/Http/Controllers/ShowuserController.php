<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowuserController extends Controller
{
    /**
     * Hiển thị tất cả người dùng.
     */
    public function showUsers()
{
    // Lấy tất cả người dùng
    $allUsers = User::all();  // Lấy tất cả người dùng từ bảng user

    // Trả về view và truyền dữ liệu
    return view('forum.forum', compact('allUsers'));  // Truyền biến $allUsers vào view
}

}



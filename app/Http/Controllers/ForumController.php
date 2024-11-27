<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function showForum()
    {
        return view('forum.forum');
        
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Lưu bài viết vào bảng forum với user_id là id người dùng hiện tại
        Forum::create([
            'content' => $request->content,
            'image' => $imagePath,
            'user_id' => Auth::id(), // Lấy id của người dùng đang đăng nhập
        ]);
        return redirect()->route('forum')->with('success', 'Đã đăng bài thành công!');

    }
    public function index()
    {
        // Lấy tất cả bài viết từ bảng forum cùng với thông tin người dùng
        // Sắp xếp theo thời gian tạo (mới nhất trước)
        $users = User::all(); // Kiểm tra model Board có đúng không
        $posts = Forum::with('user')->orderBy('created_at', 'desc')->get(); 
        // Trả về view và truyền dữ liệu
        return view('forum.forum', compact('posts', 'users'));
    }
    public function destroy($id)
{
    $post = Forum::findOrFail($id);

    // Kiểm tra xem người đăng bài viết có phải là chủ sở hữu không
    if ($post->user_id == Auth::id()) {
        $post->delete(); // Xóa bài viết
        return redirect()->route('forum')->with('success', 'Bài viết đã được xóa!');
    }

    return redirect()->route('forum')->with('error', 'Bạn không có quyền xóa bài viết này!');
}


}

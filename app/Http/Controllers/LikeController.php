<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    // Phương thức toggle like (thích hoặc bỏ thích)
    public function toggleLike(Request $request, $forumId)
    {
        // Kiểm tra xem người dùng đã like bài viết này chưa
        $existingLike = Like::where('user_id', Auth::id())->where('forum_id', $forumId)->first();
    
        $post = Forum::find($forumId);  // Lấy bài viết
    
        if ($existingLike) {
            // Nếu đã like, thì hủy like
            $existingLike->delete();
            $post->likes_count = $post->likes()->count();  // Cập nhật lại số lượt thích
        } else {
            // Nếu chưa like, thì tạo like mới
            $like = new Like();
            $like->user_id = Auth::id();  // ID của người dùng đang đăng nhập
            $like->forum_id = $forumId;     // ID của bài viết
            $like->save();  // Lưu like vào cơ sở dữ liệu
            $post->likes_count = $post->likes()->count();  // Cập nhật lại số lượt thích
        }
    
        $post->save();  // Lưu bài viết với số lượt thích đã cập nhật
    
        return redirect()->route('forum')->with('success', 'Cập nhật lượt thích thành công');
    }
    
    public function likePost($postId)
{
    $post = Forum::find($postId);

    // Giả sử bạn đã xử lý logic thích
    $post->likes_count = $post->likes()->count();  // Cập nhật số lượt thích
    $post->save();
}  

}

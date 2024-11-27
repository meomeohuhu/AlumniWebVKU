<?php

namespace App\Http\Controllers;

use App\Events\CommentAdded;
use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'forum_id' => 'required|exists:forums,id',
            'content' => 'required|string|max:1000',
        ]);

        $comment = Comment::create([
            'forum_id' => $validated['forum_id'],
            'user_id' => Auth::id(),
            'content' => $validated['content'],
        ]);

        // Phát sự kiện qua Pusher
        broadcast(new CommentAdded($comment))->toOthers();

        return response()->json(['success' => true, 'comment' => $comment]);
    }

    public function index($forum_id)
    {
        $comments = Comment::with('user')
            ->where('forum_id', $forum_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($comments);
    }
    public function addComment(Request $request, $forumId)
{
    $request->validate([
        'content' => 'required|string|max:1000',  // Xác thực dữ liệu
    ]);

    $post = Forum::find($forumId);

    // Thêm bình luận vào bảng comments
    $comment = new Comment();
    $comment->user_id = Auth::id();  // ID của người dùng đang đăng nhập
    $comment->forum_id = $forumId;    // ID của bài viết
    $comment->content = $request->content;
    $comment->save();

    // Cập nhật số lượng bình luận
    $post->comments_count = $post->comments()->count();
    $post->save();

    return redirect()->route('forum')->with('success', 'Bình luận đã được thêm');
}


}

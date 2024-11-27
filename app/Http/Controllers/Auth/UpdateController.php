<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Đảm bảo rằng bạn đã import User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    /**
     * Phương thức xử lý cập nhật hồ sơ cá nhân.
     */
    public function editProfile()
    {
        // Lấy thông tin người dùng hiện tại
        $user = Auth::user();  // Lấy người dùng đã đăng nhập
    
        // Trả về view với dữ liệu người dùng
        return view('layouts.user', compact('user'));
    }
    
    /**
     * Phương thức cập nhật thông tin người dùng.
     */
    public function updateProfile(Request $request, $id)
    {
        // Tìm kiếm bản ghi người dùng theo ID
        $user = User::findOrFail($id);  // Sử dụng User::findOrFail thay vì Auth::user()

        // Xử lý upload ảnh mới
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Di chuyển ảnh vào thư mục uploads
            $file->move(public_path('uploads'), $filename);

            // Xóa ảnh cũ nếu có
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }

            // Lưu đường dẫn ảnh mới
            $user->image = 'uploads/' . $filename;
        }

        // Cập nhật các thông tin người dùng từ request
        $user->update($request->only([
            'fullname', 
            'phone', 
            'major', 
            'faculty', 
            'name', 
            'birthdate', 
            'enrollment_year', 
            'education_system', 
            'level'
        ]));

        // Lưu thông tin vào cơ sở dữ liệu (không cần thiết nếu đã gọi update)
        // $user->save();  // Câu này có thể bỏ vì đã sử dụng phương thức update()

        // Chuyển hướng về trang profile và thông báo thành công
        return redirect()->route('forum', ['id' => $user->id])->with('success', 'Cập nhật thành công!');
    }
}

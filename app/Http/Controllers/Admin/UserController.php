<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Lấy tất cả người dùng từ database
        return view('admin.adtaikhoan', compact('users')); // Trả về view kèm dữ liệu
    }
    public function delete(Request $request)
    {
        $userIds = $request->input('user_ids', []);

        if (!empty($userIds)) {
            User::whereIn('id', $userIds)->delete();
            return redirect()->route('adtaikhoan')->with('success', 'Xóa tài khoản thành công!');
        }

        return redirect()->route('adtaikhoan')->with('error', 'Vui lòng chọn ít nhất một tài khoản!');
    }
    public function handleRequest(Request $request)
    {
        if ($request->input('action') === 'delete') {
            User::whereIn('id', $request->input('user_ids', []))->delete();
            return redirect()->back()->with('success', 'Tài khoản đã được xóa.');
        }
    }
    
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fullname = $request->input('fullname', $user->fullname);
        $user->birthdate = $request->input('birthdate', $user->birthdate);
        $user->phone = $request->input('phone', $user->phone);
        $user->major = $request->input('major', $user->major);
        $user->save();
    
        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }
    


    
}

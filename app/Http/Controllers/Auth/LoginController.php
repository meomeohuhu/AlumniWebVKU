<?php
namespace App\Http\Controllers\Auth;  // Đảm bảo namespace đúng

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    // Hiển thị form đăng nhập
    public function getLogin() {
        return view('auth.login'); // Đảm bảo view này có sẵn trong thư mục resources/views/auth/login.blade.php
    }

    // Xử lý đăng nhập
    public function postLogin(Request $request) {
        $rules = [
            'user_name' => 'required',
            'password' => 'required|min:6'
        ];
        $messages = [
            'user_name.required' => 'Tài khoản là trường bắt buộc',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            $username = $request->input('user_name');
            $password = $request->input('password');

            // Kiểm tra mật khẩu đã được mã hóa hay chưa và đăng nhập
            if (Auth::attempt(['name' => $username, 'password' => $password])) {
                return redirect()->route('app');  // Đường dẫn chuyển hướng khi đăng nhập thành công
            } else {
                return redirect('login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
            }
        }
    }
}

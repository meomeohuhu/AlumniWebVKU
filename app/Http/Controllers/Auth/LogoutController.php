<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    /**
     * Handle user logout
     *
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout(); // Đăng xuất người dùng
        return redirect()->route('home')->with('message', 'Bạn đã đăng xuất thành công.');
    }
}

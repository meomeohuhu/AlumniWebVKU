<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $allRequest = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        } else {
            if ($this->create($allRequest)) {
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect()->route('register');
            } else {
                Session::flash('error', 'Đăng ký thành viên thất bại!');
                return redirect()->route('register');
            }
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'major' => 'required|string|max:255',
            'faculty' => 'required|string|max:255',
            'name' => 'required|string|max:255|unique:users',
            'birthdate' => 'required|date_format:d/m/Y',
            'enrollment_year' => 'required|integer',
            'education_system' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
{
    try {
        return User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'fullname' => $data['fullname'],
            'birthdate' => Carbon::createFromFormat('d/m/Y', $data['birthdate'])->format('Y-m-d'),
            'phone' => $data['phone'],
            'major' => $data['major'],
            'faculty' => $data['faculty'],
            'enrollment_year' => $data['enrollment_year'],
            'education_system' => $data['education_system'],
            'level' => '3',
            'image' => 'uploads/1732343122_user (1).png', // Đường dẫn tới avatar mặc định
        ]);
    } catch (\Exception $e) {
       
        return false;
    }
}

}

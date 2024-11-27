<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Board;

class DashboardController extends Controller
{

    public function dashboard()
    {
      $boards = Board::all();
      return view('admin.adbandieuhanh', compact('boards')); // Truyền biến $boards sang view
    }
    public function edit($id)
    {
        $board = Board::findOrFail($id); // Lấy dữ liệu cần chỉnh sửa
        return view('about.editboard', compact('board'));
    }

    public function update(Request $request, $id)
    {
        $board = Board::findOrFail($id);

        // Xử lý upload ảnh mới
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);

            if ($board->photo && file_exists(public_path($board->photo))) {
                unlink(public_path($board->photo)); // Xóa ảnh cũ
            }

            $board->photo = 'uploads/' . $filename;
        }

        // Cập nhật các thông tin khác
        $board->name = $request->name;
        $board->date_of_birth = $request->date_of_birth;
        $board->phone = $request->phone;
        $board->email = $request->email;
        $board->workplace = $request->workplace;
        $board->position = $request->position;

        $board->save();

        return redirect()->route('bandieuhanh')->with('success', 'Cập nhật thành công!');
    }

    // Thêm mới thành viên Ban điều hành
    public function create()
    {
        return view('about.addboard'); // Hiển thị form thêm mới
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:board,email',
            'workplace' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $validated['photo'] = 'uploads/' . $filename;
        }
    
        Board::create($validated);
    
        return redirect()->route('bandieuhanh')->with('success', 'Thêm thành viên Ban điều hành thành công!');
    }
    
}

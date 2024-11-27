    <?php

    use App\Http\Controllers\EventController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\Auth\LogoutController;

    // Route chính
    Route::get('/app', function () {
        return view('layouts.app'); // Trả về view `app.blade.php`
    })->name('app');
    Route::get('/user', function () {
        return view('layouts.user'); // Trả về view `app.blade.php`
    })->name('user');


    Route::get('home', function () {
        return view('home');
    })->name('home');

    Route::get('user', function () {
        return view('layouts.user');
    })->name('user');

    Route::get('/about', function () {
        return view('about.about');
    })->name('about');

    Route::get('/forum', function () {
        return view('forum.forum');
    })->name('forum');

    Route::get('news', function () {
        return view('news.news');
    })->name('news');

    use App\Models\Event;
    use Carbon\Carbon;

    Route::get('events', function () {
        $events = Event::orderBy('start', 'asc')->get(); // Lấy tất cả sự kiện sắp xếp theo ngày bắt đầu
        return view('events.events', compact('events'));
    })->name('events');


    Route::get('/network', function () {
        return view('network.network');
    })->name('network');

    Route::get('/jobs', function () {
        return view('jobs.jobs');
    })->name('jobs');

    Route::get('/gioithieumangluoi', function () {
        return view('about.gioithieumangluoi');
    })->name('gioithieumangluoi');

    Route::get('/quyenloivanghiavu', function () {
        return view('about.quyenloivanghiavu');
    })->name('quyenloivanghiavu');

    Route::get('/bandieuhanh', function () {
        return view('about.bandieuhanh');
    })->name('bandieuhanh');

    use App\Models\Tuyendung;

    // Route hiển thị danh sách công việc tuyển dụng
    Route::get('/tuyendung', function () {
        $tuyendungs = Tuyendung::all(); // Lấy tất cả công việc tuyển dụng
        return view('jobs.tuyendung', compact('tuyendungs'));
    })->name('tuyendung');

    // Route hiển thị chi tiết công việc tuyển dụng
    Route::get('/tuyendung/{id}', function ($id) {
        $tuyendung = Tuyendung::findOrFail($id); // Lấy công việc theo id
        if ($tuyendung->image) {
            // Nếu có ảnh, thêm đường dẫn đầy đủ cho ảnh
            $tuyendung->image_url = asset('images/' . $tuyendung->image);
        }

        return view('jobs.chitiettuyendung', compact('tuyendung'));
    })->name('chitiettuyendung');




    use App\Http\Controllers\BoardController;
use App\Models\Board;

// Hiển thị danh sách thành viên Ban điều hành (public view)
Route::get('bandieuhanh', [BoardController::class, 'index'])->name('bandieuhanh');

// Hiển thị form chỉnh sửa thành viên
Route::get('board/{id}/edit', [BoardController::class, 'edit'])->name('board.edit');

// Cập nhật dữ liệu thành viên
Route::put('board/{id}', [BoardController::class, 'update'])->name('board.update');

// Hiển thị form thêm thành viên mới
Route::get('admin/board/create', [BoardController::class, 'create'])->name('board.create');

// Lưu dữ liệu thành viên mới
Route::post('admin/board', [BoardController::class, 'store'])->name('board.store');



    // Đăng nhập và đăng ký
    Route::get('login', [LoginController::class, 'getLogin'])->name('login');
    Route::post('login', [LoginController::class, 'postLogin']);

    Route::post('register', [RegisterController::class, 'postRegister']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');


    // Thông báo
    use App\Models\News;
    use Illuminate\Support\Str;

    Route::get('thongbao', function () {
        // Lấy tất cả tin tức từ cơ sở dữ liệu và giới hạn nội dung
        $news = News::all()->map(function ($item) {
            // Giới hạn nội dung tin tức
            $item->content = Str::limit($item->content, 200);

            // Kiểm tra xem có ảnh hay không
            if ($item->image) {
                // Nếu có ảnh, thêm đường dẫn đầy đủ cho ảnh
                $item->image_url = asset('images/' . $item->image);
            }

            return $item;
        });

        // Trả về view và truyền biến $news
        return view('news.thongbao', compact('news'));
    })->name('thongbao');


    Route::get('news/ndthongbao/{id}', function ($id) {
        // Lấy bài viết theo ID
        $news = News::findOrFail($id);
        return view('news.ndthongbao', compact('news'));
    })->name('ndthongbao');

    // Các route khác
    Route::get('/cbl', function () {
        return view('network.clb');
    })->name('clb');

    Route::get('/ndcbl', function () {
        return view('network.ndclb');
    })->name('ndclb');

    // Đăng xuất
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');




    use App\Http\Controllers\ForumController;

    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
    Route::get('/forum1', [ForumController::class, 'index'])->name('forum');
    Route::delete('/post/{id}', [ForumController::class, 'destroy'])->name('post.destroy');



    // use App\Http\Controllers\Admin\DashboardController;

    // Route::middleware(['auth', 'admin'])->group(function () {
    //     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // });


    use App\Http\Controllers\Post\HomeController;

    // Định nghĩa route với tên 'home'
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    use App\Http\Controllers\Post\NewsController;

    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    

    // Route chi tiết tin tức
    Route::get('/news/{id}', [HomeController::class, 'showNews'])->name('news.detail');


    use App\Http\Controllers\Auth\UpdateController;


    // Route GET để hiển thị hồ sơ
    Route::get('/user', [UpdateController::class, 'editProfile'])->name('profile.edit');

    // Route PUT để cập nhật hồ sơ
    Route::get('/user/{id}', [UpdateController::class, 'updateProfile'])->name('profile.update');

    // Route hiển thị hồ sơ cá nhân
    Route::get('/user', [UpdateController::class, 'editProfile'])->name('user');






    // ADMIN


    Route::get('index', function () {
        return view('admin.index');
    })->name('index');

    use App\Models\User;

    Route::get('adtaikhoan', function () {
        // Lấy tất cả người dùng từ cơ sở dữ liệu
        $users = User::all();

        // Trả về view và truyền biến $users
        return view('admin.adtaikhoan', compact('users'));
    })->name('adtaikhoan');






    use Illuminate\Http\Request;
use App\Models\Post;

Route::get('adbaidang', function () {
    // Xử lý logic ở đây (nếu cần)
    return view('admin.adbaidang');
})->name('adbaidang');

Route::post('adbaidang', function (Request $request) {
    // Kiểm tra và validate dữ liệu từ form
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category_id' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'start' => 'nullable|date',
        'end' => 'nullable|date',
        'salary' => 'nullable|string',
        'location' => 'nullable|string',
        'experience' => 'nullable|string',
        'time' => 'nullable|string',
    ]);

    // Xử lý upload ảnh
    $imagePath = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        
        // Di chuyển ảnh vào thư mục uploads
        $file->move(public_path('uploads'), $filename);

        // Lưu đường dẫn ảnh vào biến $imagePath
        $imagePath = 'uploads/' . $filename; // Lưu đường dẫn ảnh tương đối
    }

    // Lưu dữ liệu vào database theo category_id
    if ($request->input('category_id') === 'news') {
        // Lưu tin tức
        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
        ]);
    } elseif ($request->input('category_id') === 'events') {
        // Lưu sự kiện
        Event::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
            'start' => $request->input('start'),
            'end' => $request->input('end'),
        ]);
    } elseif ($request->input('category_id') === 'tuyendung') {
        // Lưu tuyển dụng
        Tuyendung::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,  
            'salary' => $request->input('salary'),
            'location' => $request->input('location'),
            'experience' => $request->input('experience'),
            'time' => $request->input('time'),
        ]);
    }

    // Chuyển hướng về trang cũ với thông báo thành công
    return redirect()->route('adbaidang')->with('success', 'Bài viết đã được đăng thành công!');
});








Route::get('adbandieuhanh', function () {
    $boards = Board::all(); // Lấy tất cả các thành viên Ban điều hành
    return view('admin.adbandieuhanh', compact('boards')); // Truyền biến vào view
})->name('adbandieuhanh');

    Route::get('adcohoivieclam', function () {
        return view('admin.adcohoivieclam');
    })->name('adcohoivieclam');
    Route::get('addashboard', function () {
        return view('admin.addashboard');
    })->name('addashboard');
    Route::get('adhoso', function () {
        return view('admin.adhoso');
    })->name('adhoso');
    Route::get('admangluoi', function () {
        return view('admin.admangluoi');
    })->name('admangluoi');
    Route::get('adsukien', function () {
        return view('admin.adsukien');
    })->name('adsukien');
    Route::get('adtintuc', function () {
        return view('admin.adtintuc');
    })->name('adtintuc');
    Route::get('adchinhsuataikhoan', function () {
        return view('admin.adchinhsuataikhoan');
    })->name('adedit');
    Route::get('adchinhsuaboard', function () {
        return view('admin.adeditboard');
    })->name('adeditboard');



    use App\Http\Controllers\Admin\UserController;
// Route xem danh sách người dùng
Route::get('adtaikhoan', [UserController::class, 'index'])->name('adtaikhoan');

// Route xóa tài khoản người dùng
Route::delete('adtaikhoan/delete', [UserController::class, 'delete'])->name('adtaikhoan.delete');

Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('user.update');
Route::post('/handle-users', [UserController::class, 'handleRequest'])->name('user.handle');
Route::post('/update-user/{id}', [UserController::class, 'updateUser']);  

Route::get('adeditboard/{id}', function ($id) {
    $board = Board::findOrFail($id);
    return view('admin.adeditboard', compact('board'));
})->name('adeditboard');

// Route để cập nhật board
Route::put('board/update/{id}', function (Request $request, $id) {
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

    return redirect()->route('adbandieuhanh')->with('success', 'Cập nhật thành viên thành công');
})->name('board.adupdate');



Route::get('adaddboard', function () {
    // Xử lý logic ở đây (nếu cần)
    return view('admin.adaddboard');
})->name('adaddboard');

// Route để thêm thành viên vào Ban điều hành
Route::post('admin/adaddboard', function (Request $request) {

    // Xử lý upload ảnh mới
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'date_of_birth' => 'required|date',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255|unique:board,email',
        'workplace' => 'required|string|max:255',
        'position' => 'required|string|max:255',
    ]);

    // Xử lý upload ảnh
    $imagePath = null;
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '_' . $file->getClientOriginalName();
        
        // Di chuyển ảnh vào thư mục uploads
        $file->move(public_path('uploads'), $filename);

        // Lưu đường dẫn ảnh vào biến $imagePath
        $imagePath = 'uploads/' . $filename; // Lưu đường dẫn ảnh tương đối
    }

    Board::create([
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'photo' => $imagePath,
        'date_of_birth' => $request->input('date_of_birth'),
        'email' => $request->input('email'),
        'workplace' => $request->input('workplace'),
        'position' => $request->input('position'),
    ]);

    return redirect()->route('adbandieuhanh')->with('success', 'Cập nhật thành viên thành công');
})->name('adaddboard1');


use App\Http\Controllers\LikeController;


Route::post('/posts/{post}/like', [LikeController::class, 'toggleLike'])->name('posts.like');

use App\Http\Controllers\CommentController;

Route::middleware(['auth'])->group(function () {
    Route::get('/comments/{forum_id}', [CommentController::class, 'index']);
    Route::post('/comments', [CommentController::class, 'store']);
    Route::post('/posts/{post}/comment', [CommentController::class, 'addComment'])->name('posts.comment');
});



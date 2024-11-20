@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close<s/pan>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div id="registerModal" class="modal">
    <div class="modal-content">
        <!-- Nút đóng modal -->
        <span class="close">&times;</span>
        <!-- Logo ở trên cùng của modal -->
        <img src="{{ asset('images/Alumni.png') }}" alt="Logo" class="logo">
        <!-- Tiêu đề đăng ký -->
        <h2>ĐĂNG KÝ</h2>

        <!-- Form đăng ký -->
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-row">
                <!-- Cột bên trái -->
                <div class="form-column">
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" placeholder="Ví dụ: Phan Văn Đạt" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" placeholder="Ví dụ: 0852747318" required>
                    </div>

                    <div class="form-group">
                        <label for="major">Ngành học</label>
                        <input type="text" name="major" id="major" placeholder="Ví dụ: Công nghệ thông tin" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty">Khoa</label>
                        <select name="faculty" id="faculty" required>
                            <option value="computer-science">Khoa Khoa học máy tính</option>
                            <option value="computer-engineering">Khoa Kỹ thuật máy tính và Điện tử</option>
                            <option value="digital-economics">Khoa Kinh tế số và Thương mại điện tử</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_name">Tên Đăng Nhập</label>
                        <input type="text" name="name" id="user_name" placeholder="Ví dụ: dat0321" required>
                    </div>
                </div>

                <!-- Cột bên phải -->
                <div class="form-column">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Ví dụ: example@vku.udn.vn" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="birthdate">Ngày sinh</label>
                        <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/yyyy" class="datepicker" required>
                    </div>

                    <div class="form-group">
                        <label for="enrollment_year">Năm nhập học</label>
                        <select name="enrollment_year" id="enrollment_year" required>
                            @for ($year = 2017; $year <= date('Y'); $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="education_system">Hệ đào tạo</label>
                        <select name="education_system" id="education_system" required>
                            <option value="bachelor">Cử nhân</option>
                            <option value="engineer">Kỹ sư</option>
                            <option value="master">Thạc sĩ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Xác nhận mật khẩu</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="register-btn">Đăng ký</button>
        </form>

        <p class="or-text">HOẶC</p>
        <p>Đã có tài khoản? <a href="{{ route('login') }}" class="login-link">Đăng nhập ngay</a></p>
    </div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    // Lấy modal và nút đóng
    var modal = document.getElementById('registerModal');
    var closeBtn = document.getElementsByClassName('close')[0];

    // Khi nhấn vào nút đóng (X), đóng modal và chuyển hướng tới trang khác
    closeBtn.onclick = function() {
        modal.style.display = "none";
        window.location.href = "{{ route('app') }}"; // Chuyển hướng đến trang chủ hoặc trang khác
    }

    // Nếu người dùng click vào ngoài modal, đóng modal và chuyển hướng
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            window.location.href = "{{ route('app') }}"; // Chuyển hướng đến trang khác
        }
    }
</script>


<!-- #region  -->
@endsection
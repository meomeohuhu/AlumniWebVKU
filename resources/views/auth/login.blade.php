@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="{{ asset('images/Alumni.png') }}" alt="Logo" class="logo">
        <h2>ĐĂNG NHẬP</h2>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Tài khoản Email</label>
                <input type="text" name="user_name" id="username" placeholder="Nhập tài khoản" value="{{ old('user_name') }}" required>
                @error('user_name')
                    <div class="error">{{ $message }}</div>
                @enderror
                
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <a href="#" class="forgot-password"><p>Bạn quên mật khẩu?</p></a>
            <button type="submit" class="login-btn">Đăng nhập</button>
        </form>

        <p class="or-text">HOẶC</p>
        <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="register-link">Đăng ký ngay</a></p>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
<script>
     // Lấy modal và nút đóng
    var modal = document.getElementById('loginModal');
    var closeBtn = document.getElementsByClassName('close')[0];

    closeBtn.onclick = function() {
        modal.style.display = "none";
        window.location.href = "{{ route('home') }}";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            window.location.href = "{{ route('home') }}";
        }
    }
    document.getElementById('login').onsubmit = function(event) {
        event.preventDefault(); // Ngăn chặn gửi form

        var password = document.getElementById('password').value;

        // Kiểm tra mật khẩu
        if (password.length >= 6) { // Điều kiện mật khẩu đúng
            document.getElementById('login').style.display = 'none';
            document.getElementById('register').style.display = 'none';

            // Gửi form nếu mật khẩu đúng
            this.submit();
        } else {
            alert('Mật khẩu không hợp lệ!');
        }
    }
</script>
@endsection

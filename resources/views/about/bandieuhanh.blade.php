@extends('layouts.app')
@section('title', 'Giới thiệu')
@section('title-sidebar', 'Giới thiệu')
@section('sidebar-menu')
<li><a href="{{ route('gioithieumangluoi') }}">Giới thiệu mạng lưới</a></li>
<li><a href="{{ route('bandieuhanh') }}">Ban điều hành</a></li>
<li><a href="{{ route('quyenloivanghiavu') }}">Quyền lợi và nghĩa vụ</a></li>
@endsection
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Bảng Thông Tin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            background-color: #f7f9fc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px auto;
            font-size: 16px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #00796b;
            /* Teal for header */
            color: #ffffff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Light gray for even rows */
        }

        tr:hover {
            background-color: #d0fffa;
            /* Light teal for hover */
            color: #000000;
        }

        .center {
            text-align: center;
        }

        .title {
            text-align: center;
            color: #00796b;
            /* Teal for title */
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Rounded image style */
        .rounded-img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .d-none {
            display: none;
        }

        .edit {
            background-color: #e0f7fa;
            /* Màu xanh nhạt */
            color: #00796b;
            /* Màu chữ teal */
        }

        .add-button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            padding: 10px 15px;
            background-color: #00796b;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .add-button i {
            margin-right: 5px;
            font-size: 18px;
        }

        .add-button:hover {
            background-color: #005a4c;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h2 class="title">BAN ĐIỀU HÀNH</h2>

    <table>
        <thead>
            <tr>
                <th class="center">Số TT</th>
                <th>Họ Tên</th>
                <th>Ảnh</th>
                <th>Ngày Sinh</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Nơi Làm Việc</th>
                <th>Chức Vụ BĐH</th>
                @if (auth()->check() && Auth::user()->level === '1')
                <th>Chỉnh sửa</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($boards as $board)
            <tr id="row-{{ $board->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="display-value">{{ $board->name }}</span>
                    <input type="text" class="edit-value form-control d-none" value="{{ $board->name }}" name="name">
                </td>
                <td>
                    <img src="{{ $board->photo }}" alt="Ảnh" class="rounded-img">
                </td>
                <td>
                    <span class="display-value">{{ $board->date_of_birth }}</span>
                    <input type="date" class="edit-value form-control d-none" value="{{ $board->date_of_birth }}"
                        name="date_of_birth">
                </td>
                <td>
                    <span class="display-value">{{ $board->phone }}</span>
                    <input type="text" class="edit-value form-control d-none" value="{{ $board->phone }}" name="phone">
                </td>
                <td>
                    <span class="display-value">{{ $board->email }}</span>
                    <input type="email" class="edit-value form-control d-none" value="{{ $board->email }}" name="email">
                </td>
                <td>
                    <span class="display-value">{{ $board->workplace }}</span>
                    <input type="text" class="edit-value form-control d-none" value="{{ $board->workplace }}"
                        name="workplace">
                </td>
                <td>
                    <span class="display-value">{{ $board->position }}</span>
                    <input type="text" class="edit-value form-control d-none" value="{{ $board->position }}"
                        name="position">
                </td>
                <td>
                    @if (Auth::user()->level === '1')

                    <a href="{{ route('board.edit', $board->id) }}"><i class="bi bi-pencil"></i></a>

                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>
    <div style="margin: 10px 0; text-align: right;">
        @if (auth()->check() && Auth::user()->level === '1')
        <a href="{{ route('board.create') }}" class="add-button">
            <i class="fas fa-plus"></i> Thêm
        </a>
        @endif
    </div>

</body>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('.btn-edit').forEach(button => {
            button.addEventListener('click', function() {
                const rowId = this.dataset.id;
                const row = document.getElementById(`row-${rowId}`);

                // Hiển thị ô input và nút xác nhận
                row.querySelectorAll('.display-value').forEach(el => el.classList.add('d-none'));
                row.querySelectorAll('.edit-value').forEach(el => el.classList.remove('d-none'));
                row.querySelector('.btn-save').classList.remove('d-none');
                this.classList.add('d-none');
            });
        });
    });
</script>
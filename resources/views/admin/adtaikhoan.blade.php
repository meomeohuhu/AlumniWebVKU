@extends('admin.index')
@section('content-admin')
<div id="dashboard" class="content-section active">
    <h2>Tài Khoản Người Dùng</h2>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
            max-width: 100%;
            margin: auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #cccccc;
        }

        .search-bar .sort-button,
        .search-bar .remove-button {
            padding: 10px 20px;
            border: none;
            border-radius: 50px;
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
        }

        .search-bar .sort-button:hover,
        .search-bar .remove-button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9;
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background-color: #22a8c3;
            color: #ffffff;
        }

        thead th {
            text-align: left;
            padding: 10px;
        }

        tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        .avatar-name {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar-name img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .checkbox-cell {
            text-align: center;
            width: 50px;
        }

        .checkbox-cell input {
            cursor: pointer;
        }

        .edit-icon {
            font-size: 18px;
            color: #007bff;
            cursor: pointer;
        }

        .edit-icon:hover {
            color: #0056b3;
        }

        .editable input {
            width: 100%;
            border: none;
            padding: 10px;
            box-sizing: border-box;
            font-family: inherit;
            font-size: inherit;
            color: inherit;
            background-color: #f9f9f9;
        }

        .editable input:focus {
            outline: none;
            background-color: #ffffff;
        }
    </style>

    <div class="container">
        <form action="{{ route('user.handle') }}" method="POST" id="mainForm">
            @csrf
            <input type="hidden" name="action" value="delete" id="formAction">
            <div class="search-bar">
                <input type="text" placeholder="Tìm theo tên người dùng hoặc ID" />
                <button class="sort-button" type="button"><i class="fas fa-search"></i></button>
                <button type="submit" class="remove-button">Xóa tài khoản đã chọn</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Người Dùng</th>
                        <th>Tên Người Dùng</th>
                        <th>Gia nhập từ</th>
                        <th>Ngày sinh</th>
                        <th>SDT</th>
                        <th>Ngành học</th>
                        <th>Vai trò</th>
                        <th>Khóa học</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr id="user-{{ $user->id }}">
                        <td class="checkbox-cell">
                            <input type="checkbox" name="user_ids[]" value="{{ $user->id }}">
                        </td>
                        <td>
                            <div class="avatar-name">
                                <img src="{{ asset($user->image) }}" alt="Avatar">
                                {{ $user->name }}
                            </div>
                        </td>
                        <td class="editable" data-field="fullname">{{ $user->fullname }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td class="editable" data-field="birthdate">{{ $user->birthdate ?? 'Chưa cung cấp' }}</td>
                        <td class="editable" data-field="phone">{{ $user->phone ?? 'Không xác định' }}</td>
                        <td class="editable" data-field="major">{{ $user->major ?? 'Không có' }}</td>
                        <td>
                            @if ($user->level == 1)
                            Admin
                            @elseif ($user->level == 2)
                            Doanh nghiệp
                            @elseif ($user->level == 3)
                            Người dùng
                            @else
                            Không xác định
                            @endif
                        </td>
                        <td>{{ $user->enrollment_year ?? 'Không có' }}</td>
                        <td>
                            <a href="javascript:void(0);" class="edit-icon" onclick="editUser({{ $user->id }})">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        function editUser(userId) {
            const row = document.getElementById(`user-${userId}`);
            const cells = row.getElementsByClassName('editable');

            for (let cell of cells) {
                const field = cell.getAttribute('data-field');
                const currentValue = cell.innerText;

                cell.innerHTML = `<input type="text" value="${currentValue}" data-field="${field}" name="${field}" />`;
            }

            const form = document.getElementById('mainForm');
            form.action = `/update-user/${userId}`;
            form.method = 'POST';
            document.getElementById('formAction').value = 'edit';

            const confirmButton = document.createElement('button');
            confirmButton.innerText = 'Xác nhận';
            confirmButton.type = 'submit';
            row.cells[row.cells.length - 1].appendChild(confirmButton);
        }
    </script>
</div>
@endsection

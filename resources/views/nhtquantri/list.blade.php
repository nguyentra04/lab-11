<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> danh sách quản trị </title>
</head>
<body>
   <div class="container mt-5">
        <h1 class="text-center">Danh sách Quản Trị </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tài Khoản </th>
                    <th>Mật Khẩu </th>
                    <th>Trạng Thái </th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt = 1;
                @endphp
                @forelse ($nhtquantris as $admin)
                    <tr>
                        <td>{{ $admin->NHTTaiKhoan}}</td>
                        <td>{{ $admin->NHTMatKhau }}</td>
                        <td>{{ $admin->NHTTrangThai }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Sửa</a>
                            <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Không có quản trị viên nào!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
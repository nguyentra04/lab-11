@extends('_layouts.admins._master')
@section('title', 'Danh sách sản phẩm')
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách loại sản phẩm</h1>
                <a href="{{route('NHTadmins.NHTSanPham.NHTcreatesubmit') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Đơn giá </th>
                        <th>Số lượng </th>
                        <th>Mã loại</th>
                        <th>Trạng thái </th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nhtsp as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->NHTMaSP }}</td>
                            <td>{{ $item->NHTTenSP }}</td>
                            <td>{{ $item->NHTHinhAnh }}</td>
                            <td>{{ $item->NHTDonGia }}</td>
                            <td>{{ $item->NHTSoLuong }}</td>
                            <td>{{ $item->NHTMaLoai }}</td>
                            <td>{{ $item->NHTTrangThai }}</td>
                            <td>
                                <a href="{{ route('NHTadmins.NHTSanPham.nhtedit', $item->id) }}" class="btn btn-warning">Sửa</a>
                                <a href="{{ route('NHTadmins.NHTSanPham.nhtdelete', $item->id) }}" class="btn btn-danger" 
                                    onclick="return confirm('Bạn có chắc muốn xóa không ?')" >Xóa</a>
                            </td>  
                        </tr>
                    @empty
                        <th colspan="5"> Chưa có thông tin sản phẩm  </th>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
    
        
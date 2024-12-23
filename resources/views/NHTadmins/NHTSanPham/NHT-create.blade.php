@extends('_layouts.admins._master')
@section('title','thêm mới loại sản phẩm')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTSanPham.NHTcreatesubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2> Thêm mới sản phẩm </h2>
                    </div>

                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaSP" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTMaSP" name="NHTMaSP">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTenSP" class="col-sm-2 col-form-label">Tên sản phẩm </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTMaSP" name="NHTTenSP">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTHinhAnh" class="col-sm-2 col-form-label"> Hình Ảnh </label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" id="NHTHinhAnh" name="NHTHinhAnh">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTDonGia" class="col-sm-2 col-form-label">Đơn Giá  </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHT" name="NHTDonGia">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTSoLuong" class="col-sm-2 col-form-label">Số Lượng </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHT" name="NHTSoLuong">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMaLoai" class="col-sm-2 col-form-label">Mã Loại </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHT" name="NHTMaLoai">
                            </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái </label>
                            <div class="col-sm-10">
                              <input type="radio"  id="NHTTrangThai1" name="NHTTrangThai" value='0'>
                              <label for="NHTTrangThai1">Hiển thị </label>
                                &nbsp;
                              <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='1'>
                              <label for="NHTTrangThai0">Khóa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >Lưu</button>
                        <a href="{{route('NHTadmins.NHTSanPham.NHTList')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection
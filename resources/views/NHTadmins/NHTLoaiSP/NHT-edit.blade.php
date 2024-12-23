
@extends('_layouts.admins._master')
@section('title','Sửa thông tin loại sản phẩm ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTloaisp.NHTeditsubmit') }}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $nhtloaisps->id}}">
                <div class="card">
                    <div class="card-header">
                        <h2> Sửa thông tin loại sản phẩm  </h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{ $nhtloaisps->NHTMaLoai }}"
                              id="NHTMaLoai" name="NHTMaLoai">
                            @error('NHTMaLoai')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                      </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTenLoai" class="col-sm-2 col-form-label">Tên Loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"
                               value="{{ $nhtloaisps->NHTTenLoai }}"
                               id="NHTMaLoai" name="NHTTenLoai">
                            @error('NHTTenLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái </label>
                            <div class="col-sm-10">
                                @if ($nhtloaisps->NHTTrangThai == 1){
                                    <input type="radio"  id="NHTTrangThai1" name="NHTTrangThai" value='1'
                                    checked>
                                        <label for="NHTTrangThai1">Hiển thị </label>
                                    &nbsp;
                                    <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='0'>
                                    <label for="NHTTrangThai0">Khóa</label>}  
                                @else {
                                    <input type="radio"  id="NHTTrangThai1" name="NHTTrangThai" value='0'>
                                    <label for="NHTTrangThai1">Hiển thị </label>
                                    &nbsp;
                                    <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='1'
                                    checked>
                                    <label for="NHTTrangThai0">Khóa</label>
                                }
                                @endif
                            
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >ghi lai</button>
                        <a href="{{route('NHTadmins.NHTloaisp.NHTlist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection
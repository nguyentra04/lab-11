<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHTKhachHangmodel extends Model
{
    use HasFactory;
    protected $table = 'NHTKhachHang';
    protected $fillable = ['NHTMaKH', 'NHTTenKH', 'NHTEmail', 'NHTMatKhau', 'NHTDienThoai', 'NHTDiaChi', 'NHTNgayDangKy', 'NHTTrangThai'];

}

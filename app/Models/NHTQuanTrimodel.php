<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHTQuanTrimodel extends Model
{
    use HasFactory;
    protected $table = 'NHT_QuanTri';
    protected $fillable = ['NHTTaiKHoan', 'NHTMatKhau','NHTTrangThai'];


}

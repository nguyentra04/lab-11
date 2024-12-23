<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHT_KhachHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHTKhachHang')->insert([
            'NHTMaKH'=>'KH001',
            'NHTTenKH'=>'Nguyen Van A',
            'NHTEmail'=>'EMAIL',
            'NHTMatKhau'=>'123456',
            'NHTDienThoai'=>'0123456789',
            'NHTDiaChi'=>'Dia chi',
            'NHTNgayDangKy'=>'2022-01-01',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTKhachHang')->insert([
            'NHTMaKH'=>'KH002',
            'NHTTenKH'=>'Nguyen Van B',
            'NHTEmail'=>'EMAIL',
            'NHTMatKhau'=>'123456',
            'NHTDienThoai'=>'0123456789',
            'NHTDiaChi'=>'Dia chi',
            'NHTNgayDangKy'=>'2022-01-01',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTKhachHang')->insert([
            'NHTMaKH'=>'KH003',
            'NHTTenKH'=>'Nguyen Van C',
            'NHTEmail'=>'EMAIL',
            'NHTMatKhau'=>'123456',
            'NHTDienThoai'=>'0123456789',
            'NHTDiaChi'=>'Dia chi',
            'NHTNgayDangKy'=>'2022-01-01',
            'NHTTrangThai'=>0
        ]);
    }
}

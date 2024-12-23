<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHT_HoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHTHoaDon')->insert([
            'NHTMaHD'=>'HD001',
            'NHTMaKH'=>1,
            'NHTNgayHD'=>'2022-01-01',
            'NHTHoTenKH'=>'Nguyen Van A',
            'NHTEmail'=>'EMAIL',
            'NHTDienThoai'=>'0123456789',
            'NHTDiaChi'=>'Ha Noi',
            'NHTTongTriGia'=>100000,
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTHoaDon')->insert([
            'NHTMaHD'=>'HD002',
            'NHTMaKH'=>2,
            'NHTNgayHD'=>'2022-01-01',
            'NHTHoTenKH'=>'Nguyen Van B',
            'NHTEmail'=>'EMAIL',
            'NHTDienThoai'=>'0123456789',
            'NHTDiaChi'=>'Ha Noi',
            'NHTTongTriGia'=>100000,
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTHoaDon')->insert([
            'NHTMaHD'=>'HD003',
            'NHTMaKH'=>3,
            'NHTNgayHD'=>'2022-01-01',
            'NHTHoTenKH'=>'Nguyen Van C',
            'NHTEmail'=>'EMAIL',
            'NHTDiaChi'=>'Ha Noi',
            'NHTDienThoai'=>'0123456789',
            'NHTTongTriGia'=>100000,
            'NHTTrangThai'=>0
        ]);
    }
}

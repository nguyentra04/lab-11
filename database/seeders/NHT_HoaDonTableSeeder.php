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
        DB::table('NHT_HoaDon')->insert([
            'NHTMaHD'=>'HD001',
            'NHTMaKH'=>'KH001',
            'NHTNgayHD'=>'2022-01-01',
            'NHTHoTenKH'=>'Nguyen Van A',
            'NHTDiaChi'=>'Ha Noi',
            'NHTDienThoai'=>'0123456789',
            'NHTTongTien'=>'100000',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHT_HoaDon')->insert([
            'NHTMaHD'=>'HD002',
            'NHTMaKH'=>'KH002',
            'NHTNgayHD'=>'2022-01-01',
            'NHTHoTenKH'=>'Nguyen Van B',
            'NHTDiaChi'=>'Ha Noi',
            'NHTDienThoai'=>'0123456789',
            'NHTTongTien'=>'100000',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHT_HoaDon')->insert([
            'NHTMaHD'=>'HD003',
            'NHTMaKH'=>'KH003',
            'NHTNgayHD'=>'2022-01-01',
            'NHTHoTenKH'=>'Nguyen Van C',
            'NHTDiaChi'=>'Ha Noi',
            'NHTDienThoai'=>'0123456789',
            'NHTTongTien'=>'100000',
            'NHTTrangThai'=>0
        ]);
    }
}

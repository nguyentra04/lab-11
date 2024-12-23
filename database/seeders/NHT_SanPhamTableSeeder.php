<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHT_SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('NHTSanPham')->insert([
            'NHTMaSP' => 'SP001',
            'NHTTenSP' => 'Cay phu quy',
            'NHTHinhAnh' => 'images\SanPham\hinh1.jpg',
            'NHTDonGia' => 10000,
            'NHTSoLuong' => 10,
            'NHTMaLoai' => 1,
            'NHTTrangThai' => 1,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP' => 'SP002',
            'NHTTenSP' => 'cay dai phu gia',
            'NHTHinhAnh' => 'images\SanPham\hinh2.jpg',
            'NHTDonGia' => 10000,
            'NHTSoLuong' => 20,
    
            'NHTMaLoai' => 1,
            'NHTTrangThai' => 1,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP' => 'SP003',
            'NHTTenSP' => 'cay hanh phuc',
            'NHTHinhAnh' => 'images\SanPham\hinh3.jpg',
           'NHTDonGia' => 10000, 
           'NHTSoLuong' => 30,
        
            'NHTMaLoai' => 1,
            'NHTTrangThai' => 1,
        ]);
    }
}
